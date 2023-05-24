import { ApiProperty } from '@nestjs/swagger';
import { IsNotEmpty, IsString } from 'class-validator';

export class CompraCadastrarDto {
  @ApiProperty({
    description: 'ID do Produto',
  })
  @IsNotEmpty()
  @IsString()
  id_produto: string;

  @ApiProperty({
    description: 'ID do Fornecedor',
  })
  @IsNotEmpty()
  @IsString()
  id_fornecedor: string;

  @ApiProperty({
    description: 'Valor Unitário do Produto',
  })
  @IsNotEmpty()
  @IsString()
  valor: string;

  @ApiProperty({
    description: 'Valor Total da Compra',
  })
  @IsNotEmpty()
  @IsString()
  total: string;

  @ApiProperty({
    description: 'Unidades do Produto',
  })
  @IsNotEmpty()
  @IsString()
  unid: string;

  @ApiProperty({
    description: 'Status da Compra',
  })
  @IsNotEmpty()
  @IsString()
  status: string;
}
