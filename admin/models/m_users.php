<?php 
include "models/databaseAd.php";
class m_user extends database {
    public function read_user() {
        $sql = "select * from users ";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function deleteUser($id) {
        $sql = "delete from users where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
    public function insertUser($fullname,$username,$password,$email,$id_role) {
        $sql = "insert into users (fullname,username,password,email,id_role)
        values(?,?,?,?,?);
        ";
        $this->setQuery($sql);
        return $this->execute(array($fullname,$username,$password,$email,$id_role));
    }
    public function read_role() {
        $sql = "select * from roles";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    
}