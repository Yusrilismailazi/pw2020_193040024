<?php
  function hitungDeterminan($w = 1, $x = 2, $y = 3, $z = 4) {
      echo "<table style='border-left: 1px solid black; border-right: 1px solid black;' cellspacing='5' cellpadding='5'>
      <tr>
        <td>1</td>
        <td>2</td>
     </tr>
     <tr>
        <td>3</td>
        <td>4</td>
    </tr>
    <table>";
    $determinan = ($w * $z) - ($x * $y);
    echo "<p style='font-size: 20px; font-weight: bold;'>Determinan dari matriks tersebut adalah $determinan</p>";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan3d</title>
</head>
<body>
    <?php 
        HitungDeterminan(1,2,3,4)
    ?>
</body>
</html>