<?php

include_once("../database/constants.php");
include_once("./user.php");
include_once("./DBOperations.php");

//For registration processing
if (isset($_POST["username"]) AND isset($_POST["email"])) {
    $user = new User();
    $result = $user->CreateUserAccount($_POST["username"], $_POST["email"], $_POST["password1"], $_POST["userType"]);
    echo $result;
    exit();
}

//For login processing
if (isset($_POST["log_email"]) AND isset($_POST["log_password"])) {
    $user = new User();
    $result = $user->userLogin($_POST["log_email"], $_POST["log_password"]);
    echo $result;
    exit();
}

// Get category
if (isset($_POST["getCategory"])) {
    $obj = new DBOperations();
    $rows = $obj->getAllRecords("categories");
    foreach ($rows as $row) {
        echo "<option value='".$row["parent_cat"]."'>".$row["category_name"]."</option>";
    }
    exit();
}

?>