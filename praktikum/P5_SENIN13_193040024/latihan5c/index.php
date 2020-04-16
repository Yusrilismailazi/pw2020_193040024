<?php 
// menghubungkan dengan file php lainnya
require 'php/function.php';
// melakukan query
$result = query("SELECT * FROM alat_musik")
?>
<html>
    <head>
        <title>Alat Musik</title>
    </head>
    <body>
        <div class="container">
        <?php foreach ($result as $i) :?>
            <p class="id">
                 <a href="php/detail.php?id=<?= $i['id'] ?>">
                    <?= $i["nama_alat"] ?>
                 </a>
            </p>
        <?php endforeach; ?>
        </div>
    </body>
</html>
