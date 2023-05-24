<?php

  if($_POST['id']){
    foreach($jsonClientes as $cliente){
      if($cliente->id == $_POST['id']){
        $id = $cliente->id;
        $nome = $cliente->nome;
        $email = $cliente->email;
        $telefone = $cliente->telefone;
      }
    }
  }else{

    $id = '';
    $nome = '';
    $email = '';
    $telefone = '';

  }

?><!DOCTYPE html>
<html lang="pt_BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Cliente - Fluxo de Caixa - MINSOFT</title>
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
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="#">Cliente</a>
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
              <h3 class="mb-0">Cliente</h3>
            </div>
          </div>
        </div>

        <form method="post" action="clientes.php">
          <input type="hidden" name="cad_cliente" value="1" />
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
                        <label class="form-control-label" for="telefone">Telefone</label>
                        <input type="text" id="telefone" class="form-control form-control-alternative" name="telefone" placeholder="" value="<?php echo $telefone;?>" />
                      </div>
                    </div>
                  </div>
                </div>

				        <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="email">E-mail</label>
                        <input type="email" id="email" class="form-control form-control-alternative" name="email" placeholder="" value="<?php echo $email;?>" />
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
