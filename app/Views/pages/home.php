<div id="wrapper">

  <!-- Menu Lateral - Início -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Logo/Nome -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo URL; ?>">
      <div class="sidebar-brand-icon">
        <img src="<?php echo URL."img/logos/house.png"; ?>" alt="Logo Imobiliária">
      </div>
      <div class="sidebar-brand-text mx-3">Imobiliária</div>
    </a>

    <hr class="sidebar-divider my-0">

    <!-- Opção - Home -->
    <li class="nav-item active">
      <a class="nav-link" href="<?php echo URL; ?>">
      <i class="fas fa-fw fas fa-home"></i>
      <span>Home</span></a>
    </li>

    <hr class="sidebar-divider">

    <!-- Header - Cadastros -->
    <div class="sidebar-heading">Cadastros</div>

    <!-- Opção - Imóveis -->
    <li class="nav-item">
      <a class="nav-link" href="<?php echo URL."imoveis"; ?>">
      <i class="fas fa-fw fas fa-building"></i>
      <span>Imóveis</span></a>
    </li>

    <!-- Opção - Inquilinos -->
    <li class="nav-item">
      <a class="nav-link" href="<?php echo URL."inquilinos"; ?>">
      <i class="fas fa-fw fas fa-house-user"></i>
      <span>Inquilinos</span></a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <!-- Recolher Menu Lateral -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
  <!-- Menu Lateral - Fim -->

  <!-- Conteúdo Principal Página - Início -->
  <div id="content-wrapper" class="d-flex flex-column">

    <div id="content">

      <!-- Menu Superior - Início -->
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
      <!-- Menu Superior - Fim -->

      <!-- Conteúdo da Página Atual - Início -->
      <div class="container-fluid">

        <!-- Cabeçalho da Página -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Home</h1>
        </div>

        <!-- Content Row -->
        <div class="row">
          <div class="col-xl-12 col-md-12 mb-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam aliquet mi quis mauris blandit, vel ornare odio viverra. Pellentesque magna mauris, fringilla vel dui vel, pellentesque accumsan mi. Mauris sagittis velit eu blandit mollis. Nulla facilisi. Cras faucibus orci arcu. Nullam eu magna massa. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas mattis dictum nulla, ut tincidunt diam auctor in. Vestibulum iaculis arcu id porta consequat.</p>
          </div>
        </div>

      </div>
      <!-- Conteúdo da Página Atual - Fim -->

    </div>

    <!-- Rodapé - Início -->
    <footer class="sticky-footer bg-white">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <span>Copyright &copy; Imobiliária 2021</span>
        </div>
      </div>
    </footer>
    <!-- Rodapé - Fim -->

  </div>
  <!-- Conteúdo Principal Página - Fim -->

</div>
