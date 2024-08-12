
<html>
<?php
	include 'header.php';
?>
	<head>
	<link rel="shortcut icon" href="./favicon.svg">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	</head>
		
	<body>
	<br>
	<section class="h-100 h-custom" style="background-color: white;">
	  
	  <div class="container py-5 h-100">
		
		<div class="row d-flex justify-content-center align-items-center h-100">
		  <div class="col-12">
			<div class="card card-registration card-registration-2" style="border-radius: 15px;">
			  <div class="card-body p-0">
				<div class="row g-0">
				  <div class="col-lg-8">
					<div class="p-5">
					  <div class="d-flex justify-content-between align-items-center mb-5">
						<h1 class="fw-bold mb-0">Shopping Cart</h1>
						
					  </div>
					  <hr class="my-4">

					  <div class="row mb-4 d-flex justify-content-between align-items-center">
						<div class="col-md-2 col-lg-2 col-xl-2">
						  <img
							src="./assets/images/l1.jpg"
							class="img-fluid rounded-3" alt="Cotton T-shirt">
						</div>
						<div class="col-md-3 col-lg-3 col-xl-3">
						  <h6 class="text-muted">Lipstick</h6>
						  <h6 class="mb-0">Red</h6>
						</div>
						<div class="col-md-3 col-lg-3 col-xl-2 d-flex">
						  <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
							onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
							<i class="fa fa-minus"></i>
						  </button>

						  <input id="form1" min="0" name="quantity" value="1" type="number"
							class="form-control form-control-sm" style="width: 70;">

						  <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
							onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
							<i class="fa fa-plus"></i>
						  </button>
						</div>
						<div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
						  <h6 class="mb-0">€ 44.00</h6>
						</div>
						<div class="col-md-1 col-lg-1 col-xl-1 text-end">
						  <a href="#!" class="text-muted"><i class="fa fa-times"></i></a>
						</div>
					  </div>

					  <hr class="my-4">
					  
					  
					  
					  <div class="row mb-4 d-flex justify-content-between align-items-center">
						<div class="col-md-2 col-lg-2 col-xl-2">
						  <img
							src="./assets/images/l1.jpg"
							class="img-fluid rounded-3" alt="Cotton T-shirt">
						</div>
						<div class="col-md-3 col-lg-3 col-xl-3">
						  <h6 class="text-muted">Lipstick</h6>
						  <h6 class="mb-0">Red</h6>
						</div>
						<div class="col-md-3 col-lg-3 col-xl-2 d-flex">
						  <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
							onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
							<i class="fa fa-minus"></i>
						  </button>

						  <input id="form1" min="0" name="quantity" value="1" type="number"
							class="form-control form-control-sm" style="width: 70;">

						  <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
							onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
							<i class="fa fa-plus"></i>
						  </button>
						</div>
						<div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
						  <h6 class="mb-0">€ 44.00</h6>
						</div>
						<div class="col-md-1 col-lg-1 col-xl-1 text-end">
						  <a href="#!" class="text-muted"><i class="fa fa-times"></i></a>
						</div>
					  </div>

					  <hr class="my-4">


					  <div class="row mb-4 d-flex justify-content-between align-items-center">
						<div class="col-md-2 col-lg-2 col-xl-2">
						  <img
							src="./assets/images/l2.jpg"
							class="img-fluid rounded-3" alt="Cotton T-shirt">
						</div>
						<div class="col-md-3 col-lg-3 col-xl-3">
						  <h6 class="text-muted">Lipstick</h6>
						  <h6 class="mb-0">pink</h6>
						</div>
						<div class="col-md-3 col-lg-3 col-xl-2 d-flex">
						  <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
							onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
							<i class="fa fa-minus"></i>
						  </button>

						  <input id="form1" min="0" name="quantity" value="1" type="number"
							class="form-control form-control-sm"  style="width: 70;">

						  <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
							onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
							<i class="fa fa-plus"></i>
						  </button>
						</div>
						<div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
						  <h6 class="mb-0">€ 44.00</h6>
						</div>
						<div class="col-md-1 col-lg-1 col-xl-1 text-end">
						  <a href="#!" class="text-muted"><i class="fa fa-times"></i></a>
						</div>
					  </div>


					  <hr class="my-4">

					  <div class="pt-5">
						<h6 class="mb-0"><a href="index.php" class="text-body"><i
							  class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
					  </div>
					</div>
				  </div>
				  <div class="col-lg-4 bg-body-tertiary">
					<div class="p-5">
					  <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
					  <hr class="my-4">

					  <div class="d-flex justify-content-between mb-4">
						<h5 class="text-uppercase">items 3</h5>
						<h5>€ 132.00</h5>
					  </div>

					  <h5 class="text-uppercase mb-3">Shipping Fees <br>Rs.40/-</h5>


					  <h5 class="text-uppercase mb-3">Give code</h5>

					  <div class="mb-5">
						<div data-mdb-input-init class="form-outline">
						  <input type="text" id="form3Examplea2" class="form-control form-control-lg" />
						  <label class="form-label" for="form3Examplea2">Enter your code</label>
						</div>
					  </div>

					  <hr class="my-4">

					  <div class="d-flex justify-content-between mb-5">
						<h5 class="text-uppercase">Total price</h5>
						<h5>€ 137.00</h5>
					  </div>

					  <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-block btn-lg"
						data-mdb-ripple-color="dark">Buy</button>

					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	  <br><br><br><br><br><br>
	  <br><br><br><br><br><br>
	  <br><br><br><br><br><br>
	  
	</section>
	</body>
</html>
<?php
	include 'footer.php';
?>