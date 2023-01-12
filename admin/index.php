<?php
session_start();
if(isset($_SESSION['auth'])){
    unset($_SESSION['auth']);
    unset($_SESSION['auth_user']);
    $_SESSION['message']="Logged Out Successfully";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap5.min.css">
    <link rel="stylesheet" href="css/custom.css">

</head>
<body>
    
 
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <?php include('message.php');?>
                <div class="card">
                    <div class="class-header">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">
                        <form action="logincode.php" method="POST">
                        <div class="form-group mb-3">
                            <label>Username</label>
                            <input type="text" required name="username" placeholder="Enter username" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label>Password</label>
                            <input type="password" required name="password"placeholder="Enter password" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" name="login-btn" class="btn btn-primary">Login Now</button>
                        </div>
                        </form>
                    </div>



                </div>
            </div>
            
        </div>
    </div>
</div>



<script src="js/bootstrap5.bundle.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>