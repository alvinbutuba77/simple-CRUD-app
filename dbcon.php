<?php
$conn = mysqli_connect("localhost", "root", "", "userdata");

if(!$conn) {
    echo "connection failed";
    die("connection failed!!" . mysqli_connect_error());
}

?>