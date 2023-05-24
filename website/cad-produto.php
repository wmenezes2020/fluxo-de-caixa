<!DOCTYPE html>
<html lang="pt_BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Produto - Fluxo de Caixa - MINSOFT</title>
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
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="#">Produto</a>
        <!-- User -->
        <?php include("top_user.php");?>
      </div>
    </nav>
    <!-- Header -->
    <?php include("topo.php"); ?>

<?php
  $id = '';
  $nome = '';
  $valor_compra = '';
  $valor_venda = '';
  $unid = '';
  $status = '';

  if(isset($_POST['id'])){
    foreach($jsonProdutos as $produto){
      if($produto->id == $_POST['id']){
        $id = $produto->id;
        $nome = $produto->nome;
        $valor_compra = $produto->valor_compra;
        $valor_venda = $produto->valor_venda;
        $unid = $produto->unid;
        $status = $produto->status;
      }
    }
  }
?>

    <!-- Page content -->
    <div class="container-fluid mt--7">

      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Produto</h3>
            </div>
          </div>
        </div>

        <form method="post" action="produtos.php">
          <input type="hidden" name="cad_produto" value="1" />
          <input type="hidden" name="id" value="<?php echo $id;?>" />
			    <div class="card bg-secondary shadow">

            <div class="card-body">

				        <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="nome">Nome</label>
                        <input type="text" id="nome" class="form-control form-control-alternative" name="nome" placeholder="" value="<?php echo $nome;?>" />
                      </div>
                    </div>
                  </div>
                </div>

				        <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="valor_compra">Valor de Compra</label>
                        <input type="number" id="valor_compra" class="form-control form-control-alternative" name="valor_compra" placeholder="0" value="<?php echo $valor_compra;?>" />
                      </div>
                    </div>
                  </div>
                </div>

				        <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="valor_venda">Valor de Venda</label>
                        <input type="number" id="valor_venda" class="form-control form-control-alternative" name="valor_venda" placeholder="0" value="<?php echo $valor_venda;?>" />
                      </div>
                    </div>
                  </div>
                </div>

				        <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="unid">Unidades no Estoque</label>
                        <input type="number" id="unid" class="form-control form-control-alternative" name="unid" placeholder="0" value="<?php echo $unid;?>" />
                      </div>
                    </div>
                  </div>
                </div>

				        <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="unid">Status</label>
                        <select class="form-control" id="status" name="status">
                          <option value="1">Ativo</option>
                          <option value="0">Inativo</option>
                        </select>
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
    $(document).ready(function(){

      var id = $('#id_produto').val();
      $.get('carrega_valor_produto.php',{id:id},function(res){
        $('#valor').val(res);
        calcular();
      });

    });

    $('#id_produto').change(function(){
      var id = $(this).val();
      $.get('carrega_valor_produto.php',{id:id},function(res){
        $('#valor').val(res);
        calcular();
      });
    });

    $('#unid').change(function(){
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
