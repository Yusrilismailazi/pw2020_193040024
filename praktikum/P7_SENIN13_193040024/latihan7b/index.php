<?php
// menghubungkan dengan file php lainnya
require 'php/function.php';
// melakukan query
$result = query("SELECT * FROM alat_musik")
?>
<html>

<head>
  <title>Latihan 7 A</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <h3>Alat Musik</h3>
  <table border="1">
    <tr>
      <th>No</th>
      <th>Gambar</th>
      <th>Nama Alat</th>
      <th>Merk</th>
      <th>Cara Permainan</th>
      <th>Harga</th>
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
    <center>
      <button class="admin">
        <a href="php/admin.php">Admin Disini!!!</a>
      </button>
    </center>
  </table>
  <h5 align="center"></h5>
</body>
</html>
