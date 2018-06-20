<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
    <a class="nav-link" href="{{ route('home') }}">
      <i class="fa fa-fw fa-dashboard"></i>
      <span class="nav-link-text">Dashboard</span>
    </a>
  </li>
  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Fornecedores">
    <a class="nav-link" href="{{ route('providers.index') }}">
      <i class="fa fa-fw fa-truck"></i>
      <span class="nav-link-text">Fornecedores</span>
    </a>
  </li>
  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Serviços">
    <a class="nav-link" href="{{ route('services.index') }}">
      <i class="fa fa-fw fa-ticket"></i>
      <span class="nav-link-text">Serviços</span>
    </a>
  </li>
  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Ordem de serviço">
    <a class="nav-link" href="{{ route('orders.index') }}">
      <i class="fa fa-fw fa-file-text"></i>
      <span class="nav-link-text">Ordem de serviço</span>
    </a>
  </li>
</ul>
