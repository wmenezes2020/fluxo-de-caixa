<!DOCTYPE html>
<html lang="pt_BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Nova Compra - Fluxo de Caixa - MINSOFT</title>
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
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="#">Nova Compra</a>
        <!-- User -->
        <?php include("top_user.php");?>
      </div>
    </nav>
    <!-- Header -->
    <?php include("topo.php"); ?>


    <!-- Page content -->
    <div class="container-fluid mt--7">

      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Nova Compra</h3>
            </div>
          </div>
        </div>

        <form method="post" >
          <input type="hidden" name="nova_compra" value="1" />
			    <div class="card bg-secondary shadow">

            <div class="card-body">

				        <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="status">Tipo</label>
                        <select id="status" class="form-control form-control-alternative" name="status">
                          <option value="Paga">Paga</option>
                          <option value="Pendente">Pendente</option>
                          <option value="Orçamento">Orçamento</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

				        <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="id_produto">Produto</label>
                        <select id="id_produto" class="form-control form-control-alternative" name="id_produto">
                          <?php foreach($jsonProdutos as $produto) { ?>
                          <option value="<?php echo $produto->id;?>"><?php echo $produto->nome;?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

				        <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="id_fornecedor">Fornecedor</label>
                        <select id="id_fornecedor" class="form-control form-control-alternative" name="id_fornecedor">
                          <?php foreach($jsonFornecedores as $fornecedor) { ?>
                          <option value="<?php echo $fornecedor->id;?>"><?php echo $fornecedor->nome;?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

				        <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="unid">Unidades do Produto</label>
                        <input type="number" id="unid" class="form-control form-control-alternative" name="unid" placeholder="0" />
                      </div>
                    </div>
                  </div>
                </div>

				        <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="valor">Valor Unid</label>
                        <input type="number" id="valor" class="form-control form-control-alternative" name="valor" placeholder="0" />
                      </div>
                    </div>
                  </div>
                </div>

				        <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="total">Valor total da Compra</label>
                        <input type="number" id="total" class="form-control form-control-alternative" name="total" placeholder="0" readonly />
                      </div>
                    </div>
                  </div>
                </div>

				        <div class="pl-lg-4">
                  <div class="form-group">
                    <div style="text-align:right; display: inline-block;">
                      <input type="submit" value="Registrar" class="btn btn-success" />
                    </div>
                  </div>
                </div>
              </div>
              </form>

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

  <script>

    $('#unid').change(function(){
        calcular();
    });

    $('#valor').change(function(){
        calcular();
    });

    function calcular(){

      var unid = $('#unid').val();
      var valor_unid = $('#valor').val();
      var valor_total = $('#total').val();

      var total_compra = (unid * valor_unid);

      $('#total').val( total_compra );

    }
  </script>

</body>
</html>
