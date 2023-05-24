import {
  Entity,
  Column,
  PrimaryGeneratedColumn,
  UpdateDateColumn,
  CreateDateColumn,
} from 'typeorm';

@Entity()
export class Saldo {
  @PrimaryGeneratedColumn()
  id: number;

  @Column('text')
  saldo: string;

  @Column('text')
  valor: string;

  @Column('text')
  origem: string;

  @Column('text')
  id_origem: string;

  @CreateDateColumn()
  createdAt?: Date;

  @UpdateDateColumn()
  updatedAt?: Date;
}
