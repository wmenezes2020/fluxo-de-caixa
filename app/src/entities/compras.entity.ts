import {
  Entity,
  Column,
  PrimaryGeneratedColumn,
  CreateDateColumn,
  UpdateDateColumn,
} from 'typeorm';

@Entity()
export class Compras {
  @PrimaryGeneratedColumn()
  id: number;

  @Column('text')
  id_produto: string;

  @Column('text')
  id_fornecedor: string;

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
