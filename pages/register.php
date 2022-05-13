<?php
//menyertakan file program koneksi.php pada register
require('../config/koneksi.php');
//inisialisasi session
session_start();
 
$error = '';
$validate = '';
//mengecek apakah form registrasi di submit atau tidak
if( isset($_POST['submit']) ){
        // menghilangkan backshlases
        $nomor_induk = stripslashes($_POST['nomor_induk']);
        //cara sederhana mengamankan dari sql injection
        $nomor_induk = mysqli_real_escape_string($conn, $nomor_induk);
        $nama     = stripslashes($_POST['nama']);
        $nama     = mysqli_real_escape_string($conn, $nama);
        $umur     = stripslashes($_POST['umur']);
        $umur     = mysqli_real_escape_string($conn, $umur);
        $tempat_lahir     = stripslashes($_POST['tempat_lahir']);
        $tempat_lahir     = mysqli_real_escape_string($conn, $tempat_lahir);
        $tanggal_lahir     = stripslashes($_POST['tanggal_lahir']);
        $tanggal_lahir     = mysqli_real_escape_string($conn, $tanggal_lahir);
        $email    = stripslashes($_POST['email']);
        $email    = mysqli_real_escape_string($conn, $email);
        $status    = stripslashes($_POST['status']);
        $status    = mysqli_real_escape_string($conn, $status);
        $kelas    = stripslashes($_POST['kelas']);
        $kelas    = mysqli_real_escape_string($conn, $kelas);
        $password = stripslashes($_POST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        $repass   = stripslashes($_POST['repass']);
        $repass   = mysqli_real_escape_string($conn, $repass);
        //cek apakah nilai yang diinputkan pada form ada yang kosong atau tidak
        if(!empty(trim($nomor_induk)) && !empty(trim($nama)) && !empty(trim($umur)) && !empty(trim($tempat_lahir)) && !empty(trim($tanggal_lahir)) && !empty(trim($email)) && !empty(trim($status)) && !empty(trim($kelas)) && !empty(trim($password)) && !empty(trim($repass))){
            //mengecek apakah password yang diinputkan sama dengan re-password yang diinputkan kembali
            if($password == $repass){
                //memanggil method cek_nama untuk mengecek apakah user sudah terdaftar atau belum
                if( cek_nama($nama,$conn) == 0 ){
                    //hashing password sebelum disimpan didatabase
                    $pass  = password_hash($password, PASSWORD_DEFAULT);
                    //insert data ke database
                    $query = "INSERT INTO user (nomor_induk,nama,umur,tempat_lahir,tanggal_lahir,email, status, kelas, password ) VALUES ('$nomor_induk','$nama','$umur','$tempat_lahir','$tanggal_lahir','$email','$status','$kelas','$pass')";
                    $result   = mysqli_query($conn, $query);
                    //jika insert data berhasil maka akan diredirect ke halaman index.php serta menyimpan data username ke session
                    if ($result) {
                        $_SESSION['nomor_induk'] = $nomor_induk;
                        
                        header('Location: login.php');
                     
                    //jika gagal maka akan menampilkan pesan error
                    } else {
                        $error =  'Register User Gagal !!';
                    }
                }else{
                        $error =  'Nomor Induk sudah terdaftar !!';
                }
            }else{
                $validate = 'Password tidak sama !!';
            }
             
        }else {
            $error =  'Data tidak boleh kosong !!';
        }
    } 
    //fungsi untuk mengecek username apakah sudah terdaftar atau belum
    function cek_nama($nomor_induk,$conn){
        $nama = mysqli_real_escape_string($conn, $nomor_induk);
        $query = "SELECT * FROM user WHERE nomor_induk = '$nama'";
        if( $result = mysqli_query($conn, $query) ) return mysqli_num_rows($result);
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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

    <title>Daftar SPD</title>
  </head>    
  <body class="body">
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
              <div class="w3-container w3-hover-white badge-pill w3-button w3-pale-blue">
                <a class="btn text-dark font-weight-bold" href="http://localhost/db_spd/pages/login.php" role="button">Masuk</a>
              </div>&emsp;
              <div class="w3-container w3-hover-white badge-pill w3-button w3-yellow">
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

	  <div class="container-fluid w-50 w3-win8-steel text-light rounded  mt-5 mb-2 w3-helvetica">
	    <form class="form p-5" action="register.php" method="POST">
		    <div>
		      <h2 class="text-light text-center"><b>DAFTAR</b></h2>
		    </div>
		    <hr class="bg-light">
        <?php if($error != ''){ ?>
        <div class="alert alert-danger" role="alert"><?= $error; ?></div>
        <?php } ?>
        <div class="form-group">
			    <label for="">NIK/NISN</label>
			    <input type="text" class="form-control" name="nomor_induk" id="nomor_induk" aria-describedby="helpId" placeholder="🖋 Masukkan NIK/NISN">
		    </div>
		    <div class="form-group">
			    <label for="">Nama</label>
			    <input type="text" class="form-control" name="nama" id="nama" aria-describedby="helpId" placeholder="🖋 Masukkan Nama Lengkap">
		    </div>
        <div class="form-group">
			    <label for="">Umur</label>
			    <input type="text" class="form-control" name="umur" id="umur" aria-describedby="helpId" placeholder="🖋 Masukkan Umur">
		    </div>
        <div class="form-group">
			    <label for="">Tempat Lahir</label>
			    <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" aria-describedby="helpId" placeholder="🖋 Masukkan Tempat Lahir">
		    </div>
        <div class="form-group">
			    <label for="">Tanggal Lahir</label>
			    <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" aria-describedby="helpId" placeholder="🖋 Masukkan Tanggal Lahir">
		    </div>
		    <div class="form-group">
			    <label for="">Email</label>
			    <input type="text" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="📧 Masukkan Email">
		    </div>
		    <div class="form-group">
			    <label for="">Status</label><br>
          <input type="radio" id="guru" name="status" value="guru" checked>
          <label for="guru">Guru</label><br>
          <input type="radio" id="siswa" name="status" value="siswa">
          <label for="siswa">Siswa</label>
        </div>
        <div class="form-group">
          <label for="">Kelas</label>
          <select class="custom-select" name="kelas" id="kelas" aria-describedby="helpId">
            <option value="1">1 SD</option>
            <option value="2">2 SD</option>
            <option value="3">3 SD</option>
            <option value="4">4 SD</option>
            <option value="5">5 SD</option>
            <option value="6">6 SD</option>
            <option value="7">1 SMP</option>
            <option value="8">2 SMP</option>
            <option value="9">3 SMP</option>
            <option value="10">1 SMA/K</option>
            <option value="11">2 SMA/K</option>
            <option value="12">3 SMA/K</option>
            <option value="13">Guru</option>
          </select>
        </div>
        <div class="form-group">
			    <label for="">Kata Sandi</label>
			    <input type="password" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="Masukkan Kata Sandi">
          <input type="checkbox" onclick="myFunction()">Tampilkan Kata Sandi
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
        <div class="form-group">
			    <label for="">Ketik Ulang Kata Sandi</label>
			    <input type="password" class="form-control" name="repass" id="repass" aria-describedby="helpId" placeholder="Masukkan Ulang Kata Sandi">
          <?php if($validate != '') {?>
            <p class="text-danger"><?= $validate; ?></p>
          <?php }?>
		    </div><br>
        <button type="submit" name="submit" class="btn btn-outline-light btn-lg btn-block badge-pill text-light w3-hover-text-black">Daftar</button><br>
		    <div>
			    <h5 class="text-light">Sudah punya akun? <a href="login.php" class="badge badge-light p-2">Masuk</a></h5>
		    </div>
	    </form>
	  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>