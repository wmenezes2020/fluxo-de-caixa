import { Module } from '@nestjs/common';
import { DatabaseModule } from '../database/database.module';
import { compraProvider } from '../providers/compra.provider';
import { saldoProvider } from '../providers/saldo.provider';
import { CompraService } from '../services/compra.service';
import { CompraController } from 'src/controllers/compra.controller';
import { SaldoService } from '../services/saldo.service';
import { produtoProvider } from 'src/providers/produto.provider';
import { ProdutoService } from 'src/services/produto.service';
import { FornecedorService } from 'src/services/fornecedor.service';
import { fornecedorProvider } from 'src/providers/fornecedor.provider';

@Module({
  imports: [DatabaseModule],
  controllers: [CompraController],
  providers: [
    ...compraProvider,
    CompraService,
    ...saldoProvider,
    SaldoService,
    ...produtoProvider,
    ProdutoService,
    ...fornecedorProvider,
    FornecedorService,
  ],
})
export class CompraModule {}
