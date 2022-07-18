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
    <title>Add New Post</title>
    <link rel="stylesheet" href="styles/AddNewPost.css">
</head>
<body>
<!--2. Posts: id, user_id, post_name, post_description-->
    <form action="addNewPostPage.php" method="post">
    <div class="box">
        <div class="innerbox">
            <h1>Create New Post</h1>
        <div class="inputBox_title">
            <p><b>Post Title</b></p>
            <input type="text" name="post_title" required>
        </div>
        <div class="inputBox_desc">
            <p><b>Post Description</b></p>
            <textarea rows = "18" cols = "50" name = "description" required></textarea>
        </div>
        <div class="inputBox">
            <button>POST</button>
        </div>
        </div>
    </div>
    </form>

</body>
</html>