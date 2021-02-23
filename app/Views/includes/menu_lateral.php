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
  <li class="nav-item">
    <a class="nav-link" href="<?php echo URL; ?>">
    <i class="fas fa-fw fas fa-home"></i>
    <span>Home</span></a>
  </li>

  <hr class="sidebar-divider">

  <!-- Header - Cadastros -->
  <div class="sidebar-heading">Cadastros</div>

  <!-- Opção - Imóveis -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fas fa-building"></i>
      <span>Imóveis</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="#">Listar</a>
        <a class="collapse-item" href="<?php echo URL."imoveis/cadastrar"; ?>">Cadastrar</a>
      </div>
    </div>
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
