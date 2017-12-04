<?php

$dbc = mysqli_connect("localhost","root","","register");

$username = $_POST['username'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$password = $_POST['password'];

$query = "Insert INTO users (username, fullname, email, dob, password) VALUES ('$username', '$fullname', '$email', '$dob', '$password')";

mysqli_query($dbc, $query);

?>
