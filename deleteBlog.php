<?php
    $itemId = $_GET['id'];


    require 'connection.php';
    $sql = "DELETE from blogs WHERE pid = '$itemId' ";

    if($conn->query($sql) === TRUE){
        echo "<script language='javascript'>alert('Post Deleted Successfully')</script>";
        echo "<script language='javascript'>window.location.href = 'bloglist.php' </script>";
    }else{
        echo $conn->error;
    }

?>