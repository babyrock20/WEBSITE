<?php 
session_start();
include('authentication.php');
include('includes/header.php');
include('config/dbcon.php')
?>
<div class="container-fluid px-4">
    <h4 class="mt-4">
        Admin
    </h4>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Edit Program</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
        <?php include('message.php');?>
            <div class="card">
                <div class="card-header">
                    <h4>Edit program
                        <a href="manage-view.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
            <div class="card-body">
                <?php
                    $point_id = $_GET['S_No'];
                    $edit_query= "SELECT * FROM manage WHERE S_No='$point_id';";
                    $edit_query_run = mysqli_query($con, $edit_query);

                    if(mysqli_num_rows($edit_query_run)>0){
                        $row = mysqli_fetch_array($edit_query_run);
                       
                       ?>
                        <form action="allcode.php" method="POST">
                            <input type="hidden" name="S_No" value="<?= $row['S_No'] ?>">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="">Point</label>
                                    <input class="form-control" type="text" required name="point" value="<?= $row['Point'] ?>">
                                    </label>
                                </div>
                                
                                <div class="col-md-12 mb-3">
                                    <button type="submit"  name="edit-manage" class="btn btn-primary">Confirm</button>
                                </div>
                            
                            </div>
                        </form>
                        <?php

                    }
                    else{
                        ?>
                        <h4>No Record Found</h4>
                        <?php
                    }
                ?>
                
            </div>
            </div>
        </div>
    </div>
</div>
<script src="js/bootstrap5.bundle.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/scripts.js"></script>