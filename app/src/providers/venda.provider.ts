import { DataSource } from 'typeorm';
import { Vendas } from '../entities/vendas.entity';

export const vendaProvider = [
  {
    provide: 'VENDA_REPOSITORY',
    useFactory: (dataSource: DataSource) => dataSource.getRepository(Vendas),
    inject: ['DATA_SOURCE'],
  },
];
