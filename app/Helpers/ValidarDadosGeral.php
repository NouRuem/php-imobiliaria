<?php

  class ValidarDadosGeral
  {
    /**
     * Valida o CEP informado.
     *
     * @param string $cep CEP a ser validado.
     *
     * @return bool
     *
     */
    public static function validarCEP($cep)
    {
      // Verifica o tamanho do CEP.
      if(strlen($cep) === 8)
      {
        // Verifica o REGEX do texto.
        if(preg_match('/^[0-9]+$/', $cep) === 1)
        {
          return true;
        }
        else
        {
          return false;
        }
      }
      else
      {
        return false;
      }
    }
  }

?>
