import { Module } from '@nestjs/common';
import { DatabaseModule } from '../database/database.module';
import { clienteProvider } from '../providers/cliente.provider';
import { ClienteService } from '../services/cliente.service';
import { ClienteController } from 'src/controllers/cliente.controller';

@Module({
  imports: [DatabaseModule],
  controllers: [ClienteController],
  providers: [...clienteProvider, ClienteService],
})
export class ClienteModule {}
