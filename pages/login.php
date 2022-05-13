<?php
//menyertakan file program koneksi.php pada register
require('../config/koneksi.php');
//inisialisasi session
session_start();
 
$error = '';
$validate = '';
 
//mengecek apakah sesssion username tersedia atau tidak jika tersedia maka akan diredirect ke halaman index

 
//mengecek apakah form disubmit atau tidak
if( isset($_POST['submit']) ){
         
  // menghilangkan backshlases
    $nomor_induk = stripslashes($_POST['nomor_induk']);
  //cara sederhana mengamankan dari sql injection
    $nomor_induk = mysqli_real_escape_string($conn, $nomor_induk);
  // menghilangkan backshlases
    $password = stripslashes($_POST['password']);
  //cara sederhana mengamankan dari sql injection
    $password = mysqli_real_escape_string($conn, $password);
    
    //cek apakah nilai yang diinputkan pada form ada yang kosong atau tidak
      if(!empty(trim($nomor_induk)) && !empty(trim($password))){
    //select data berdasarkan username dari database
      $query      = "SELECT * FROM user WHERE nomor_induk = '$nomor_induk'";
      $result     = mysqli_query($conn, $query);
      $rows       = mysqli_num_rows($result);
        if ($rows != 0) {
          $hash   = mysqli_fetch_assoc($result)['password'];
            if(password_verify($password, $hash)){
              $_SESSION['nomor_induk'] = $nomor_induk;        
                header('Location: welcome.php');
              }                     
            //jika gagal maka akan menampilkan pesan error
            } else {
              $error =  'Data yang dimasukkan Salah !!';
          }     
        }else {
            $error =  'Data tidak boleh kosong !!';
        }	
      } 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="http://localhost/db_spd/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-win8.css">
    <script src="https://kit.fontawesome.com/989ba52bf2.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="http://localhost/db_spd/css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="http://localhost/db_spd/css/font-awesome.min.css">

    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="http://localhost/db_spd/css/elegant-fonts.css">

    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="http://localhost/db_spd/css/themify-icons.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="http://localhost/db_spd/css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="http://localhost/db_spd/style.css">
    <link rel="icon" type="img/png" href="http://localhost/db_spd/images/logo_spd.png">

    <title>SPD</title>
  </head>    
  <body class="bg">
    <header>
      <div class="nav-bar w3-win8-steel">
        <div class="container">
          <div class="row">
            <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
              <div class="site-branding d-flex align-items-center col-lg-6">
                <img class="d-block my-3" src="http://localhost/db_spd/images/logo_spd.png" alt="SPD Navbar" style="width: 80px;">&emsp;<h4 class="w3-helvetica font-italic">Sistem Pendidikan Daring</h4>
              </div><!-- .site-branding -->

              <nav class="site-navigation d-flex justify-content-end align-items-center col-lg-6">
                <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                  <div class="w3-container w3-hover-white badge-pill w3-button w3-yellow">
                    <a class="btn text-dark font-weight-bold" href="http://localhost/db_spd/pages/login.php" role="button">Masuk</a>
                  </div>&emsp;
                  <div class="w3-container w3-hover-white badge-pill w3-button w3-pale-blue">
                    <a class="btn text-dark font-weight-bold" href="http://localhost/db_spd/pages/register.php" role="button">Daftar</a>
                  </div>
                </ul>
              </nav><!-- .site-navigation -->

              <div class="hamburger-menu d-lg-none">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div><!-- .hamburger-menu -->
            </div><!-- .col -->
          </div><!-- .row -->
        </div><!-- .container -->
      </div><!-- .nav-bar -->
    </header>

	  <div class="container w3-win8-steel text-light rounded mt-5">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
          <img class="w-100 p-5"src="../images/logo_spd.png" alt="">
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 w3-helvetica">
          <div class="card w3-gray my-5 mx-5 border-light">
            <form class="form-container p-5" action="login.php" method="POST">
		          <div>
		            <h3 class="text-dark text-center font-weight-bold w3-san-serif">MASUK</h3>
		          </div>
		          <hr class="bg-light input-group">
		          <?php if($error != ''){ ?>
              <div class="alert alert-danger" role="alert"><?= $error; ?></div>
              <?php } ?>
		          <div class="form-group">
			          <label for="username">NIK/NISN</label>
			          <input class="form-control" type="text" name="nomor_induk" id="nomor_induk" placeholder="Masukkan NIK/NISN" aria-describedby="HelpId">
		          </div>

		          <div class="form-group">
			          <label for="password">Kata Sandi</label>
			          <input type="password" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="Masukkan Kata Sandi"> 
                  <input class="mt-3"type="checkbox" onclick="myFunction()"> Tampilkan kata sandi

                  <script>
                  function myFunction() {
                  var x = document.getElementById("password");
                  if (x.type === "password") {
                      x.type = "text";
                  } else {
                      x.type = "password";
                  }
                  }
                  </script>

	  			        <?php if($validate != '') {?>
                    <p class="text-danger"><?= $validate; ?></p>
                  <?php }?>
		          </div>
		          <button class="btn btn-outline-dark btn-lg btn-block badge-pill" type="submit" name="submit">Masuk</button><br>
              <div>
                <p class="text-light">Belum punya akun? <a href="register.php" class="badge badge-light p-2">Daftar</a></p>
              </div>
	          </form>
          </div>                
        </div>
      </div>  
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>