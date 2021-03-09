<?php

  require_once(".".DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."app".DIRECTORY_SEPARATOR."Configs".DIRECTORY_SEPARATOR."config.php");
  require_once(APP."autoload.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Portal para administração da imobiliária.">
    <meta name="author" content="Allan C. Cruz">
    <title><?= APP_NOME; ?></title>
    <!-- Favicon -->
    <link href="<?= URL."public/img/favicons/house_16x16.png"; ?>" rel="icon" sizes="16x16">
    <link href="<?= URL."public/img/favicons/house_48x48.png"; ?>" rel="icon" sizes="48x48">
    <link href="<?= URL."public/img/favicons/house_96x96.png"; ?>" rel="icon" sizes="96x96">
    <link href="<?= URL."public/img/favicons/house_144x144.png"; ?>" rel="icon" sizes="144x144">
    <!-- Bootstrap -->
    <link href="<?= URL."public/assets/bootstrap/css/bootstrap.min.css"; ?>" rel="stylesheet">
    <!-- FontAwesome -->
    <link href="<?= URL."public/assets/fontawesome/css/all.min.css"; ?>" rel="stylesheet">
    <!-- CSS Geral -->
    <link href="<?= URL."public/css/sistema/geral.css"; ?>" rel="stylesheet">
  </head>
  <body>

    <?php

      // Armazena a instância da classe de Rotes.
      $c_ROTES = new Rotes();

    ?>

    <!-- JS Geral -->
    <script src="<?= URL."public/assets/jquery/js/jquery-3.5.1.min.js"; ?>"></script>
    <script src="<?= URL."public/assets/bootstrap/js/bootstrap.bundle.min.js"; ?>"></script>
    <script src="<?= URL."public/js/sistema/geral.js"; ?>"></script>

  </body>
</html>
