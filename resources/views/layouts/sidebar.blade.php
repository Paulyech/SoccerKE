          <div class="sidebar" data-color="azure" data-background-color="white" data-image="../../assets/img/04.jpg">
              <div class="logo"><a href="" class="simple-text logo-mini">
                  SW
                </a>
                <a href="" class="simple-text logo-normal">
                  Soccer World
                </a>
              </div>
              <div class="sidebar-wrapper">

              <!-- User profile details -->
              <div class="user">
                <div class="photo">
                  <img src="../assets/img/user.png" />
                </div>
                <div class="user-info">
                  <a data-toggle="collapse" href="#profile" class="username">
                    <span>
                      {{ session()->get('userDetails')['firstname'] }} {{ session()->get('userDetails')['surname'] }}
                      <b class="caret"></b>
                    </span>
                  </a>
                  <div class="collapse" id="profile">
                    <ul class="nav">
                      <li class="nav-item">
                        <a class="nav-link" href="#">
                          <span class="sidebar-mini"> MP </span>
                          <span class="sidebar-normal"> My Profile </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/logout">
                          <span class="sidebar-mini"> L </span>
                          <span class="sidebar-normal"> Logout </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <!-- Sidebar menu items -->
              <ul class="nav">

                <li class="nav-item {{ Request::path() == 'dashboard' ? 'active' : '' }} ">
                  <a class="nav-link " href="/dashboard">
                    <i class="material-icons">dashboard</i>
                    <p> Dashboard </p>
                  </a>
                </li>

                <li class="nav-item {{ Request::path() == 'admin/tactics' ? 'active' : '' }} ">
                  <a class="nav-link " href="/admin/tactics">
                    <i class="material-icons">sports_soccer</i>
                    <p> Tactics </p>
                  </a>
                </li>

              </ul>
            </div>
          </div>
          <!-- Navbar -->
          <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
            <div class="navbar-wrapper">
                <div class="navbar-minimize">
                <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                    <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                    <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
                </button>
                </div>
                <a class="navbar-brand" href="javascript:;">Dashboard</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons">notifications</i>
                    <span class="notification">5</span>
                    <p class="d-lg-none d-md-block">
                        Some Actions
                    </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Mike John responded to your email</a>
                    <a class="dropdown-item" href="#">You have 5 new tasks</a>
                    <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                    <a class="dropdown-item" href="#">Another Notification</a>
                    <a class="dropdown-item" href="#">Another One</a>
                    </div>
                </li> --}}
                <li class="nav-item dropdown">
                    <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons">person</i>
                    <p class="d-lg-none d-md-block">
                        Account
                    </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                    <a class="dropdown-item" href="#">Profile</a>
                    <a class="dropdown-item" href="#">Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/logout">Log out</a>
                    </div>
                </li>
                </ul>
            </div>
            </div>
        </nav>
        <!-- End Navbar -->