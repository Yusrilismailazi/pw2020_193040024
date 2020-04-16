<?php

  function tumpukanbola($tumpukan){
      for($baris=1;$baris<=$tumpukan;$baris++):
        for($kolom=1;$kolom<=$baris;$kolom++):
          echo '<div class="lingkaran">'. $baris .'</div>';
        endfor;
        echo '<div class="clear"></div>';
      endfor;
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan3c</title>

    <style>
     .lingkaran{
         height: 45px;
         width: 45px;
         background-color : salmon;
         text-align: center;
         border-radius: 55%; 
         border: 4px solid black;
         line-height: 45px; 
         margin: 2px;
         float: left;
     }
         
      .clear{
          clear: both;
    }
    </style>

</head>
<body>
    <?php tumpukanBola(5);?>
</body>
</html>