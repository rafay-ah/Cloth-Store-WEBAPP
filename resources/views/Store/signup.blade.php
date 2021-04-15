<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v2 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{asset('assets2/storecard.css')}}">
	</head>

	<body>
		<div class="wrapper" style="background-image: url('{{asset('assets2/imgs/imag1.jpeg')}}');">
			<div class="inner">
				<form action="/store/Registered" method="POST" enctype="multipart/form-data">
                @csrf
                    <h3>Store</h3>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Store Name:</label>
							<input type="text" class="form-control" placeholder="Enter Store Name" name="store" required>
						</div>
						<div class="form-wrapper">
							<label for="">Seller Name:</label>
							<input type="text" class="form-control" placeholder="Enter seller name" name="seller" required>
						</div>
					</div>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Store Code:</label>
							<input type="number" class="form-control" placeholder="Enter store code" name="store_code" required>
						</div>
						<div class="form-wrapper">
							<label for="">Phone No:</label>
							<input type="number" class="form-control" placeholder="Enter phone no" name="phone" required>
						</div>
					</div>
					<div class="form-wrapper">
						<label for="">Email:</label>
						<input type="text" class="form-control" placeholder="Enter mail" name="email" required>
					</div>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Password:</label>
							<input type="password" class="form-control" placeholder="Enter Password" name="password">
						</div>
						<div class="form-wrapper">
							<label for="">Store logo:</label>
							<input type="file" class="form-control" id="forimage" accept="image/"name="image" required>
						</div>
					</div>
                    <div class="col-lg-12 text-center"> <button type="submit" class="btn btn-primary pl-5 pr-5">Register Now</button>
                    
                    </div>
				</form>
                <p>Don't have an account yet ?
                      <a class="text-blue" href="login">Login</a>
                    </p>
			</div>
		</div>
		
	</body>
</html>