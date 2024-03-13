<?php
$conn = mysqli_connect("localhost","root","","perpus");
function tampilkan($tampil){
    global $conn;
    $ambil = mysqli_query($conn, $tampil);
    $simpan = [];
    while($cokot = mysqli_fetch_assoc($ambil)){
        $simpan[] = $cokot;
    }   return $simpan;

}

function tambahkan($tambah){
    global $conn;
    $id = $tambah["id"];
    $judul = $tambah["judul"];
    $penulis = $tambah["penulis"];
    $jumlah = $tambah["jumlah"];
    $add = "INSERT INTO book VALUES ('$id','$judul','$penulis','$jumlah')";
    mysqli_query($conn, $add);
    return mysqli_affected_rows($conn);

}
function hapuskan($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM book WHERE id_buku = $id");
    return mysqli_affected_rows($conn);
}

function edit($data){
    global $conn;
    $id = $data["id"];
    $judul = $data["judul"];
    $penulis = $data["penulis"];
    $jumlah = $data["jumlah"];
    $add = "UPDATE book SET
                            judul = '$judul',
                            penulis = '$penulis',
                            jumlah = '$jumlah'
                            WHeRE id_buku = $id
                            ";
    mysqli_query($conn, $add);
    return mysqli_affected_rows($conn);
}
?>