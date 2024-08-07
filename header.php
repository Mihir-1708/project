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
	<link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/logo.png">
  <link rel="preload" as="image" href="./assets/images/hero-banner-1.jpg">
 
	<style>
	   .section-special {
			margin: 100px 0 250px;
		}

		.bg-fixed {
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			background-attachment: fixed;
		}
		
				
		.bg-main {
			background-color: var(--body-bg);
		}

		.special-product-img {
			width: 100%;
			padding-top: 100%;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			margin-bottom: -250px;
		}

		.special-product {
			padding: 0 80px;
		}

		.special-product > * {
			margin-top: 30px;
		}

		.special-product > .special-product-img {
			margin-top: 80px;
		}

		.special-product > span {
			text-transform: uppercase;
		}

		.special-product > p {
			color: var(--text-gray);
		}

		.special-product > h2 {
			font-size: 3rem;
			text-transform: uppercase;
		}
								
</style>

 
</head>



<header class="header">
    <div class="header-top" data-header>
      <div class="container">

        <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
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

        <div class="header-actions">

          <button class="header-action-btn" aria-label="user">
            <ion-icon name="person-outline" aria-hidden="true" aria-hidden="true"></ion-icon>
          </button>

          <!--<button class="header-action-btn" aria-label="favourite item">
            <ion-icon name="star-outline" aria-hidden="true" aria-hidden="true"></ion-icon>
				<span class="btn-badge">0</span> 
           
          </button>-->

          <button class="header-action-btn" aria-label="cart item">
            <ion-icon name="bag-handle-outline" aria-hidden="true" aria-hidden="true"></ion-icon>
				<!--<span class="btn-badge">0</span> -->
          </button>

        </div>

        <nav class="navbar">
          <ul class="navbar-list">

            <li>
              <a href="index.php" class="navbar-link has-after">Home</a>
            </li>

            <li>
              <a href="shop.php" class="navbar-link has-after">Shop all</a>
            </li>

            <li>
              <a href="skin.php" class="navbar-link has-after">Skin care</a>
            </li>

            <li>
              <a href="#offer" class="navbar-link has-after">Offer</a>
            </li>

            <li>
              <a href="#blog" class="navbar-link has-after">Blog</a>
            </li>

          </ul>
        </nav>

      </div>
    </div>

  </header>


  <!-- 
    - #MOBILE NAVBAR
  -->

  <div class="sidebar">
    <div class="mobile-navbar" data-navbar>

      <div class="wrapper">
        <a href="#" class="logo">
          <img src="./assets/images/logo.png" width="179" height="26" alt="Glowing">
        </a>

        <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
        </button>
      </div>

      <ul class="navbar-list">

        <li>
          <a href="index.php" class="navbar-link" data-nav-link>Home</a>
        </li>
		
		<li>
              <a href="shop.php" class="navbar-link has-after">Shop all</a>
         </li>
	
        <li>
          <a href="skin.php" class="navbar-link" data-nav-link>Skin care</a>
        </li>

        <li>
          <a href="#offer" class="navbar-link" data-nav-link>Offer</a>
        </li>

        <li>
          <a href="#blog" class="navbar-link" data-nav-link>Blog</a>
        </li>

      </ul>

    </div>

