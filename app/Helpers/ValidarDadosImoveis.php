<?php

  class ValidarDadosImoveis
  {
    /**
     * Valida o apelido informado para o ímovel.
     *
     * @param string $texto   Apelido do imóvel informado.
     * @param int    $tamanho Tamanho da string a ser validado.
     *
     * @return bool
     *
     */
    public static function validarApelido($texto, $tamanho)
    {
      // Verifica o tamanho do texto.
      if(strlen($texto) <= $tamanho)
      {
        // Verifica o REGEX do texto.
        if(preg_match('/^[0-9A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ -]+$/', $texto) === 1)
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

    /**
     * Valida a porcentagem da imobiliária informado para o ímovel.
     *
     * @param string $texto   Apelido do imóvel informado.
     *
     * @return bool
     *
     */
    public static function validarPercentualImobiliaria($texto)
    {
      // Verifica o tamanho do texto.
      if(strlen($texto) <= 3)
      {
        // Verifica o REGEX do texto.
        if(preg_match('/[0-9]+/', $texto) === 1)
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

    /**
     * Valida o endereço informado para o ímovel.
     *
     * @param string $texto   Endereço do imóvel informado.
     * @param int    $tamanho Tamanho da string a ser validado.
     *
     * @return bool
     *
     */
    public static function validarEndereco($texto, $tamanho)
    {
      // Verifica o tamanho do texto.
      if(strlen($texto) <= $tamanho)
      {
        // Verifica o REGEX do texto.
        if(preg_match('/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ -]+$/', $texto) === 1)
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

    /**
     * Valida o número do endereço informado para o ímovel.
     *
     * @param string $texto   Número do endereço do imóvel informado.
     * @param int    $tamanho Tamanho da string a ser validado.
     *
     * @return bool
     *
     */
    public static function validarNumeroEndereco($texto, $tamanho)
    {
      // Verifica o tamanho do texto.
      if(strlen($texto) <= $tamanho)
      {
        // Verifica o REGEX do texto.
        if(preg_match('/^[0-9]+$/', $texto) === 1)
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

    /**
     * Valida o bairro informado para o ímovel.
     *
     * @param string $texto   Bairro do imóvel informado.
     * @param int    $tamanho Tamanho da string a ser validado.
     *
     * @return bool
     *
     */
    public static function validarBairro($texto, $tamanho)
    {
      // Verifica o tamanho do texto.
      if(strlen($texto) <= $tamanho)
      {
        // Verifica o REGEX do texto.
        if(preg_match('/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/', $texto) === 1)
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

    /**
     * Valida a cidade informada para o ímovel.
     *
     * @param string $texto   Cidade do imóvel informado.
     * @param int    $tamanho Tamanho da string a ser validado.
     *
     * @return bool
     *
     */
    public static function validarCidade($texto, $tamanho)
    {
      // Verifica o tamanho do texto.
      if(strlen($texto) <= $tamanho)
      {
        // Verifica o REGEX do texto.
        if(preg_match('/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/', $texto) === 1)
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

    /**
     * Valida o estado informado para o ímovel.
     *
     * @param string $texto   Estado do imóvel informado.
     * @param int    $tamanho Tamanho da string a ser validado.
     *
     * @return bool
     *
     */
    public static function validarEstado($texto, $tamanho)
    {
      // Verifica o tamanho do texto.
      if(strlen($texto) <= $tamanho)
      {
        // Verifica o REGEX do texto.
        if(preg_match('/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/', $texto) === 1)
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

    /**
     * Valida o país informado para o ímovel.
     *
     * @param string $texto   País do imóvel informado.
     * @param int    $tamanho Tamanho da string a ser validado.
     *
     * @return bool
     *
     */
    public static function validarPais($texto, $tamanho)
    {
      // Verifica o tamanho do texto.
      if(strlen($texto) <= $tamanho)
      {
        // Verifica o REGEX do texto.
        if(preg_match('/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/', $texto) === 1)
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
