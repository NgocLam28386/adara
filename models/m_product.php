<?php 
include "database.php";
 
class m_product extends database {
    // extends database là kế thừa từ database (là những hàm viết ở database.php)
    public function read_product_detail($id) {
        $sql = "select * from products,categories where products.id = '$id' and products.cate_id = categories.cate_id";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function also($id_cate) {
        $id = $_GET["id"];
        $sql = "select * from products,categories where
        products.cate_id = '$id_cate' and categories.cate_id = '$id_cate' and products.id <> '$id'";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}