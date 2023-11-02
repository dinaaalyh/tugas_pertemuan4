<?php
    header('Access-Control-allow-Origin: *');
    include "db.php";
    
    $result = mysqli_query($connection, "SELECT * FROM blog");
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);

    echo json_encode($result);
?>