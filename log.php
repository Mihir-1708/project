<?php
	if(isset($_POST['signupbtn']))
	{
		require_once "connection.php";
		$insertOneResult = $user_tbl->insertOne([  
			'uname' => $_POST['username'],  
			'email' =>  $_POST['useremail'],
			'phone_no' => $_POST['userphno'],  
			'password' => $_POST['pwd'],    
		]);  
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
	<meta name="google-signin-client_id" content="104526183072-irgjqaseobjp9jt02a8u48ar20mpkfte.apps.googleusercontent.com">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" crossorigin="anonymous"/>
	<link rel="stylesheet" href="design.css"/>
	<link rel="shortcut icon" href="./favicon.svg">
	<title>Login | My Website</title>
	<style>
			body {
				background-color: #dcdfc0;
			}
			.btn1
			{
				border-color: black;
			
				box-shadow:  0 4px 6px rgba(138, 109, 59, 0.1), 
					0 10px 20px rgba(138, 109, 59, 0.15), 
					0 20px 40px rgba(138, 109, 59, 0.2); 
			}
			.remember-me {
				display: flex;
				align-items: center;
				margin: 15px 0;
				font-size: 14px;
			}
			.remember-me input[type="checkbox"] {
				margin-right: 8px;
				accent-color:black;
			}

			.remember-me label {
				color:black;
				font-size: 14px;
				cursor: pointer;
				min-inline-size: fit-content;

			}

				.page-header {
					color: #FF4B2B;
					font-size: 50px;
				}
						</style>
		</head>
		<body>

		<div class="container" id="container">
			<div class="form-container sign-up-container">
				<form method="POST" id="signupForm">
				<br><br>
					<h1 style="color:black; font-weight:800; margin-top:35px">SignUp</h1>
					<input type="text" name="username" placeholder="UserName" id="username" required autocomplete="off"/>
					<input type="email" name="useremail" placeholder="Email" id="email" required autocomplete="off"/>
					<input type="text" name="userphno" placeholder="Phone No" id="phno" required autocomplete="off"/>
					<input type="password" name="pwd" placeholder="Password" id="password" required/>
					<input type="password" name="cpwd" placeholder="Confirm Password" id="cpassword" required/>
					<div class="remember-me">	
						<input type="checkbox" id="terms&conditions" name="terms&conditions"/>
						<label for="terms&conditions">I Agree To All Your Terms & Conditions</label>
					</div>
					<button type="submit" name="signupbtn">Register</button> <br><span><a href="index.php"><u>Back to home</u></a></span>
					<br><br><br>
				</form>
			</div>
			<div class="form-container sign-in-container">
				<form method="POST" id="CustomerForm">
					<h1 style="color:black; font-weight:800; margin-top:35px">LogIn</h1>
					
					<div class="social-container">
					</div>
					
					<input type="text" placeholder="UserName" name="user" required autocomplete="off"/>
					<input type="password" placeholder="Password" name="pwd" required/>
					<input type="hidden" name="loginID" value="2" required/>
					<div class="remember-me">	
						<input type="checkbox" id="rememberVendor" name="rememberVendor"/>
						<label for="rememberVendor">Remember me</label>
					</div>
					<button type="submit"><a href="service.php" style="color: white;">Log In</a></button> <br><span><a href="index.php"><u>Back to home</u></a></span>
					<h5 class="page-header" style="display:none;"><center>User Name or Password is Invalid..</center></h5>
				</form>
			</div>
			<div class="overlay-container">
				<div class="overlay">
					<div class="overlay-panel overlay-left">
						<h1>Welcome customer!</h1>
						<p style="color:black ;font-weight: 600;">To keep connected with us please sign up with your personal info</p>
						<p style="color:black ;font-weight: 600;">Already have an account!</p>
						
						<button class="ghost btn1" id="signIn">LogIn</button>
					</div>
					<div class="overlay-panel overlay-right" >
						<h1>Hello, Customer!</h1>
						
						<p style="color:black ;font-weight: 600;">Enter your personal details and start your journey with us</p>
						<p style="color:black ;font-weight: 600;">Dont have an Account!</p>
						<button class="ghost btn1" id="signUp">sign up</button>
					</div>
				</div>
			</div>
		</div>
		<script src="main.js"></script>
		<script src="jquery-1.11.0.min.js"></script>

		<script>
		$('#VendorForm').on('submit', function(event) {
			event.preventDefault();
			var form = $(this);
			$.ajax({
				url: "authentication_old.php", 
				type: "POST",
				data: form.serialize(),
				beforeSend: function() {    
					console.log("Processing...");
				},
				success: function(response) {
					if(response == "OK") {
						window.location.href='dashboard.php';
					} else {
						$(".page-header").show();
					}
				},
				error: function(response) {
					console.log(response);
				}
			});
		});

		$('#CustomerForm').on('submit', function(event) {
			event.preventDefault();
			var form = $(this);
			$.ajax({
				url: "authentication.php", 
				type: "POST",
				data: form.serialize(),
				beforeSend: function() {    
					console.log("Processing...");
				},
				success: function(response) {
					if(response === "OK") {
						window.location.href='customer_dashboard.php';
					} else {
						$(".page-header").show();
					}
				},
				error: function(response) {
					console.log(response);
				}
			});
		});
		</script>

		<script type="text/javascript">
		function onSignIn(googleUser) {
			var profile = googleUser.getBasicProfile();
			if(profile){
				$.ajax({
					type: 'POST',
					url: 'login_pro.php',
					data: {
						id: profile.getId(),
						name: profile.getName(),
						email: profile.getEmail()
					}
				}).done(function(data){
					console.log(data);
					window.location.href = 'customer_dashboard.php';
				}).fail(function() { 
					alert("Posting failed.");
				});
			}
		}
		</script>
	</body>
</html>
