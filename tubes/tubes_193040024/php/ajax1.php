<?php 

require 'functions.php';
		$keyword = $_GET['keyword'];
		$alat_musik = query("SELECT * FROM alat_musik WHERE
			gambar like '%$keyword%'OR
			nama_alat like '%$keyword%'OR
			merk like '%$keyword%'OR
			cara_permainan like '%$keyword%'OR
			harga like '%$keyword%'"); 

 ?>

 <table class="table table-bordered" style="color: white;">
  
    <tr>
      <th>No</th>
      <th>Gambar</th>
      <th>Nama Alat</th>
      <th>Merk</th>
      <th>cara Permainan</th>
      <th>Harga</th>
    </tr>

    <?php  if(empty($alat_musik)) :?>
      <tr>
        <td colspan="6">Data tidak ditemukan</td>
      </tr>
    <?php endif; ?>

     
    <?php $i =1; ?>
			<?php foreach ($alat_musik as $a) :?>
			<tr align="center">
				<td><?= $i++;  ?></td>
				<td><img src="../image/<?= $a['gambar'];?>" style ="width: 100px; height: 100px;"></td>
				<td><?= $a['nama_alat']; ?></td>
				<td><?= $a['merk'] ; ?></td>
				<td><?= $a['cara_permainan'] ; ?></td>
				<td><?= $a['harga']; ?></td>
            </tr>
    <?php endforeach; ?>
  </table>
   