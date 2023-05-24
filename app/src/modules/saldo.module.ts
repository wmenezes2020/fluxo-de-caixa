import { Module } from '@nestjs/common';
import { DatabaseModule } from '../database/database.module';
import { saldoProvider } from '../providers/saldo.provider';
import { SaldoService } from '../services/saldo.service';
import { SaldoController } from 'src/controllers/saldo.controller';

@Module({
  imports: [DatabaseModule],
  controllers: [SaldoController],
  providers: [...saldoProvider, SaldoService],
})
export class SaldoModule {}
