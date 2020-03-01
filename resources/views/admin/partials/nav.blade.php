<nav style="background-color: #379A89 !important;" class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row" >
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <!-- <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo"/></a> -->
    <a class="navbar-brand brand-logo-mini" href="{{route('adminDashboard')}}"><img src="{{asset('admin')}}/images/logo-mini.png" alt="logo"/></a>

    <!-- <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="images/logo.svg" class="mr-2" alt="logo"/></a> -->
    <a class="navbar-brand brand-logo mr-5" href="{{route('adminDashboard')}}"><img src="{{asset('admin')}}/images/logo.png" class="mr-2" alt="logo"/></a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="ti-view-list"></span>
    </button>
    <ul class="navbar-nav mr-lg-2">
      <!-- <li class="nav-item nav-search d-none d-lg-block">
        <div class="input-group">
          <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
            <span class="input-group-text" id="search">
              <i class="ti-search"></i>
            </span>
          </div>
          <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
        </div>
      </li> -->
    </ul>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item dropdown mr-1">
        <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
          <i class="ti-email mx-0"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown">
          <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
          <a class="dropdown-item" href="{{route('tables')}}#feedback">

            <div class="item-content flex-grow">
              <h6 class="ellipsis font-weight-normal">See More</h6>

            </div>
          </a>


        </div>
      </li>

      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
          <img src="{{asset('admin')}}/images/faces/face28.jpg" alt="profile"/>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">

          <a class="dropdown-item" href="{{route('adminLock')}}">
            <i class="ti-power-off text-primary"></i>
            Logout
          </a>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="ti-view-list"></span>
    </button>
  </div>
</nav>
