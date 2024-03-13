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


function hapuskan($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM loginn WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function edit($data){
    global $conn;
    $id = $data["id"];
    $name = $data["name"];
    $kelas = $data["kelas"];
    $username = $data["username"];
    $password = $data["password"];
    $role = $data["role"];
    $add = "UPDATE loginn SET
                            name = '$name',
                            kelas = '$kelas',
                            username = '$username',
                            password = '$password',
                            role = '$role'
                            WHERE id = $id
                            ";
    mysqli_query($conn, $add);
    return mysqli_affected_rows($conn);
}
?>