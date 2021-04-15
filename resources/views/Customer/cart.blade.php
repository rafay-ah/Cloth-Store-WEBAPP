@include('Customer/header')
<div class="container-fluid" style="margin-top:140px;">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 pr-3">
            <div class="row"  style="border:1px solid black;margin:20px;background-color:ivory;">
               @if(count($collection))
               @foreach($collection as $item)
                <div class="col-lg-3 wrapper pt-5 pb-2 pl-5" >
                    <img src="{{asset('assets2/imgs/shopping-bag.png')}}" height="150px"; width="160px">
                </div>
                <div class="col-lg-9 p-5">
                    <label>Name   :{{$item->ProductName}} </label><br>
                    <label>Size and Color :{{$item->Size_and_color}}</label><br>
                    <label>Price   : {{$item->Price}}</label><br>
                    <br>
                    @if($item->checkout==0)
                    <a href={{"http://127.0.0.1:8000/customer/RemoveFromCart/$item->id"}}>Remove From Cart</a>
                    @elseif($item->Delivery==1)
                        Delivered Successfully!<a href={{"http://127.0.0.1:8000/customer/RemoveFromCart/$item->id"}}> Delete</a>
                    @else
                    <a href="#">Already Checked Out</a>
                    @endif
                </div>
                @endforeach
                @endif
            </div>
          
        </div>
            <div class="col-lg-4 col-md-8 col-sm-12">
                    <div>
                        <h5><b>Summary</b></h5>
                    </div>
                    <hr>
                
                    <!-- <form>
                        <p>SHIPPING</p><select>
                            <option class="text-muted">Standard-Delivery- &euro;5.00</option>
                        </select>
                        <p style="padding-top: 4vh;">GIVE CODE</p> <input id="code" placeholder="Enter your code">
                    </form> -->
                    <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                        <!-- <div class="col-lg-8"> <a href="#">TOTAL PRICE</a></div>
                        <div class="col-lg-4 text-right">&euro;
                      
                         137.00</div> -->
                        <div class="col"><a href={{"http://127.0.0.1:8000/customer/chekedout"}}><button class="btn btn-primary" style="width: 100%;;">CHECKOUT</button></a></div>
                    </div> 
                </div>
        </div>
    </div>

</div>
@include('customer/footer')