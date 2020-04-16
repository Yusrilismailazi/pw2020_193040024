<?php 
$musik = [
    [
        "photo" => "gitar.png",
        "nama" => "gitar",
        "merk" => "Yamaha",
        "cara" => "Petik",
        "harga" => "Rp. 700.000"
    ],
    [
        "photo" => "bass.jpg",
        "nama" => "bass",
        "merk" => "Fender",
        "cara" => "Petik",
        "harga" => "Rp.1.300.000"
    ],
    [
        "photo" => "drum.png",
        "nama" => "drum",
        "merk" => "Rolling",
        "cara" => "pukul",
        "harga" => "Rp.1.500.000"
    ],
    [
        "photo" => "pianika.jpg",
        "nama" => "pianika",
        "merk" => "marvel",
        "cara" => "Tiup",
        "harga" => "Rp.100.000"
    ],
    [
        "photo" => "piano.jfif",
        "nama" => "piano",
        "merk" => "Yamaha",
        "cara" => "Tekan",
        "harga" => "Rp.2.900.000"
    
    ],
    [
        "photo" => "terompet.jfif",
        "nama" => "trumpet",
        "merk" => "marching band",
        "cara" => "Tiup",
        "harga" => "Rp.2.350.000"
    ],
    [
        "photo" => "jimbe.jpg",
        "nama" => "jimbe",
        "merk" => "Maxtone",
        "cara" => "pukul",
        "harga" => "Rp.250.000"
    ],
    [
        "photo" => "kecapi.jpg",
        "nama" => "kecapi",
        "merk" => "siter",
        "cara" => "petik",
        "harga" => "Rp.500.000"
    ],
    [
        "photo" => "suling.png",
        "nama" => "Suling",
        "merk" => "Yamaha",
        "cara" => "Tiup",
        "harga" => "Rp.155.000"
    ],
    [
        "photo" => "biola.jpg",
        "nama" => "biola",
        "merk" => "Vienna",
        "cara" => "Gesek",
        "harga" => "Rp.1.100.000"
    ],
];
?>

<html>
    <head>
        <title>Tugas2_193040024</title>
    </head>
    <style>
        body {
            background-color: #2d747a;
        }
        table{
            background-color: #2fcfde;
            border : 1px solid black;
            text-align : center;
            font-size : 30px;
        }
    
        td{
            padding : 20px;
            
        }
        h3{
            text-align : center;
            font-size : 50px;
            color: #23393b;
        }
       
    </style>
    <body>
        <h3>Alat Musik</h3>
        <table border="1px">
            <tr>
                <th>Gambar</th>
                <th>Nama Alat</th>
                <th>Merk</th>
                <th>Cara Permainan</th>
                <th>Harga</th>
            </tr>
            <?php foreach ($musik as $m) { ?>
            <tr>
                <td><img src="../img/<?= $m['photo']; ?>"></td>
                <td><?= $m["nama"]; ?></td>
                <td><?= $m["merk"]; ?></td>
                <td><?= $m["cara"]; ?></td>
                <td><?= $m["harga"]; ?></td>
            </tr>
            <?php } ?>
        </table>
		
    </body>
</html>
