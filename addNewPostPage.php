<?php

  $description = $_POST['description'];
  $title = $_POST['post_title'];



require 'connection.php';

$sql = "INSERT INTO blogs (ptitle, pdesc) VALUES ('$title', '$description')";

if ($conn->query($sql) === TRUE) {
    echo "<script language='javascript'>alert('Post Added Successfully')</script>";
    echo "<script language='javascript'>window.location.href = 'bloglist.php' </script>";
} else {
    echo "Error: " . $conn->error;
}

?>