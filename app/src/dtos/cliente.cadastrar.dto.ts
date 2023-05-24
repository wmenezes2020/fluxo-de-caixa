import { ApiProperty } from '@nestjs/swagger';
import { IsNotEmpty, IsString } from 'class-validator';

export class ClienteCadastrarDto {
  @ApiProperty({
    description: 'ID do Cliente',
  })
  id?: number;

  @ApiProperty({
    description: 'Nome do Cliente',
  })
  @IsNotEmpty()
  @IsString()
  nome: string;

  @ApiProperty({
    description: 'Telefone do Cliente',
  })
  @IsNotEmpty()
  @IsString()
  telefone: string;

  @ApiProperty({
    description: 'E-mail do Cliente',
  })
  @IsNotEmpty()
  @IsString()
  email: string;
}
