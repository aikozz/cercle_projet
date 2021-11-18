<?php
function add() {

    $hostname     = "localhost";
    $username     = "root";
    $password     = "";
    $databasename = "ajax";
    // Create connection
    $conn = mysqli_connect($hostname, $username, $password, $databasename);

$query = "INSERT INTO usertable (fullName, emailAddress, city, country) VALUES ('test', 'test@test.fr', 'test', 'test')";
mysqli_query($conn, $query);
}