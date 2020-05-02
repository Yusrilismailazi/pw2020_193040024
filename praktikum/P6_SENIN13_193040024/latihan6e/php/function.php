<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
    mysqli_select_db($conn, "pw_193040024") or die("Database salah!");

    return $conn;
}

function query($sql)
{
    $conn = koneksi();
    $alat_musik = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($alat_musik)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    $conn = koneksi();

    $gambar = htmlspecialchars($data["gambar"]);
    $nama_alat = htmlspecialchars($data["nama_alat"]);
    $merk = htmlspecialchars($data["merk"]);
    $cara_permainan = htmlspecialchars($data["cara_permainan"]);
    $harga = htmlspecialchars($data["harga"]);

    $query = "INSERT INTO alat_musik
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

function ubah($data)
{
    $conn = koneksi();

    $id = $data["id"];
    $gambar= htmlspecialchars($data["gambar"]);
    $nama_alat = htmlspecialchars($data["nama_alat"]);
    $merk = htmlspecialchars($data["merk"]);
    $cara_permainan = htmlspecialchars($data["cara_permainan"]);
    $harga = htmlspecialchars($data["harga"]);

    $queryubah = "UPDATE alat_musik
                SET
                gambar = '$gambar',
                nama_alat = '$nama_alat',
                merk = '$merk',
                cara_permainan = '$cara_permainan',
                harga = '$harga'
                WHERE id = '$id' ";

    mysqli_query($conn, $queryubah);
    return mysqli_affected_rows($conn);
}
