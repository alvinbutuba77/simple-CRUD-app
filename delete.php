<?php 
session_start();
require('dbcon.php');



?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>userdat</title>
  </head>
<body>
<div class="container mt-4">
        <div class="mb-4">
            <div class="mt-3">
                <h4>Delete User</h4>

                <a href="index.php" class="btn btn-primary btn-md ">Back</a>
            </div>
        </div>

        <div>
            <?php
                if(isset($_GET['deleteid'])) {
                    $id = $_GET['deleteid'];

                    $query = "DELETE FROM account WHERE id=$id ";
                    $query_run = mysqli_query($conn, $query);

                    if($query) {
                        echo '<h4 class="text-danger">Deleted successfully</h4>';

                    } else {
                        die(mysqli_error($conn));
                    }
                }
            ?>
        </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>