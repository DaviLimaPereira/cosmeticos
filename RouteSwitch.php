<?php
  abstract class RouteSwitch {

    //rota para a home
    protected function home(){
      require __DIR__ . './views/master/home.html';
    }

    //rota para pages não encotradas
    protected function __call($name, $arguments){
      http_response_code(404);
      require __DIR__ . './views/master/error.html';
    }
  }