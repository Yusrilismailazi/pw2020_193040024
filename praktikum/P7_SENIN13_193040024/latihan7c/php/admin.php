<?php
// menghubungkan dengan file php lainnya
require 'function.php';
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
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <h1 class="head">ADMIN</h1>
    <div class="kotak">
        <div class="logout">
            <a href="logout.php">Logout</a>
        </div>
        <div class="">
            <a href="tambah.php"><button class="add">Tambah Data</button></a>
        </div>
        <form action="" method="get">
            <input type="text" name="keyword" size="40" autofocus placeholder="Masukkan Keyword" autocomplete="off">
            <button type="submit" name="cari">Cari!</button>
        </form>
        <table border="1" cellpadding="13" cellspacing="1">
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
                <?php foreach ($alat_musik as $i) : ?>
                    <tr>
                        <td>
                            <div class="">
                                <a href="hapus.php?id=<?= $i["id"] ?>" onclick="return confirm('Hapus Data??')"><button class="delete">Hapus</button></a>
                                <a href="ubah.php?id=<?= $i["id"] ?>"><button class="change">Ubah</button></a>
                            </div>
                        </td>
                        <td><img width="100px" src="../assets/img/<?= $i["gambar"]; ?>"></td>
                        <td><?= $i["nama_alat"]; ?></td>
                        <td><?= $i["merk"]; ?></td>
                        <td><?= $i["cara_permainan"]; ?></td>
                        <td><?= $i["harga"]; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
            <tr>
                <td>
                    <button class="kembali">
                    <center><a href="../index.php">Kembali</a></center>
                    </button>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>