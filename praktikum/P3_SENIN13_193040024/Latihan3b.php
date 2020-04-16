<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan3b</title>
    <style>
        .bungkus {
            box-shadow : 2px 2px 2px rgba(0,0,0,1);
            border : 2px solid black;

        }
    </style>
</head>
<body>
    <?php

    $jawabanisset = "Isset merupakan pengolahan sebuah variable,digunakan untuk menyatakan variabel sudah diset atau tidak. Jika variabel sudah diset maka variabel akan mengembalikan nilai true, sebaliknya akan bernilai false. <br><br>";
    $jawabanempety = "Empty pada PHP berfungsi sebagai penanda suatu kondisi. Contohnya yang sering kita temukan adalah dalam pengisian suatu data.";

    $GLOBALS ['Isset'] = $jawabanisset;
    $GLOBALS ['Empty'] = $jawabanempety;

        function soal($style){
            echo "<div class='$style'>
             <p>$GLOBALS[Isset]</p> 
             <p>$GLOBALS[Empty]</p>
             </div>";
        }

        ?>
        <?php
          echo soal("bungkus");
        ?>
</body>
</html>