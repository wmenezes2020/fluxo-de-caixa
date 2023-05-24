import { ApiProperty } from '@nestjs/swagger';
import { IsNotEmpty, IsString } from 'class-validator';

export class ProdutoCadastrarDto {
  @ApiProperty({
    description: 'ID do Produto',
  })
  id?: number;

  @ApiProperty({
    description: 'Nome do Produto',
  })
  @IsNotEmpty()
  @IsString()
  nome: string;

  @ApiProperty({
    description: 'Valor de Compra',
  })
  @IsNotEmpty()
  @IsString()
  valor_compra: string;

  @ApiProperty({
    description: 'Valor de Venda',
  })
  @IsNotEmpty()
  @IsString()
  valor_venda: string;

  @ApiProperty({
    description: 'Unidades do Produto',
  })
  @IsNotEmpty()
  @IsString()
  unid: string;

  @ApiProperty({
    description: 'Status do Produto',
  })
  @IsNotEmpty()
  @IsString()
  status: string;
}
