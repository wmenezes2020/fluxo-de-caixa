import { Body, Controller, Get, Post } from '@nestjs/common';
import { FornecedorService } from '../services/fornecedor.service';
import { Fornecedores } from 'src/entities/fornecedores.entity';
import { FornecedorCadastrarDto } from 'src/dtos/fornecedor.cadastrar.dto';
import { ResultadoDto } from 'src/dtos/resultado.dto';
import { ApiOperation, ApiResponse } from '@nestjs/swagger';

@Controller('fornecedores')
export class FornecedorController {
  constructor(private readonly fornecedorService: FornecedorService) {}

  @Get()
  @ApiOperation({ summary: 'Listar todos os registros' })
  @ApiResponse({ status: 204, description: 'Not Content' })
  @ApiResponse({ status: 404, description: 'Not Found' })
  async listar(): Promise<Fornecedores[]> {
    return this.fornecedorService.findAll();
  }

  @Post('cadastrar')
  @ApiOperation({ summary: 'Cadastrar um novo fornecedor' })
  @ApiResponse({ status: 201, description: 'Created' })
  @ApiResponse({ status: 204, description: 'Not Content' })
  @ApiResponse({ status: 404, description: 'Not Found' })
  async cadastrar(@Body() data: FornecedorCadastrarDto): Promise<ResultadoDto> {
    return this.fornecedorService.cadastrar(data);
  }

  @Post('atualizar')
  @ApiOperation({ summary: 'Atualizar um fornecedor' })
  @ApiResponse({ status: 201, description: 'Updated' })
  @ApiResponse({ status: 204, description: 'Not Content' })
  @ApiResponse({ status: 404, description: 'Not Found' })
  async atualizar(@Body() data: FornecedorCadastrarDto): Promise<ResultadoDto> {
    return this.fornecedorService.atualizar(data);
  }
}
