<?php

  if(isset($_POST['cad_produto'])){

      $data = json_encode($_POST);

      $curl = curl_init();
      curl_setopt_array($curl, array(
        CURLOPT_URL => $url . "/produtos/cadastrar",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_HTTPHEADER => array(
        "accept: application/json",
        "authorization: Basic bG9jdXRvcjpsazI4dW5qczcvKg==",
        "content-type: application/json"
        ),
      ));

      $response = json_decode(curl_exec($curl));
      $err = curl_error($curl);

      if(isset($response->error)){
        ?>
        <script>
          alert('<?php echo $response->message;?>');
        </script>
        <?php
      }else{
        ?>
        <script>
          alert('<?php echo $response->mensagem;?>');
        </script>
        <?php
      }
      curl_close($curl);
  }

  if(isset($_POST['edit_produto'])){

      $data = json_encode($_POST);

      $curl = curl_init();
      curl_setopt_array($curl, array(
        CURLOPT_URL => $url . "/produtos/atualizar",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_HTTPHEADER => array(
        "accept: application/json",
        "authorization: Basic bG9jdXRvcjpsazI4dW5qczcvKg==",
        "content-type: application/json"
        ),
      ));

      $response = json_decode(curl_exec($curl));
      $err = curl_error($curl);

      if(isset($response->error)){
        ?>
        <script>
          alert('<?php echo $response->message;?>');
        </script>
        <?php
      }else{
        ?>
        <script>
          alert('<?php echo $response->mensagem;?>');
        </script>
        <?php
      }
      curl_close($curl);
  }


  if(isset($_POST['cad_fornecedor'])){

      $data = json_encode($_POST);

      $curl = curl_init();
      curl_setopt_array($curl, array(
        CURLOPT_URL => $url . "/fornecedores/cadastrar",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_HTTPHEADER => array(
        "accept: application/json",
        "authorization: Basic bG9jdXRvcjpsazI4dW5qczcvKg==",
        "content-type: application/json"
        ),
      ));

      $response = json_decode(curl_exec($curl));
      $err = curl_error($curl);

      if(isset($response->error)){
        ?>
        <script>
          alert('<?php echo $response->message;?>');
        </script>
        <?php
      }else{
        ?>
        <script>
          alert('<?php echo $response->mensagem;?>');
        </script>
        <?php
      }
      curl_close($curl);
  }

  if(isset($_POST['edit_fornecedor'])){

      $data = json_encode($_POST);

      $curl = curl_init();
      curl_setopt_array($curl, array(
        CURLOPT_URL => $url . "/fornecedores/atualizar",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_HTTPHEADER => array(
        "accept: application/json",
        "authorization: Basic bG9jdXRvcjpsazI4dW5qczcvKg==",
        "content-type: application/json"
        ),
      ));

      $response = json_decode(curl_exec($curl));
      $err = curl_error($curl);

      if(isset($response->error)){
        ?>
        <script>
          alert('<?php echo $response->message;?>');
        </script>
        <?php
      }else{
        ?>
        <script>
          alert('<?php echo $response->mensagem;?>');
        </script>
        <?php
      }
      curl_close($curl);
  }


  if(isset($_POST['cad_cliente'])){

      $data = json_encode($_POST);

      $curl = curl_init();
      curl_setopt_array($curl, array(
        CURLOPT_URL => $url . "/clientes/cadastrar",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_HTTPHEADER => array(
        "accept: application/json",
        "authorization: Basic bG9jdXRvcjpsazI4dW5qczcvKg==",
        "content-type: application/json"
        ),
      ));

      $response = json_decode(curl_exec($curl));
      $err = curl_error($curl);

      if(isset($response->error)){
        ?>
        <script>
          alert('<?php echo $response->message;?>');
        </script>
        <?php
      }else{
        ?>
        <script>
          alert('<?php echo $response->mensagem;?>');
        </script>
        <?php
      }
      curl_close($curl);
  }


  if(isset($_POST['edit_cliente'])){

      $data = json_encode($_POST);

      $curl = curl_init();
      curl_setopt_array($curl, array(
        CURLOPT_URL => $url . "/clientes/atualizar",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_HTTPHEADER => array(
        "accept: application/json",
        "authorization: Basic bG9jdXRvcjpsazI4dW5qczcvKg==",
        "content-type: application/json"
        ),
      ));

      $response = json_decode(curl_exec($curl));
      $err = curl_error($curl);

      if(isset($response->error)){
        ?>
        <script>
          alert('<?php echo $response->message;?>');
        </script>
        <?php
      }else{
        ?>
        <script>
          alert('<?php echo $response->mensagem;?>');
        </script>
        <?php
      }
      curl_close($curl);
  }


  if(isset($_POST['nova_venda'])){

      $data = json_encode($_POST);

      $curl = curl_init();
      curl_setopt_array($curl, array(
        CURLOPT_URL => $url . "/vendas/cadastrar",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_HTTPHEADER => array(
        "accept: application/json",
        "authorization: Basic bG9jdXRvcjpsazI4dW5qczcvKg==",
        "content-type: application/json"
        ),
      ));

      $response = json_decode(curl_exec($curl));
      $err = curl_error($curl);

      if(isset($response->error)){
        ?>
        <script>
          alert('<?php echo $response->message;?>');
        </script>
        <?php
      }else{
        ?>
        <script>
          alert('<?php echo $response->mensagem;?>');
        </script>
        <?php
      }

      curl_close($curl);
  }


  if(isset($_POST['nova_compra'])){

      $data = json_encode($_POST);

      $curl = curl_init();
      curl_setopt_array($curl, array(
        CURLOPT_URL => $url . "/compras/cadastrar",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_HTTPHEADER => array(
        "accept: application/json",
        "authorization: Basic bG9jdXRvcjpsazI4dW5qczcvKg==",
        "content-type: application/json"
        ),
      ));

      $response = json_decode(curl_exec($curl));
      $err = curl_error($curl);

      if(isset($response->error)){
        ?>
        <script>
          alert('<?php echo $response->message;?>');
        </script>
        <?php
      }else{
        ?>
        <script>
          alert('<?php echo $response->mensagem;?>');
        </script>
        <?php
      }

      curl_close($curl);
  }



  $getVendas = file_get_contents($url . "/vendas");
  $jsonVendas = json_decode($getVendas);
  $vendas = count($jsonVendas);
  $total_vendas = 0;
  foreach($jsonVendas as $venda){
    $total_vendas = ($total_vendas + $venda->total);
  }

  $getCompras = file_get_contents($url . "/compras");
  $jsonCompras = json_decode($getCompras);
  $total_compras = 0;
  foreach($jsonCompras as $compra){
    $total_compras = ($total_compras + $compra->total);
  }
  $compras = count($jsonCompras);

  $getClientes = file_get_contents($url . "/clientes");
  $jsonClientes = json_decode($getClientes);
  $clientes = count($jsonClientes);

  $getFornecedores = file_get_contents($url . "/fornecedores");
  $jsonFornecedores = json_decode($getFornecedores);
  $fornecedores = count($jsonFornecedores);

  $getProdutos = file_get_contents($url . "/produtos");
  $jsonProdutos = json_decode($getProdutos);
  $produtos = count($jsonProdutos);

  $getSaldo = file_get_contents($url . "/saldo/consolidado");
  $jsonSaldo = json_decode($getSaldo);
  $saldo = count($jsonSaldo);


  function nomeProduto($produto, $jsonProdutos){
    foreach($jsonProdutos as $p_produto){
      if($p_produto->id == $produto){
        $produto = $p_produto->nome;
      }
    }
    return $produto;
  }

  function nomeCliente($cliente, $jsonClientes){
    foreach($jsonClientes as $p_cliente){
      if($p_cliente->id == $cliente){
        $cliente = $p_cliente->nome;
      }
    }
    return $cliente;
  }

  function nomeFornecedor($fornecedor, $jsonFornecedores){
    foreach($jsonFornecedores as $p_fornecedor){
      if($p_fornecedor->id == $fornecedor){
        $fornecedor = $p_fornecedor->nome;
      }
    }
    return $fornecedor;
  }
