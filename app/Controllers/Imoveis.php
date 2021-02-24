<?php

  class Imoveis extends Controller
  {
    public function __construct()
    {
      $this->imovelModel = $this->model("Imovel");
    }

    /**
     * Inicia o processo de cadastro do imóvel.
     *
     * @return void
     *
     */
    public function cadastrar()
    {
      // Armazena as informações preenchidas do formulário.
      $a_formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      // Verifica se o formulário existe.
      if(isset($a_formulario))
      {
        $dados = ["apelido" => trim($a_formulario['apelido']),
                  "cep" => trim($a_formulario['cep']),
                  "endereco" => trim($a_formulario['endereco']),
                  "endereco_numero" => trim($a_formulario['endereco_numero']),
                  "complemento" => trim($a_formulario['complemento']),
                  "bairro" => trim($a_formulario['bairro']),
                  "cidade" => trim($a_formulario['cidade']),
                  "estado" => trim($a_formulario['estado']),
                  "pais" => trim($a_formulario['pais']),
                  "prefeitura_iptu" => trim($a_formulario['prefeitura_iptu']),
                  "sabesp_rgi" => trim($a_formulario['sabesp_rgi']),
                  "enel_numero_instalacao" => trim($a_formulario['enel_numero_instalacao']),
                  "enel_cpf" => trim($a_formulario['enel_cpf']),
                  "enel_numero_cliente" => trim($a_formulario['enel_numero_cliente']),
                  "defeitos_existentes" => trim($a_formulario['defeitos_existentes']),
                  "percentual_imobiliaria" => trim($a_formulario['percentual_imobiliaria'])];

        // Armazena a validação dos dados.
        $a_formulario_validacao = [];

        // Valida o campo 'apelido'.
        if(!empty($a_formulario['apelido']))
        {
          // Aplica a validação do campo.
          if(!ValidarDadosImoveis::validarApelido($a_formulario['apelido'], 100))
          {
            $a_formulario_validacao['apelido_erro'] = "Formato incorreto.";
          }
        }

        // Valida o campo 'percentual_imobiliaria'.
        if(empty($a_formulario['percentual_imobiliaria']))
        {
          $a_formulario_validacao['percentual_imobiliaria_erro'] = "Obrigatório.";
        }
        else
        {
          // Aplica a validação do campo.
          if(!ValidarDadosImoveis::validarPercentualImobiliaria($a_formulario['percentual_imobiliaria']))
          {
            $a_formulario_validacao['percentual_imobiliaria_erro'] = "Formato incorreto.";
          }
        }

        // Valida o campo 'cep'.
        if(empty($a_formulario['cep']))
        {
          $a_formulario_validacao['cep'] = "Obrigatório.";
        }
        else
        {
          // Aplica a validação do campo.
          if(!ValidarDadosGeral::validarCEP($a_formulario['cep']))
          {
            $a_formulario_validacao['cep_erro'] = "Formato incorreto.";
          }
        }

        // Valida o campo 'endereco'.
        if(empty($a_formulario['endereco']))
        {
          $a_formulario_validacao['endereco_erro'] = "Obrigatório.";
        }
        else
        {
          // Aplica a validação do campo.
          if(!ValidarDadosImoveis::validarEndereco($a_formulario['endereco'], 100))
          {
            $a_formulario_validacao['endereco_erro'] = "Formato incorreto.";
          }
        }

        // Valida o campo 'endereco_numero'.
        if(empty($a_formulario['endereco_numero']))
        {
          $a_formulario_validacao['endereco_numero_erro'] = "Obrigatório.";
        }
        else
        {
          // Aplica a validação do campo.
          if(!ValidarDadosImoveis::validarNumeroEndereco($a_formulario['endereco_numero'], 6))
          {
            $a_formulario_validacao['endereco_numero_erro'] = "Formato incorreto.";
          }
        }

        // Valida o campo 'bairro'.
        if(empty($a_formulario['bairro']))
        {
          $a_formulario_validacao['bairro_erro'] = "Obrigatório.";
        }
        else
        {
          // Aplica a validação do campo.
          if(!ValidarDadosImoveis::validarBairro($a_formulario['bairro'], 100))
          {
            $a_formulario_validacao['bairro_erro'] = "Formato incorreto.";
          }
        }

        // Valida o campo 'cidade'.
        if(empty($a_formulario['cidade']))
        {
          $a_formulario_validacao['cidade_erro'] = "Obrigatório.";
        }
        else
        {
          // Aplica a validação do campo.
          if(!ValidarDadosImoveis::validarCidade($a_formulario['cidade'], 45))
          {
            $a_formulario_validacao['cidade_erro'] = "Formato incorreto.";
          }
        }

        // Valida o campo 'estado'.
        if(empty($a_formulario['estado']))
        {
          $a_formulario_validacao['estado_erro'] = "Obrigatório.";
        }
        else
        {
          // Aplica a validação do campo.
          if(!ValidarDadosImoveis::validarEstado($a_formulario['estado'], 2))
          {
            $a_formulario_validacao['estado_erro'] = "Formato incorreto.";
          }
        }

        // Valida o campo 'pais'.
        if(empty($a_formulario['pais']))
        {
          $a_formulario_validacao['pais_erro'] = "Obrigatório.";
        }
        else
        {
          // Aplica a validação do campo.
          if(!ValidarDadosImoveis::validarPais($a_formulario['pais'], 45))
          {
            $a_formulario_validacao['pais_erro'] = "Formato incorreto.";
          }
        }

        // Verifica se tem algo campo com erro.
        if(sizeof($a_formulario_validacao) > 0)
        {
          // Percorre os campos do formulário com erro para adicionar a mensagem de erro.
          foreach($a_formulario_validacao as $key_campo => $campo)
          {
            $dados[$key_campo] = $campo;
          }
        }
        else
        {
          // Efetua o cadastro do imóvel.
          if($this->imovelModel->cadastrar($dados))
          {
            echo "Cadastro do imóvel realizado com sucesso!";
          }
          else
          {
            die("Erro ao cadastrar o imóvel no banco de dados.");
          }
        }
      }
      else
      {
        $dados = ["apelido" => "",
                  "cep" => "",
                  "endereco" => "",
                  "endereco_numero" => "",
                  "complemento" => "",
                  "bairro" => "",
                  "cidade" => "",
                  "estado" => "",
                  "pais" => "Brasil",
                  "prefeitura_iptu" => "",
                  "sabesp_rgi" => "",
                  "enel_numero_instalacao" => "",
                  "enel_cpf" => "",
                  "enel_numero_cliente" => "",
                  "defeitos_existentes" => "",
                  "percentual_imobiliaria" => ""];
      }

      if(!is_null($a_formulario))
      {
        // var_dump($a_formulario);
        // echo "<hr>";
      }

      $this->view("imoveis/cadastrar", $dados);
    }
  }

?>
