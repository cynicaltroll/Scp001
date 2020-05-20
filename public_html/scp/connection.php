<?php
// databace credentials
$user = 'a9993453_Host';
$password = 'Toiohomai1234';
$db_name = 'a9993453_SCP_000';
//create connectipon object
$connection = new mysqli('localhost', $user, $password, $db_name) or die(mysqli_error($connection));

// get data from db 
// $result = $connection->query("SELECT * FROM SCP") or die($connection->error());
$result = $connection->query("select * from SCP") or die($connection->error());


?>
