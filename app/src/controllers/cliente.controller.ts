import { Body, Controller, Get, Post } from '@nestjs/common';
import { ClienteService } from '../services/cliente.service';
import { Clientes } from 'src/entities/clientes.entity';
import { ClienteCadastrarDto } from 'src/dtos/cliente.cadastrar.dto';
import { ResultadoDto } from 'src/dtos/resultado.dto';
import { ApiOperation, ApiResponse } from '@nestjs/swagger';

@Controller('clientes')
export class ClienteController {
  constructor(private readonly clienteService: ClienteService) {}

  @Get()
  @ApiOperation({ summary: 'Listar todos os registros' })
  @ApiResponse({ status: 204, description: 'Not Content' })
  @ApiResponse({ status: 404, description: 'Not Found' })
  async listar(): Promise<Clientes[]> {
    return this.clienteService.findAll();
  }

  @Post('cadastrar')
  @ApiOperation({ summary: 'Cadastrar um novo cliente' })
  @ApiResponse({ status: 201, description: 'Created' })
  @ApiResponse({ status: 204, description: 'Not Content' })
  @ApiResponse({ status: 404, description: 'Not Found' })
  async cadastrar(@Body() data: ClienteCadastrarDto): Promise<ResultadoDto> {
    return this.clienteService.cadastrar(data);
  }

  @Post('atualizar')
  @ApiOperation({ summary: 'Atualizar um cliente' })
  @ApiResponse({ status: 201, description: 'Updated' })
  @ApiResponse({ status: 204, description: 'Not Content' })
  @ApiResponse({ status: 404, description: 'Not Found' })
  async atualizar(@Body() data: ClienteCadastrarDto): Promise<ResultadoDto> {
    return this.clienteService.atualizar(data);
  }
}
