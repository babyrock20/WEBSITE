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
        <li class="breadcrumb-item active">Events and Announcements</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>View
                        <a href="events-add.php" class="btn btn-primary float-end">Add Announcement</a>
                    </h4>
                </div>
                
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-stripe">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $events = "SELECT * FROM events;";
                                 $events_run = mysqli_query($con,$events);
                                    if(mysqli_num_rows($events_run)>0)
                                    {
                                    foreach($events_run as $events){
                                    ?>
                                    <tr>
                                        <td><?= $events['id'] ?></td>
                                        <td><?= $events['title'] ?></td>
                                        <td><?= $events['description'] ?></td>
                                        <td><img src= "../uploads/<?= $events['image'] ?>" width="60px" height="60px" /></td>
                                        <!-- <td><a href="edit-events.php?id=<?=$events['id'] ?>" class="btn btn-info">Edit</a></td> -->
                                        <td>
                                            <form action="allcode.php" method="POST">
                                                <button type="Submit" name="del-event" value="<?=$events['id'] ?>" class="btn btn-danger">Delete</button>
                                            </form>
                                            
                                        </td>
                                    </tr>
                                    <?php
                                    
                                    }
                                    }
                                    else{
                                        ?>
                                        <tr>
                                            <td colspan="4">No Record Found</td>
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