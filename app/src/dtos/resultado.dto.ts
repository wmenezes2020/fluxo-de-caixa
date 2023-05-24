import { ApiProperty } from '@nestjs/swagger';

export class ResultadoDto {
  [x: string]: any;
  status: boolean;
  mensagem: string;
}
