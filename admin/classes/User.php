<?php
include_once "../config/Database.php";
class User{


 public $user='';
 public $email='';
 private $password='';
 public $connection;
 public $conn;
 public function __construct(){
    $this->connection = new Database();
    $this->conn=$this->connection->getConnection();
 }
 public function login($data){
    $username=$data['username'];
    $password=md5($data['password']); //encrypt the password using md5

    
    $result=$this->conn->prepare("select * from users where username = :username and password= :pass");
    $result->bindParam(':username',$username);
    $result->bindParam(':pass',$password);
    $result->execute();

    $data =$result->fetch(PDO::FETCH_ASSOC);

    if ($result->rowCount()>0){
        if($data['role']=='admin'){
            $_SESSION ['username']=$username;
            $_SESSION['is_admin']=true;
            header('location:dashboard.php');
        }else{
            $_SESSION['username']=$username;
            $_SESSION['is_user']=true;
            header("Location:../index.php");
        }
        
    }else{
        echo "invalid username or password";
    }
    

 }
 public function logout(){
    

 }
 public function listUser()
 {
     $result = $this->conn->prepare("select * from users where deleted_at is null");
     $result->execute();
     return $result->fetchAll();
 }
 public function register($data){
    $result = $this->conn->prepare("insert into users (name,username,password, email,address, contact,dob,role) 
    values (:name,:username,:password,:email,:address,:contact,:dob,:role)");
        
    $result->bindParam(':name', $data['name']);
    $result->bindParam(':address', $data['address']);
    $result->bindParam(':email', $data['email']);
    $result->bindParam(':contact', $data['contact']);
    $result->bindParam(':password', $data['password']);
    $result->bindParam(':username', $data['username']);
    
    $result->bindParam(':dob', $data['dob']);
    $result->bindParam(':role', $data['role']);
    if($result->execute()){
        return true;
    }else{
        return false;
    }
    

}
public function getRecordById($id)
{
    $result = $this->conn->prepare("select * from users where id = :id");
    $result->bindParam(':id', $id);
    $result->execute();
    return $result->fetch();
}

public function updateUser($data, $id)
{
    
    $result = $this->conn->prepare("update users set name = :name,username=:username,password=:password,email=:email, address=:address,  contact=:contact,dob=:dob,role=:role where id =:id");

    $result->bindParam(':name', $data['name']);
    $result->bindParam(':address', $data['address']);
    $result->bindParam(':email', $data['email']);
    $result->bindParam(':contact', $data['contact']);
    $result->bindParam(':password', $data['password']);
    $result->bindParam(':username', $data['username']);
    
    $result->bindParam(':dob', $data['dob']);
    $result->bindParam(':role', $data['role']);
    $result->bindParam(':id', $id);
    if($result->execute()){
        return true;
    }else{
        return false;
    }
}
public function deleteUser($id){
    $result = $this->conn->prepare("update users set deleted_at = :date where id = :id");
    $result->bindParam(':date', date('Y-m-d H:i:s'));
    $result->bindParam(':id', $id);
    if($result->execute()){
        return true;
    }else{
        return false;
    }
}

}
?>