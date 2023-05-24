import { Module } from '@nestjs/common';
import { DatabaseModule } from '../database/database.module';
import { vendaProvider } from '../providers/venda.provider';
import { saldoProvider } from '../providers/saldo.provider';
import { VendaService } from '../services/venda.service';
import { VendaController } from 'src/controllers/venda.controller';
import { SaldoService } from '../services/saldo.service';
import { produtoProvider } from 'src/providers/produto.provider';
import { ProdutoService } from 'src/services/produto.service';
import { clienteProvider } from 'src/providers/cliente.provider';
import { ClienteService } from 'src/services/cliente.service';

@Module({
  imports: [DatabaseModule],
  controllers: [VendaController],
  providers: [
    ...vendaProvider,
    VendaService,
    ...saldoProvider,
    SaldoService,
    ...produtoProvider,
    ProdutoService,
    ...clienteProvider,
    ClienteService,
  ],
})
export class VendaModule {}
