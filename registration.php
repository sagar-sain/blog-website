<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BlogPost</title>
    <link rel="stylesheet" href="styles/registration.css">
</head>
<body>
    <div class="box">
        <div class="innerbox">
            <h1>Register Here</h1>
            <form method="post" action="registrationPage.php">
            <label for="">
                Name:
            </label><br>
                <input type="text" name="username" required><br>

            <label for="">
                Email:
            </label><br>
                <input type="email" name="useremail" required><br>

            <label for="">
                Create Password:
            </label><br>
                <input type="password" name="userpass" required><br>

            <label for="">
                Confirm Password:
            </label><br>
                <input type="password" name="confirmpass" required><br>

                <button type="submit" name="registerBtn" style="margin: 10px 0px">Register</button>
            </form>

            <div style="margin: 10px 0px">
                <a href="login.php">Have An Account! LogIn Here..</a>
            </div>

        </div>
    </div>
</body>
</html>
