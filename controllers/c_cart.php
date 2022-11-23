<?php
session_start();
if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = [];
}
class c_cart
{
    public function xem_gio_hang()
    {
        if (isset($_POST["add-cart"])) {
            $id = $_POST["product_id"];
            $name = $_POST["ten-sp"];
            $image = $_POST["hinh"];
            $price = $_POST["gia"];
            $quantily = $_POST["so-luong"];
            $total = $price * $quantily;
            $prd_add = [$id, $name, $image, $price, $quantily, $total];
            array_push($_SESSION["cart"], $prd_add);
            // echo "<pre>";
            // echo print_r($_SESSION["cart"]);
            // die();
        }
        $view = "views/cart/v_cart.php";
        include "templates/front-end/layout.php";
    }
    function lay_gio_hang()
    {
        if (isset($_POST["add-cart"])) {
            $id = $_POST["product_id"];
            $name = $_POST["ten-sp"];
            $image = $_POST["hinh"];
            $price = $_POST["gia"];
            $quantily = $_POST["so-luong"];

            $prd_add = [$id, $name, $image, $price, $quantily];
            array_push($_SESSION["cart"], $prd_add);
            // echo "<pre>";
            // echo print_r($_SESSION["cart"]);
            // die();

            header("location:index.php");
        }
    }
    function xoa1_hang()
    {
        if (isset($_GET["id_cart"])) {
            // array_slice($_SESSION["cart"], $_GET["id_cart"], 1);
            unset($_SESSION["cart"][$_GET["id_cart"]]);
            // $_SESSION["cart"];
            // echo "<pre>";
            // echo print_r($_SESSION["cart"]);
            // die();
        } else {
            $_SESSION["cart"] = [];
        }
        header("location:index.php");
    }
    public function xoa1_hang_ve_cart()
    {
        if (isset($_GET["id_cart"])) {
            // echo $_GET["id_cart"];
            // die();
            unset($_SESSION["cart"][$_GET["id_cart"]]);
            // array_slice($_SESSION["cart"], $_GET["id_cart"], 1);
        } else {
            $_SESSION["cart"] = [];
        }
        header("location:cart.php");
    }
}
