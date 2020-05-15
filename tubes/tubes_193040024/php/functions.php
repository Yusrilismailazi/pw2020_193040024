<?php 
function koneksi(){
	$conn = mysqli_connect('localhost','root', '') or die('koneksi gagal!');
	mysqli_select_db($conn,'tubes_193040024') or die('db gagal!');
	return $conn;
}


function query($query){
	 $conn = koneksi();
	$result = mysqli_query($conn, $query);

	$rows = [];
	while ($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}

	return $rows;
}

function tambah($d){
	 $conn = koneksi();

	$gambar = htmlspecialchars($d['gambar']);
	$nama_alat = htmlspecialchars($d['nama_alat']);
	$merk = htmlspecialchars($d['merk']);
	$cara_permainan = htmlspecialchars($d['cara_permainan']);
	$harga = htmlspecialchars($d['harga']);

	$query = "INSERT INTO alat_musik VALUES ('', '$gambar', '$nama_alat', '$merk', '$cara_permainan', '$harga')";

	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);

}

function hapus($id) {
	 $conn = koneksi();
	mysqli_query($conn,  "DELETE FROM alat_musik WHERE id = $id");
	return mysqli_affected_rows($conn);


}

function ubah($data){
	 $conn = koneksi();
	$id =$data['id'];
	$gambar =htmlspecialchars($data['gambar']) ;
	$merk =htmlspecialchars($data['merk']) ;
	$tipe =htmlspecialchars($data['tipe']) ;
	$warna = htmlspecialchars($data['warna']);
	$harga = htmlspecialchars($data['harga']);

	$query = "UPDATE smartphone
				SET
				 gambar = '$gambar',
				 nama_alat = '$nama_alat',
				 merk = '$merk',
				 cara_permainan= '$cara_permainan',
				 harga = '$harga'
				 WHERE id = $id
				 ";

	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);

}

function registrasi($data){
	 $conn = koneksi();
	$username = $data['username'];
	$password1 = $data['password1'];
	$password2 = $data['password2'];

	$cek_user = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	if (mysqli_num_rows($cek_user) > 0) {
		echo "<script>
					alert('Username sudah terdaftar');
					document.location.href = 'registrasi.php';
			  </script>";
	}

	if ($password1 != $password2 ) {
		echo "<script>
				alert('Konfirmasi Password tidak sesuai ');
					document.location.href = 'registrasi.php';
			  </script>";

		return false;
	}

	$password = password_hash($password1, PASSWORD_DEFAULT);

	$query = "INSERT INTO user VALUES
				('','$username', '$password')";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);


}

 ?>