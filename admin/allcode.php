<?php
session_start();
include('config/dbcon.php');

if(isset($_POST['del-event'])){
    $id=$_POST['del-event'];
    $delete_event="DELETE FROM events WHERE id ='$id';";
    $delete_event_run= mysqli_query($con, $delete_event);

    if($delete_event_run){
        //$_SESSION['message']="Point edited Successfully!";
        header("Location: events-view.php");
        exit(0);
    }    
    else{
        $_SESSION['message']="Error! Something went wrong!";
        header("Location: events-view.php");
        exit(0);
    }
}


if(isset($_POST['event_add'])){
    $title=$_POST['title'];
    $des=$_POST['description'];
    $image=$_FILES['image']['name'];
    $image_extension=pathinfo($image, PATHINFO_EXTENSION);
    $filename= time().'.'.$image_extension;

    $event_add_query="INSERT INTO `events` (title,description,image) VALUES ('$title','$des','$filename');";
    $event_add_query_run=mysqli_query($con,$event_add_query);
    if($event_add_query_run){
        move_uploaded_file($_FILES['image']['tmp_name'],'../uploads/'.$filename);
        $_SESSION['message']="Added Successfully";
        header("Location: events-view.php");
        exit(0);
    }
    else{
        $_SESSION['message']="Error! Something went wrong!";
        header("Location: events-add.php");
        exit(0);
}
}
if(isset($_POST['edit-event'])){
    $id=$_POST['id'];
    $title=$_POST['title'];
    $description=$_POST['description'];
    $old_filename=$_POST['old_image'];
    $image=$_FILES['image']['name'];
    $update_filename="";
    
    if($image == NULL){
        $image_extension=pathinfo($image, PATHINFO_EXTENSION);
        $filename= time().'.'.$image_extension;
        $update_filename=$filename;
    }
    else{
        $update_filename=$old_filename;
    }


    $update_event="UPDATE events SET title= '$title',description='$description',image='$update_filename' WHERE id ='$id';";
    $update_event_run= mysqli_query($con, $update_event);

    if($update_event_run)
    {
        if($image != NULL)
        {
            if(file_exists('..uploads/'.$old_filename))
            {
                unlink("..uploads/'.$old_filename");
            }
            move_uploaded_file($_FILES['image']['tmp_name'],'..uploads/'.$update_filename);
        }
        
        
        
        $_SESSION['message']="Edited Successfully!";
        header("Location: events-view.php");
        exit(0);
    }    
    else{
        $_SESSION['message']="Error! Something went wrong!";
        header("Location: edit-events.php");
        exit(0);
    }
}

if(isset($_POST['edit-non_exec'])){
    $S_No=$_POST['S_No'];
    $point=$_POST['point'];
    $update_point="UPDATE non_exec SET Point= '$point' WHERE S_No ='$S_No';";
    $update_point_run= mysqli_query($con, $update_point);

    if($update_point_run){
        //$_SESSION['message']="Point edited Successfully!";
        header("Location: non_exec-view.php");
        exit(0);
    }    
    else{
        $_SESSION['message']="Error! Something went wrong!";
        header("Location: non_exec-add.php");
        exit(0);
    }
}

if(isset($_POST['delete-func'])){
    $S_No=$_POST['delete-func'];
    $delete_point="DELETE FROM non_exec WHERE S_No ='$S_No';";
    $delete_point_run= mysqli_query($con, $delete_point);

    if($delete_point_run){
        //$_SESSION['message']="Point edited Successfully!";
        header("Location: non_exec-view.php");
        exit(0);
    }    
    else{
        $_SESSION['message']="Error! Something went wrong!";
        header("Location: non_exec-add.php");
        exit(0);
    }
}

if(isset($_POST['add-non_exec']))
{
    $point=$_POST['point'];
    $add_point= "INSERT INTO non_exec( `Point`) VALUES ('$point');";
    $add_point_run = mysqli_query($con, $add_point );

    if($add_point_run){
        //$_SESSION['message']="Point added successfully!";
        header("Location: non_exec-view.php");
        exit(0);
    }    
    else{
        $_SESSION['message']="Error! Something went wrong!";
        header("Location: non_exec-add.php");
        exit(0);
    }
}


if(isset($_POST['edit-behave'])){
    $S_No=$_POST['S_No'];
    $point=$_POST['point'];
    $update_point="UPDATE behave SET Point= '$point' WHERE S_No ='$S_No';";
    $update_point_run= mysqli_query($con, $update_point);

    if($update_point_run){
        //$_SESSION['message']="Point edited Successfully!";
        header("Location: behave-view.php");
        exit(0);
    }    
    else{
        $_SESSION['message']="Error! Something went wrong!";
        header("Location: behave-add.php");
        exit(0);
    }
}

