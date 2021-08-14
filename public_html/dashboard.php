<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management System</title>

    <!-- css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

    <!-- js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="../public_html/js//main.js"></script>

</head>

<body>

    <!-- Navbar -->
    <?php
    
      include_once('./templates/header.php');
      
    ?>

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-4">
                <div class="card mx-auto" style="width: 22rem;">
                    <img class="card-img-top mx-auto" style="width: 60%" src="./images/login.jpg" alt="user">
                    <div class="card-body">
                        <h5 class="card-title">Profile Information</h5>
                        <p class="card-text"><i class="fa fa-user">&nbsp;</i>Lilian Mathu</p>
                        <p class="card-text"><i class="fa fa-user">&nbsp;</i>Admin</p>
                        <p class="card-text"><i class="fa fa-clock-o">&nbsp;</i>Last login: xx-xx-xxxx</p>
                        <a href="#" class="btn btn-primary"><i class="fa fa-edit">&nbsp;</i>Edit Profile</a>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="jumbotron" style="width: 100%; height: 100%;">
                    <h1>Welcome Admin, </h1>

                    <div class="row">
                        <div class="col-sm-6">
                            <iframe src="https://free.timeanddate.com/clock/i7x5d3o3/n170/szw160/szh160/cf100/hnce1ead6"
                                frameborder="0" width="160" height="160"></iframe>
                        </div>

                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">New Orders</h5>
                                    <p class="card-text">Here you can make invoices and create new orders</p>
                                    <a href="#" class="btn btn-primary">New Orders</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3 mb-3">
        <div class="row">
            <div class="col-md-4">
                <div class="card mx-auto" style="width: 100%; height: 100%;">
                    <div class=" card-body">
                        <h5 class="card-title">Categories</h5>
                        <p class="card-text">Here you can manage your categories and add new parent and sub categories
                        </p>
                        <a href="#" data-toggle="modal" data-target="#form_categories" class="btn btn-primary">Add </a>
                        <a href="#" class="btn btn-primary">Manage </a>

                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mx-auto" style="width: 100%; height: 100%;">
                    <div class="card-body">
                        <h5 class="card-title">Brands</h5>
                        <p class="card-text">Here you can manage your Brands and add new brands.
                        </p>
                        <a href="#" data-toggle="modal" data-target="#form_brands" class="btn btn-primary">Add </a>
                        <a href="#" class="btn btn-primary">Manage </a>

                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mx-auto" style="width: 100%; height: 100%;">
                    <div class="card-body">
                        <h5 class="card-title">Products</h5>
                        <p class="card-text">Here you can manage your Products and add new products.
                        </p>
                        <a href="#" data-toggle="modal" data-target="#form_products" class="btn btn-primary">Add </a>
                        <a href="#" class="btn btn-primary">Manage </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#categories">
        Launch demo modal
    </button> -->

    <!-- Category modal form -->
    <?php 
        include_once("./templates/categories.php");
    ?>

    <!-- Brands modal form -->
    <?php 
        include_once("./templates/brands.php");
    ?>

    <!-- Products modal form -->
    <?php 
        include_once("./templates/products.php");
    ?>

</body>

</html>