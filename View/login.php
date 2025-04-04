<?php
include '../Controller/config.php';
include '../Controller/loginHandler.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../Assets/Css/login.css" type="text/css">
    <title>BANANA IQ</title>
</head>

<body>
    <div class="container">
        <div class="form-wrapper">
            <h1 class="welcome-text">WELCOME..!!</h1>
            <h3 class="text">BANANA IQ</h3>
            <form class="form-align" method="post">
                <div class="form-group">
                    <label for="username"><i class="bi bi-person-fill"></i></label>
                    <input type="text" class="input-field" id="username" name="username" placeholder="Enter User Name" required>
                </div>
                <div class="form-group">
                    <label for="password"><i class="bi bi-lock-fill"></i></i></label>
                    <input type="password" class="input-field" id="password" name="password" placeholder="Enter Password" required>

                </div>
                <div class="text-center">
                    <button class="loginbtn" id="loginbtn" name="login">Login</button>
                </div>
            </form>
            <div class="text-center">
                <h6 class="reg_txt">Don't Have a Profile? </h6>
                <a href="./register.php" id="reglink"><button class="regbtn" id="regbtn">Register</button></a>
            </div>
        </div>
    </div>

</body>

</html>