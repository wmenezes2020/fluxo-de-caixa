<?php
    include('url.api.php');

    $getProdutos = file_get_contents($url . "/produtos");
    $jsonProdutos = json_decode($getProdutos);
    $produtos = count($jsonProdutos);

    foreach($jsonProdutos as $produto){
        if($produto->id == $_GET['id']){
            echo $produto->valor_venda;
        }
    }
