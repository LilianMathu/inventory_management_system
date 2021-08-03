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

    <div class="container mt-3 mb-3">
        <div class="card mx-auto" style="width: 30rem;">
            <div class="card-header">Register</div>
            <div class="card-body">
                <form action="" id="registration_form" method="">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control"
                            placeholder="enter username">
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="enter email">
                        <small class="form-text text-muted"> We'll never share your email with
                            anyone</small>
                    </div>

                    <div class="form-group">
                        <label for="password1">Password</label>
                        <input type="password" name="password1" id="password1" class="form-control"
                            placeholder="password">
                    </div>

                    <div class="form-group">
                        <label for="password2">Re-enter password</label>
                        <input type="password" name="password2" id="password2" class="form-control"
                            placeholder="password">
                    </div>

                    <div class="form-group">
                        <label for="usertype">UserType</label>
                        <select name="userType" id="userType" class="form-control">
                            <option value="1">Admin</option>
                            <option value="0">Other</option>
                        </select>
                    </div>

                    <button type="submit" name="user_register" class="btn btn-primary">
                        <span class="fa fa-user"></span>
                        &nbsp; Register
                    </button>

                    <span><a href="index.php">Login</a></span>

                </form>
            </div>

            <div class="card-footer text-muted">
                <a href="#">Forgot Password ? </a>
            </div>

        </div>
    </div>
</body>

</html>