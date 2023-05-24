import { Injectable, Inject } from '@nestjs/common';
import { Repository } from 'typeorm';
import { Produtos } from '../entities/produtos.entity';
import { ProdutoCadastrarDto } from 'src/dtos/produto.cadastrar.dto';
import { ResultadoDto } from 'src/dtos/resultado.dto';
import { NotFoundError } from 'src/errors/NotFoundError';

@Injectable()
export class ProdutoService {
  constructor(
    @Inject('PRODUTO_REPOSITORY')
    private produtoRepository: Repository<any>,
  ) {}

  async findAll(): Promise<Produtos[]> {
    return this.produtoRepository.find();
  }

  async getById(id: number): Promise<Produtos> {
    return this.produtoRepository.findOneBy({ id: id });
  }

  async cadastrar(data: ProdutoCadastrarDto): Promise<ResultadoDto> {
    const produto = new Produtos();
    produto.nome = data.nome;
    produto.valor_compra = data.valor_compra;
    produto.valor_venda = data.valor_venda;
    produto.unid = data.unid;
    produto.status = data.status;

    return this.produtoRepository
      .save(produto)
      .then((result) => {
        return <ResultadoDto>{
          status: true,
          mensagem: 'Produto cadastrado com sucesso!',
        };
      })
      .catch((error) => {
        return <ResultadoDto>{
          status: false,
          mensagem: 'Houve um erro ao tentar cadastrar o produto.',
          error: error,
        };
      });
  }

  async atualizar(data: ProdutoCadastrarDto): Promise<ResultadoDto> {
    const produto = await this.getById(Number(data.id));
    if (!produto || !produto.id) {
      throw new NotFoundError('Produto não encontrado!');
    }

    produto.nome = data.nome;
    produto.valor_compra = data.valor_compra;
    produto.valor_venda = data.valor_venda;
    produto.unid = data.unid;
    produto.status = data.status;

    return this.produtoRepository
      .save(produto)
      .then((result) => {
        return <ResultadoDto>{
          status: true,
          mensagem: 'Produto atualizado com sucesso!',
        };
      })
      .catch((error) => {
        return <ResultadoDto>{
          status: false,
          mensagem: 'Houve um erro ao tentar atualizar o produto.',
          error: error,
        };
      });
  }
}
