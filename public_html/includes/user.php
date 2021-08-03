<?php 
    class User
    {
        private $con;

        function __construct()
        {
            include_once("../database/db.php");
            $db = new Database();
            $this->con = $db-> connect();

        }

        // Check if user is registered
        private function emailExists($email)
        {
            $pre_stmt = $this->con->prepare("SELECT id from user WHERE email = ? ");
            $pre_stmt->bind_param("s", $email);
            $pre_stmt->execute() or die($this->con->error);
            $result = $pre_stmt->get_result();
            if ($result > 0) {
                return 1;
            } else {
                return 0;
            }            
        }

        //Create user account
        public function CreateUserAccount($username, $email, $password, $userType)
        {
            //to protect your app from sql attack you can use prepared statements
            $pre_stmt = $this->con->prepare("");
        }
        
    }

   
?>