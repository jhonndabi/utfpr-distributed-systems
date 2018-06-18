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
  {{-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
      <i class="fa fa-fw fa-sitemap"></i>
      <span class="nav-link-text">Menu Levels</span>
    </a>
    <ul class="sidenav-second-level collapse" id="collapseMulti">
      <li>
        <a href="#">Second Level Item</a>
      </li>
      <li>
        <a href="#">Second Level Item</a>
      </li>
      <li>
        <a href="#">Second Level Item</a>
      </li>
      <li>
        <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
        <ul class="sidenav-third-level collapse" id="collapseMulti2">
          <li>
            <a href="#">Third Level Item</a>
          </li>
          <li>
            <a href="#">Third Level Item</a>
          </li>
          <li>
            <a href="#">Third Level Item</a>
          </li>
        </ul>
      </li>
    </ul>
  </li> --}}
</ul>
