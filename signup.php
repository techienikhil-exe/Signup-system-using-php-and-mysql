<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Sign Up</h2>
	</div>
	<form method="post" action="signup.php">
		<?php include('errors.php'); ?>
		<p>
			Please fill in the form to create an account!
		</p>
		<div class="input-group">
			<label>Username</label>
			<input type="text" placeholder="Enter your Username" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" placeholder="Enter your Email Address" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" placeholder="Password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" placeholder="Confirm Password" name="password_2">
		</div>
		<div class="field-column">
                <div class="terms">
                    <input type="checkbox" name="terms"> I accept the <font color="5F9EA0">Terms of Use</font> & <font color="5F9EA0">Privacy Policy</font>
                </div>
                <div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Sign Up</button>
		</div>
	</form>
</body>
</html>