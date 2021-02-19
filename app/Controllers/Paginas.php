<?php

  class Paginas extends Controller
  {
    public function login()
    {
      $dados = [];

      $this->view("pages/login", $dados);
    }
  }

?>
