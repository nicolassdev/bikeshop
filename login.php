<!DOCTYPE html>
<html>

<head>
    <title>Bikesop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/navbar.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/login.css?v=<?php echo time(); ?>">
</head>
<style>
    body,
    html {
        height: 100%;
    }

    body {
        background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url('img/bike.jpeg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>

<body>
    <header>
        <div class="logo">
            <p><a href="frontview.php">Bikeshop</a></p>

        </div>
    </header>
    <?php
    include("includes/alert-inc.php");
    ?>
    <div class="wrapper">
        <div class="form-box login">
            <h2>Login</h2>
            <form autocomplete="off" action="includes/login-inc.php" method="POST">
                <div class="input-box">
                    <input type="text" name="username" required />
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <input type="Password" name="password" required />
                    <label>Password</label>
                </div>
                <button type="submit" class="btn1" name="submit">Login</button>
                <div class="login-signup">
                    <h6>Don't have an account? <a href="reg.php" class="signup-link">Register</a></h6>
                </div>
            </form>
        </div>
    </div>

</body>

</html>