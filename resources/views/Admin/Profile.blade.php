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
                </li>
                <li  class="has-sub  expand" >
                  <a class="sidenav-item-link" href="Seller" >
                    <i class="mdi mdi-account-supervisor"></i>
                    <span class="nav-text">Seller</span> 
                  </a>
                </li>
                <li class="has-sub  expand">
                    <a  class="sidenav-item-link" href="Addstore">
                      <i class="mdi mdi-account-plus"></i>
                     <span> Add Store</span>
                    </a>
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
<div class="content-wrapper" >

<div class="container" style="margin-top:20px;">
@foreach($Profile as $item)
<div class="row d-flex justify-content-center">
    <div class="col-md-10 mt-5 pt-5">
        <div class="row ">
            <div class="col-sm-4 bg-danger rounded-left">
                <div class=" card-block text-center text-white">
                    <i ><img src="{{asset('uploads/man.png')}}"  class="rounded-circle" alt="Cinque Terre" width="200px" height="200px"> </i>
                    <h2 class="font-weight-bold mt-4"><span style="margin-left:20px; text-decoration: double;"> {{$item->Name}}</span></h2>
                 </div>
            </div>
            <div class="col-sm-8 bg-white rounded-right">
                <h2 class="mt-3 text-center">Admin Profile</h2>
                <hr class="badge-primary mt-0 w-25">
          
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <p class="font-weight-bold">Name:  <span style="margin-left:20px;"> {{$item->Name}} </span></p>
                            <h4></h4>
                            <!-- <input type="text" class="form-control" id="fname" placeholder="Father Name" name="fname"> -->
                          </div>
                          <div class="form-group">
                          <p class="font-weight-bold">Email:<span style="margin-left:20px;">{{$item->Email}} </span></p>
                            <h4 class="text-muted"></h4>
                            <!-- <input type="text" class="form-control" id="fname" placeholder="Father Name" name="fname"> -->
                          </div>
                          <div class="form-group">
                            <p class="font-weight-bold">Password:<span style="margin-left:20px;">{{$item->password}}</span></p>
                            <h4 class="text-muted"></h4>
                          
                          </div>
                       
                    </div>
                   
                </div>
               
                <hr class="badge-primary">
               
            </div>
            @endforeach
        </div>
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
