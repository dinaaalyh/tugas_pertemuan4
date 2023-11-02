<?php
    header('Access-Control-allow-Origin: *');
    include('db.php');

    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    $result = mysqli_query($connection, "UPDATE blog SET title='$title', content='$content' WHERE id='$id'");

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