<!DOCTYPE html>
<html>
    <head>
	<title>Bikeshop</title>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/navbar.css?v=<?php echo time();?>">
		<link rel="stylesheet" href="css/body.css?v=<?php echo time();?>">
    </head>
    <style>
	
body, html {
height: 100%;

}

body {
    background-image: url('img/bike.jpeg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
    </style>
	<body>
	
		<header>
		<div class = "logo">
		<p style="font-family:Brush Script MT"> Bikeshop</p>
		</div>
		<nav>
			<!-- <ul>
			<li><a href ="login.php">Login</a></li>
			<li><a href ="reg.php">Sign up</a></li>
			</ul> -->
		</nav>
		</header>

		<div class="content">
            <h1 style="font-family:Lucida Handwriting">BIKESHOP</h1>
            <br><br><br><p>Click here to login.</p>
            <div>
            <a href ="login.php" target="_parent">
            <button type="button">Login</button>
		</div>
	</body>
</html>