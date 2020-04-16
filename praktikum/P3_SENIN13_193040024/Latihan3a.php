<?php
  function gantiStyle($tulisan, $style1, $style2){
    return "<span class='${style1} ${style2}'> ${tulisan} </span>";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan3a</title>
  <style>
    div{
      border: solid black 1px;
      width: 550px;
      box-shadow: black 1px 1px 4px;
    }

    .warna-text{
      color: #f5ad42;
    }

    .font-text{
      font-family: Arial, Helvetica, sans-serif;
      font-size: 32px;
      font-style: italic;
    }

  </style>
</head>

<body>
  <div>
    <?= 
      gantiStyle("Selamat datang di praktikum PW 2020", "warna-text", "font-text");
    ?>
  </div>
</body>
</html>