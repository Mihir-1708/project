<?php
session_start();

// Initialize cart if not already set
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Example cart items (in a real application, you would fetch this from a database)
$cart_items = $_SESSION['cart'];

// Function to get cart item count
function getCartItemCount() {
    return isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Cart Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
      .h-action-b {
        border: none;
        background: none;
        font-size: 1.5rem;
      }
      .b-badge {
        position: relative;
        top: -10px;
        left: -10px;
        background-color: red;
        color: white;
        padding: 0.25em 0.4em;
        border-radius: 50%;
      }
    </style>
  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">

    <!-- Add to Cart Button -->
    <button class="h-action-b" aria-label="cart item" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
      <i class="fa fa-shopping-cart" aria-hidden="true"></i>
      <span class="b-badge"><?php echo getCartItemCount(); ?></span>
    </button>

    <!-- Offcanvas Component -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasRightLabel">Cart</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <!-- Display Cart Items -->
        <?php if (empty($cart_items)): ?>
          <p>Your cart is empty.</p>
        <?php else: ?>
          <ul class="list-group">
            <?php foreach ($cart_items as $item): ?>
              <li class="list-group-item"><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>
      </div>
    </div>

  </body>
</html>
