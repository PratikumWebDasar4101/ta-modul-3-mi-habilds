<?php 
session_start();

if (isset($_SESSION["pesan"])) {
	$pesan = $_SESSION["pesan"];
	session_destroy();
}else {
	$pesan = "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	<form action="login-proses.php" method="post">
		<table align="center">
			<center><?php echo $pesan; ?></center>
			<tr>
				<td align="center">Username</td>
			</tr>
			<tr>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td align="center">Password</td>
			</tr>
			<tr>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td align="center"><input type="submit" value="Login"></td>
			</tr>
		</table>
	</form>
</body>
</html>