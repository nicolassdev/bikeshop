<!DOCTYPE html>
<html>
    <head>
	<title>Register Form</title>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/navbar.css?v=<?php echo time();?>">
		<link rel="stylesheet" href="css/reg.css?v=<?php echo time();?>">		
    </head>
    <style>
        body, html {
            height: 100%;

        }
        body {
            background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url('img/bike.jpeg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
	<body>
		<header>
            <div class = "logo">
                <p> <a href="frontview.php">Bikeshop</a></p>
            </div>
		</header>
        <?php
            include("includes/alert-inc.php")
        ?>

		<div class = "wrapper2">
            <div class="form-box signup ">	
                    <h2>Register Here</h2>
                <form autocomplete="off" action="includes/reg-inc.php" method="POST">
                    <div class="input-box">
                        <input type="text" name="name" required />
                        <label>&nbsp;Name</label>
                    </div>
                    <div class="input-box">
                        <input type="text" name="mname" required />
                        <label>Middle name</label>
                    </div>

                    <div class="input-box">
                        <input type="text" name="lname"required />
                        <label>Last name</label>
                    </div>

                    <div class="input-box">
                        <input type="text" name="address"required />
                        <label>Address</label>
                    </div>

                    <div class="input-box">
                        <input type="numeric" name="contact" required/>
                        <label>Contact</label>
                    </div>

                    <div class="input-box">
                        <input type="text" name="username" required />
                        <label>Username</label>
                    </div>
                    <div class="input-box">
                        <input type="password" name="password" required />
                        <label>Password</label>
                    </div>  
                    <button type="submit" class="btn1" name="submit">Sign up</button>
                    <div class="login-signup">
                        <h6>Already have an account? <a href="login.php" class="login-link">Login</a></h6>
                    </div>
                </form>
            </div>
		</div>
				
				
								
		

	</body>
</html>