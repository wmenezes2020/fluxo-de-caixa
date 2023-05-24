import { Injectable, Inject } from '@nestjs/common';
import { Repository } from 'typeorm';
import { Saldo } from '../entities/saldo.entity';
import { SaldoCadastrarDto } from 'src/dtos/saldo.cadastrar.dto';
import { ResultadoDto } from 'src/dtos/resultado.dto';
import { SaldoConsolidadoDto } from 'src/dtos/saldo.consolidado.dto';

@Injectable()
export class SaldoService {
  constructor(
    @Inject('SALDO_REPOSITORY') private saldoRepository: Repository<any>,
  ) {}

  async findAll(): Promise<Saldo[]> {
    return this.saldoRepository.find();
  }

  async consolidado(): Promise<SaldoConsolidadoDto[]> {
    return this.saldoRepository.find({
      order: { id: 'DESC' },
      skip: 0,
      take: 1,
    });
  }

  async findEnd(): Promise<Saldo[]> {
    return this.saldoRepository.find({
      order: { id: 'DESC' },
      skip: 0,
      take: 1,
    });
  }

  async findOne(id: number): Promise<Saldo> {
    return this.saldoRepository.findOneBy({ id: id });
  }

  async cadastrar(data: SaldoCadastrarDto): Promise<ResultadoDto> {
    const saldo = new Saldo();
    saldo.saldo = data.saldo;
    saldo.valor = data.valor;
    saldo.origem = data.origem;
    saldo.id_origem = data.id_origem;

    return this.saldoRepository
      .save(saldo)
      .then((result) => {
        return <ResultadoDto>{
          status: true,
          mensagem: 'Saldo registrada com sucesso!',
        };
      })
      .catch((error) => {
        return <ResultadoDto>{
          status: false,
          mensagem: 'Houve um erro ao tentar registrar a saldo.',
          error: error,
        };
      });
  }
}
