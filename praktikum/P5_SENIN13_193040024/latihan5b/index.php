<?php 
// menghubungkan dengan file php lainnya
require 'php/function.php';
// melakukan query
$result = query("SELECT * FROM alat_musik")
?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <h3>Alat Musik</h3>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama Alat</th>
                <th>Merk</th>
                <th>Cara Permainan</th>
                <th>Harga</th>
                <th>Gambar</th>
            </tr>
            <?php foreach ($result as $i) { ?>
             <tr>
             <td><?= $i["id"]; ?></td>
                <td><img width="100px" src="assets/img/<?= $i['gambar']; ?>"></td>
                <td><?= $i["nama_alat"]; ?></td>
                <td><?= $i["merk"]; ?></td>
                <td><?= $i["cara_permainan"]; ?></td>
                <td><?= $i["harga"]; ?></td>
            </tr>
            <?php } ?>
        </table>	
		<h5 align="center"></h5>
    </body>
</html>
