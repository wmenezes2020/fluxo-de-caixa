import { Body, Controller, Get, Post } from '@nestjs/common';
import { SaldoService } from '../services/saldo.service';
import { Saldo } from 'src/entities/saldo.entity';
import { SaldoCadastrarDto } from 'src/dtos/saldo.cadastrar.dto';
import { ResultadoDto } from 'src/dtos/resultado.dto';
import { SaldoConsolidadoDto } from 'src/dtos/saldo.consolidado.dto';
import { ApiOperation, ApiResponse } from '@nestjs/swagger';

@Controller('saldo')
export class SaldoController {
  constructor(private readonly saldoService: SaldoService) {}

  @Get()
  @ApiOperation({ summary: 'Listar todos os registros' })
  @ApiResponse({ status: 204, description: 'Not Content' })
  @ApiResponse({ status: 404, description: 'Not Found' })
  async listar(): Promise<Saldo[]> {
    return this.saldoService.findAll();
  }

  @Get('consolidado')
  @ApiOperation({ summary: 'Saldo de Caixa Consolidado' })
  @ApiResponse({ status: 204, description: 'Not Content' })
  @ApiResponse({ status: 404, description: 'Not Found' })
  async consolidado(): Promise<SaldoConsolidadoDto[]> {
    return this.saldoService.consolidado();
  }

  @Post('cadastrar')
  async cadastrar(@Body() data: SaldoCadastrarDto): Promise<ResultadoDto> {
    return this.saldoService.cadastrar(data);
  }
}
