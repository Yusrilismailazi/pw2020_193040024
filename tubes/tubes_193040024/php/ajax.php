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

 <?php foreach ($alat_musik as $a): ?>
      <div class="row" align="center">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="image/<?= $a['gambar'];?>" style ='width: 150px; height: 150px;'>
      <div class="caption">
        <h3><?= $a['nama_alat']; ?></h3>
        
        <p><a href="php/user.php?id=<?= $a['id'];  ?>" class="btn btn-default btn-primary" role="button">Keterangan</a></p>
      </div>
    </div>
  </div>
</div>     
    <?php endforeach ?>
   