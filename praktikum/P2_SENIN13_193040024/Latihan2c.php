<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .lingkaran{
        width: 40px;
        height: 40px;
        background-color : salmon;
        text-align: center;
        line-height: 40px;
        border-radius: 50%; 
        border: 2px solid black; 
        float: left;
        margin: 5px;
    }
    .clear{
        clear: both;
    }
    </style>
</head>
<body>
    <?php $a = "1"; $b = "2"; $c = "3" ;?>
    <div class="lingkaran"><?=$a;?></div>
    <div class="clear"></div>
    <div class="lingkaran"><?=$b;?></div>
    <div class="lingkaran"><?=$b;?></div>
    <div class="clear"></div>
    <div class="lingkaran"><?=$c;?></div>
    <div class="lingkaran"><?=$c;?></div>
    <div class="lingkaran"><?=$c;?></div>
    <?php for($i=1; $i<=3; $i++): ?>

    <?php endfor; ?>
</body>
</html>