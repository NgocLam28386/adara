<?php 
class c_product {
    public function product_detail() {
        if(isset($_GET["id"])) {
            require_once "models/m_product.php";
            $m_prd = new m_product();
            $id = $_GET["id"];
            $prd_detail = $m_prd->read_product_detail($id);
            foreach($prd_detail as $key => $item) {
                $cate_id = $item->cate_id;
                $also = $m_prd->also($cate_id);
            }
        }

        // tạm thời chưa cần lấy dữ liệu ra, cứ view ra đc layout đã rồi tính
        $view = "views/cate/v_prd_detail.php";
        // sau khi tạo đc biến view thì phải inclulde layout.php 
        include "templates/front-end/layout.php";
    }
}