<?php 
session_start();
include('config/dbcon.php');
if(isset($_POST['change-pass-btn']))
{
    
    $password= mysqli_real_escape_string($con,$_POST['password']);
    $new_pass = mysqli_real_escape_string($con,$_POST['new_password']);
    $confirm_pass = mysqli_real_escape_string($con,$_POST['confirm_password']);
    if($new_pass==$confirm_pass)
    {
        $login_query = "SELECT * FROM login_details WHERE password ='$password';";
        $login_query_run = mysqli_query($con,$login_query);
        if(mysqli_num_rows($login_query_run)>0){
            $update_query="UPDATE `login_details` SET `password`='$new_pass' WHERE 1;";
            $login_query_run = mysqli_query($con,$update_query);
            $_SESSION['message'] = "Password Changed Successfully.";
            header("Location: register.php");

        }
        else{
            $_SESSION['message'] = "Wrong password entered";
            header("Location: register.php");

        }
    }
    else{
        $_SESSION['message'] = "New Password and Confirm Password are not same.";
        header("Location: register.php");
    }
}  
?>