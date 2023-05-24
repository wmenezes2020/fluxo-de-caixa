import {
  Entity,
  Column,
  PrimaryGeneratedColumn,
  UpdateDateColumn,
  CreateDateColumn,
} from 'typeorm';

@Entity()
export class Produtos {
  @PrimaryGeneratedColumn()
  id?: number;

  @Column({ length: 500 })
  nome: string;

  @Column('text')
  valor_compra: string;

  @Column('text')
  valor_venda: string;

  @Column('text')
  unid: string;

  @Column('text')
  status: string;

  @CreateDateColumn()
  createdAt?: Date;

  @UpdateDateColumn()
  updatedAt?: Date;
}
