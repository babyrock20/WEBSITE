<?php 
session_start();
include('authentication.php');
include('includes/header.php');
?>
<div class="container-fluid px-4">
    <h4 class="mt-4">
        Admin
    </h4>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Add Announcement</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
        <?php include('message.php');?>
            <div class="card">
                <div class="card-header">
                    <h4>Add Announcement
                        <a href="events-view.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
            <div class="card-body">
                <form action="allcode.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="">Title</label>
                            <input type="text" required name="title" class="form-control">
                            </label>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Description</label>
                            <textarea name="description" class="form-control" rows="4"></textarea>
                            </label>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control">
                            </label>
                        </div>
                        
                        
                        <div class="col-md-12 mb-3">
                            <button type="submit"  name="event_add" class="btn btn-primary">Confirm</button>
                        </div>
                    
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
<script src="js/scripts.js"></script>