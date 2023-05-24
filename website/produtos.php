<!DOCTYPE html>
<html lang="pt_BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Produtos - Fluxo de Caixa - MINSOFT</title>
  <!-- Favicon -->
  <link href="./assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="./assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="./assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="./assets/css/argon.css?v=1.0.0" rel="stylesheet">
</head>
<body>
  <!-- Sidenav -->
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="./index.php">
        Fluxo de Caixa
      </a>
	  <p></p>


	  <!-- Collapse -->
	  <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->


        <!-- Navigation -->
        <?php include("menu_left.php"); ?>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="#">Produtos</a>
        <!-- User -->
        <?php include("top_user.php");?>
      </div>
    </nav>
    <!-- Header -->
    <?php include("topo.php"); ?>


    <!-- Page content -->
    <div class="container-fluid mt--7">

      <div class="row mt-5">
        <div class="col-xl-8 mb-5 mb-xl-0">



          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Produtos</h3>
                </div>
                <div class="col text-right">
                  <a href="cad-produto.php" class="btn btn-sm btn-primary">Cadatsrar Novo</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Unid</th>
                    <th scope="col">Valor Compra</th>
                    <th scope="col">Valor Venda</th>
                    <th scope="col">Data</th>
                  </tr>
                </thead>
                <tbody>

                <?php
                  foreach($jsonProdutos as $produto){
                ?>
                    <tr>
                      <td><?php echo $produto->nome;?></td>
                      <td><?php echo $produto->unid;?></td>
                      <td><?php echo number_format($produto->valor_compra,2,',','.');?></td>
                      <td><?php echo number_format($produto->valor_venda,2,',','.');?></td>
                      <td><?php echo date('d/m/Y',strtotime($produto->createdAt));?></td>
                    </tr>
                <?php
                  }
                ?>

                </tbody>
              </table>
            </div>
          </div>


        </div>

      </div>


      <!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; <?php echo date('Y');?> <a href="#" class="font-weight-bold ml-1" target="_blank">MINSOFT</a>
            </div>
          </div>

        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
