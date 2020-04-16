<?php 
	$club = [
    "Juve"   => " Juventus",
	"Barca"   => " Barcelona",
	"Madrid"   => " Real Madrid",
	"Liverpool" 	=> " Liverpool",
	"PSG"  	=> " Paris Saint Germani",
	"Liverpool"   => " Liverpool",
	"Ac Milan" 	=> " Ac Milan",];
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Latihan 4c</title>
 	<style>
 		h5 a{
            text-decoration: none;
            color: black;
            font-size: 30px;
        }
 	</style>
 </head>
 <body>
 	<h3>Daftar Pemain Bola Terkenal Dan Clubnya</h3>
 	<table cellpadding="4" cellspacing="0">
 		<tr>
 		<tr align="left">
 			<th>Cristiono Ronaldo</th>
 			<td>:</td>
 			<td><?php echo $club['Juve']; ?></td>
 		</tr>
 		<tr align="left">
 			<th>Lionel Messi</th>
 			<td>:</td>
 			<td><?php echo $club['Barca']; ?></td>
 		</tr>
 		<tr align="left">
 			<th>Luca Modric</th>
 			<td>:</td>
 			<td><?php echo $club['Madrid']; ?></td>
 		</tr>
 		<tr align="left">
 			<th>Mohammad Salah</th>
 			<td>:</td>
 			<td><?php echo $club['Liverpool']; ?></td>
 		</tr>
 		<tr align="left">
 			<th>Neymar Jr</th>
 			<td>:</td>
 			<td><?php echo $club['PSG']; ?></td>
 		</tr>
 		<tr align="left">
 			<th>Sadio Mane</th>
 			<td>:</td>
 			<td><?php echo $club['Liverpool']; ?></td>
 		</tr>
 		<tr align="left">
 			<th>Zlantan Ibrahimovic</th>
 			<td>:</td>
 			<td><?php echo $club['Ac Milan']; ?></td>
 		</tr>
 	</table>
 	
 </body>
 </html>