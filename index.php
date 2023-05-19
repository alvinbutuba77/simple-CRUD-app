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
  <body class="container mt-4">
    <h4>Users</h4>

    <div class="mt-3">
        <a href="add.php" class="btn btn-primary">New User</a>
        
    </div>
    <div class="mt-3 d-flex">
        <table class="table table-responsive table-bordered">
            <thead>
                <th>SI no</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Password</th>
                <th>Operations</th>
            </thead>

            <tbody>

            <?php 
             //code to display database info into table

             $query = "SELECT * FROM account ";
             $query_run = mysqli_query($conn, $query);

             if($query) {
              while($row = mysqli_fetch_assoc($query_run)) {

                echo ' <tr>
                <td>' .$row['id']. '</td>
                <td>' . $row['name'].'</td>
                <td>' . $row['email']. '</td>
                <td>' . $row['mobile']. '</td>
                <td>' . $row['password']. '</td>
                <td>
                <a href="update.php? updateid= '. $row['id']. '" class="btn btn-primary btn-sm">Update</a>
                <a href="delete.php? deleteid='. $row['id'].' " class="btn btn-danger btn-sm">Delete</a>
              </td>
                </tr>';

                

              }
             }
            ?>

                
            </tbody>
        </table>
    </div>

    





    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>