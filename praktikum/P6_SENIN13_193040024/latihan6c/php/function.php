<?php 
function koneksi() {
    $conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke DB gagal");
    mysqli_select_db($conn, "pw_193040024") or die ("Database salah!");

    return $conn;
}

function query($sql){
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
     $conn = koneksi();
     
     $photo = htmlspecialchars($data["gambar"]);
     $jenis = htmlspecialchars($data["nama_alat"]);
     $merk = htmlspecialchars($data["merk"]);
     $tipe = htmlspecialchars($data["cara_permainan"]);
     $harga = htmlspecialchars($data["harga"]);

     $query = "INSERT INTO elektronik
                    VALUES
                    ('','$gambar','$nama_alat','$merk','$cara_permainan',' $harga')";
            
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
 }

function hapus($id)
{
 $conn = koneksi();
 mysqli_query($conn, "DELETE FROM alat_musik WHERE id = $id");

 return mysqli_affected_rows($conn);

}