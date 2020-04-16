 <?php 
// melakukan koneksi ke database
$conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke DB gagal");
// memilih database
mysqli_select_db($conn, "pw_193040024") or die ("Database salah!");
// query mengambil objek dari tabel didalam database
$result = mysqli_query($conn, "SELECT * FROM alat_musik");
?>

<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <h3>Alat Musik</h3>
        <table border="1px">
            <tr>
                <th>No</th>
                <th>Nama Alat</th>
                <th>Merk</th>
                <th>Cara Permainan</th>
                <th>Harga</th>
                <th>Gambar</th>
            </tr>
            <?php while ($i = mysqli_fetch_assoc($result)) : ?>
             <tr>
                <td><?= $i["id"]; ?></td>
                <td><img width="100px" src="assets/img/<?= $i['gambar']; ?>"></td>
                <td><?= $i["nama_alat"]; ?></td>
                <td><?= $i["merk"]; ?></td>
                <td><?= $i["cara_permainan"]; ?></td>
                <td><?= $i["harga"]; ?></td>
            </tr>
            <?php endwhile; ?>
        </table>	
		<h5 align="center"></h5>
    </body>
</html>
