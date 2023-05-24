import { Injectable, Inject } from '@nestjs/common';
import { Repository } from 'typeorm';
import { Compras } from '../entities/compras.entity';
import { Saldo } from '../entities/saldo.entity';
import { CompraCadastrarDto } from 'src/dtos/compra.cadastrar.dto';
import { ResultadoDto } from 'src/dtos/resultado.dto';
import { SaldoService } from '../services/saldo.service';
import { ProdutoService } from '../services/produto.service';
import { NotFoundError } from 'src/errors/NotFoundError';
import { FornecedorService } from './fornecedor.service';

@Injectable()
export class CompraService {
  constructor(
    @Inject('COMPRA_REPOSITORY') private compraRepository: Repository<any>,
    private readonly saldoService: SaldoService,
    private readonly produtoService: ProdutoService,
    private readonly fornecedorService: FornecedorService,
  ) {}

  async findAll(): Promise<Compras[]> {
    return this.compraRepository.find();
  }

  async findOne(id: number): Promise<Compras> {
    return this.compraRepository.findOneBy({ id: id });
  }

  async getById(id: number): Promise<Compras> {
    return this.compraRepository.findOneBy({ id: id });
  }

  async cadastrar(data: CompraCadastrarDto): Promise<ResultadoDto> {
    const compra = new Compras();
    compra.id_produto = data.id_produto;
    compra.id_fornecedor = data.id_fornecedor;
    compra.valor = data.valor;
    compra.total = data.total;
    compra.unid = data.unid;
    compra.status = data.status;

    const fornecedor = await this.fornecedorService.getById(
      Number(data.id_fornecedor),
    );
    if (!fornecedor || !fornecedor.id) {
      throw new NotFoundError('Fornecedor não encontrado!');
    }

    const produto = await this.produtoService.getById(Number(data.id_produto));
    if (!produto || !produto.id) {
      throw new NotFoundError('Produto não encontrado!');
    }

    const rest = await this.compraRepository
      .save(compra)
      .then((result) => {
        produto.valor_compra = data.valor;
        produto.unid = (Number(produto.unid) + Number(data.unid)).toString();
        this.produtoService.atualizar(produto);

        return <ResultadoDto>{
          status: true,
          mensagem: `Compra do produto '${produto.nome}' registrada com sucesso!`,
          data: result,
        };
      })
      .catch((error) => {
        return <ResultadoDto>{
          status: false,
          mensagem: 'Houve um erro ao tentar registrar a compra.',
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
        parseFloat(valor_total) - parseFloat(data.total)
      ).toString();

      const dado = new Saldo();
      dado.origem = 'compra';
      dado.id_origem = rest?.data?.id;
      dado.valor = data.total;
      dado.saldo = saldo_total;
      this.saldoService.cadastrar(dado);
    }

    return rest;
  }
}
