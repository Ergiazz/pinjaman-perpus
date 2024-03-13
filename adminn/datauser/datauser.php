<?php
include("crud.php");
$dapat = tampilkan("SELECT * FROM loginn");
$i = 1; 
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
        background-size: cover;
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
        li{
          margin-left: 50px;
        }
        #add{
          width: 100px;
          height: 40px;
          margin: 10px 0px;
          border-radius: 10px;
          color: aliceblue;
          background-color: grey;
        }
        #nyala{
          border: solid white;
          border-radius: 10px;
          padding: 0px 10px;
          box-sizing: border-box;
          
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
    <li><a href="../peminjaman/peminjaman.php">PEMINJAMAN</a></li>
    <li ><a href="../book/book.php">user</a></li>
      <li id="nyala"><a href="../user/user.php">USER</a></li>
  </ul>
    <button class="btn btn-outline-success my-2 my-sm-0 text-light" type="submit"><a href="../../login.php">LOG OUT</a></button>
    
  </div>
</nav>
<BR><BR>
<div class="all">
<table class="table table-dark">
  
  <thead>
    <h3>DATA USER:</h3>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">NAMA</th>
      <th scope="col">KELAS</th>
      <th scope="col">USERNAME</th>
      <th scope="col">PASSWORD</th>
      <th scope="col">ROLE</th>
      <th scope="col">KET</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($dapat as $dapa):?>
    <tr>
      <th><?= $i++?> </th>
      <td><?= $dapa["name"]?></td>
      <td><?= $dapa["kelas"]?></td>
      <td><?= $dapa["username"]?></td>
      <td><?= $dapa["password"]?></td>
      <td><?= $dapa["role"]?></td>
      <td>
      <a href="hapus.php?id=<?= $dapa["id"];?>">DELETE</a> |
      <a href="edit.php?id=<?= $dapa["id"];?>">EDIT</a>
    </td>
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