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
        <li class="breadcrumb-item active">Change Password</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
        <?php include('message.php');?>
            <div class="card">
                <div class="card-header">
                    <h4>Change Password</h4>
                </div>
            <div class="card-body">
                <form action="change_pass.php" method="POST">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="">Current Password</label>
                            <input type="password" required name="password" class="form-control">
                            </label>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">New Password</label>
                            <input type="password" required name="new_password" class="form-control">
                            </label>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Confirm Password</label>
                            <input type="password" required name="confirm_password" class="form-control">
                            </label>
                        </div>
                        <div class="col-md-12 mb-3">
                            <button type="submit"  name="change-pass-btn" class="btn btn-primary">Confirm</button>
                        </div>
                    
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>