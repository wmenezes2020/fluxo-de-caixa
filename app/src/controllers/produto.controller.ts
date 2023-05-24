import { Body, Controller, Get, Post } from '@nestjs/common';
import { ProdutoService } from '../services/produto.service';
import { Produtos } from 'src/entities/produtos.entity';
import { ProdutoCadastrarDto } from 'src/dtos/produto.cadastrar.dto';
import { ResultadoDto } from 'src/dtos/resultado.dto';
import { ApiOperation, ApiResponse } from '@nestjs/swagger';

@Controller('produtos')
export class ProdutoController {
  constructor(private readonly produtoService: ProdutoService) {}

  @Get()
  @ApiOperation({ summary: 'Listar todos os registros' })
  @ApiResponse({ status: 204, description: 'Not Content' })
  @ApiResponse({ status: 404, description: 'Not Found' })
  async listar(): Promise<Produtos[]> {
    return this.produtoService.findAll();
  }

  @Post('cadastrar')
  @ApiOperation({ summary: 'Cadastrar um novo produto' })
  @ApiResponse({ status: 201, description: 'Created' })
  @ApiResponse({ status: 204, description: 'Not Content' })
  @ApiResponse({ status: 404, description: 'Not Found' })
  async cadastrar(@Body() data: ProdutoCadastrarDto): Promise<ResultadoDto> {
    return this.produtoService.cadastrar(data);
  }

  @Post('atualizar')
  @ApiOperation({ summary: 'Atualizar um produto' })
  @ApiResponse({ status: 201, description: 'Updated' })
  @ApiResponse({ status: 204, description: 'Not Content' })
  @ApiResponse({ status: 404, description: 'Not Found' })
  async atualizar(@Body() data: ProdutoCadastrarDto): Promise<ResultadoDto> {
    return this.produtoService.atualizar(data);
  }
}
