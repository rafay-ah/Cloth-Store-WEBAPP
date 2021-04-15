<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Customer Part</title>
<link href="{{asset('assets/img/favicon.png')}}" rel="shortcut icon" />
<link rel="stylesheet" href="{{asset('assets2/hstyle.css')}}">
<script src="{{asset('assets2/script.js')}}"></script>
<link rel="stylesheet" href="{{asset('assets2/foorStyle.css')}}">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- ******************* -->
    <!-- 
  Bootstrap docs: https://getbootstrap.com/docs
-->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"> -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
<!-- ******************* -->

<!-- Responsive CSS -->
<link rel="stylesheet" href="{{asset('assets2/responsive.css')}}">
<style>
    body{
        overflow-x: hidden;
        font-family: sans-serif;
    }
    .navbar-nav{
        padding: 0px 15px;
        margin: 0;
    }
    .box1{
        margin-top: -5px;
        height: 120px;
        color: white;
        z-index: 1;
        position: absolute;
        }
        .box2{
            height: 30rem;
            width: 33rem;
            left: 25px;
            top: 280px;
            padding: 50px 90px;
            background-color: white;
            z-index: 1;
            position: absolute;
        }
    .navbar{
            background-color: rgb(253, 237, 240);
            position: fixed;
            width: 100%;
            z-index: 100;
        }
    .nav-item{
        color: black;
        font-weight: 700;
        padding-left: 15px;
    }
    a.nav-item:hover{
        color: orange;
        text-decoration: none;
    }
    .dropdown-item{
        font-weight: 700;
    }
    .dropdown-item:hover{
        color: orange;
    }
    /* header{
        background-size: cover;
        height: 200px;
    } */
    .form-control{
        background-color: transparent;
        outline: none;
        border: none;
        border-bottom: 1px solid #c4c0c0;
    }
    .form-control::placeholder{
        color: black;
    }
    .col.btn{
        outline: none;
        border: none;
    }
    .btn{
        font-weight: bold;
        color: rgb(56, 56, 56);
    }
    .btn:hover{
        color: orange;
        border-bottom: 1px solid orange;
    }
    #secondmenu{
        z-index: -4;
        display: none;
    }
    #wear1:hover #secondmenu{
        z-index: 100;
        display: block;
    }
    .card-text{
        color: maroon;
        font-weight: 600;
    }
</style>
</head>
<body>

   <div class="bar1 row">
</div>
<div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-light">
        <a href="#" class="navbar-brand"><img src="{{asset('assets2/imgs/logo.PNG')}}" alt="" style="height: 80px;"></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="http://127.0.0.1:8000/index" class="nav-item active">Home</a>
                <a href="http://127.0.0.1:8000/customer/Stores_show" class="nav-item">Stores</a>
                <a href="http://127.0.0.1:8000/customer/products" class="nav-item">Product</a>
                <a href="http://127.0.0.1:8000/customer/store_cartlist" class="nav-item">Cart</a>
         
            </div>

            <div class="navbar-nav">
                <div class="drop1 dropdown">
                <a href="#" class="nav-item  " data-toggle="dropdown">My Account</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Profile</a>
                    
                            <hr class="separator">
                        <a href="http://127.0.0.1:8000/customer/logout" class="dropdown-item">logout</a>
                       
                    </div>
                </div>
                
                <a href="http://127.0.0.1:8000/customer/store_cartlist" class="nav-item"><img src="{{asset('assets2/imgs/shopping-bag.png')}}" alt="" style="width: 35px; height: 35px;"></a>
            </div>
        </div>
    </nav>
</div>
