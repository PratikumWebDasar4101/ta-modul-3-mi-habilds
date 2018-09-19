<?php 
session_start();
if (isset($_SESSION["username"])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Upload</title>
</head>
<body>
	<form action="upload.php" method="POST" enctype="multipart/form-data">
		<p align="center">Selamat datang , <?php echo $_SESSION["username"]; ?> | <a href='logout.php'>Logout</a> | <a href="data.php">Data</a></p>
		<center><strong>Form Upload</strong></center>
		<table align="center" width="400px" style="margin-top: 2%">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" style="width: 100%"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim" style="width: 100%"></td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td>
					<select name="fakultas" id="fakultas">
						<option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option>
						<option value="Fakultas Informatika">Fakultas Informatika</option>
						<option value="Fakultas Ekonomi Bisnis">Fakultas Ekonomi Bisnis</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="radio" value="Laki-laki" name="jenkel">Laki-laki <input type="radio" value="Perempuan" name="jenkel">Perempuan</td>
			</tr>
			<tr>
				<td>File Gambar</td>
				<td>:</td>
				<td><input type="file" name="file_gbr" id="file_gbr"></td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" value="Kirim"></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php 
}else {
	header("Location: login.php");
}
?>
