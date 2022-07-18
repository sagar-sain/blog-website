<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BlogPost</title>
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>
<div class="box">
    <div class="innerbox">
        <h1>Login Here</h1>
        <form method="post" action="loginPage.php">
            <label for="">
                Email:
            </label><br>
            <input type="email" name="useremail" required><br>

            <label for="">
                Password:
            </label><br>
            <input type="password" name="userpass" required><br>

            <button type="submit" style="margin: 10px 0px">Login</button><b
        </form>
        <div style="margin: 10px 0px">
            <a href="registration.php">New User Register Here</a>
        </div>
    </div>
</div>
</body>
</html>
