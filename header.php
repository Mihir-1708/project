<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Glowing - Reveal The Beauty of Skin</title>
  <!-- 
    - favicon
  -->
	<link rel="shortcut icon" href="./favicon.svg">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
  <!-- 
    - custom css link
  -->
  <!-- 
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  
    - google font link
  -->
  <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- 
    - preload images
  -->
 
	<link rel="stylesheet" href="style.css">
								
</style>
<script>
			// Set the date we're counting down to
			var countDownDate = new Date("Jan 5, 2030 15:37:25").getTime();

			// Update the count down every 1 second
			var x = setInterval(function() {

			  // Get today's date and time
			  var now = new Date().getTime();

			  // Find the distance between now and the count down date
			  var distance = countDownDate - now;

			  // Time calculations for days, hours, minutes and seconds
			  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
			  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

			  // Display the result in the element with id="demo"
			  document.getElementById("demo").innerHTML = hours + "h "
			  + minutes + "m " + seconds + "s ";

			  // If the count down is finished, write some text
			  if (distance < 0) {
				clearInterval(x);
				document.getElementById("demo").innerHTML = "EXPIRED";
			  }
			}, 1000);
			</script>
 
</head>



<header class="h">
    <div class="h-top" data-header>
      <div class="conta">

        <button class="nav-open-b" aria-label="open menu" data-nav-toggler>
          <span class="line line-1"></span>
          <span class="line line-2"></span>
          <span class="line line-3"></span>
        </button>

        <div class="input-wrapper">
          <input type="search" name="search" placeholder="Search product" class="search-field">
          <button class="search-submit" aria-label="search">
            <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
          </button>
        </div>

        <a href="index.php" class="logo">
          <img src="./assets/images/logo.png" width="179" height="26" alt="Glowing">
        </a>

        <div class="h-actions">
		
		<a href='wish.php'>
          <button class="h-action-b" aria-label="favourite item">
		  <i class="fa fa-heart-o" style="font-size:26px;"></i>
				<span class="b-badge">0</span> 
          </button>
			</a>
			
		<a href='add.php'>
          <button class="h-action-b" aria-label="cart item">
             <i class="fa fa-shopping-cart" aria-hidden="true"></i>
				<span class="b-badge">0</span> 
          </button>
		  </a>
		  
		<a href="log.php">	
          <button class="h-action-b" aria-label="user">
            <ion-icon name="person-outline" aria-hidden="true" aria-hidden="true"></ion-icon>
          </button>
		  </a>
        </div>

        <nav class="n">
          <ul class="n-list">

            <li>
              <a href="index.php" class="n-l ha">Home</a>
            </li>

            <li>
              <a href="shop.php" class="n-l ha">Shop all</a>
            </li>

            <li>
              <a href="skin.php" class="n-l ha">Skin care</a>
            </li>

            <li>
              <a href="brand.php" class="n-l ha">Brands</a>
            </li>

            <li>
              <a href="blog.php" class="n-l ha">Blog</a>
            </li>

          </ul>
        </nav>

      </div>
    </div>

  </header>


  <!-- 
    - #MOBILE n
  -->

  <div class="sidebar">
    <div class="mobile-n" data-n>

      <div class="wrapper">
        <a href="#" class="logo">
          <img src="./assets/images/logo.png" width="179" height="26" alt="Glowing">
        </a>

        <button class="nav-close-b" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
        </button>
      </div>

      <ul class="n-list">

        <li>
          <a href="index.php" class="n-l" data-nav-link>Home</a>
        </li>
		
		<li>
              <a href="shop.php" class="n-l ha">Shop all</a>
         </li>
	
        <li>
          <a href="skin.php" class="n-l" data-nav-link>Skin care</a>
        </li>

        <li>
          <a href="brand.php" class="n-l" data-nav-link>Brands</a>
        </li>

        <li>
          <a href="blog.php" class="n-l" data-nav-link>Blog</a>
        </li>

      </ul>

    </div>

