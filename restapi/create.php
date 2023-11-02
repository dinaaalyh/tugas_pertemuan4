<?php
    header('Access-Control-allow-Origin: *');
    include "db.php";

    $title = $_POST['title'];
    $content = $_POST['content'];
    
    $result = mysqli_query($connection, "INSERT INTO blog SET title='$title', content='$content'");

    if($result){
        echo json_encode([
            'message' => 'Success'
        ]);
    }else{
        echo json_encode([
            'message' => 'Failed'
        ]);
    }
?>