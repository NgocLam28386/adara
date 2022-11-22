<?php 
    session_start();
    if(!isset($_SESSION["cart"])) {
        $_SESSION["cart"] = [];
    }
    class c_cart {
        public function xem_gio_hang() {
            if(isset($_POST["add-cart"])) {
                $id = $_POST["product_id"];
                $name = $_POST["ten-sp"];
                $image = $_POST["hinh"];
                $price = $_POST["gia"];
                $quantily = $_POST["so-luong"];
                $total = $price * $quantily;
                $prd_add = [$id,$name,$image,$price,$quantily,$total];
                array_push($_SESSION["cart"],$prd_add);
                // echo "<pre>";
                // echo print_r($_SESSION["cart"]);
                // die();
            }
            $view = "views/cart/v_cart.php";
            include "templates/front-end/layout.php";
        }
        function lay_gio_hang() {
            if(isset($_POST["add-cart"])) {
                $id = $_POST["product_id"];
                $name = $_POST["ten-sp"];
                $image = $_POST["hinh"];
                $price = $_POST["gia"];
                $quantily = $_POST["so-luong"];
                $total = $price * $quantily;
                $prd_add = [$id,$name,$image,$price,$quantily,$total];
                array_push($_SESSION["cart"],$prd_add);
                // echo "<pre>";
                // echo print_r($_SESSION["cart"]);
                // die();
                header("location:index.php");
            }
            
        }
    }
?>