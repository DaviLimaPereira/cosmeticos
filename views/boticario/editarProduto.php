<?php
include_once './config.php';

  $codigo = $_POST["codigo"];
  $descricao = $_POST["descricao"];
  $preco = $_POST["preco"];
  $cod = $_POST["cod"];

  $xml = simplexml_load_file('./views/boticario/produtos.xml');

  for($i = 0; $i < count($xml->produto); $i++){
    if(strval($xml->produto[$i]->codigo) == $cod){
      $xml->produto[$i]->codigo = $codigo;
      $xml->produto[$i]->descricao = $descricao;
      $xml->produto[$i]->preco = $preco;
    }
  }

  $xml->asXML('./views/boticario/produtos.xml');

  header("Location: /produtosBoticario");  
?>