
<!DOCTYPE html>
<html lang="en">
<?php
	include 'header.php';
?>
	
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


<body id="top">
	
	  <article>

	<section class="section hero" id="home" aria-label="hero" data-section>
        <div class="container">
			
              <div class="hero-card has-bg-image" style="background-image: url('./assets/images/04.jpg')">
				<br><br><br><br><br><br><br>
			</div>
        </div>
      </section>
  
  <main>

      <section class="section shop" id="shop" aria-label="shop" data-section>
        <div class="container">
			
          <div class="title-wrapper">
            <h2 class="h2 section-title">All Products</h2>
			</div>
		
          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <div class="shop-card">

                <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                  <img src="./assets/images/a1.jpg" width="540" height="720" loading="lazy"
                    alt="Facial cleanser" class="img-cover">

                  <span class="badge" aria-label="20% off">-20%</span>

                  <div class="card-actions">

                    <button class="action-btn" aria-label="add to cart">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="add to whishlist">
                      <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="compare">
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
                  <img src="./assets/images/f1.jpg" width="540" height="720" loading="lazy"
                    alt="Bio-shroom Rejuvenating Serum" class="img-cover">

                  <div class="card-actions">

                    <button class="action-btn" aria-label="add to cart">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="add to whishlist">
                      <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="compare">
                      <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
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
                  <img src="./assets/images/a4.jpg" width="540" height="720" loading="lazy"
                    alt="Coffee Bean Caffeine Eye Cream" class="img-cover">

                  <div class="card-actions">

                    <button class="action-btn" aria-label="add to cart">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="add to whishlist">
                      <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="compare">
                      <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
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
                  <img src="./assets/images/a3.jpg" widproduct-04.jpgth="540" height="720" loading="lazy"
                    alt="Facial cleanser" class="img-cover">

                  <div class="card-actions">

                    <button class="action-btn" aria-label="add to cart">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="add to whishlist">
                      <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="compare">
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
                      <ion-icon name="star" aria-hidden="true"></ion-icon	>
                    </div>

                    <p class="rating-text">5170 reviews</p>

                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="shop-card">

                <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                  <img src="./assets/images/1.jpg" width="540" height="720" loading="lazy"
                    alt="Coffee Bean Caffeine Eye Cream" class="img-cover">

                  <span class="badge" aria-label="20% off">-20%</span>

                  <div class="card-actions">

                    <button class="action-btn" aria-label="add to cart">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="add to whishlist">
                      <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="compare">
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

          </ul>

        </div>
      </section>
      
	  
      <section class="section-special bg-fixed section offer" style="background-image: url(./assets/images/2.jpg);">
        <div class="container">
          <div class="offer-content">
			<br><br><br>
            <p class="offer-subtitle" >
              <span class="span"style="color : white">Special Offer</span>

              <span class="badge" aria-label="20% off"style="color : white">-20%</span>
            </p>

            <h2 class="h2-large section-title" style="color : white">Gloreis Finshing Lipstick</h2>

            <p class="section-text" style="color : white">
              Made using clean, non-toxic ingredients, our products are designed for everyone.
            </p>
			<br><br><br>
          </div>

        </div>
      </section>
       
		
      <section class="section shop" id="shop" aria-label="shop" data-section>
        <div class="container">
          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <div class="shop-card">

                <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                  <img src="./assets/images/a9.jpg" width="540" height="720" loading="lazy"
                    alt="Facial cleanser" class="img-cover">

                  <span class="badge" aria-label="20% off">-20%</span>

                  <div class="card-actions">

                    <button class="action-btn" aria-label="add to cart">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="add to whishlist">
                      <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="compare">
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
                  <img src="./assets/images/a5.jpg" width="540" height="720" loading="lazy"
                    alt="Bio-shroom Rejuvenating Serum" class="img-cover">

                  <div class="card-actions">

                    <button class="action-btn" aria-label="add to cart">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="add to whishlist">
                      <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="compare">
                      <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
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
                  <img src="./assets/images/a10.jpg" width="540" height="720" loading="lazy"
                    alt="Coffee Bean Caffeine Eye Cream" class="img-cover">

                  <div class="card-actions">

                    <button class="action-btn" aria-label="add to cart">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="add to whishlist">
                      <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="compare">
                      <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
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
                  <img src="./assets/images/a11.jpg" widproduct-04.jpgth="540" height="720" loading="lazy"
                    alt="Facial cleanser" class="img-cover">

                  <div class="card-actions">

                    <button class="action-btn" aria-label="add to cart">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="add to whishlist">
                      <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="compare">
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
                      <ion-icon name="star" aria-hidden="true"></ion-icon	>
                    </div>

                    <p class="rating-text">5170 reviews</p>

                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="shop-card">

                <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                  <img src="./assets/images/a13.jpg" width="540" height="720" loading="lazy"
                    alt="Coffee Bean Caffeine Eye Cream" class="img-cover">

                  <span class="badge" aria-label="20% off">-20%</span>

                  <div class="card-actions">

                    <button class="action-btn" aria-label="add to cart">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="add to whishlist">
                      <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="compare">
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

          </ul>

        </div>
      </section>

		
      <section class="section shop" id="shop" aria-label="shop" data-section>
        <div class="container">
          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <div class="shop-card">

                <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                  <img src="./assets/images/e1.jpg" width="540" height="720" loading="lazy"
                    alt="Facial cleanser" class="img-cover">

                  <span class="badge" aria-label="20% off">-20%</span>

                  <div class="card-actions">

                    <button class="action-btn" aria-label="add to cart">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="add to whishlist">
                      <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="compare">
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
                  <img src="./assets/images/e2.jpg" width="540" height="720" loading="lazy"
                    alt="Bio-shroom Rejuvenating Serum" class="img-cover">

                  <div class="card-actions">

                    <button class="action-btn" aria-label="add to cart">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="add to whishlist">
                      <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="compare">
                      <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
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
                  <img src="./assets/images/e3.jpg" width="540" height="720" loading="lazy"
                    alt="Coffee Bean Caffeine Eye Cream" class="img-cover">

                  <div class="card-actions">

                    <button class="action-btn" aria-label="add to cart">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="add to whishlist">
                      <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="compare">
                      <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
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
                  <img src="./assets/images/e4.jpg" widproduct-04.jpgth="540" height="720" loading="lazy"
                    alt="Facial cleanser" class="img-cover">

                  <div class="card-actions">

                    <button class="action-btn" aria-label="add to cart">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="add to whishlist">
                      <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="compare">
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
                      <ion-icon name="star" aria-hidden="true"></ion-icon	>
                    </div>

                    <p class="rating-text">5170 reviews</p>

                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="shop-card">

                <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                  <img src="./assets/images/a7.jpg" width="540" height="720" loading="lazy"
                    alt="Coffee Bean Caffeine Eye Cream" class="img-cover">

                  <span class="badge" aria-label="20% off">-20%</span>

                  <div class="card-actions">

                    <button class="action-btn" aria-label="add to cart">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="add to whishlist">
                      <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="compare">
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

          </ul>

        </div>
      </section>

	</article>
  </main>
	
	<?php  
		 include 'footer.php';
	?>



  <!-- 
        - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="arrow-up" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>