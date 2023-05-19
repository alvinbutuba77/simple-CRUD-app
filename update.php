
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

    <title>Update user</title>
</head>

<body>
    <div class="container mt-4">
        <div class="">
            <div class="mt-3">
                <h4>Edit User</h4>

                <a href="index.php" class="btn btn-primary btn-md ">Back</a>
            </div>

            <div class="card mt-4">
                <div class="card-body">

                    <?php  
                    //code to display user value inside the form fields
                    $id = $_GET['updateid'];
                    $query = "SELECT * FROM account WHERE id = $id";
                    $query_run = mysqli_query($conn, $query);

                    $row = mysqli_fetch_assoc($query_run);
                    $name = $row['name'];
                    $email = $row['email'];
                    $mobile = $row['mobile'];
                    $password = $row['password']; 

                    if(isset($_POST['updatedata'])) {
    

                        $name = $_POST['name']; 
                        $email = $_POST['email'];
                        $mobile = $_POST['mobile'];
                        $password = $_POST['password'];
                     
                        $query = "UPDATE  account SET name = '$name', email='$email',
                        mobile='$mobile', password='$password'  WHERE id=$id"; //insert into respective columns
                     
                         $query_run = mysqli_query($conn, $query); //execute query
                     
                         if($query) { //check success of query execution
                            // echo "<p>alert(data insert success)</p>";
                             header('Location: status.php');
                     
                         } else{
                             die(mysqli_error($conn));
                         }
                     
                     
                     }

                    ?>

                    <form action="" method="post">
                        <div class="form-group mt-3">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" placeholder="enter name" name="name" value="<?php echo $name;?>" autocomplete="off">

                        </div>

                        <div class="form-group mt-3">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" placeholder="enter email" name="email" value="<?php echo $email?>" autocomplete="off">

                        </div>

                        <div class="form-group mt-3">
                            <label for="phone">Mobile</label>
                            <input type="text" class="form-control" placeholder="enter mobile" name="mobile" value="<?php echo $mobile?>" autocomplete="off">

                        </div>

                        <div class="form-group mt-3">
                            <label for="password">Password</label>
                            <input type="text" class="form-control" placeholder="enter password" name="password" value="<?php echo $password?>" autocomplete="off">

                        </div>

                        <div class="form-group mt-3 ">
                            <button type="submit" name="updatedata" class="btn btn-primary  float-start">Save</button>
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