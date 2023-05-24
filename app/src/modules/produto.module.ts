import { Module } from '@nestjs/common';
import { DatabaseModule } from '../database/database.module';
import { produtoProvider } from '../providers/produto.provider';
import { ProdutoService } from '../services/produto.service';
import { ProdutoController } from 'src/controllers/produto.controller';

@Module({
  imports: [DatabaseModule],
  controllers: [ProdutoController],
  providers: [...produtoProvider, ProdutoService],
})
export class ProdutoModule {}
