<?php

  class Paginas extends Controller
  {
    /**
     * Controller da página de login.
     *
     * @return void
     *
     */
    public function login()
    {
      $dados = [];

      $this->view("pages/login", $dados);
    }

    /**
     * Controller da página principal do portal.
     *
     * @return void
     *
     */
    public function home()
    {
      $dados = [];

      $this->view("pages/home", $dados);
    }
  }

?>
