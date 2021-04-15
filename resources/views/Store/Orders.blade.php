@include('store/header')
<div class="container text-center "style="margin-top:120px;">
@if(count($collection))
@foreach($collection as $item)
<div class="row p-3  shadow" style="margin-top:40px;">
        <div class="col-lg-6 col-md-6 col-sm-12 text-center">
            <h1 >Product Name:{{$item->Product_Name}}</h1>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 text-center">
         <a href={{"http://127.0.0.1:8000/store/ShowOrder/$item->id"}}> <button class="btn btn-primary">Check Order</button></a>  
        </div>
        </div>
@endforeach
@endif;
    </div>
</body>
</html>
