<?php 
// menghubungkan dengan file php lainnya
require 'function.php';
// melakukan query
$result = query("SELECT * FROM alat_musik")
?>

<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h3>ADMIN</h3>
        <table border="1" cellpadding="13" cellspacing="0">
            <tr>
                <th>Opsi</th>
                <th>Nama Alat</th>
                <th>Merk</th>
                <th>Cara Permainan</th>
                <th>Harga</th>
                <th>Gambar</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($result as $i) : ?>
             <tr>
                <td>
                    <a href=""><button class="b1">Ubah</button></a>
                    <a href=""><button class="b2">Hapus</button></a>
                </td>
                <td><img width="100px" src="../assets/img/<?= $i['gambar']; ?>"></td>
                <td><?= $i["nama_alat"]; ?></td>
                <td><?= $i["merk"]; ?></td>
                <td><?= $i["cara_permainan"]; ?></td>
                <td><?= $i["harga"]; ?></td>
            </tr>
            <?php endforeach; ?>
            <tr>
                <td>
                    <button class="kembali">
                    <center><a href="../index.php">Kembali</a></center>
                    </button>
                </td>
            </tr>
        </table>	
    </body>
</html>