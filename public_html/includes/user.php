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
            if ($result->num_rows > 0) {
                return 1;
            } else {
                return 0;
            }            
        }

        //Create user account
        public function CreateUserAccount($username, $email, $password, $userType)
        {
            //to protect your app from sql attack you can use prepared statements

            if ($this->emailExists($email)) {
                return "Email already registered";
            } else {
                $pass_hash = password_hash($password, PASSWORD_BCRYPT, ["cost" => 8]);
                $date = date("Y-m-d");
                $notes = "";

                $pre_stmt = $this->con->prepare("INSERT INTO `user`(`username`, `email`, `password`, `userType`, `register_date`, `last_login`, `notes`) 
                VALUES (?, ?, ?, ?, ?, ?, ?)");   
                
                $pre_stmt->bind_param("sssssss", $username, $email, $pass_hash, $userType, $date, $date, $notes);
                $result = $pre_stmt->execute() or die($this->con->error);

                if ($result) {
                    return $this->con->insert_id;
                } else {
                    return "SOME_ERROR";
                }
                
            }

        }

        public function userLogin($email, $password)
        {
            $pre_stmt = $this->con->prepare("SELECT id, username, password, last_login FROM user WHERE email = ? ");
            $pre_stmt->bind_param("s", $email);
            $pre_stmt->execute() or die($this->con->error);
            $result = $pre_stmt->get_result();

            if ($result->num_rows < 1) {
                return "NOT_REGISTERED";
            } else {
                $row = $result->fetch_assoc();
                if (password_verify($password, $row["password"])) {
                    $_SESSION["userid"] = $row["id"];
                    $_SESSION["username"] = $row["username"];
                    $_SESSION["last_login"] = $row["last_login"];


                    //Updating user last login time
                    $last_login = date("Y-m-d h-i-s");                    
                    $pre_stmt = $this->con->prepare("UPDATE user SET last_login = ? WHERE email = ? ");
                    $pre_stmt->bind_param("ss", $last_login, $email);
                    $result = $pre_stmt->execute() or die($this->con->error);

                    if ($result) {
                        return 1;
                    } else {
                        return 0; 
                    }
                    
                } else {
                    return "PASSWORD_NOT MATCHED";
                }
                
            }
            
        }
        
    }

// $user = new User();
// echo $user->CreateUserAccount("test", "test@mail.com", "123456", "Other");

// echo $user->userLogin("lily@mail.com", "1234567890");

// echo $_SESSION["username"];

?>