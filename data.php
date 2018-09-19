<?php
session_start();
if (isset($_SESSION["username"])) {
	include("koneksi.php");

	$sql = "SELECT * from users order by no asc";
	$result = mysql_query($sql);
	$rowcount = mysql_num_rows($result);

	if ($rowcount > 0) {
		?>
		<table width="600px" border="1" align="center">
				<tr>
					<th>Nama</th>
					<th>NIM</th>
					<th>Fakultas</th>
					<th>Gender</th>
					<th>Gambar</th>
				</tr>
		<?php
		while($row = mysql_fetch_array($result)){
		?>
				<tr style="text-align:center">
					<td><?php echo $row["nama"]; ?></td>
					<td><?php echo $row["nim"]; ?></td>
					<td><?php echo $row["fakultas"]; ?></td>
					<td><?php echo $row["jenkel"]; ?></td>
					<td>
						<img width="100px" src="uploads/<?php echo $row["file_gbr"]; ?>" alt="">
					</td>
				</tr>

		<?php
		}
	}else {
		echo "0 result.";
	}
?>
</table>
<center><a href="form.php">Tambah</a> | <a href="logout.php">Logout</a></center>
<?php 
}else {
	header("Location: login.php");
}
?>
