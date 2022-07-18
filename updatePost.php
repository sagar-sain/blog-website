<?php
    $updatedTitle = $_POST['post_title'];
    $updatedDesc = $_POST['description'];
    $postID = $_POST['postId'];

    
    require 'connection.php';
    $sql = "UPDATE blogs SET ptitle = '$updatedTitle', pdesc = '$updatedDesc' WHERE pid = '$postID' ";


    if($conn->query($sql) === TRUE){
        echo "<script language='javascript'>alert('Updated')</script>";
        echo "<script language='javascript'>window.location.href = 'bloglist.php' </script>";
    }else{
        echo $conn->error;
    }

?>