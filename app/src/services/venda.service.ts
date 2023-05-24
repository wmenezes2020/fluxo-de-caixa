import { Injectable, Inject } from '@nestjs/common';
import { Repository } from 'typeorm';
import { Vendas } from '../entities/vendas.entity';
import { Saldo } from '../entities/saldo.entity';
import { VendaCadastrarDto } from 'src/dtos/venda.cadastrar.dto';
import { ResultadoDto } from 'src/dtos/resultado.dto';
import { SaldoService } from '../services/saldo.service';
import { ProdutoService } from '../services/produto.service';
import { NotFoundError } from 'src/errors/NotFoundError';
import { ClienteService } from './cliente.service';

@Injectable()
export class VendaService {
  constructor(
    @Inject('VENDA_REPOSITORY') private vendaRepository: Repository<any>,
    private readonly saldoService: SaldoService,
    private readonly produtoService: ProdutoService,
    private readonly clienteService: ClienteService,
  ) {}

  async findAll(): Promise<Vendas[]> {
    return this.vendaRepository.find();
  }

  async findOne(id: number): Promise<Vendas> {
    return this.vendaRepository.findOneBy({ id: id });
  }

  async cadastrar(data: VendaCadastrarDto): Promise<ResultadoDto> {
    const venda = new Vendas();
    venda.id_produto = data.id_produto;
    venda.id_cliente = data.id_cliente;
    venda.valor = data.valor;
    venda.total = data.total;
    venda.unid = data.unid;
    venda.status = data.status;

    const cliente = await this.clienteService.getById(Number(data.id_cliente));
    if (!cliente || !cliente.id) {
      throw new NotFoundError('Cliente não encontrado!');
    }

    const produto = await this.produtoService.getById(Number(data.id_produto));
    if (!produto || !produto.id || produto.status != '1') {
      throw new NotFoundError('Produto não encontrado!');
    }
    if (Number(produto.unid) <= 0) {
      throw new NotFoundError('Produto sem estoque!');
    }
    if (Number(produto.unid) < Number(data.unid)) {
      throw new NotFoundError(
        'Produto sem estoque suficiente para esta venda!',
      );
    }
    const total_venda = Number(produto.valor_venda) * Number(data.unid);
    if (total_venda > Number(data.total)) {
      throw new NotFoundError(
        'O valor da venda não corresponde com a quantidade e valor do produto!',
      );
    }

    const rest = this.vendaRepository
      .save(venda)
      .then((result) => {
        produto.unid = (Number(produto.unid) - Number(data.unid)).toString();
        this.produtoService.atualizar(produto);

        return <ResultadoDto>{
          status: true,
          mensagem: 'Venda registrada com sucesso!',
          data: result,
        };
      })
      .catch((error) => {
        return <ResultadoDto>{
          status: false,
          mensagem: 'Houve um erro ao tentar registrar a venda.',
          error: error,
        };
      });

    const status = (await rest).status;
    if (status) {
      const total = (await this.saldoService.findEnd()).map((res) => {
        return res.saldo;
      });

      const valor_total = total[0] ? total[0] : '0';

      const saldo_total = (
        parseFloat(valor_total) + parseFloat(data.total)
      ).toString();

      const dado = new Saldo();
      dado.origem = 'venda';
      dado.id_origem = '1';
      dado.valor = data.total;
      dado.saldo = saldo_total;
      this.saldoService.cadastrar(dado);
    }

    return rest;
  }
}
