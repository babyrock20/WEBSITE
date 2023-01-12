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
        <li class="breadcrumb-item active">ADD function</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
        <?php include('message.php');?>
            <div class="card">
                <div class="card-header">
                    <h4>Add function
                        <a href="program-view.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
            <div class="card-body">
                <form action="allcode.php" method="POST">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="">Point</label>
                            <input type="point" required name="point" class="form-control">
                            </label>
                        </div>
                        
                        <div class="col-md-12 mb-3">
                            <button type="submit"  name="add-func" class="btn btn-primary">Confirm</button>
                        </div>
                    
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
<script src="js/bootstrap5.bundle.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/scripts.js"></script>
