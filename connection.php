<?php  
//echo phpinfo();
require_once __DIR__ . "/vendor/autoload.php";  
  
$admin_tbl = (new MongoDB\Client)->glowing_db->admin;  
$brand_tbl = (new MongoDB\Client)->glowing_db->brand;  
$product_tbl = (new MongoDB\Client)->glowing_db->product;  
$user_tbl = (new MongoDB\Client)->glowing_db->user;  
$order_tbl = (new MongoDB\Client)->glowing_db->order;  
$order_details_tbl = (new MongoDB\Client)->glowing_db->order_details;  
$cart_tbl = (new MongoDB\Client)->glowing_db->cart;  
$wishlist_tbl = (new MongoDB\Client)->glowing_db->wishlist;  
$category_tbl = (new MongoDB\Client)->glowing_db->category;  

?>