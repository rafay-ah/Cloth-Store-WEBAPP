@include('store/header')

<!-- ********* Header Part ********** -->

<div class="container-fluid " style="height: 500px;width:100%;">
    <img src="{{asset('assets2/imgs/hannah-morgan-ycVFts5Ma4s-unsplash.jpg')}}" alt="" style="width:1348px; height: 500px; ">
</div>
<div class="container-fluid" >
  
        <div class="content-wrapper">
          <div class="content">						 
                  <!-- Top Statistics -->
                  <div class="container">
                  <div class="row">
                  <h2 class="col-lg-12 text-center">CREATE NEW Product</h2> </div>
                  @if(session()->get('msg'))
    <div  style="color:white;background:red;">{{session()->get('msg')}}</div>
    @endif
        <hr>
    <br>
  <form action="/store/addnewproduct" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="row">
    <div class="form-group col-lg-6">
      <label for="store">Product Name:</label>
      <input type="text" class="form-control" id="store" placeholder="Product Name" name="productname" required>
    </div>
    <div class="form-group col-lg-6">
      <label for="scode">Company Name:</label>
      <input type="text" class="form-control" id="scode" placeholder="Product Company" name="productcompany" required>
    </div>
  
    </div>
    <div class="row">
    <div class="form-group col-lg-4">
      <label for="seller">Category:</label>
      <select class="form-control" name="category" required>
      <option>T-shirt</option>
      <option>Abaya</option>
      <option>Jeans</option>
      <option>Cloths</option>
      </select>
    </div>
    <div class="form-group col-lg-4">
      <label for="seller">Type:</label>
      <select class="form-control" name="type" required>
      <option>Men</option>
      <option>Women</option>
      <option>kids</option>
      </select>
    </div>
    <div class="form-group col-lg-4">
      <label for="size">Size Range:</label>
      <input type="text" class="form-control" id="size" placeholder="Size Range" name="size" required>
    </div>
    </div>
    <div class="row">
    <div class="form-group col-lg-4">
      <label for="price">Price:</label>
      <input type="number" class="form-control" id="price" placeholder="Price single item" name="price" required>
    </div>
    <div class="form-group col-lg-4">
      <label for="seller">Discount:</label>
      <select class="form-control" name="discount" required>
      <option>Yes</option>
      <option>No</option>
      </select>
    </div>
    <div class="form-group col-lg-4">
      <label for="damount">Discount amount:</label>
      <input type="Number" class="form-control" id="damount" placeholder="Amount" name="discount_amount" >
    </div>
    </div>

    <div class="row">
    <div class="form-group col-lg-4">
      <label for="quantity">Quantity:</label>
      <input type="number" class="form-control" id="quantity" placeholder="Enter Quantity" name="quantity" required>
    </div>
    <div class="form-group col-lg-4">
      <label for="quantity">Product Image:</label>
      <input type="file" class="form-control" id="forimage" accept="image/"name="image" required>
	</div>
    </div>
    </div>
    <div class="col-lg-12 text-center"> <button type="submit" class="btn btn-primary pl-5 pr-5">Create Store</button></div>
   
  </form>
</div>
        </div>
    </div>
    </div>  
</div>

@include('store/footer')
