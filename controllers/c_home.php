<?php 

include "models/m_home.php";
class c_home {
    public function index() {
        $m_home = new m_home();
        $products = $m_home->loadAllPrd();


        $view = "views/home/v_home.php";
        include "templates/front-end/layout.php";

    }
}