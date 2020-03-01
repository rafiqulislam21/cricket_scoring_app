<ul class="nav">
  <li class="nav-item">
    <a class="nav-link" href="{{route('adminDashboard')}}">
      <i class="ti-shield menu-icon"></i>
      <span class="menu-title">Dashboard</span>
    </a>
  </li>
  <!-- <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
      <i class="ti-palette menu-icon"></i>
      <span class="menu-title">UI Elements</span>
      <i class="menu-arrow"></i>
    </a>
    <div class="collapse" id="ui-basic">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
        <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
      </ul>
    </div>
  </li> -->
  <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#all_forms" aria-expanded="false" aria-controls="all_forms">
      <i class="ti-layout-list-post menu-icon"></i>
      <span class="menu-title">All Forms</span>
      <i class="menu-arrow"></i>
    </a>
    <div class="collapse" id="all_forms">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item"> <a class="nav-link" href="{{route('fixtures')}}">Add Fixtures</a></li>
        <li class="nav-item"> <a class="nav-link" href="{{route('tournaments')}}">Add Tournaments</a></li>
        <li class="nav-item"> <a class="nav-link" href="{{route('teams')}}">Add Teams</a></li>
        <li class="nav-item"> <a class="nav-link" href="{{route('gamemanagers')}}">Add Game Managers</a></li>
        <li class="nav-item"> <a class="nav-link" href="{{route('players')}}">Add Players</a></li>

      </ul>
    </div>
  </li>
  <!-- <li class="nav-item">
    <a class="nav-link" href="pages/forms/basic_elements.html">
      <i class="ti-layout-list-post menu-icon"></i>
      <span class="menu-title">Form elements</span>
    </a>
  </li> -->
  <li class="nav-item">
    <a class="nav-link" href="{{route('charts')}}">
      <i class="ti-pie-chart menu-icon"></i>
      <span class="menu-title">Charts</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('tables')}}">
      <i class="ti-view-list-alt menu-icon"></i>
      <span class="menu-title">Tables</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('tables')}}#feedback">
      <i class="ti-email menu-icon"></i>
      <span class="menu-title">Inbox</span>
    </a>
  </li>
  <!-- <li class="nav-item">
    <a class="nav-link" href="pages/icons/themify.html">
      <i class="ti-star menu-icon"></i>
      <span class="menu-title">Icons</span>
    </a>
  </li> -->
  <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
      <i class="ti-user menu-icon"></i>
      <span class="menu-title">Sleep mode</span>
      <i class="menu-arrow"></i>
    </a>
    <div class="collapse" id="auth">
      <ul class="nav flex-column sub-menu">
        <!-- <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
        <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
        <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
        <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li> -->
        <li class="nav-item"> <a class="nav-link" href="{{route('lock')}}"> Lockscreen </a></li>
      </ul>
    </div>
  </li>
  <!-- <li class="nav-item">
    <a class="nav-link" href="{{route('documentation')}}">
      <i class="ti-write menu-icon"></i>
      <span class="menu-title">Documentation</span>
    </a>
  </li> -->
</ul>
