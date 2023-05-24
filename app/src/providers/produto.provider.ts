import { DataSource } from 'typeorm';
import { Produtos } from '../entities/produtos.entity';

export const produtoProvider = [
  {
    provide: 'PRODUTO_REPOSITORY',
    useFactory: (dataSource: DataSource) => dataSource.getRepository(Produtos),
    inject: ['DATA_SOURCE'],
  },
];
