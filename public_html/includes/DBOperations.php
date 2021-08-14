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

    public function addCategory($parent, $cat)
    {
        $pre_stmt = $this->con->prepare("INSERT INTO `categories` (`parent_cat`, `category_name`, `status`)
                    VALUES(?,?,?)");
        $status = 1;
        $pre_stmt->bind_param("isi", $parent, $cat, $status);
        $result = $pre_stmt->execute() or die($this->con->error);

        if ($result) {
            return "CATEGORY ADDED";
        } else {
            return 0;
        }
        
    }

    public function getAllRecords($table){ // can get data from any table
        $pre_stmt = $this->con->prepare("SELECT * from ".$table);
        $pre_stmt->execute() or die($this->con->error);
        $result = $pre_stmt->get_result();
        $rows = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }

            return $rows;

        }

        return "NO DATA";   
    }
}

// $opr = new DBOperations();

// echo $opr->addCategory(1, "SMmartphones");

// echo "<pre>";

// print_r($opr->getAllRecords("categories"));

?>