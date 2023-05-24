import { DataSource } from 'typeorm';
import { Compras } from '../entities/compras.entity';

export const compraProvider = [
  {
    provide: 'COMPRA_REPOSITORY',
    useFactory: (dataSource: DataSource) => dataSource.getRepository(Compras),
    inject: ['DATA_SOURCE'],
  },
];
