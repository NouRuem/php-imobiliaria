<?php

  require_once(".".DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."app".DIRECTORY_SEPARATOR."Configs".DIRECTORY_SEPARATOR."config.php");
  require_once(APP."autoload.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portal para administração da imobiliária.">
    <meta name="author" content="Allan C. Cruz">
    <title><?php echo APP_NOME; ?></title>
    <!-- Bootstrap -->
    <link href="<?php echo URL."public/assets/bootstrap/css/bootstrap.min.css"; ?>" rel="stylesheet">
    <!-- FontAwesome -->
    <link href="<?php echo URL."public/assets/fontawesome/css/all.min.css"; ?>" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- SB Admin 2 -->
    <link href="<?php echo URL."public/assets/sbadmin2/css/sb-admin-2.min.css"; ?>" rel="stylesheet">
    <!-- Geral -->
    <link href="<?php echo URL."public/css/principal.css"; ?>" rel="stylesheet">
  </head>
  <body>

    <?php

      // Instância a classe de Rotes.
      $c_ROTES = new Rotes();

    ?>

    <!-- JS -->
    <script src="<?php echo URL."public/assets/jquery/js/jquery-3.5.1.min.js"; ?>"></script>
    <script src="<?php echo URL."public/assets/bootstrap/js/bootstrap.bundle.min.js"; ?>"></script>
    <script src="<?php echo URL."public/assets/jquery-easing/js/jquery.easing.min.js"; ?>"></script>
    <script src="<?php echo URL."public/assets/sbadmin2/js/sb-admin-2.min.js"; ?>"></script>
    <script src="<?php echo URL."public/js/principal.js"; ?>"></script>

  </body>
</html>
