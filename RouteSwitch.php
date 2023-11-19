<?php
  abstract class RouteSwitch {

    //rota para a home
    protected function home(){
      require __DIR__ . '/views/home.html';
    }

    /*----------------------------------------------------------*/
    //rota para a page principal relacionada aos cosméticos da Abelha Rainha
    protected function abelhaRainha(){
      require __DIR__ . '/views/abelha_rainha/index.html';
    }

    //rota para cadastrar um novo pedido da Abelha Rainha
    protected function novoPedidoAbelhaRainha(){
      require __DIR__ . '/views/abelha_rainha/novoPedido.html';
    }

    //rota para exibir pedido da Abelha Rainha
    protected function exibirPedidoAbelhaRainha(){
      require __DIR__ . '/views/abelha_rainha/exibirPedido.html';
    }

    //rota para exibir detalhes do pedido da Abelha Rainha
    protected function exibirDetalhesPedidoAbelhaRainha(){
      require __DIR__ . '/views/abelha_rainha/exibirDetalhes.html';
    }

    //--------------------------------------------------------------
    //rota para a page principal relacionada aos cosméticos da Avon
    protected function avon(){
      require __DIR__ . '/views/avon/index.html';
    }

    //---------------------------------------------------------------
    //rota para a page principal relacionada aos cosméticos da Eudora
    protected function eudora(){
      require __DIR__ . '/views/eudora/index.html';
    }

    /*------------------------------------------------------------*/
    //rota para a page principal relacionada aos cosméticos da Natura
    protected function natura(){
      require __DIR__ . '/views/natura/index.html';
    }

    /*------------------------------------------------------------*/
    //rota para pages não encotradas
    protected function __call($name, $arguments){
      http_response_code(404);
      require __DIR__ . '/views/master/error.html';
    }
  }