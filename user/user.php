<?php
include("crud.php");
$dapat = tampilkan("SELECT * FROM peminjaman");
$i =1;
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
        background-image: url("bg.jpg");
      }
        nav{
           color: white; 

        }
        .all{
            width: 95%;
            margin: 20px;
        }
        h3{
          color: white;
        }

        </style>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand text-light" href="#"><h2>PERPUS.ID</h2></a>
  <button class="navbar-toggler text-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon text-light"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    


    </ul>
    <button class="btn btn-outline-success my-2 my-sm-0 text-light" type="submit"><a href=".../login.php">LOG OUT</a></button>
    
  </div>
</nav>
<BR><BR>
<div class="all">
<table class="table table-dark">
  
  <thead>
    <h3>PINJAMAN ANDA:</h3>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">ID_BUKU</th>
      <th scope="col">TGL_PINJAM</th>
      <th scope="col">TGL_KEMBLI</th>
      <th scope="col">JUMLAH</th>
      <th scope="col">KET</th>

    </tr>
  </thead>
  <tbody>
  <?php foreach($dapat as $dapa):?>
    <tr>
      <th><?= $i++?></th>
      <th><?= $dapa["id_buku"]?></th>
      <td><?= $dapa["tgl_pinjam"]?></td>
      <td><?= $dapa["tgl_kembali"]?></td>
      <td><?= $dapa["jumlah"]?></td>
      <td><?= $dapa["status"]?></td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>
    </div>
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