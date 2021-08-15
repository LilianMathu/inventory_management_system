<?php

class DBOperations
{
    private $con;

    function __construct()
    {
        include_once("../database/db.php");
        $db = new Database();
        $this->con = $db->connect();
    }

    public function addCategory($parent, $cat){
        $pre_stmt = $this->con->prepare("INSERT INTO `categories`(`parent_cat`, `category_name`, `status`) 
                VALUES (?,?,?)");
        $status = 1;
        $pre_stmt->bind_param("isi", $parent, $cat, $status);
        $result = $pre_stmt->execute() or die($this->con->error);

        if ($result) {
            return "CATEGORY_ADDED";
        } else {
            return 0;
        }
        
    }
}
$opr = new DBOperations();
echo $opr->addCategory(0, "furniture");

?>