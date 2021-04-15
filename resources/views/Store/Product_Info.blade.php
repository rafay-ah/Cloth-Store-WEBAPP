<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Layout</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        body{
            background-image: url(imgs/registration-form-2.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            overflow-x: hidden;
            align-items: center;
            width: auto;
        }
        
        .container{
            width: 80vh;
            height: 63vh;
            margin-top: 25vh;
            margin-left: 60vh;
            background: rgba(0, 0, 0, 0.2);
            border-radius: 1vh;
        }
        h5
        {
            font-weight: 700;
        }
        
    </style>
</head>
<body>
    <div class="container shadow  p-4" >
        <h2 class="text-justify" style="padding-left: 70px;">Product Information</h2>
        <div class="col">
    <form action="/store/productinformation" method="POST">
    @csrf
        <div class="form-group col-lg-12">
            <input type="text" value="{{$data}}" hidden name="myproduct">
                <label for="seller">Color</label>
                <select class="form-control" name="color" required>
                     <option>SkyBlue</option>
                    <option>Black</option>
                    <option>Red</option>
                    <option>White</option>
                    <option>Brown</option>
                    <option>Yellow</option>
                </select>
            </div>
            <div class="form-group col-lg-12">
                <label for="seller">Size</label>
                <select class="form-control" name="size" required>
                <option>4</option>
                    <option>8</option>
                    <option>12</option>
                    <option>16</option>
                    <option>20</option>
                    <option>xxl</option>
                     <!-- <option>xs</option>
                    <option>s</option>
                    <option>m</option>
                    <option>l</option>
                    <option>xl</option>
                    <option>xxl</option> -->
                </select>
            </div>
            <div class="form-group col-lg-12">
                <label for="seller">Quantity</label>
                <input type="number" placeholder="Quantity" class="form-control" name="quantity" required>
            </div>
            <a href={{"http://127.0.0.1:8000/store/index"}}>  <button type="button" class="btn btn-dark mt-3  mb-3 mr-3 pl-5 pr-5"><span style="font-weight: 600;">Cancel</span></button></a>
        <button type="submit"  class="btn btn-dark mt-3 mb-3"><span style="font-weight: 600;">Add to collection</span></button>
        </form>
    </div>
        <div class="col">
            
        </div>
    </div>
</body>
</html>