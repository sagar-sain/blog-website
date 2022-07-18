<?php
    $userEmail = $_POST['useremail'];
    $userPass = $_POST['userpass'];


    require 'connection.php';

    $sql = "SELECT * from users WHERE uemail = '$userEmail' AND  upass = '$userPass'";

    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) > 0) {
            session_start();
            $_SESSION['user'] = $userEmail;
        if (isset($_SESSION['user'])){
            echo "<script language='javascript'>alert('You have successfully logged in..')</script>";
            echo "<script language='javascript'>window.location.href = 'bloglist.php' </script>";
        }else{
            echo "<script language='javascript'>alert('Enter Correct Information..')</script>";
            echo "<script language='javascript'>window.location.href = 'login.php' </script>";
        }
    } else {
        echo "<script language='javascript'>alert('Enter Correct Information..')</script>";
        echo "<script language='javascript'>window.location.href = 'login.php' </script>";
    }

?>