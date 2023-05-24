import { DataSource, DatabaseType } from 'typeorm';

export const databaseProviders = [
  {
    provide: 'DATA_SOURCE',
    useFactory: async () => {
      const dataSource = new DataSource({
        type: 'mysql',
        host: process.env.DATABASE_HOST,
        port: Number(process.env.DATABASE_PORT),
        username: process.env.DATABASE_USERNAME,
        password: process.env.DATABASE_PASSWORD,
        database: process.env.DATABASE_DATABASE,
        entities: [__dirname + '/../**/*.entity{.ts,.js}'],
        synchronize: process.env.DATABASE_SYNCHRONIZE ? true : false,
      });

      return dataSource.initialize();
    },
  },
];
