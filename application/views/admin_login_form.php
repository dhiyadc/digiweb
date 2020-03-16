<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login Form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet'
		type='text/css'>
</head>

<body>
	<?php
		if (isset($logout_message)) {
		echo "<div class='message'>";
		echo $logout_message;
		echo "</div>";
		}
	?>
	<?php
		if (isset($message_display)) {
		echo "<div class='message'>";
		echo $message_display;
		echo "</div>";
		}
	?>
	<div id="main">
		<div id="login">
			<h2>Login Form</h2>
			<hr />
			<form action="<?= base_url() ?>/admin/user_login_process" method="post">
			<?php
				echo "<div class='error_msg'>";
				if (isset($error_message)) {
				echo $error_message;
				}
				//echo validation_errors();
				echo "</div>";
			?>
			<label>UserName :</label>
			<input type="text" name="username" id="name" placeholder="username" required/><br /><br />
			<label>Password :</label>
			<input type="password" name="password" id="password" placeholder="**********"  required/><br /><br />
			<input type="submit" value=" Login " name="submit" /><br />
			</form>
		</div>
	</div>
</body>

</html>
