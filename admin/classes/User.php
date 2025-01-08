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
}


?>