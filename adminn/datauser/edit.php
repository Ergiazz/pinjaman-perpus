<?php
include("crud.php");

$id = $_GET["id"];

$data = tampilkan("SELECT * FROM loginn WHERE id = $id")[0];

if(isset($_POST["gass"])){
  if(edit($_POST) > 0){
      echo"<script>
          alert('data berhasil diedit');
          document.location.href = 'datauser.php'
      </script>";

  }else{
      echo"<script>
          alert('data gagal diedit')
      </script>";
  }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
      body{
        background-image: url("userr.jpg");
      }
        form{
          margin: 100px 30%; 
          width: 40%;
          height: auto;
          background-color: rgba(255, 255, 255, .9);
          border-radius: 20px;
          padding: 30px;
          padding-bottom: 60px;
        }
        form h1{
          text-align: center;
          margin-bottom: 30px;
        }

        </style>
  </head>
  <b class="">
    
    <form class="form-signin" method="post">
      <h1 class="h3 mb-3 font-weight-normal"><h1>EDIT user</h1></h1>
      <label name="id" for=""> id tidak bisa di ubah</label>
      <input value="<?= $data['id']?>" name="id" type="hidden" id="inputEmail" class="form-control" placeholder="id tidak boleh sama" required="" autofocus="">
      <br>
      <label name="name" for="">masukan nama :</label>
      <input value="<?= $data['name']?>"name="name" type="text" id="inputEmail" class="form-control" placeholder="nama" required="" autofocus="">
      <br>
      <label for="">masukan kelas:</label>
      <input value="<?= $data['kelas']?>" name="kelas" type="text" id="inputPassword" class="form-control" placeholder="kelas" required="">
      <br>
      <label for="">masukan username :</label>
      <input value="<?= $data['username']?>"name="username" type="text" id="inputEmail" class="form-control" placeholder="username" required="" autofocus="">
      <br>
      <label for="">masukan password :</label>
      <input value="<?= $data['password']?>"name="password" type="text" id="inputEmail" class="form-control" placeholder="username" required="" autofocus="">
      <br>
<br>
      <button class="btn btn-lg btn-primary btn-block" name="gass" type="submit">kirim</button>
    </form>
    
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>