import { Injectable, Inject } from '@nestjs/common';
import { Repository } from 'typeorm';
import { Fornecedores } from '../entities/fornecedores.entity';
import { FornecedorCadastrarDto } from 'src/dtos/fornecedor.cadastrar.dto';
import { ResultadoDto } from 'src/dtos/resultado.dto';
import { NotFoundError } from 'src/errors/NotFoundError';

@Injectable()
export class FornecedorService {
  constructor(
    @Inject('FORNECEDOR_REPOSITORY')
    private fornecedorRepository: Repository<Fornecedores>,
  ) {}

  async findAll(): Promise<Fornecedores[]> {
    return this.fornecedorRepository.find();
  }

  async getById(id: number): Promise<Fornecedores> {
    return this.fornecedorRepository.findOneBy({ id: id });
  }

  async cadastrar(data: FornecedorCadastrarDto): Promise<ResultadoDto> {
    const fornecedor = new Fornecedores();
    fornecedor.nome = data.nome;
    fornecedor.telefone = data.telefone;
    fornecedor.email = data.email;

    return this.fornecedorRepository
      .save(fornecedor)
      .then((result) => {
        return <ResultadoDto>{
          status: true,
          mensagem: 'Fornecedor cadastrado com sucesso!',
        };
      })
      .catch((error) => {
        return <ResultadoDto>{
          status: false,
          mensagem: 'Houve um erro ao tentar cadastrar o fornecedor.',
          error: error,
        };
      });
  }

  async atualizar(data: FornecedorCadastrarDto): Promise<ResultadoDto> {
    const fornecedor = await this.getById(Number(data.id));
    if (!fornecedor || !fornecedor.id) {
      throw new NotFoundError('Fornecedor não encontrado!');
    }

    fornecedor.nome = data.nome;
    fornecedor.telefone = data.telefone;
    fornecedor.email = data.email;

    return this.fornecedorRepository
      .save(fornecedor)
      .then((result) => {
        return <ResultadoDto>{
          status: true,
          mensagem: 'Fornecedor atualizado com sucesso!',
        };
      })
      .catch((error) => {
        return <ResultadoDto>{
          status: false,
          mensagem: 'Houve um erro ao tentar atualizar o fornecedor.',
          error: error,
        };
      });
  }
}
