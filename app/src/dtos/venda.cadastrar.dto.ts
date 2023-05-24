import { ApiProperty } from '@nestjs/swagger';
import { IsNotEmpty, IsString } from 'class-validator';

export class VendaCadastrarDto {
  @ApiProperty({
    description: 'ID do Produto',
  })
  @IsNotEmpty()
  @IsString()
  id_produto: string;

  @ApiProperty({
    description: 'ID do Cliente',
  })
  @IsNotEmpty()
  @IsString()
  id_cliente: string;

  @ApiProperty({
    description: 'Valor Unitário do Produto',
  })
  @IsNotEmpty()
  @IsString()
  valor: string;

  @ApiProperty({
    description: 'Valor Total da Venda',
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
    description: 'Status da Venda',
    enum: ['Pago', 'Pendente', 'Cancelado'],
  })
  @IsNotEmpty()
  @IsString()
  status: string;
}
