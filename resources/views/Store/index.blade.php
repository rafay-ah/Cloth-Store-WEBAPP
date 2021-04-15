@include('store/header')

<!-- ********* Header Part ********** -->

<div class="container-fluid " style="height: 500px;width:100%;">
    <img src="{{asset('assets2/imgs/hannah-morgan-ycVFts5Ma4s-unsplash.jpg')}}" alt="" style="width:1348px; height: 500px; ">
</div>
<div class="container-fluid" >
    <div class="col" style="text-align: center; padding: 20px 350px; ">
        <h2 style="font-weight: 800;">POPULAR PRODUCTS</h2>
        <hr> 
    </div>
    <!-- @if(session()->get('msg'))
    <div  style="color:white;background:red;">{{session()->get('msg')}}</div>
    @else    -->
<div class="mycontent">
@if(count($collection)>0)
@foreach($collection as $item)
           
            <div  class="flex_item">
                <div class="card card-primary">
                    <div class="card-header">
                    <div class="row ">
                            <div class="col-lg-5 col-md-5 col-sm-6">
                            Title: <span style="color:20px;text-decoration: double;">{{$item->Product_Name}}</span>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-6" > 
                            Company: <span style="color:20px;text-decoration: double;">{{$item->Product_Company}}</span>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-6" > 
                                 <a href={{"http://127.0.0.1:8000/store/product_info/$item->id"}}>  <span class="btn btn-primary text-white" title="More Information">+</span> </a> 
                            </div>
                        </div>
                    </div>
                    <div class="card-body" style="height:300px">
                        <div style="width:100%;height:200px; border:0px solid black;border-radius: 20px;;">
                        <img src="{{asset('uploads')}}/{{$item->image}}" width="100%" height="200px" alt="Image">
                    </div>
                    <h4>Description:</h4>
                    <p class="card-text" style="height:40px;">
                   Size Range:{{$item->Size_Range}} &nbsp&nbsp Total Quantity:{{$item->Total_Quantity}}</p>
                    </div> 
                    <div class="card-footer" style="min-height:50px;">
                        <div class="row">
                            <!-- <div class="col-lg-6 col-md-12 col-sm-12" style="text-align:center;">
                             <a href="#">  <button class="btn btn-success justify" style="width: 100%;">Update</button></a> 
                            </div> -->
                            <div class="col-lg-12 col-md-12 col-sm-12" >
                            <a href={{"Delete/$item->id"}}>  <button class="btn btn-success" style="width: 100%;">Delete</button></a> 
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            
            @endforeach
        @else
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center p-4">
                <h4>Service Not Available! <a href={{"http://127.0.0.1:8000/store/AddProduct"}}>Add New</a></h4>
            </div>
        </div>
        @endif
      </div>
<!-- @endif  -->
</div>

@include('store/footer')
