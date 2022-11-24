<?php 
session_start();
include "models/m_users.php";
class c_user {
    public function logout() {
        if(isset($_GET["func"])) {
            unset($_SESSION["user"]);
            header("location:../index.php");
        }
    }
    
    public function showUser() {
       $m_user = new m_user;
       
    }
    public function addUser()
    {
        require_once "models/m_users.php";
        $user= new m_user();
        $read_role=$user->read_role();
        if(isset($_POST["btn-submit"])){
            $fullname=$_POST['fullname'];
            $username=$_POST['username'];
            $password=$_POST['password'];
            $email=$_POST['email'];
            $id_role = $_POST["chose"];
            $result=$user->insertUser($fullname,$username,$password,$email,$id_role);
        }
        $view = "views/users/v_addUsers.php";
        include "templates/layout.php";
    }
    public function deleteUser()
    {
        $delete=new m_user();
        if(isset($_GET["id"])){
            $id=$_GET["id"];
            $result=$delete->deleteUser($id);

        }
    }
    public function editUser()
    {
        // if(isset($_GET['id'])){
        //     $m_user=new m_user();
        //     $read_user=$m_user->read_user();
        //     $id=$_GET['id'];

        //     if(isset($_POST['btn'])){
        //         $fullname=$_POST["fullname"];
        //         $fullname=$_POST["username"];
        //         $fullname=$_POST["email"];
        //         $fullname=$_POST["password"];
        //         $result=$m_user->undate_user_by_id($fullname,$username,$email,$password);
        //     }
        // }
    }
}