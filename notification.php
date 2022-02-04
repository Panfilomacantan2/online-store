<?php 
    #fetching the total number of notifications
    require_once('connection.php');
    
    $sql = "SELECT * FROM notifications";
    $result = mysqli_query($con, $sql);

    if($result){
        echo mysqli_num_rows($result);
    }

?>