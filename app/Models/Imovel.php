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
      // Gera um id único para o registro.
      $s_id_unico = md5(uniqid(rand()+time(), true));

      $this->c_DB->query("INSERT INTO tb_imoveis(idtb_imovel, apelido, cep, endereco, endereco_numero, complemento, bairro, cidade, estado, pais, prefeitura_iptu, sabesp_rgi, enel_numero_instalacao, enel_cpf, enel_numero_cliente, defeitos_existentes, percentual_imobiliaria)
                           VALUES(:idtb_imovel, :apelido, :cep, :endereco, :endereco_numero, :complemento, :bairro, :cidade, :estado, :pais, :prefeitura_iptu, :sabesp_rgi, :enel_numero_instalacao, :enel_cpf, :enel_numero_cliente, :defeitos_existentes, :percentual_imobiliaria);");

      $this->c_DB->bind("idtb_imovel", $s_id_unico);
      $this->c_DB->bind("apelido", $dados['apelido']);
      $this->c_DB->bind("cep", $dados['cep']);
      $this->c_DB->bind("endereco", $dados['endereco']);
      $this->c_DB->bind("endereco_numero", $dados['endereco_numero']);
      $this->c_DB->bind("complemento", $dados['complemento']);
      $this->c_DB->bind("bairro", $dados['bairro']);
      $this->c_DB->bind("cidade", $dados['cidade']);
      $this->c_DB->bind("estado", $dados['estado']);
      $this->c_DB->bind("pais", $dados['pais']);
      $this->c_DB->bind("prefeitura_iptu", $dados['prefeitura_iptu']);
      $this->c_DB->bind("sabesp_rgi", $dados['sabesp_rgi']);
      $this->c_DB->bind("enel_numero_instalacao", $dados['enel_numero_instalacao']);
      $this->c_DB->bind("enel_cpf", $dados['enel_cpf']);
      $this->c_DB->bind("enel_numero_cliente", $dados['enel_numero_cliente']);
      $this->c_DB->bind("defeitos_existentes", $dados['defeitos_existentes']);
      $this->c_DB->bind("percentual_imobiliaria", $dados['percentual_imobiliaria']);

      // Executa a query.
      if($this->c_DB->execute())
      {
        return true;
      }
      else
      {
        return false;
      }
    }
  }

?>
