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
    $id_buku = $tambah["id_buku"];
    $id_user = $tambah["id_user"];
    $tgl_pinjam = $tambah["tgl_pinjam"];
    $tgl_kembali = $tambah["tgl_kembali"];
    $jumlah = $tambah["jumlah"];
    $status = $tambah["status"];
    $add = "INSERT INTO peminjaman VALUES ('','$id_buku','$id_user','$tgl_pinjam','$tgl_kembali','$jumlah','$status')";
    mysqli_query($conn, $add);
    return mysqli_affected_rows($conn);

}
function hapuskan($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM peminjaman WHERE id_peminjaman = $id");
    return mysqli_affected_rows($conn);
}

function edit($data){
    global $conn;
    $id = $data["id_peminjaman"];
    $id_buku = $data["id_buku"];
    $id_user = $data["id_user"];
    $tgl_pinjam = $data["tgl_pinjam"];
    $tgl_kembali = $data["tgl_kembali"];
    $jumlah = $data["jumlah"];
    $status = $data["status"];
    $add = "UPDATE peminjaman SET
                            id_peminjaman = '$id',
                            id_buku = '$id_buku',
                            id_user = '$id_user',
                            tgl_pinjam = '$tgl_pinjam',
                            tgl_kembali = '$tgl_kembali',
                            jumlah = '$jumlah',
                            status = '$status'
                            WHeRE id_peminjaman = $id
                            ";
    mysqli_query($conn, $add);
    return mysqli_affected_rows($conn);
}
?>