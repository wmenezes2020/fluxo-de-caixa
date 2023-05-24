<?php
  include('url.api.php');
  include('config.php');
?>


<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Vendas Gerais</h5>
                      <span class="h2 font-weight-bold mb-0">R$ <?php echo number_format($total_vendas,2,',','.');?></span>
                    </div>
                    <div class="col-auto">
                      <a href="vendas.php">
					            <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <i class="fas fa-chart-bar"></i>
                      </div>
					            </a>
                    </div>
                  </div>
                  <!-- <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Comparado ao mês anterior</span>
                  </p> //-->
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Compras</h5>
                      <span class="h2 font-weight-bold mb-0">R$ <?php echo number_format($total_compras,2,',','.');?></span>
                    </div>
                    <div class="col-auto">
                      <a href="compras.php">
					            <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                        <i class="fas fa-chart-pie"></i>
                      </div>
					            </a>
                    </div>
                  </div>
                  <!-- <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 3.48%</span>
                    <span class="text-nowrap">Comparado ao mês anterior</span>
                  </p> //-->
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Produtos</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo $produtos;?></span>
                    </div>
                    <div class="col-auto">
					          <a href="clientes.php">
                      <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                        <i class="fas fa-users"></i>
                      </div>
					          </a>
                    </div>
                  </div>
                  <!-- <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                    <span class="text-nowrap">Comparado ao mês anterior</span>
                  </p> //-->
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Saldo / Caixa</h5>
                      <span class="h2 font-weight-bold mb-0">R$ <?php echo number_format($jsonSaldo[0]->saldo,2,',','.');?></span>
                    </div>
                    <div class="col-auto">
					          <a href="produtos.php">
                      <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                        <i class="ni ni-chart-bar-32"></i>
                      </div>
					          </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>