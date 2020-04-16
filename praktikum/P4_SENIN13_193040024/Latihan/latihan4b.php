<?php 
$pemain = ["Mohammad Salah" , "Cristiano Ronaldo" , "Lionel Messi" , "Zlatan Ibrahimovic" , "Neymar Jr"]

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="utf-8">
 	<title>Document</title>
 </head>
 <body>
  	<h3>Daftar Pemain Bola Terkenal</h3>
  	<ol>
  		<?php foreach ($pemain as $p) :  ?>
  			<li><?=$p; ?></li>
  		<?php endforeach ?>
  	</ol>

  	<?php 
  	$pemain [] = "Luca Modric";
  	$pemain [] = "Sadio Mane";

  	sort($pemain)
  	?>
  	<h3>Daftar Pemain Bola Terkenal Baru</h3>
  	<ol>
  		<?php foreach ($pemain as $p) :  ?>
  			<li><?=$p; ?></li>
  		<?php endforeach ?>
  	</ol>
 </body>
 </html>