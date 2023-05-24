import {
  Entity,
  Column,
  PrimaryGeneratedColumn,
  UpdateDateColumn,
  CreateDateColumn,
} from 'typeorm';

@Entity()
export class Vendas {
  @PrimaryGeneratedColumn()
  id: number;

  @Column('text')
  id_produto: string;

  @Column('text')
  id_cliente: string;

  @Column('text')
  valor: string;

  @Column('text')
  total: string;

  @Column('text')
  unid: string;

  @Column('text')
  status: string;

  @CreateDateColumn()
  createdAt?: Date;

  @UpdateDateColumn()
  updatedAt?: Date;
}
