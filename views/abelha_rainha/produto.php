<?php
  $cod = $_POST["codigo"];
  $desc = $_POST["descricao"];
  $preco = $_POST["preco"];

  $xml = simplexml_load_file('./views/abelha_rainha/produtos.xml');

  $obj = $xml->addChild('produto');
  $obj->addChild('codigo', $cod);
  $obj->addChild('descricao', $desc);
  $obj->addChild('preco', $preco);

  $xml->asXML('./views/abelha_rainha/produtos.xml');

  header('Location: /produtosAbelhaRainha');

  echo "<script>alert('Produto Cadastrado com sucesso!);</script>";
?>