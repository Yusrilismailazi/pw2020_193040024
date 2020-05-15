<?php
// menghubungkan dengan file php lainnya
require 'functions.php';
// melakukan query

// tombol cari di click
if (isset($_GET['cari'])) {
    $keyword = $_GET["keyword"];
    $alat_musik = query("SELECT * FROM alat_musik WHERE
                    gambar LIKE '%$keyword%' OR
                    nama_alat  LIKE '%$keyword%' OR
                    merk LIKE '%$keyword%' OR
                    cara_permainan LIKE '%$keyword%' OR
                    harga LIKE '%$keyword%'

                    ");
} else {
    $alat_musik = query("SELECT * FROM alat_musik");
}
?>

<html>

<head>
    <title></title>
</head>

<body style="background-image: url(../image/admin.jpg); background-position: -100px; height: 250%; background-position: center; background-repeat: no-repeat; background-size: cover">
    <h1 class="head">ADMIN</h1>
        <div class="">
            <a href="tambah.php"><button class="add">Tambah Data</button></a>
        </div>
        <form action="" method="get">
            <input type="text" name="keyword" size="40" autofocus placeholder="Masukkan Keyword" autocomplete="off">
            <button type="submit" name="cari">Cari!</button>
        </form>
        <table  style="color: blue;" border="1" cellpadding="13" cellspacing="1">
        
            <tr>
                <th>Opsi</th>
                <th>Gambar</th>
                <th>Nama Alat</th>
                <th>Merk</th>
                <th>Cara permainan</th>
                <th>Harga</th>
            </tr>
            <?php if (empty($alat_musik)) : ?>
                <tr>
                    <td colspan="6">
                        <h1>Data tidak ada!</h1>
                    </td>
                </tr>
            <?php else : ?>
                <?php $i = 1; ?>
                <?php foreach ($alat_musik as $a) : ?>
                    <tr>
                        <td>
				     	   <a href="ubah.php?id=<?= $a['id'] ; ?>">Ubah</a> 
					       <a href="Hapus.php?id=<?= $a['id'] ; ?>" onclick="return confirm('Apakah anda yakin??');">Hapus</a>
                        </td>
                        <td><img src="../image/<?= $a['gambar'];?>" style ="width: 100px; height: 100px;"></td>
                        <td><?= $a["nama_alat"]; ?></td>
                        <td><?= $a["merk"]; ?></td>
                        <td><?= $a["cara_permainan"]; ?></td>
                        <td><?= $a["harga"]; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
            <tr>
                <td>
                    <button class="kembali">
                    <center><a href="index.php">Kembali</a></center>
                    </button>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>