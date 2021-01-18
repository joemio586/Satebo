<?php  
require 'config/config.php';
require 'includes/form_handlers/register_handler.php';
require 'includes/form_handlers/login_handler.php';
?>


<html>
<head>
	<title>Satebo - Buy Sell Trade</title>
	<link rel="stylesheet" type="text/css" href="assets/css/register_style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="assets/js/register.js"></script>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	
</head>
<body>

	<?php  

	if(isset($_POST['register_button'])) {
		echo '
		<script>

		$(document).ready(function() {
			$("#first").hide();
			$("#second").show();
		});

		</script>

		';
	}


	?>

	<div class="wrapper">

		<div class="logoregpage">
			<a href="register.php"> 
				<img src="assets/images/logo/logo-large-word-1.png" alt="logo" width="600" height="254">
			</a> 
		</div>

		<div class="introtext">
			<p>Connect - Buy, Sell, and Trade.</p>
		</div>
 
		<div class="login_box">

			<div class="login_header">
				<h1>Satebo</h1>
				Login or sign up below!
			</div>
			<br>
			<div id="first">
				<form action="register.php" method="POST">
					<i class="fa fa-envelope icon"></i>
					<input type="email" name="log_email" placeholder="Email Address" value="<?php 
					if(isset($_SESSION['log_email'])) {
						echo $_SESSION['log_email'];
					} 
					?>" required>
					<br>
					<i class="fa fa-key icon"></i>
					<input type="password" name="log_password" placeholder="Password">
					<br>
					<?php if(in_array("Email or password was incorrect<br>", $error_array)) echo  "Email or password was incorrect<br>"; ?>
					<input type="submit" name="login_button" value="Login">
					<br>
					<a href="#" id="signup" class="signup">Need and account? Register here!</a>

				</form>

			</div>

			<div id="second">

				<form action="register.php" method="POST">
					<i class="fa fa-user icon"></i>
					<input type="text" name="reg_fname" placeholder="First Name" value="<?php 
					if(isset($_SESSION['reg_fname'])) {
						echo $_SESSION['reg_fname'];
					} 
					?>" required>
					<br>
					<?php if(in_array("Your first name must be between 2 and 25 characters<br>", $error_array)) echo "Your first name must be between 2 and 25 characters<br>"; ?>
					
					

					<i class="fa fa-user icon"></i>
					<input type="text" name="reg_lname" placeholder="Last Name" value="<?php 
					if(isset($_SESSION['reg_lname'])) {
						echo $_SESSION['reg_lname'];
					} 
					?>" required>
					<br>
					<?php if(in_array("Your last name must be between 2 and 25 characters<br>", $error_array)) echo "Your last name must be between 2 and 25 characters<br>"; ?>

					<i class="fa fa-envelope icon"></i>
					<input type="email" name="reg_email" placeholder="Email" value="<?php 
					if(isset($_SESSION['reg_email'])) {
						echo $_SESSION['reg_email'];
					} 
					?>" required>
					<br>

					<i class="fa fa-envelope icon"></i>
					<input type="email" name="reg_email2" placeholder="Confirm Email" value="<?php 
					if(isset($_SESSION['reg_email2'])) {
						echo $_SESSION['reg_email2'];
					} 
					?>" required>
					<br>
					<?php if(in_array("Email already in use<br>", $error_array)) echo "Email already in use<br>"; 
					else if(in_array("Invalid email format<br>", $error_array)) echo "Invalid email format<br>";
					else if(in_array("Emails don't match<br>", $error_array)) echo "Emails don't match<br>"; ?>

					<i class="fa fa-key icon"></i>
					<input type="password" name="reg_password" placeholder="Password" required>
					<br>
					<i class="fa fa-key icon"></i>
					<input type="password" name="reg_password2" placeholder="Confirm Password" required>
					<br>
					<?php if(in_array("Your passwords do not match<br>", $error_array)) echo "Your passwords do not match<br>"; 
					else if(in_array("Your password can only contain english characters or numbers<br>", $error_array)) echo "Your password can only contain english characters or numbers<br>";
					else if(in_array("Your password must be betwen 5 and 30 characters<br>", $error_array)) echo "Your password must be betwen 5 and 30 characters<br>"; ?>


					<input type="submit" name="register_button" value="Register">
					<br>

					<?php if(in_array("<span style='color: #14C800;'>You're all set! Go ahead and login!</span><br>", $error_array)) echo "<span style='color: #14C800;'>You're all set! Go ahead and login!</span><br>"; ?>
					<a href="#" id="signin" class="signin">Already have an account? Sign in here!</a>
				</form>
			</div>

		</div>
		<hr style="width:100%;text-align:left;margin-top:264px;">
		<div class="copyright"><p>Satebo © 2020<p></div>	
	</div>




</body>
</html>