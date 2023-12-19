<?php  
    class Database{

        private $host = "localhost";
        private $db_user = "root";
        private $db_pass = "";
        private $db_name = "practice_mvc_01";
        public function getConn(){
            try{
                $conn = new PDO("mysql:host=$this->host;dbname=$this->db_name", $this->db_user, $this->db_pass);
                return $conn;
            }catch(PDOException $e){
                return null;
            }
        }

    }
?>