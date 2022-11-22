<?php 
require_once "database.php";
class m_cate extends database {
    public function read_cate() {
        $sql = "select * from categories";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_prd_by_cate ($id) {
        $sql = "select * from products,categories where categories.cate_id = '$id' and products.cate_id = '$id'";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function readAllProduct() {
        $sql = "select * from products,categories where products.cate_id = categories.cate_id";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}