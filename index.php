<?php 
include "controllers/c_home.php";
include "controllers/c_cart.php";
$cart = new c_cart();
$cart->lay_gio_hang();
$home = new c_home();
$home->index();
// $cart->xoa_ve_index();

