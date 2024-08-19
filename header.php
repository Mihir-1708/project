<?php
session_start();
require_once "connection.php";
$cart = [];
$products = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cartbtn'])) {
  $data = $cart_tbl->find();
  foreach ($data as $document) {
  $cart[]=json_decode(json_encode($document), true);
  }
}
$_SESSION['cart']=$cart;
function getCartItemCount() {
  if(isset($_SESSION['cart']))
  {
    return count($_SESSION['cart']);
  }
  else
  {
    return 0;
  }
}
$cart_items=$_SESSION['cart'];
if (!empty($cart_items)) {
  // Extract product IDs from cart items
  $cproduct_ids = array_column($cart_items, 'pid');

  // Convert product IDs to MongoDB ObjectId instances
  $cobject_ids = array_map(function($id) {
      return new MongoDB\BSON\ObjectId($id);
  }, $cproduct_ids);

  // Fetch product details for these IDs
  $cproduct_data = $product_tbl->find(['_id' => ['$in' => $cobject_ids]]);
  
  // Convert MongoDB cursor to array
  $cartproducts = iterator_to_array($cproduct_data);
}
// echo "<pre>";
// print_r($cartproducts);
// echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Glowing - Reveal The Beauty of Skin</title> 
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
 

  
	<link rel="shortcut icon" href="./favicon.svg">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
 
  <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  
	<link rel="stylesheet" href="style.css">
		
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


<body>
<header class="h">
    <div class="h-top" data-header>
      <div class="conta">

        <button class="nav-open-b" aria-label="open menu" data-nav-toggler>
          <span class="line line-1"></span>
          <span class="line line-2"></span>
          <span class="line line-3"></span>
        </button>

        <div class="input-wrapper" style="margin-top: -20px;">
          <input type="search" name="search" placeholder="Search product" class="search-field">
          <button class="search-submit" aria-label="search">
            <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
          </button>
        </div>

        <a href="index.php" class="logo">
          <img src="./assets/images/logo.png" width="179" height="26" alt="Glowing">
        </a>
        
     <!-- cart section start -->
  
     <form id="cartForm" method="post" action="">
     <div class="h-actions">		
  <button class="h-action-b" aria-label="cart item" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart" name="cartbtn" type="submit">
    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
    <span class="b-badge"><?php echo getCartItemCount(); ?></span>
  </button>
  <?php

?>
 
 <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasCart" aria-labelledby="offcanvasCartLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasCartLabel">Cart</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <?php if (empty($cartproducts)): ?>
        <p>Your cart is empty.</p>
      <?php else: ?>
        <ul class="list-group">
          <?php foreach ($cartproducts as $index => $item): ?>
            <div class="container">
  <div class="row">
    <div class="col mt-4">
      <div class="card card-1 listcard">
         
        <img class="logo1" src="assets/images/l1.jpg" height="50px" width="50px">
        <h3 class="head3"><?php echo $item['pname']?><strong class="s3">$ <?php echo $item['price']?></strong>
        <div class="qty-container">
        <button class="qty-btn" onclick="decreaseQty('<?php echo $index; ?>')">-</button>
        <input type="text" class="qty-input" id="qty-<?php echo $index; ?>" value="1" readonly>
        <button class="qty-btn" onclick="increaseQty('<?php echo $index; ?>')">+</button>
</div>
          <a href="#" class="text-dark dismis1"><i class="fa fa-times"></i></a>
       </h3>
        
      </div>
    </div>
</div>
</div> 
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    </div>
  </div>
          </form>
		<a href="log.php">	
          <button class="h-action-b" aria-label="user">
            <ion-icon name="person-outline" aria-hidden="true" aria-hidden="true"></ion-icon>
          </button>
		  </a>
        </div>

        <nav class="n">
          <ul class="n-list">

            <li>
              <a href="index.php" class="n-l link ha" style="text-decoration: none;">Home</a>
            </li>

            <li>
              <a href="shop.php" class="n-l ha" style="text-decoration: none;">Shop all</a>
            </li>

            <li>
              <a href="skin.php" class="n-l ha" style="text-decoration: none;">Skin care</a>
            </li>

            <li>
              <a href="brand.php" class="n-l ha" style="text-decoration: none;">Brands</a>
            </li>

            <li>
              <a href="blog.php" class="n-l ha" style="text-decoration: none;">Blog</a>
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
 
    <script>
    function decreaseQty(index) {
    var qty = document.getElementById('qty-' + index);
    if (qty.value > 1) {
        qty.value--;
    }
}

function increaseQty(index) {
    var qty = document.getElementById('qty-' + index);
    qty.value++;
}
    //for preventing cart form reload
    document.getElementById('cartForm').addEventListener('submit', function(event) {
    event.preventDefault(); 
    const form = event.target;
    const formData = new FormData(form);
  });
</script>
