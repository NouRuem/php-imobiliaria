<?php

  //
  spl_autoload_register(function($classe){

    // Armazena os diretórios que seram verificados.
    $a_diretorios = ["Libraries",
                     "Helpers"];

    // Percorre os diretórios informados.
    foreach($a_diretorios as $diretorio)
    {
      // Armazena o caminho do arquivo.
      $s_arquivo = __DIR__.DIRECTORY_SEPARATOR.$diretorio.DIRECTORY_SEPARATOR.$classe.".php";

      // Verifica se o arquivo da classe dentro do diretório existe.
      if(file_exists($s_arquivo))
      {
        require_once($s_arquivo);
      }
    }

  });

?>
