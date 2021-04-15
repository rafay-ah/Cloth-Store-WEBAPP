@include('customer/header')
<!-- ********* Header Part ********** -->

<div class="container-fluid" style="height: 800px;">
    <img src="{{asset('assets2/imgs/hannah-morgan-ycVFts5Ma4s-unsplash.jpg')}}" alt="" style="width: 1350px; height: 600px; margin-left: -15px;">
</div>


<div class="container card shadow" style="margin-top: -10vh;">
    <div class="row">
        <div class="col-lg-12 text-center pt-3">
            <h2 style="font-weight: 800; font-family: sans-serif;">{{session('pname')}}</h2>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 pt-5 pb-5 text-center">
            <img class="shadow-lg rounded-lg" src="{{asset('uploads')}}/{{session('image')}}" alt="" style="width: 50vh; margin-top: -5vh;">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 p-4 dropdown">
        <form action="/customer/Addtocart" method="POST">
        @csrf
        <input type="text" hidden value="{{session('myid')}}" name="id">
        <input type="text" hidden value="{{session('pname')}}" name="name">
            <h5>Size AND Color:</h5>
            <select class="form-control" name="menu">
             @foreach($collection as $item)   
                <option>{{$item->Size}} &nbsp&nbsp , &nbsp&nbsp {{$item->Color}}</option>
             @endforeach
            </select>              
            <!-- <h5 style="margin-top: 3vh;">Color:</h5>
            <select class="form-control">
                <option>Maroon</option>
                <option>Red</option>
                <option>Green</option>
                <option>Black</option>
                <option>White</option>
            </select> 
         -->
            <div class="row" style="margin-top: 5vh;">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <h5>Price:</h5> 
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <h5 style="padding-left: 30vh;">{{session('price')}}$</h5>
                </div>
            </div>
            <hr>

            <button type="submit" class="btn btn-dark btn-block shadow-lg" style="color: white; margin-top: 7vh; margin-bottom: 5vh;">Save To Cart</button>
            </form>
        </div>
    </div>
</div>


@include('customer/footer')