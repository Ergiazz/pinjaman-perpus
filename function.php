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

function register($tambah){
    global $conn;
    $nama = $tambah["nama"];
    $kelas = $tambah["kelas"];
    $username = strtolower( stripslashes($tambah['username'])); 
    $password = $tambah["password"] ;
    $role = $tambah['role'];

mysqli_query($conn, "INSERT INTO loginn VALUES('','$nama','$kelas','$username','$password','$role')");
return mysqli_affected_rows($conn);



}

function Login($username, $password) {
    global $conn; 
    $uname = $username;
    $upass = $password;		
    $hasil = mysqli_query($conn,"select * from loginn where username='$uname' and password='$upass';");
    $cek = mysqli_num_rows($hasil);
    if($cek > 0 ){
        $query = mysqli_fetch_array($hasil);
        $_SESSION['no_identitas'] = $query['no_identitas'];
        $_SESSION['username'] = $query['username'];
        $_SESSION['role'] = $query['role'];
        return true;		
    }
    else {
        return false;
    }	
}
?>