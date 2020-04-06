<?php 
	session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Validate</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Database</h2>
	</div>
	<div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- validate user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Your details have been saved to database as <strong><?php echo $_SESSION['username']; ?></strong>. </p>
		<?php endif ?>
	</div>
		
</body>
</html>