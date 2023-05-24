import { Module } from '@nestjs/common';
import { DatabaseModule } from '../database/database.module';
import { fornecedorProvider } from '../providers/fornecedor.provider';
import { FornecedorService } from '../services/fornecedor.service';
import { FornecedorController } from 'src/controllers/fornecedor.controller';

@Module({
  imports: [DatabaseModule],
  controllers: [FornecedorController],
  providers: [...fornecedorProvider, FornecedorService],
})
export class FornecedorModule {}
