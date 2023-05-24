import { DataSource } from 'typeorm';
import { Fornecedores } from '../entities/fornecedores.entity';

export const fornecedorProvider = [
  {
    provide: 'FORNECEDOR_REPOSITORY',
    useFactory: (dataSource: DataSource) =>
      dataSource.getRepository(Fornecedores),
    inject: ['DATA_SOURCE'],
  },
];
