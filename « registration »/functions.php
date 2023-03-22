<?php
// Get the amount of items in the shopping cart, this will be displayed in the header.
$num_items_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
?>
<i class="fas fa-shopping-cart"></i>
<span>$num_items_in_cart</span>