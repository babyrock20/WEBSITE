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
        <li class="breadcrumb-item active">Edit Announcements</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
        <?php include('message.php');?>
            <div class="card">
                <div class="card-header">
                    <h4>Edit Announcement
                        <a href="events-view.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
            <div class="card-body">
                <?php
                    $events_id = $_GET['id'];
                    $edit_query= "SELECT * FROM events WHERE id='$events_id';";
                    $edit_query_run = mysqli_query($con, $edit_query);

                    if(mysqli_num_rows($edit_query_run)>0){
                        $row = mysqli_fetch_array($edit_query_run);
                       
                       ?>
                        <form action="allcode.php" method="POST">
                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="">Title</label>
                                    <input class="form-control" type="text" required name="title" value="<?= $row['title'] ?>">
                                    </label>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Description</label>
                                    <input class="form-control" type="text" required name="description" value="<?= $row['description'] ?>">
                                    
                                    </label>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Image</label>
                                    <input type="hidden" name="old_image" value="<?= $row['image'] ?>">
                                    <input class="form-control" type="file" name="image">
                                    </label>
                                </div>
                                
                                <div class="col-md-12 mb-3">
                                    <button type="submit"  name="edit-event" class="btn btn-primary">Confirm</button>
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