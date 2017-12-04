<?php

$dbc = mysqli_connect("localhost","root","","register");

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM register WHERE email='$email' AND password='$password';";

$result = mysqli_query($dbc, $query);

if($row = mysqli_fetch_array($result)){
    echo "inloggad asf boiii";
}

else{
    echo "Fel passw grabben oof";
}

?>
