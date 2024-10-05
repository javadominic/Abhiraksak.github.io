<?php
$connect = mysqli_connect("localhost", "root", "", "team_web");


if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully!";
?>
