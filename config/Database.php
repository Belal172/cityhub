<?php
    class Database{
        private $host='localhost';
        private $user='root';
        private $password='password';
        private $database='student';
        private $connection;
        public function __construct(){
            try{
                $this->connection=new PDO('mysql:host=localhost;dbname=citizen','root','');
                $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            }catch(PDOException $e){
                die("Connection failed: ".$e->getMessage());
            }
            
        }
        public function getConnection(){
            return $this->connection;
        }
    }

?>