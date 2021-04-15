<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Customer Cart</title>
<link rel="stylesheet" href="{{asset('assets2/hstyle.css')}}">
<script src="{{asset('assets2/script.js')}}"></script>
<link rel="stylesheet" href="{{asset('assets2/foorStyle.css')}}">
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script> -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

<!-- ******************* -->

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet" />
<!-- MDB -->

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
<!-- Responsive CSS -->
<link rel="stylesheet" href="{{asset('assets2/responsive.css')}}">
<link rel="stylesheet" href="{{asset('assets2/card.css')}}">
    <script src="{{asset('assets2/card.js')}}"></script>
<style>

.mycontent{
display:flex;
flex-wrap: wrap;
flex-direction:row;
}
.flex_item
    {
        width:33%;
        padding:20px;
        height:180px;
       margin-bottom:430px;
       margin-top:5px;
    }
    @media (max-width: 1000px) {
        .mycontent {
            flex-wrap: wrap;
            flex-direction: row;

          }
    .flex_item
    {
        width:50%;
        padding:50px;
        margin-bottom:370px;
        height:200px;
        margin-top:10px;
    }
    }
@media (max-width: 900px) {
    .mycontent {
      flex-wrap: wrap;
      flex-direction: row;
    }
    .flex_item
    {
        width:50%;
        padding:50px;
        margin-bottom:420px;
        margin-top:10px;
        height:200px;
    }
    
  }
  @media (max-width: 750px) {
    .mycontent {
      flex-wrap: wrap;
      flex-direction: column;
    }
    .flex_item
    {
        width:100%;
        padding:50px;
        margin-bottom:410px;
        margin-top:10px;
        height:200px;
    }
    
  }
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
            top: 180px;
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
    .rating li{
            display: inline;
        }
        .btn-primary:hover{
            background: chocolate;
        }
        button:hover{
            background: white;
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
                <a href="carts.html" class="nav-item">Cart</a>
                <a href="#" class="nav-item">About</a>
      
                <a href="#" class="nav-item">Contact</a>
            </div>
            <!-- <form class="form-inline " id="hideForm">
                <div class="input-group">                    
                    <input type="text" class="form-control" placeholder="Search products" style="font-weight: 450;">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary" style="background: transparent; color: black; border: none; outline: none; border-bottom: 1px solid #c4c0c0;"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form> -->
            <div class="navbar-nav">
                <div class="drop1 dropdown">
                <a href="#" class="nav-item  " data-toggle="dropdown">My Account</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Profile</a>
                        <a href="#" class="dropdown-item">Login</a>
                            <hr class="separator">
                        <a href="#" class="dropdown-item">logout</a>
                       
                    </div>
                </div>
                <a href="http://127.0.0.1:8000/customer/store_cartlist" class="nav-item"><img src="{{asset('assets2/imgs/shopping-bag.png')}}" alt="" style="width: 35px; height: 35px;"></a>
            </div>
        </div>
    </nav>
</div>

<div class="container-fluid" style="height: 800px;margin-bottom: -100px;">
    <img src="{{asset('assets2/imgs/hannah-morgan-ycVFts5Ma4s-unsplash.jpg')}}" alt="" style="width: 1350px; height: 600px; margin-left: -15px;">
</div>
<div class="container " >
<div class="mycontent">

           @if(count($collection)>0)
    @foreach($collection as $item)
        <div  class="flex_item">
         <div class="card">
        <div class="view zoom overlay">
        <img class="img-fluid w-100" src="{{asset('uploads')}}/{{$item->image}}" alt="Sample" style="height: 60vh;">
            
            <div class="mask">
            <img class="img-fluid w-100"
                src="{{asset('uploads')}}/{{$item->image}}" style="height: 60vh;">
            <div class="mask rgba-black-slight"></div>
            </div>
       
        </div>
        <div class="card-body text-center" style="margin-top: -2vh;">
        <h5>{{$item->Product_Name}}</h5>
      
        <div class="rating ">
            <input type="radio" name="rating" value="5" id="5">
            <label for="5">☆</label>
            <input type="radio" name="rating" value="4" id="4">
            <label for="4">☆</label>
            <input type="radio" name="rating" value="3" id="3">
            <label for="3">☆</label>
            <input type="radio" name="rating" value="2" id="2">
            <label for="2">☆</label>
            <input type="radio" name="rating" value="1" id="1">
            <label for="1">☆</label>
        </div>
        <hr>
        <h6 class="mb-3">
            <span class="text-danger mr-1">{{$item->Price}}$</span>
            @if($item->Discount == True)
            <span class="text-grey"><s>${{$item->Discount_amount}}</s></span>
           @endif

        </h6>

    </div>
        </div>
        @if(session('cemail'))
        
        <div style="width: 300px;">
            <a href={{"http://127.0.0.1:8000/customer/Addcart/$item->id"}}> <button type="button" class="btn btn-primary btn-sm mr-1 mb-2" id="cart" data-mdb-toggle="tooltip" data-mdb-placement="top" title="ADD TO CART">Add to cart
        </button></a> </div>
        @else
        <div style="width: 300px;">
            <a href={{"http://127.0.0.1:8000/customer/login"}}> <button type="button" class="btn btn-primary btn-sm mr-1 mb-2" id="cart" data-mdb-toggle="tooltip" data-mdb-placement="top" title="ADD TO CART">Add to cart 
        </button></a> </div>
        @endif
        
    </div>
    @endforeach
     @else
     <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center p-4">
                <h4>Store Not Available! <a href={{"http://127.0.0.1:8000/admin/Addstore"}}>Add New</a></h4>
            </div>
        </div>
     @endif
</div>
</div>


@include('Customer\footer')