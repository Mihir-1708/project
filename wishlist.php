<form id="wishForm" method="post" action="">
  <div class="h-actions">		  
  <button class="h-action-b" aria-label="List item" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWishlist" aria-controls="offcanvasWishlist" name="wishbtn" type="submit">
    <i class="fa fa-heart-o" aria-hidden="true"></i>
    <span class="b-badge"><?php //echo getWishListCount(); ?></span>
  </button>

 
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasWishlist" aria-labelledby="offcanvasWishlistLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasWishlistLabel">Wish List</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
    <?php //if (empty($listproducts)): ?>
        <p>Your Wish List is empty.</p>
      <?php //else: ?>
        <ul class="list-group">
          <?php //foreach ($listproducts as $item): ?>
            <div class="container">
  <div class="row">
    <div class="col">
      <div class="card card-1 listcard">
         
        <img class="logo1" src="assets/images/l1.jpg" height="50px" width="50px">
        <h3 class="head3"><?php// echo $item['pname']?><strong class="s3">$ <?php echo $item['price']?></strong>
        <span class="stockc"><img src="assets/images/gicon.png" height="15px" width="15px" style="display: ruby;"></span>
        <button class="h-action-b" style=" display:inline-block;margin-left: 5px;font-size:25px" aria-label="cart item" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
    <span class="b-badge"><?php //echo getCartItemCount(); ?></span>
  </button>
    </button>
    <a href="#" class="text-dark dismis1" style="padding-left: 12px;"><i class="fa fa-times"></i></a>
  </h3>
        
      </div>
    </div>
</div>
</div>

          <?php //endforeach; ?>
        </ul>
      <?php //endif; ?>
    </div>
  </div>

          </form>

          <?php
          // filling wishlist
          if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['wishbtn'])) {
            $listdata = $wishlist_tbl->find();
            foreach ($listdata as $listdocument) {
            $wish[]=json_decode(json_encode($listdocument), true);
            }
          }
          $_SESSION['wish']=$wish;
          print_r($_SESSION['wish']);
          function getWishListCount() {
            if(isset($_SESSION['wish']))
            {
              return count($_SESSION['wish']);
            }
            else
            {
              return 0;
            }
          }
          
          $list_items=$_SESSION['wish'];
          if (!empty($list_items)) {
            // Extract product IDs from cart items
            $product_ids = array_column($list_items, 'pid');
          
            // Convert product IDs to MongoDB ObjectId instances
            $object_ids = array_map(function($id) {
                return new MongoDB\BSON\ObjectId($id);
            }, $product_ids);
          
            // Fetch product details for these IDs
            $product_data = $product_tbl->find(['_id' => ['$in' => $object_ids]]);
            
            // Convert MongoDB cursor to array
            $listproducts = iterator_to_array($product_data);
          }
          ?>