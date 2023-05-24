import { Module } from '@nestjs/common';
import { ConfigModule } from '@nestjs/config';
import { AppController } from '../controllers/app.controller';
import { AppService } from '../services/app.service';
import { ProdutoModule } from './produto.module';
import { ClienteModule } from './cliente.module';
import { FornecedorModule } from './fornecedor.module';
import { VendaModule } from './venda.module';
import { SaldoModule } from './saldo.module';
import { CompraModule } from './compra.module';

@Module({
  imports: [
    ConfigModule.forRoot(),
    ProdutoModule,
    ClienteModule,
    FornecedorModule,
    VendaModule,
    SaldoModule,
    CompraModule,
  ],
  controllers: [AppController],
  providers: [AppService],
})
export class AppModule {}
