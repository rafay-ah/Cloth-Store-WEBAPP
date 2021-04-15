<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Admin Dashboard </title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet"/>
  <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="{{asset('assets/plugins/toaster/toastr.min.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/plugins/nprogress/nprogress.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/plugins/flag-icons/css/flag-icon.min.css')}}" rel="stylesheet"/>
  <link href="{{asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/plugins/ladda/ladda.min.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" />

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="{{asset('assets/css/sleek.css')}}" />

  

  <!-- FAVICON -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="shortcut icon" />
  <script src="{{asset('assets/plugins/nprogress/nprogress.js')}}"></script>
</head>



  <body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    <div class="mobile-sticky-body-overlay"></div>

    <div class="wrapper">
      
              <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
        <aside class="left-sidebar bg-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="index">
                <svg
                  class="brand-icon"
                  xmlns="http://www.w3.org/2000/svg"
                  preserveAspectRatio="xMidYMid"
                  width="30"
                  height="33"
                  viewBox="0 0 30 33"
                >
                  <g fill="none" fill-rule="evenodd">
                    <path
                      class="logo-fill-blue"
                      fill="#7DBCFF"
                      d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
                    />
                    <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                  </g>
                </svg>
                <span class="brand-name">Admin Dashboard</span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-scrollbar">

              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">
                  <li  class="has-sub  expand" >
                    <a class="sidenav-item-link" href="index" >
                      <i class="mdi mdi-view-dashboard-outline"></i>
                      <span class="nav-text">Dashboard</span> 
                    </a>
                    
                  </li>
                  <li  class="has-sub  expand" >
                    <a class="sidenav-item-link" href="customer" >
                      <i class="mdi mdi-account-supervisor"></i>
                      <span class="nav-text">Customers</span> 
                    </a>
                    <li class="has-sub active expand">
                        <a  class="sidenav-item-link" href="#">
                          <i class="mdi mdi-account-plus"></i>
                         <span> Add Store</span>
                        </a>
                      </li>
                  </li>
                  <li class="has-sub  expand">
                    <a  class="sidenav-item-link" href="logout">
                      <i class="mdi mdi-logout"></i>
                     <span> Logout</span>
                    </a>
                  </li>
              </ul>


              <!-- End side bar -->
            </div>

            <hr class="separator" />

            <div class="sidebar-footer">
              <div class="sidebar-footer-content">
                <h6 class="text-uppercase">
                  Total Customers <span class="float-right">40%</span>
                </h6>
                <div class="progress progress-xs">
                  <div
                    class="progress-bar active"
                    style="width: 40%;"
                    role="progressbar"
                  ></div>
                </div>
                <h6 class="text-uppercase">
                  Total Stores <span class="float-right">65%</span>
                </h6>
                <div class="progress progress-xs">
                  <div
                    class="progress-bar progress-bar-warning"
                    style="width: 65%;"
                    role="progressbar"
                  ></div>
                </div>
              </div>
            </div>
          </div>
        </aside>

      <!-- Completee end of sidebar -->

      <div class="page-wrapper">
             <!-- Header -->
             @include('admin/header')
          <!-- Header End here -->
       

        <div class="content-wrapper">
          <div class="content">						 
                  <!-- Top Statistics -->
                  <div class="container">
                  <div class="row">
                  <h2 class="col-lg-12 text-center">CREATE NEW STORE</h2> </div>
                  @if(session()->get('msg'))
    <div  style="color:white;background:red;">{{session()->get('msg')}}</div>
    @endif
        <hr>
    <br>
  <form action="/admin/NewStore" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="row">
    <div class="form-group col-lg-6">
      <label for="store">Store Name:</label>
      <input type="text" class="form-control" id="store" placeholder="Enter Store Name" name="store">
    </div>
    <div class="form-group col-lg-6">
      <label for="scode">Store Code:</label>
      <input type="Number" class="form-control" id="scode" placeholder="Enter Store Code" name="store_code">
    </div>
    </div>
    <div class="row">
    <div class="form-group col-lg-6">
      <label for="seller">Seller Name:</label>
      <input type="text" class="form-control" id="seller" placeholder="Enter Seller Name" name="seller">
    </div>
    <div class="form-group col-lg-6">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
    </div>
    </div>
    <div class="row">
    <div class="form-group col-lg-6">
      <label for="phone">Phone:</label>
      <input type="Number" class="form-control" id="phone" placeholder="Enter Phone No" name="phone">
    </div>
    <div class="form-group col-lg-6">
      <label for="Password">Password:</label>
      <input type="password" class="form-control" id="Password" placeholder="Enter Password" name="password">
    </div>
    </div>
    <div class="row">
    <div class="form-group col-lg-6">
    <label for="forimage" style="font-weight: 600;">Image:</label>
            <input type="file" class="form-control" id="forimage" accept="image/"name="image" required>
    </div>
   
    </div>
    <div class="col-lg-12 text-center"> <button type="submit" class="btn btn-primary pl-5 pr-5">Create Store</button></div>
   
  </form>
</div>
        </div>
    </div>

    <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('assets/plugins/slimscrollbar/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('assets/plugins/charts/Chart.min.js')}}"></script>
<script src="{{asset('assets/js/sleek.js')}}"></script>
<script src="{{asset('assets/js/chart.js')}}"></script>

  </body>
</html>
