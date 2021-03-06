<?php include('functions.php')?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=East+Sea+Dokdo&amp;display=swap" rel="stylesheet">
        <style> 
            header {background-color:#4995A3; height: 76px;}
            <?php include "../css/Login.css" ?>
        </style>
        <title> Log In </title>
    </head>
    <body>

    <header class="sticky">
        <a class="logo" href="home.html">
            <img src="../img/logo_airsense.png" style="width: 190px; height: 70px; position: relative;" alt="logo">
        </a>
        <nav>
            <ul class="nav__links">
                <div class="dropdown">
                <li><a href="../about.php">About</a><i class="fa fa-angle-down" aria-hidden="true"></i>
                    <div class="dropdown-content">
                        <a href="../staff.html">Our Staff</a>
                    </div></li>
                </div>
                <div class="dropdown">
                    <li><a href="#">Outputs</a><i class="fa fa-angle-down" aria-hidden="true"></i>
                        <div class="dropdown-content">
                            <a href="../outputs.php">Output 1</a>
                            <a href="../pacman.html">Game</a>
                            <a href="../multi_login/login.php">Login/SignUp</a>
                        </div>
                    </li>
                </div>
                <div class="dropdown">
                    <li><a href="#">Case Studies</a><i class="fa fa-angle-down" aria-hidden="true"></i>
                        <div class="dropdown-content">
                            <a href="../case.html">Kosovo Case</a>
                            <a href="../feedback.php">feedback</a>
                            <a href="../flag.html">svg</a>
                        </div>
                    </li>
                </div>
                <li><a href="../newsnevents.html">News & Events</a></li>
            </ul>
        </nav>
        <a class="cta" href="../contact.php">Contact</a>
        <p class="menu cta"><a href="../home.html">Home</a></p>
    </header>
    <div id="bd">
		<div class="container" id="container">
			<div class="form-container log-in-container">
				<form method="post" action="login.php">
					<h1>Log In</h1>
					<span> Use your account</span>
					<!-- <?php echo display_error(); ?> -->

					<!-- <div class="input-group"> -->
						<!-- <label>Username</label> -->
						<input type="text" name="username" placeholder="Username">
					<!-- </div> -->
					<!-- <div class="input-group"> -->
						<!-- <label>Password</label> -->
						<input type="password" name="password" placeholder="Password">
					<!-- </div> -->
					<!-- <div class="input-group"> -->
						<a href="forgot_test.php">Forgot your password?</a>
						<button type="submit" class="btn" name="login_btn">Login</button>
					<!-- </div> -->
					<br><br>
					<p>
						Not yet a member? <a href="register.php" style="font-size: 17px; color: #d40a2d;">Sign up</a>
					</p>
				</form>
			</div>
			<div class="overlay-container">
				<div class="overlay">
					<div class="overlay-panel overlay-right">
						<h1 id="some" >Hello, Friend!</h1>
						<br><br>
						<?php echo display_error(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!--Footer-->
<footer id="footer" class="footer">
    <div class="text-center">
    <address>Adresa:&nbsp;&nbsp;&nbsp;
        Bregu i Diellit-Prishtinë, Kosovë - 038/230 900</address>
    <ul class="social-links">
        <li><a href="#link"><i class="fa fa-twitter fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-facebook fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-google-plus fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-github"></i></i></a></li>
        <li><a href="#link"><i class="fa fa-linkedin fa-fw"></i></a></li>
    </ul>
    Copyright &copy; University Of Prishtina 2020 
    <div class="credits">
    </div>
    </div>
</footer>
<!--/ Footer-->
<script src="../js/homepage.js"></script>
    </body>
</html>

