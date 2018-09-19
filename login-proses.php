<?php 
session_start();
include("koneksi.php");

$username = $_POST["username"];
$password = md5($_POST["password"]);

$sql = "SELECT * from login where username='$username' and password='$password'";
$result = mysql_query($sql);

if (mysql_num_rows($result) == 1) {
	$_SESSION["username"] = $username;
	header("Location: form.php");
}else {
	$_SESSION["pesan"] = "Username/password yang anda masukkan salah";
	header("Location: login.php");
}
?>