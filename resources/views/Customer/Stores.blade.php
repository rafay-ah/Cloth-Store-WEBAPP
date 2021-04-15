@include('customer/header')
<!-- ********* Header Part ********** -->

<div class="container-fluid" style="height: 800px;">
    <img src="{{asset('assets2/imgs/hannah-morgan-ycVFts5Ma4s-unsplash.jpg')}}" alt="" style="width: 1350px; height: 600px; margin-left: -15px;">
</div>
@if (count($collection) > 0)
@foreach($collection as $item)
    
    <div class="container card shadow" style="margin-top: -10vh;margin-bottom: 90px;;">
        <div class="row">
            <div class="col-lg-12 text-center pt-3">
                <h2 style="font-weight: 800; font-family: sans-serif;">{{$item->Store_Name}}</h2>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-2 col-md-6 col-sm-12 pt-5 text-center">
                <img class="shadow-lg" src="{{asset('uploads')}}/{{$item->image}}" alt="" style="width: 25vh; border-radius: 20vh;">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 p-4">
                <h5>Seller:   {{$item->Seller_Name}}</h5>
                <hr>
                <h5>: </h5>
                <hr>
                <h5>Phone: {{$item->Phone}}</h5>
                <hr>
                <h5>Email: {{$item->Email}}</h5>
                <hr>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
            <a href={{"http://127.0.0.1:8000/customer/showproduct/$item->id"}}>  <button type="button" class="btn btn-dark btn-block shadow-lg" style="color: white; margin-top: 10vh; margin-bottom: 5vh;">Visit Store</button></a>  
            </div>
        </div>
    </div>
  
@endforeach
@else
<div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center p-4">
                <h4>Stores Are Not Available! </h4>
            </div>
        </div>
@endif
@include('customer/footer')