<?php

session_start();
if (!isset($_SESSION['user'])){
    header('Location: login.php');
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Post</title>
    <link rel="stylesheet" href="styles/AddNewPost.css">
</head>
<body>
<form action="updatePost.php" method="post">
    <div class="box">
        <div class="innerbox">
            <h1>Edit Post</h1>
            <?php
            require 'connection.php';
            $userId = $_GET['id'];

            $sql = "SELECT * from blogs WHERE pid = '$userId'";
            $result = $conn->query($sql) or die('select query failed');
            $row = mysqli_fetch_assoc($result);

            ?>
            <div class="inputBox_title">
                <input type="text" name="postId" value="<?php echo $row['pid']; ?>" class="hiddenInput">
                <p><b>Post Title</b></p>
                <input type="text" name="post_title" value="<?php echo $row['ptitle']; ?>" required>
            </div>

            <div class="inputBox_desc">
                <p><b>Post Description</b></p>
                <textarea rows = "18" cols = "50" name = "description" required>
                    <?php echo $row['pdesc']; ?>
                </textarea>
            </div>

            <div class="inputBox">
                <button>Update</button>
            </div>
        </div>
    </div>
</form>

</body>
</html>