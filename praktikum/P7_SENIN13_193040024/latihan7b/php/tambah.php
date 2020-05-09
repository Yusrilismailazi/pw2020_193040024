<?php
require 'function.php';

if (isset($_POST["tambah"])) {
	if (tambah($_POST) > 0) {
		echo 	"<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'admin.php';
			</script>";
	} else {
		echo "<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'admin.php';
			</script>";
	}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<h3 style="margin-left : 40px;">Formulir Tambah Data</h3>
	<form action="" method="post">
		<ul style="list-style-type : none;">
		<li>
				<label for="gambar">Gambar :</label><br>
				<input type="text" name="gambar" id ="gambar" required><br><br>
			</li>
			<li>
				<label for="nama_alat">Tipe :</label><br>
				<input type="text" name="nama_alat" id ="nama_alat" required><br><br>
			</li>
			<li>
				<label for="merk">Merk :</label><br>
				<select name="merk" id ="merk" required><br><br>
					<option value="">-Merk-</option>
					<option value="Yamaha">Yamaha</option>
					<option value="Fender">Fender</option>
					<option value="Rolling">Rolling</option>
					<option value="marvel">Marvel</option>
					<option value="marchingband">Marchingband</option>
					<option value="maxtone">Maxtone</option>
					<option value="siter">Siter</option>
					<option value="vienna">Vienna</option>

				</select>	
			</li><br>
			<li>
				<label for="cara_permainan">Cara Permainan :</label><br>
				<select name="cara_permainan" id ="cara_permainan" required><br><br>
					<option value="">-Cara Permainan-</option>
					<option value="Petik">Petik</option>
					<option value="Pukul">Pukul</option>
					<option value="Tiup">Tiup</option>
					<option value="Tekan">Tekan</option>
					<option value="gesek">Gesek</option>
				</select>	
			</li><br>
			<li>
				<label for="harga">Harga :</label><br>
				<input type="harga" name="harga" id="harga" required><br><br>
			</li>
			<br>
			<button type="submit" name="tambah">Tambah Data!</button>
			<button type="submit">
				<a href="../index.php" style="text-decoration: none; color : black;">Back</a>
			</button>
		</ul>
	</form>
</body>

</html>