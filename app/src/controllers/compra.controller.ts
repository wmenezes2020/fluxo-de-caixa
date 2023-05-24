import { Body, Controller, Get, Post } from '@nestjs/common';
import { CompraService } from '../services/compra.service';
import { Compras } from 'src/entities/compras.entity';
import { CompraCadastrarDto } from 'src/dtos/compra.cadastrar.dto';
import { ResultadoDto } from 'src/dtos/resultado.dto';
import { ApiOperation, ApiResponse } from '@nestjs/swagger';

@Controller('compras')
export class CompraController {
  constructor(private readonly compraService: CompraService) {}

  @Get()
  @ApiOperation({ summary: 'Listar todos os registros' })
  @ApiResponse({ status: 204, description: 'Not Content' })
  @ApiResponse({ status: 404, description: 'Not Found' })
  async listar(): Promise<Compras[]> {
    return this.compraService.findAll();
  }

  @Post('cadastrar')
  @ApiOperation({ summary: 'Cadastrar uma nova compra' })
  @ApiResponse({ status: 201, description: 'Created' })
  @ApiResponse({ status: 204, description: 'Not Content' })
  @ApiResponse({ status: 404, description: 'Not Found' })
  async cadastrar(@Body() data: CompraCadastrarDto): Promise<ResultadoDto> {
    return this.compraService.cadastrar(data);
  }
}
