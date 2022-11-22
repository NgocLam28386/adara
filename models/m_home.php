<?php 
include "database.php";
class m_home extends database {
    public function loadAllPrd() {
        $sql = "select * from products";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}