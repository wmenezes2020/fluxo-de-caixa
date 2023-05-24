import { DataSource } from 'typeorm';
import { Clientes } from '../entities/clientes.entity';

export const clienteProvider = [
  {
    provide: 'CLIENTE_REPOSITORY',
    useFactory: (dataSource: DataSource) => dataSource.getRepository(Clientes),
    inject: ['DATA_SOURCE'],
  },
];
