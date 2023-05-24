import { DataSource } from 'typeorm';
import { Saldo } from '../entities/saldo.entity';

export const saldoProvider = [
  {
    provide: 'SALDO_REPOSITORY',
    useFactory: (dataSource: DataSource) => dataSource.getRepository(Saldo),
    inject: ['DATA_SOURCE'],
  },
];
