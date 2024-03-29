<!DOCTYPE html>
<html lang="en">
<head>
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title></title>

  <!-- GOOGLE FONTS -->
  <link href="{{asset('https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500')}}" rel="stylesheet"/>
  <link href="{{asset('https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css')}}" rel="stylesheet" />


  <link id="sleek-css" rel="stylesheet" href="{{asset('assets/css/sleek.css')}}" />

  <!-- FAVICON -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="shortcut icon" />


</head>

</head>
  <body class="bg-light-gray" id="body">
          <div class="container d-flex flex-column justify-content-between vh-100">
          <div class="row justify-content-center mt-5">
            <div class="col-xl-5 col-lg-6 col-md-10">
            @if(session()->get('msg'))
    <div  style="color:white;background:red;">{{session()->get('msg')}}</div>
    @endif
              <div class="card">
                <div class="card-header bg-primary">
                  <div class="app-brand">
                    <a href="index">
                      <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30"
                        height="33" viewBox="0 0 30 33">
                        <g fill="none" fill-rule="evenodd">
                          <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                          <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                        </g>
                      </svg>
                      <span class="brand-name">Admin Dashboard</span>
                    </a>
                  </div>
                </div>
                <div class="card-body p-5">
                  <h4 class="text-dark mb-5">Sign Up</h4>
                  <form action="/Signup" method="POST">
                  @csrf
                    <div class="row">
                      <div class="form-group col-md-12 mb-4">
                        <input type="text" class="form-control input-lg" id="name" aria-describedby="nameHelp" placeholder="Name" name="username">
                      </div>
                      <div class="form-group col-md-12 mb-4">
                        <input type="email" class="form-control input-lg" id="email" aria-describedby="emailHelp" placeholder="User Email" name="email">
                      </div>
                      <div class="form-group col-md-12 ">
                        <input type="password" class="form-control input-lg" id="password" placeholder="Password" name="password">
                      </div>
                   
                      
                        <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">Sign Up</button>
                        <p>Already have an account?
                          <a  class="text-blue" href="login">Sign In</a>
                        </p>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
</body>
</html>