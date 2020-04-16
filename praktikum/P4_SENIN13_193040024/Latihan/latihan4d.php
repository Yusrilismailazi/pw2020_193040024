<?php
$Club = [
    [
        "Nama" => "Cristiano Ronaldo",
        "Club" => "Juventus",
        "Main" => 100,
        "Gol" => 76,
        "Assist" => 30
    ],
    [
        "Nama" => "Lionel Messi",
        "Club" => "Barcelona",
        "Main" => 120,
        "Gol" => 80,
        "Assist" => 12
    ],
    [
        
        "Nama" => "Luca Modric",
        "Club" => "Real Madrid",
        "Main" => 87,
        "Gol" => 12,
        "Assist" => 48
    ],
    [
        
        "Nama" => "Mohammad Salah",
        "Club" => "Liverpool",
        "Main" => 90,
        "Gol" => 103,
        "Assist" => 8
    ],
    [
        
        "Nama" => "Neymar jr",
        "Club" => "Paris saint Germany",
        "Main" => 109,
        "Gol" => 56,
        "Assist" => 15
    ],
    [
        
        "Nama" => "Sadio Mane",
        "Club" => "Liverpool",
        "Main" => 63,
        "Gol" => 30,
        "Assist" => 70
    ],
    [
        
        "Nama" => "Zlantan Ibrahimovic",
        "Club" => "Ac Milan",
        "Main" => 100,
        "Gol" => 10,
        "Assist" => 12
    ],
];
?>

<html>
    <head>
        <title>Latihan 4d</title>
        <style>
            h5 a{
            text-decoration: none;
            color: black;
            font-size: 25px;
        }
        </style>
    </head>
    <body>
        <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Club</th>
            <th>Main</th>
            <th>Gol</th>
            <th>Assist</ht>
        </tr>
        <?php $i = 1; ?>
    <?php foreach ($Club as $P) :?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $P['Nama']; ?></td>
            <td><?php echo $P['Club']; ?></td>
            <td><?php echo $P['Main']; ?></td>
            <td><?php echo $P['Gol']; ?></td>
            <td><?php echo $P['Assist']; ?></td>
            
        </tr>
    <?php endforeach; ?>
    <tr>
                <td><b>#</b></td>
                <td colspan="2" align="center"><b>Jumlah</b></td>
                <?php 
                $sum = 0;
                foreach ($Club as $P) {
                    $sum += $P["Main"];}
                ?>
                <td><?= $sum;?></td>
                <?php 
                $sum2 = 0;
                foreach ($Club as $P) {
                    $sum2 += $P["Gol"]; }
                ?>
                <td><?= $sum2 ?></td>
                <?php 
                $sum2 = 0;
                foreach ($Club as $P) {
                    $sum2 += $P["Assist"]; }
                ?>
                <td><?= $sum2 ?></td>
            </tr>

    </table>

    </body>
        

</html>