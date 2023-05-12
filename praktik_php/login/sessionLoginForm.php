<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
</head>
<body>
	<?php  
		if (isset($_GET['error'])) {
				$error =  $_GET['error'];
			} else {
				$error = "";
			}
		$message = "";
		if ($error == "failed") {
			$message = "Failed to login, please relogin";
		}
	?>
	<p style="color: red"><?php echo $message; ?></p>
	<form action="sessionLoginProcess.php" method="POST">
		<table>
			<tr>
				<td>Username : </td>
				<td><input type="text" name="username" size="20"></td>
			</tr>
			<tr>
				<td>Password : </td>
				<td><input type="password" name="password" size="20"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="login" value="Login"></td>
			</tr>
		</table>
	</form>
</body>
</html>