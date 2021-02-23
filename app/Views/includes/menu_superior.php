<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

  <!-- Sidebar Toggle -->
  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
  </button>

  <ul class="navbar-nav ml-auto">

    <!-- Opção - Alertas -->
    <li class="nav-item dropdown no-arrow mx-1">
      <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-bell fa-fw"></i>
        <!-- Contador - Alertas -->
        <span class="badge badge-danger badge-counter">0</span>
      </a>
      <!-- Dropdown - Alertas -->
      <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
        <h6 class="dropdown-header">Centro de Alertas</h6>
        <a class="dropdown-item text-center small text-gray-500" href="#">Mostrar Todos</a>
      </div>
    </li>

    <!-- Opção - Mensagens -->
    <li class="nav-item dropdown no-arrow mx-1">
      <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-envelope fa-fw"></i>
        <!-- Contador - Mensagens -->
        <span class="badge badge-danger badge-counter">0</span>
      </a>
      <!-- Dropdown - Mensagens -->
      <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
        <h6 class="dropdown-header">Centro de Mensagens</h6>
        <a class="dropdown-item text-center small text-gray-500" href="#">Mostrar Todas</a>
      </div>
    </li>

    <div class="topbar-divider d-none d-sm-block"></div>

    <!-- Opção - Usuário Logado -->
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Usuário Logado</span>
        <img class="img-profile rounded-circle" src="<?php echo URL."uploads/users/teste_usuario_1.png"; ?>">
      </a>
      <!-- Dropdown - Usuário Logado -->
      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="#">
          <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>Perfil
        </a>
        <a class="dropdown-item" href="#">
          <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>Configurações
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Sair
        </a>
      </div>
    </li>

  </ul>

</nav>
