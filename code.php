<?php
 include('dbcon.php');
//if add.php submit button is clicked
if(isset($_POST['submit'])) {
   $name = mysqli_real_escape_string($conn,$_POST['name']); //protect against sql injection
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
   $password = mysqli_real_escape_string($conn, $_POST['password']);

   $query = "INSERT INTO account(name, email, mobile, password)
   VALUES('$name', '$email', '$mobile', '$password')"; //insert into respective columns

    $query_run = mysqli_query($conn, $query); //execute query

    if($query) { //check success of query execution
       // echo "<p>alert(data insert success)</p>";
        header('Location: index.php');
        exit(0);

    } else{
        die(mysqli_error($conn));
    }


}


//if update.php save is clicked


?>

