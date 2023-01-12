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
        <li class="breadcrumb-item active">Non- Executive Programms</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>View
                        <a href="non_exec-add.php" class="btn btn-primary float-end">Add Program</a>
                    </h4>
                </div>
                
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-stripe">
                            <thead>
                                <tr>
                                    <th>S. No.</th>
                                    <th>Point</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $category = "SELECT * FROM non_exec;";
                                 $category_run = mysqli_query($con,$category);
                                    if(mysqli_num_rows($category_run)>0)
                                    {
                                    foreach($category_run as $item){
                                    ?>
                                    <tr>
                                        <td><?= $item['S_No'] ?></td>
                                        <td><?= $item['Point'] ?></td>
                                        <td><a href="non_exec-edit.php?S_No=<?=$item['S_No'] ?>" class="btn btn-info">Edit</a></td>
                                        <td>
                                            <form action="allcode.php" method="POST">
                                                <button type="Submit" name="delete-func" value="<?=$item['S_No'] ?>" class="btn btn-danger">Delete</button>
                                            </form>
                                            
                                        </td>
                                    </tr>
                                    <?php
                                    
                                    }
                                    }
                                    else{
                                        ?>
                                        <tr>
                                            <td colspan="5">No Record Found</td>
                                        </tr>
                                        <?php
                                    }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/bootstrap5.bundle.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/scripts.js"></script>
