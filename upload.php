<?php 
session_start();
if (isset($_SESSION["username"])) {
	require("koneksi.php");

	$nama = $_POST["nama"];
	$nim = $_POST["nim"];
	$fakultas = $_POST["fakultas"];
	$jenkel = $_POST["jenkel"];

	$dir = "uploads/";
	$nama_file = $_FILES["file_gbr"]["name"];
	$nama_file_tmp = $_FILES["file_gbr"]["tmp_name"];
	$nama_file_temp = explode(".", $_FILES["file_gbr"]["name"]);
	$nama_file_baru = time() . '.' . end($nama_file_temp);
	$target_file = $dir . $nama_file_baru;

	$sql = "INSERT into users values('','$nama','$nim','$fakultas','$jenkel','$nama_file_baru');";

	if (mysql_query($sql) and move_uploaded_file($nama_file_tmp, $target_file)) {
		?>
		<script>alert("data berhasil ditambahkan");location="data.php";</script>
		<?php
	}else {
		echo "Terjadi Kesalahan" . mysql_error();
	}
}else {
	header("Location: login.php");
}
?>