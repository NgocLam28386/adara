<?php 
// include từ bên controllers sang để mình dùng các hàm của nó
include "controllers/c_product.php";
$prd_details = new c_product();
// tạo 1 đối tượng mới trong oop 
$prd_details->product_detail();