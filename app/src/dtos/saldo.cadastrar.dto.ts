import { ApiProperty } from '@nestjs/swagger';

export class SaldoCadastrarDto {
  saldo: string;
  valor: string;
  origem: string;
  id_origem: string;
}
