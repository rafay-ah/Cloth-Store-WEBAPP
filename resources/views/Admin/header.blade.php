<header class="main-header " id="header">
<link rel="stylesheet" href="{{asset('assets/css/service.css')}}">
            <nav class="navbar navbar-static-top navbar-expand-lg">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <!-- search form -->
              <div class="search-form d-none d-lg-inline-block hidden-xs">
                <div class="input-group">
                  <button type="button" name="search" id="search-btn" class="btn btn-flat">
                    <i class="mdi mdi-magnify"></i>
                  </button>
                  <input type="text" name="query" id="search-input" class="form-control" placeholder="'button', 'chart' etc."
                    autofocus autocomplete="off" />
                </div>
               
              </div>

              <div class="navbar-right ">
                <ul class="nav navbar-nav">
                 
                
                  <li class="dropdown notifications-menu">
                    <button class="dropdown-toggle" data-toggle="dropdown">
                      <i class="mdi mdi-bell-outline"></i>
                    </button>
                   
                  </li>
                  <!-- User Account -->
                  <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <img src="{{asset('assets/img/user/user.png')}}" class="user-image" alt="User Image" />
                      <span class="d-none d-lg-inline-block">{{session('aName')}}</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <!-- User image -->
                      <li class="dropdown-header">
                        <img src="{{asset('assets/img/user/user.png')}}" class="img-circle" alt="User Image" />
                        <div class="d-inline-block">
                        {{session('Name')}} <small class="pt-1">{{session('email')}}</small>
                        </div>
                      </li>

                      <li>
                        <a href={{"http://127.0.0.1:8000/admin/Profile"}}>
                          <i class="mdi mdi-account"></i> My Profile
                        </a>
                      </li>
                     <li>
                        <a href="#"> <i class="mdi mdi-settings"></i> Account Setting </a>
                      </li>

                      <li class="dropdown-footer">
                        <a href="logout"> <i class="mdi mdi-logout"></i> Log Out </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>


          </header>