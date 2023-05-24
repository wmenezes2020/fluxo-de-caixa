import { Body, Controller, Get, Post } from '@nestjs/common';
import { VendaService } from '../services/venda.service';
import { Vendas } from 'src/entities/vendas.entity';
import { VendaCadastrarDto } from 'src/dtos/venda.cadastrar.dto';
import { ResultadoDto } from 'src/dtos/resultado.dto';
import { ApiOperation, ApiResponse } from '@nestjs/swagger';

@Controller('vendas')
export class VendaController {
  constructor(private readonly vendaService: VendaService) {}

  @Get()
  @ApiOperation({ summary: 'Listar todos os registros' })
  @ApiResponse({ status: 204, description: 'Not Content' })
  @ApiResponse({ status: 404, description: 'Not Found' })
  async listar(): Promise<Vendas[]> {
    return this.vendaService.findAll();
  }

  @Post('cadastrar')
  @ApiOperation({ summary: 'Cadastrar uma nova venda' })
  @ApiResponse({ status: 201, description: 'Created' })
  @ApiResponse({ status: 204, description: 'Not Content' })
  @ApiResponse({ status: 404, description: 'Not Found' })
  async cadastrar(@Body() data: VendaCadastrarDto): Promise<ResultadoDto> {
    return this.vendaService.cadastrar(data);
  }
}
