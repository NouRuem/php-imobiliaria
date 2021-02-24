<?php

  class Imovel
  {
    private $c_DB;

    public function __construct()
    {
      $this->c_DB = new Database();
    }

    /**
     * Efetua o cadastro do imóvel no banco de dados.
     *
     * @param array dados Dados do imóvel que será cadastrado.
     *
     * @return bool
     *
     */
    public function cadastrar($dados)
    {
      return true;
    }
  }

?>
