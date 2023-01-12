<?php 
session_start();
include('config/dbcon.php');
if(isset($_POST['login-btn']))
{
    $username= mysqli_real_escape_string($con,$_POST['username']);
    $password= mysqli_real_escape_string($con,$_POST['password']);

    $login_query = "SELECT * FROM login_details WHERE username='$username' AND password ='$password';";
    $login_query_run = mysqli_query($con,$login_query);

    if(mysqli_num_rows($login_query_run)>0){

        foreach($login_query_run as $data){
            $user_id = $data['id'];
            $user_name = $data['username'];
            
        }
        $_SESSION['auth'] =true;
        $_SESSION['auth_user'] = [
            'user_id'=> $user_id,
            'user_id'=> $user_id,
        ];
        $_SESSION['message'] = "Login Successful";
        header("Location: dashboard.php");
        exit(0);
    }

    else{
        $_SESSION['message'] = "Invalid Credentials";
        header("Location: index.php");
        exit(0);
    }

}
else{
    $_SESSION['message'] = "Not Allowed";
    header("Location: index.php");
    exit(0);
}
?>