if(isset($_POST['delet-func'])){
    $S_No=$_POST['delet-func'];
    $delete_point="DELETE FROM behave WHERE S_No ='$S_No';";
    $delete_point_run= mysqli_query($con, $delete_point);

    if($delete_point_run){
        //$_SESSION['message']="Point edited Successfully!";
        header("Location: behave-view.php");
        exit(0);
    }    
    else{
        $_SESSION['message']="Error! Something went wrong!";
        header("Location: behave-add.php");
        exit(0);
    }
}

if(isset($_POST['add-behave']))
{
    $point=$_POST['point'];
    $add_point= "INSERT INTO behave( `Point`) VALUES ('$point');";
    $add_point_run = mysqli_query($con, $add_point );

    if($add_point_run){
        //$_SESSION['message']="Point added successfully!";
        header("Location: behave-view.php");
        exit(0);
    }    
    else{
        $_SESSION['message']="Error! Something went wrong!";
        header("Location: behave-add.php");
        exit(0);
    }
}


if(isset($_POST['edit-manage'])){
    $S_No=$_POST['S_No'];
    $point=$_POST['point'];
    $update_point="UPDATE manage SET Point= '$point' WHERE S_No ='$S_No';";
    $update_point_run= mysqli_query($con, $update_point);

    if($update_point_run){
        //$_SESSION['message']="Point edited Successfully!";
        header("Location: manage-view.php");
        exit(0);
    }    
    else{
        $_SESSION['message']="Error! Something went wrong!";
        header("Location: manage-add.php");
        exit(0);
    }
}

if(isset($_POST['dele-func'])){
    $S_No=$_POST['dele-func'];
    $delete_point="DELETE FROM manage WHERE S_No ='$S_No';";
    $delete_point_run= mysqli_query($con, $delete_point);

    if($delete_point_run){
        //$_SESSION['message']="Point edited Successfully!";
        header("Location: manage-view.php");
        exit(0);
    }    
    else{
        $_SESSION['message']="Error! Something went wrong!";
        header("Location: manage-add.php");
        exit(0);
    }
}

if(isset($_POST['add-manage']))
{
    $point=$_POST['point'];
    $add_point= "INSERT INTO manage( `Point`) VALUES ('$point');";
    $add_point_run = mysqli_query($con, $add_point );

    if($add_point_run){
        //$_SESSION['message']="Point added successfully!";
        header("Location: manage-view.php");
        exit(0);
    }    
    else{
        $_SESSION['message']="Error! Something went wrong!";
        header("Location: manage-add.php");
        exit(0);
    }
}





if(isset($_POST['edit-function'])){
    $S_No=$_POST['S_No'];
    $point=$_POST['point'];
    $update_point="UPDATE `func_and_tech` SET Point= '$point' WHERE S_No ='$S_No';";
    $update_point_run= mysqli_query($con, $update_point);

    if($update_point_run){
        //$_SESSION['message']="Point edited Successfully!";
        header("Location: function-view.php");
        exit(0);
    }    
    else{
        $_SESSION['message']="Error! Something went wrong!";
        header("Location: function-add.php");
        exit(0);
    }
}

if(isset($_POST['del-func'])){
    $S_No=$_POST['del-func'];
    $delete_point="DELETE FROM `func_and_tech` WHERE S_No ='$S_No';";
    $delete_point_run= mysqli_query($con, $delete_point);

    if($delete_point_run){
        //$_SESSION['message']="Point edited Successfully!";
        header("Location: function-view.php");
        exit(0);
    }    
    else{
        $_SESSION['message']="Error! Something went wrong!";
        header("Location: function-add.php");
        exit(0);
    }
}


if(isset($_POST['add-func']))
{
    $point=$_POST['point'];
    $add_point= "INSERT INTO `func_and_tech`( `Point`) VALUES ('$point');";
    $add_point_run = mysqli_query($con, $add_point );

    if($add_point_run){
        //$_SESSION['message']="Point added successfully!";
        header("Location: function-view.php");
        exit(0);
    }    
    else{
        $_SESSION['message']="Error! Something went wrong!";
        header("Location: function-add.php");
        exit(0);
    }
}



if(isset($_POST['logout-btn'])){
    
    unset($_SESSION['auth']);
    unset($_SESSION['auth_user']);
    $_SESSION['message']="Logged Out Successfully";
    header("Location: index.php");
    exit(0);
}
?>