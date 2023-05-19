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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>New user</title>
</head>

<body>
    <div class="container mt-4">
        <div class="">
            <div class="mt-3">
                <h4>Add User</h4>

                <a href="index.php" class="btn btn-primary btn-md ">Back</a>
            </div>

            <div class="card mt-4">
                <div class="card-body">
                    <form action="code.php" method="post">
                        <div class="form-group mt-3">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" placeholder="enter name" name="name" autocomplete="off">

                        </div>

                        <div class="form-group mt-3">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" placeholder="enter email" name="email" autocomplete="off">

                        </div>

                        <div class="form-group mt-3">
                            <label for="phone">Mobile</label>
                            <input type="text" class="form-control" placeholder="enter mobile" name="mobile" autocomplete="off">

                        </div>

                        <div class="form-group mt-3">
                            <label for="password">Password</label>
                            <input type="text" class="form-control" placeholder="enter password" name="password" autocomplete="off">

                        </div>

                        <div class="form-group mt-3 ">
                            <button type="submit" name="submit" class="btn btn-primary  float-start">Submit</button>
                            <button type="reset" class="btn btn-danger  float-end">Cancel</button>

                        </div>

                        <div class="form-group mt-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>