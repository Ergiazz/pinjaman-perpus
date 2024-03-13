<?php
require_once('function.php');
session_start(); 
$_SESSION['status'] = ""; 
if ($_SESSION['status']=="login") {
    header("location:adminn/peminjamana/peminjaman.php");
}else{
    if (isset($_POST['gass'])) { 
        $username = $_POST['username'];
        $password = $_POST['password'];
        if (Login($_POST['username'], $_POST['password'])) {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['status'] = "login"; 
            if ($_SESSION['role']=="admin") {  
                header("location:adminn/peminjaman/peminjaman.php");
            }else{
                header("location:user/user.php"); 
            }
        } else {
            header("location:login.php?msg=gagal"); 
        }
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
        background-image: url("images/bg.jpg");
      }
        form{
          margin: 100px 25%; 
          width: 50%;
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
    
    <form method="post" class="form-signin">
      <h1 class="h3 mb-3 font-weight-normal"><h1>WELLCOME BACK</h1></h1>
      <label for="">masukan email :</label>
      <input name="username" type="text" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
      <br>
      <label for="">masukan password :</label>
      <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
      <br>
      <br>
      <?php
      if (isset($error)){
        echo"<h7 style='color: red;'> USERNMAE ATAU PASSWORD SALAH!!</h7>";
      }
      ?>
      
      <button name="gass" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <br>
      <a href="register.php">dont have acount?</a>
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