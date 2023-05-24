import { ApiProperty } from '@nestjs/swagger';
import { IsNotEmpty, IsString } from 'class-validator';

export class FornecedorCadastrarDto {
  @ApiProperty({
    description: 'ID do Fornecedor',
  })
  id?: number;

  @ApiProperty({
    description: 'Nome do Fornecedor',
  })
  @IsNotEmpty()
  @IsString()
  nome: string;

  @ApiProperty({
    description: 'Telefone do Fornecedor',
  })
  @IsNotEmpty()
  @IsString()
  telefone: string;

  @ApiProperty({
    description: 'E-mail do Fornecedor',
  })
  @IsNotEmpty()
  @IsString()
  email: string;
}
