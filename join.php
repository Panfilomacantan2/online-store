<?php

require_once('connection.php');

$sql = "SELECT * FROM users LEFT JOIN notifications ON users.id = notifications.id";
$result = mysqli_query($con, $sql);

if($result){
    $row = mysqli_fetch_array($result);

    foreach($row as $data){
        echo $data;
        echo '<br>';
    }
 }
   


?> 