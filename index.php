<?php
	include 'header.php';
?>
	
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Glowing - Reveal The Beauty of Skin</title>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
 
</head>

  
  <main>
    <article>

	<section class="section hero" id="home" aria-label="hero" data-section>
        <div class="conta">
		
             <div class="hero-card has-bg-image" style="background-image: url('./assets/images/hero-banner-1.jpg')">

                <div class="card-content">

                  <h1 class="h1 hero-title">
                    Reveal The <br>
                    Beauty of Skin
                  </h1>

                  <p class="hero-text">
                    Made using clean, non-toxic ingredients, our products are designed for everyone.
                  </p>

                  <p class="price">Starting at $7.99</p>

                  <a href="#" class="b b-primary">Shop Now</a>

                </div>

              </div>
        </div>
      </section>


      <!-- 
        - #COLLECTION
      -->

      <section class="section collection" id="collection" aria-label="collection" data-section>
        <div class="conta">

          <ul class="collection-list">

            <li>
              <div class="collection-card has-before hover:shine">

                <h2 class="h2 card-title">Monson Collection</h2>

                <p class="card-text">Starting at $700</p>

                <a href="#" class="b-link">
                  <span class="span">Shop Now</span>

                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

                <div class="has-bg-image" style="background-image: url('./assets/images/collection-1.jpg')"></div>

              </div>
            </li>

            <li>
              <div class="collection-card has-before hover:shine">

                <h2 class="h2 card-title">What’s New?</h2>

                <p class="card-text">Get the glow</p>

                <a href="#" class="b-link">
                  <span class="span">Discover Now</span>

                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

                <div class="has-bg-image" style="background-image: url('./assets/images/collection-2.jpg')"></div>

              </div>
            </li>

            <li>
              <div class="collection-card has-before hover:shine">

                <h2 class="h2 card-title">Buy 1 Get 1</h2>

                <p class="card-text">Starting at $7.99</p>

                <a href="#" class="b-link">
                  <span class="span">Discover Now</span>

                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

                <div class="has-bg-image" style="background-image: url('./assets/images/collection-3.jpg')"></div>

              </div>
            </li>

          </ul>

        </div>
      </section>
      <!-- 
        - #SHOP
      -->

      <section class="section shop" id="shop" aria-label="shop" data-section>
        <div class="conta">

          <div class="title-wrapper">
            <h2 class="h2 section-title">Our Mackup Bestsellers</h2>

            <a href="shop.php" class="b-link">
              <span class="span">Shop All Products</span>

              <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
            </a>
          </div>

          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <div class="shop-card">

                <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                  <img src="./assets/images/a5.jpg" width="540" height="720" loading="lazy"
                    alt="Facial cleanser" class="img-cover">

                  <span class="badge" aria-label="20% off">-20%</span>

                  <div class="card-actions">

                    <button class="action-b" aria-label="add to cart">
                      <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </button>

                    <button class="action-b" aria-label="add to whishlist">
                       <i class="fa fa-heart-o" style="font-size:23px;"></i>
                    </button>

                    <button class="action-b" aria-label="compare">
                     <i class="fa fa-credit-card" aria-hidden="true"></i>
                    </button>

                  </div>
                </div>

                <div class="card-content">

                  <div class="price">
                    <del class="del">$39.00</del>

                    <span class="span">$29.00</span>
                  </div>

                  <h3>
                    <a href="#" class="card-title">Luxe Velvet Lipstick</a>
                  </h3>

                  <div class="card-rating">

                    <div class="rating-wrapper" aria-label="5 start rating">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <p class="rating-text">5170 reviews</p>

                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="shop-card">

                <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                  <img src="./assets/images/a3.jpg" width="540" height="720" loading="lazy"
                    alt="Bio-shroom Rejuvenating Serum" class="img-cover">

                  <div class="card-actions">

                    <button class="action-b" aria-label="add to cart">
                       <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </button>

                    <button class="action-b" aria-label="add to whishlist">
                      <i class="fa fa-heart-o" style="font-size:23px;"></i>
                    </button>

                    <button class="action-b" aria-label="compare">
                       <i class="fa fa-credit-card" aria-hidden="true"></i>
                    </button>

                  </div>
                </div>

                <div class="card-content">

                  <div class="price">
                    <span class="span">$29.00</span>
                  </div>

                  <h3>
                    <a href="#" class="card-title">Satin Fluid Sculpting Makeup</a>
                  </h3>

                  <div class="card-rating">

                    <div class="rating-wrapper" aria-label="5 start rating">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <p class="rating-text">5170 reviews</p>

                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="shop-card">

                <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                  <img src="./assets/images/a1.jpg" width="540" height="720" loading="lazy"
                    alt="Coffee Bean Caffeine Eye Cream" class="img-cover">

                  <div class="card-actions">

                    <button class="action-b" aria-label="add to cart">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-b" aria-label="add to whishlist">
                      <i class="fa fa-heart-o" style="font-size:23px;"></i>
                    </button>

                    <button class="action-b" aria-label="compare">
                       <i class="fa fa-credit-card" aria-hidden="true"></i>
                    </button>

                  </div>
                </div>

                <div class="card-content">

                  <div class="price">
                    <span class="span">$29.00</span>
                  </div>

                  <h3>
                    <a href="#" class="card-title">Multipack Eyeshadow</a>
                  </h3>

                  <div class="card-rating">

                    <div class="rating-wrapper" aria-label="5 start rating">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                    </div>

                    <p class="rating-text">920 reviews</p>

                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="shop-card">

                <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                  <img src="./assets/images/3.jpg" width="540" height="720" loading="lazy"
                    alt="Facial cleanser" class="img-cover">

                  <div class="card-actions">

                    <button class="action-b" aria-label="add to cart">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-b" aria-label="add to whishlist">
                      <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-b" aria-label="compare">
                      <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                    </button>

                  </div>
                </div>

                <div class="card-content">

                  <div class="price">
                    <span class="span">$29.00</span>
                  </div>

                  <h3>
                    <a href="#" class="card-title">Facial cleanser</a>
                  </h3>

                  <div class="card-rating">

                    <div class="rating-wrapper" aria-label="5 start rating">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <p class="rating-text">5170 reviews</p>

                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="shop-card">

                <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                  <img src="./assets/images/a4.jpg" width="540" height="720" loading="lazy"
                    alt="Coffee Bean Caffeine Eye Cream" class="img-cover">

                  <span class="badge" aria-label="20% off">-20%</span>

                  <div class="card-actions">

                    <button class="action-b" aria-label="add to cart">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-b" aria-label="add to whishlist">
                      <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-b" aria-label="compare">
                      <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                    </button>

                  </div>
                </div>

                <div class="card-content">

                  <div class="price">
                    <del class="del">$39.00</del>

                    <span class="span">$29.00</span>
                  </div>

                  <h3>
                    <a href="#" class="card-title">Coffee Bean Caffeine Eye Cream</a>
                  </h3>

                  <div class="card-rating">

                    <div class="rating-wrapper" aria-label="5 start rating">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <p class="rating-text">5170 reviews</p>

                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="shop-card">

                <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                  <img src="./assets/images/8.jpg" width="540" height="720" loading="lazy"
                    alt="Facial cleanser" class="img-cover">

                  <div class="card-actions">

                    <button class="action-b" aria-label="add to cart">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-b" aria-label="add to whishlist">
                      <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-b" aria-label="compare">
                      <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                    </button>

                  </div>
                </div>

                <div class="card-content">

                  <div class="price">
                    <span class="span">$29.00</span>
                  </div>

                  <h3>
                    <a href="#" class="card-title">Facial cleanser</a>
                  </h3>

                  <div class="card-rating">

                    <div class="rating-wrapper" aria-label="5 start rating">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <p class="rating-text">5170 reviews</p>

                  </div>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

      <section class="section shop" id="shop" aria-label="shop" data-section>
        <div class="conta">

          <div class="title-wrapper">
            <h2 class="h2 section-title">Our Skin Care Bestseller</h2>

            <a href="skin.php" class="b-link">
              <span class="span">Shop All Products</span>

              <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
            </a>
          </div>

          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <div class="shop-card">

                <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                  <img src="./assets/images/product-01.jpg" width="540" height="720" loading="lazy"
                    alt="Facial cleanser" class="img-cover">

                  <span class="badge" aria-label="20% off">-20%</span>

                  <div class="card-actions">

                    <button class="action-b" aria-label="add to cart">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-b" aria-label="add to whishlist">
                      <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-b" aria-label="compare">
                      <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                    </button>

                  </div>
                </div>

                <div class="card-content">

                  <div class="price">
                    <del class="del">$20.00</del>

                    <span class="span">$16.00</span>
                  </div>

                  <h3>
                    <a href="#" class="card-title">Black Power Eye Pencil</a>
                  </h3>

                  <div class="card-rating">

                    <div class="rating-wrapper" aria-label="5 start rating">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                      <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                      <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                    </div>

                    <p class="rating-text">5170 reviews</p>

                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="shop-card">

                <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                  <img src="./assets/images/product-08.jpg" width="540" height="720" loading="lazy"
                    alt="Bio-shroom Rejuvenating Serum" class="img-cover">

                  <div class="card-actions">

                    <button class="action-b" aria-label="add to cart">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-b" aria-label="add to whishlist">
                      <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-b" aria-label="compare">
                      <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                    </button>

                  </div>
                </div>

                <div class="card-content">

                  <div class="price">
                    <span class="span">$29.00</span>
                  </div>

                  <h3>
                    <a href="#" class="card-title">Bio-shroom Rejuvenating Serum</a>
                  </h3>

                  <div class="card-rating">

                    <div class="rating-wrapper" aria-label="5 start rating">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <p class="rating-text">5170 reviews</p>

                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="shop-card">

                <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                  <img src="./assets/images/product-05.jpg" width="540" height="720" loading="lazy"
                    alt="Coffee Bean Caffeine Eye Cream" class="img-cover">

                  <div class="card-actions">

                    <button class="action-b" aria-label="add to cart">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-b" aria-label="add to whishlist">
                      <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-b" aria-label="compare">
                      <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                    </button>

                  </div>
                </div>

                <div class="card-content">

                  <div class="price">
                    <span class="span">$29.00</span>
                  </div>

                  <h3>
                    <a href="#" class="card-title">Coffee Bean Caffeine Eye Cream</a>
                  </h3>

                  <div class="card-rating">

                    <div class="rating-wrapper" aria-label="5 start rating">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <p class="rating-text">5170 reviews</p>

                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="shop-card">

                <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                  <img src="./assets/images/product-10.jpg" width="540" height="720" loading="lazy"
                    alt="Facial cleanser" class="img-cover">

                  <div class="card-actions">

                    <button class="action-b" aria-label="add to cart">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-b" aria-label="add to whishlist">
                      <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-b" aria-label="compare">
                      <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                    </button>

                  </div>
                </div>

                <div class="card-content">

                  <div class="price">
                    <span class="span">$29.00</span>
                  </div>

                  <h3>
                    <a href="#" class="card-title">Facial cleanser</a>
                  </h3>

                  <div class="card-rating">

                    <div class="rating-wrapper" aria-label="5 start rating">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <p class="rating-text">5170 reviews</p>

                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="shop-card">

                <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                  <img src="./assets/images/product-02.jpg" width="540" height="720" loading="lazy"
                    alt="Coffee Bean Caffeine Eye Cream" class="img-cover">

                  <span class="badge" aria-label="20% off">-20%</span>

                  <div class="card-actions">

                    <button class="action-b" aria-label="add to cart">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-b" aria-label="add to whishlist">
                      <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-b" aria-label="compare">
                      <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                    </button>

                  </div>
                </div>

                <div class="card-content">

                  <div class="price">
                    <del class="del">$39.00</del>

                    <span class="span">$29.00</span>
                  </div>

                  <h3>
                    <a href="#" class="card-title">Coffee Bean Caffeine Eye Cream</a>
                  </h3>

                  <div class="card-rating">

                    <div class="rating-wrapper" aria-label="5 start rating">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <p class="rating-text">5170 reviews</p>

                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="shop-card">

                <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                  <img src="./assets/images/product-03.jpg" width="540" height="720" loading="lazy"
                    alt="Facial cleanser" class="img-cover">

                  <div class="card-actions">

                    <button class="action-b" aria-label="add to cart">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-b" aria-label="add to whishlist">
                      <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-b" aria-label="compare">
                      <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                    </button>

                  </div>
                </div>

                <div class="card-content">

                  <div class="price">
                    <span class="span">$29.00</span>
                  </div>

                  <h3>
                    <a href="#" class="card-title">Facial cleanser</a>
                  </h3>

                  <div class="card-rating">

                    <div class="rating-wrapper" aria-label="5 start rating">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                    </div>

                    <p class="rating-text">5170 reviews</p>

                  </div>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>
      <!-- 
        - #BANNER
      -->

      <section class="section banner" aria-label="banner" data-section>
        <div class="conta">

          <ul class="banner-list">

            <li>
              <div class="banner-card banner-card-1 has-before hover:shine" >

                <p class="card-subtitle"style="color:white">New Collection</p>

                <h2 class="h2 card-title" style="color:white">Discover Our Autumn Skincare</h2>

                <a href="#" class="b b-secondary" >Explore More</a>

                <div class="has-bg-image" style="background-image: url('./assets/images/12.jpg')"></div>

              </div>
            </li>

            <li>
              <div class="banner-card banner-card-2 has-before hover:shine">

                <h2 class="h2 card-title">25% off Everything</h2>

                <p class="card-text">
                  Makeup with extended range in colors for every human.
                </p>

                <a href="#" class="b b-secondary">Shop Sale</a>

                <div class="has-bg-image" style="background-image: url('./assets/images/hero-banner-2.jpg')"></div>

              </div>
            </li>

          </ul>

        </div>
      </section>
      <!-- 
        - #FEATURE
      -->

      <section class="section feature" aria-label="feature" data-section>
        <div class="conta">

          <h2 class="h2-large section-title">Why Shop with Glowing?</h2>

          <ul class="flex-list">

            <li class="flex-item">
              <div class="feature-card">

                <img src="./assets/images/feature-1.jpg" width="204" height="236" loading="lazy" alt="Guaranteed PURE"
                  class="card-icon">

                <h3 class="h3 card-title">Guaranteed PURE</h3>

                <p class="card-text">
                  All Grace formulations adhere to strict purity standards and will never contain harsh or toxic
                  ingredients
                </p>

              </div>
            </li>

            <li class="flex-item">
              <div class="feature-card">

                <img src="./assets/images/feature-2.jpg" width="204" height="236" loading="lazy"
                  alt="Completely Cruelty-Free" class="card-icon">

                <h3 class="h3 card-title">Completely Cruelty-Free</h3>

                <p class="card-text">
                  All Grace formulations adhere to strict purity standards and will never contain harsh or toxic
                  ingredients
                </p>

              </div>
            </li>

            <li class="flex-item">
              <div class="feature-card">

                <img src="./assets/images/feature-3.jpg" width="204" height="236" loading="lazy"
                  alt="Ingredient Sourcing" class="card-icon">

                <h3 class="h3 card-title">Ingredient Sourcing</h3>

                <p class="card-text">
                  All Grace formulations adhere to strict purity standards and will never contain harsh or toxic
                  ingredients
                </p>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #OFFER
       -->
	   
      <section class="section-special bg-fixed section offer" style="background-image: url(./assets/images/hero-banner-3.jpg);">
        <div class="conta">
          <div class="offer-content">
			<br><br><br>
            <p class="offer-subtitle">
              <span class="span">Special Offer</span>

              <span class="badge" aria-label="20% off">-20%</span>
            </p>

            <h2 class="h2-large section-title">Mountain Pine Bath Oil</h2>

            <p class="section-text">
              Made using clean, non-toxic ingredients, our products are designed for everyone.
            </p>

  <div class="card-actions">

            <div class="countdown">
			<p id="demo" class="time" aria-label="days"></p>
			</div>
			
            <a href="#" class="b b-primary">Get Only $39.00</a>
			<br><br><br>
          </div>

        </div>
      </section>
       
	</article>
  </main>
	<?php  
		 include 'footer.php';
	?>