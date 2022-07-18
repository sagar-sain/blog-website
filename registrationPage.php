<?php
    $userName = $_POST['username'];
    $userEmail = $_POST['useremail'];

    if($_POST['userpass'] === $_POST['confirmpass']){
        $upassword = $_POST['userpass'];
    }else{
        echo "<script language='javascript'>alert('Passwords not match..')</script>";
        echo "<script language='javascript'>window.location.href = 'registration.php' </script>";

    }

    if(isset($_POST['registerBtn']) )

    require 'connection.php';

    $sql = "INSERT INTO users (uname, uemail, upass)
            VALUES ('$userName', '$userEmail', '$upassword')";

    if ($conn->query($sql) === TRUE) {
        echo "<script language='javascript'>alert('You have successfully Registered')</script>";
        echo "<script language='javascript'>window.location.href = 'login.php' </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


?>