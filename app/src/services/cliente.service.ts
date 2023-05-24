import { Injectable, Inject } from '@nestjs/common';
import { Repository } from 'typeorm';
import { Clientes } from '../entities/clientes.entity';
import { ClienteCadastrarDto } from 'src/dtos/cliente.cadastrar.dto';
import { ResultadoDto } from 'src/dtos/resultado.dto';
import { NotFoundError } from 'src/errors/NotFoundError';

@Injectable()
export class ClienteService {
  constructor(
    @Inject('CLIENTE_REPOSITORY')
    private clienteRepository: Repository<any>,
  ) {}

  async findAll(): Promise<Clientes[]> {
    return this.clienteRepository.find();
  }

  async getById(id: number): Promise<Clientes> {
    return this.clienteRepository.findOneBy({ id: id });
  }

  async cadastrar(data: ClienteCadastrarDto): Promise<ResultadoDto> {
    const cliente = new Clientes();
    cliente.nome = data.nome;
    cliente.telefone = data.telefone;
    cliente.email = data.email;

    return this.clienteRepository
      .save(cliente)
      .then((result) => {
        return <ResultadoDto>{
          status: true,
          mensagem: 'Cliente cadastrado com sucesso!',
        };
      })
      .catch((error) => {
        return <ResultadoDto>{
          status: false,
          mensagem: 'Houve um erro ao tentar cadastrar o cliente.',
          error: error,
        };
      });
  }

  async atualizar(data: ClienteCadastrarDto): Promise<ResultadoDto> {
    const cliente = await this.getById(Number(data.id));
    if (!cliente || !cliente.id) {
      throw new NotFoundError('Cliente não encontrado!');
    }

    cliente.nome = data.nome;
    cliente.telefone = data.telefone;
    cliente.email = data.email;

    return this.clienteRepository
      .save(cliente)
      .then((result) => {
        return <ResultadoDto>{
          status: true,
          mensagem: 'Cliente cadastrado com sucesso!',
        };
      })
      .catch((error) => {
        return <ResultadoDto>{
          status: false,
          mensagem: 'Houve um erro ao tentar cadastrar o cliente.',
          error: error,
        };
      });
  }
}
