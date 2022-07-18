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
    <title>Blog</title>
    <link rel="stylesheet" href="styles/home.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <div><h2>All Blogs</h2></div>
            <div>
                <button onclick="moveTo()">Create New Post</button>
                <button onclick="logout_handler()">Logout</button>
            </div>

        </div>

<!--        post lists-->
        <?php
        require 'connection.php';
        $sql = "SELECT * from blogs;";
        $result = $conn->query($sql);

        if ($result->num_rows > 0){
            while ($row = $result->fetch_assoc()){ ?>
        <div>
            <div class="blogs">
                <div class="blog">
                    <h1><?php echo $row['ptitle'] ?></h1>
                    <p><span><?php echo $row['pdesc'] ?></span></p>
                <div>
                    <button onclick="handle_edit(<?php echo $row['pid']; ?>)">Edit</button>
                    <button onclick="handle_delete(<?php echo $row['pid']; ?>)">Delete</button>
                </div>
            </div>
        </div>

        <?php

            }
        }

        ?>



    </div>
    <script type="text/javascript">
        function moveTo() {
            window.location.href = 'addNewPost.php'
        }
        function handle_edit(id) {
            window.location.href = `edit.php?id=${id}`;
        }
        function handle_delete(id) {
            window.location.href = `deleteBlog.php?id=${id}`;
        }
        function logout_handler() {
            window.location.href = 'logout.php';
        }
    </script>
</body>
</html>