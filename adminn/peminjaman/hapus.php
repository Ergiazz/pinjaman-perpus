<?php
include("crud.php");
$id = $_GET["id"];

if(hapuskan($id)>0){
    echo"<script>
    alert('data berhasil dihapus');
    document.location.href = 'peminjaman.php'
</script>";

}else{
echo"<script>
alert('data gagal dihapus');
document.location.href = 'peminjaman.php'
</script>";
}
?>