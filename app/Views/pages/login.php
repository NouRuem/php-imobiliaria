<!-- CSS Página -->
<link href="<?= URL."public/css/pages/login.css"; ?>" rel="stylesheet">

<!-- Formulário do Login -->
<form class="form-signin" onsubmit="return iniciarLogIn()">

  <div class="row">
    <!-- Logo -->
    <div class="col-xl-12 text-center mb-3">
      <img src="img/logos/house_original.png" alt="" width="72" height="72">
    </div>

    <!-- Usuário -->
    <div class="col-xl-12 mb-3">
      <input type="text" id="input_login_usuario" class="form-control texto-pequeno" placeholder="Digite o usuário" autofocus>
      <div class="invalid-feedback">
        <span id="span_login_usuario" class="texto-pequeno"></span>
      </div>
    </div>

    <!-- Senha -->
    <div class="col-xl-12 mb-3">
      <input type="password" id="input_login_senha" class="form-control texto-pequeno" placeholder="Digite a senha">
      <div class="invalid-feedback">
        <span id="span_login_senha" class="texto-pequeno"></span>
      </div>
    </div>

    <!-- Entrar -->
    <div class="col-xl-12">
      <button id="btn_login_entrar" class="btn btn-sm btn-primary btn-block"><i class="fas fa-sign-in-alt fa-sm fa-fw mr-2"></i>Entrar</button>
    </div>
  </div>

  <div class="row">
    <div class="col-xl-12 text-center">
      <p class="mt-5 mb-3 text-muted texto-pequeno">Copyright &copy; 2021 - <a href="https://github.com/NouRuem/php-imobiliaria" class="text-decoration-none" target="_blank" title="GitHub <?= APP_NOME ?>"><i class="fab fa-github mr-1"></i><?= APP_NOME ?></a> v<?= APP_VERSAO ?></p>
    </div>
  </div>
</form>
