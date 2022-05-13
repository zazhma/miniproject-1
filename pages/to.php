<?php 
 
 session_start();
  
 if (!isset($_SESSION['nomor_induk'])) {
     header("Location: http://localhost/db_spd/pages/welcome.php");
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
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-2021.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
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
        <link rel="icon" type="img/png" href="http://localhost/db_spd/images/logo_spd.png">
        <link rel="stylesheet" href="http://localhost/db_spd/style.css">

        <title>Tryout Online</title>
    </head>
    <body>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-dark w3-win8-steel fixed-top">
                <img class="img img-responsive" src="http://localhost/db_spd/images/logo_spd.png" style="width:80px;">&emsp;
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link font-weight-bold" href="http://localhost/db_spd/pages/welcome.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown active font-weight-bold">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produk</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item w3-bar-item w3-button" href="http://localhost/db_spd/pages/pbelajar.php">Paket Belajar</a>
                                <a class="dropdown-item w3-bar-item w3-button" href="http://localhost/db_spd/pages/panggota.php">Paket Keanggotaan</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown active font-weight-bold ">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sekolahku</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item w3-bar-item w3-button" href="http://localhost/db_spd/pages/laporb.php">Laporan Belajar</a>
                                <a class="dropdown-item w3-bar-item w3-button" href="http://localhost/db_spd/pages/ruangk.php">Ruang Kelas</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown active font-weight-bold w3-border-bottom w3-hover-gray badge-pill">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Fitur</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item w3-bar-item w3-button" href="http://localhost/db_spd/pages/spdbot.php">SPD BOT</a>
                                <a class="dropdown-item w3-bar-item w3-button" href="http://localhost/db_spd/pages/spdlib.php">SPD Library</a>
                                <a class="dropdown-item w3-bar-item w3-button" href="http://localhost/db_spd/pages/to.php">Tryout Online</a>
                                <a class="dropdown-item w3-bar-item w3-button" href="http://localhost/db_spd/pages/webinar.php">Webinar</a>
                            </div>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link font-weight-bold" href="http://localhost/db_spd/pages/blog.php">Blog <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link font-weight-bold" href="http://localhost/db_spd/pages/tentang.php">Tentang <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                    <a class="btn text-light" href="http://localhost/db_spd/pages/profil.php" role="button" data-toggle="tooltip" data-placement="bottom" title="Profil Anda"><i class="fas fa-user"></i></a>
                    <a class="btn text-light" href="http://localhost/db_spd/pages/logout.php" role="button" data-toggle="tooltip" data-placement="bottom" title="Keluar"><i class="fas fa-sign-out-alt"></i></a>
                </div>
            </nav>
        </div><br><br><br>

        <div class="container-fluid mt-5">
            <div class="jumbotron jumbotron-fluid w3-panel w3-leftbar w3-border-yellow w3-pale-yellow">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <h1 class="display-4 font-weight-bold">Tryout Online</h1>
                            <p class="lead">Tryout Online merupakan fitur yang membantu pengguna dalam menghadapi ujian. Baik dari PTS, PAS, dan UTBK.</p>
                            <div class="w3-display-bottomleft pl-3">
                                <h2>Kelas</h2>
                                <div class="row">
                                    <div class="col">
                                    <select class="custom-select border-dark" name="kelas" id="kelas" aria-describedby="helpId" style="width:700px;">
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
                                    </select>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                        <div class="col-lg-4">
                        <img class="w-100" src="http://localhost/db_spd/images/sejarah.png" alt="logo" >
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid w3-khaki p-5">
            <div class="container">
                <h1 class="w3-helvetica">Tryout yang akan datang</h1><br>
                <div class="row">
                    <div class="col">
                        <div class="card p-3 w3-pale-yellow">
                        <h4>Prediksi PAS - Matematika</h4><br>
                        <h6>Mulai pada 29th Nov 2021 7:00 AM</h6>
                        <button class="w-25 w3-display-bottomright badge-pill w3-amber pr-2 mb-2 mr-2"><h6 class="pt-1 font-weight-bold">Ikut</h6></button>
                        </div>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col">
                        <div class="card p-3 w3-pale-yellow">
                        <h4>Prediksi PAS - Matematika</h4><br>
                        <h6>Mulai pada 29th Nov 2021 7:00 AM</h6>
                        <button class="w-25 w3-display-bottomright badge-pill w3-amber pr-2 mb-2 mr-2"><h6 class="pt-1 font-weight-bold">Ikut</h6></button>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <div class="card p-3 w3-pale-yellow">
                        <h4>Prediksi PAS - Matematika</h4><br>
                        <h6>Mulai pada 29th Nov 2021 7:00 AM</h6>
                        <button class="w-25 w3-display-bottomright badge-pill w3-amber pr-2 mb-2 mr-2"><h6 class="pt-1 font-weight-bold">Ikut</h6></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid pt-4">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center font-weight-bold">
                        <li class="page-item">
                        <a class="page-link text-dark" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                        </li>
                        <li class="page-item"><a class="page-link text-dark" href="#">1</a></li>
                        <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
                        <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
                        <li class="page-item">
                        <a class="page-link text-dark" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="w3-container w3-win8-steel text-center p-3">
            <div class="row">
                <div class="col-lg-4">
                    <p class="font-weight-bold">Follow us on :</p>
                    <p><i class="fab fa-facebook">&emsp;</i><i class="fab fa-instagram">&emsp;</i><i class="fab fa-pinterest"></i></i></p>
                </div>
                <div class="col-lg-4 ">
                    <p class="font-weight-bold">Subscibe to our premium access</p>
                    <p>
                        <form class="form-inline">&emsp;&emsp;
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="inputPassword2" class="sr-only">Enter your email</label>
                            <input type="password" class="form-control" id="inputPassword2" placeholder="Enter your email*">
                        </div>
                        <button type="submit" class="w3-button w3-black mb-2">Subscribe</button>
                        </form>
                    </p>
                </div>
                <div class="col-lg-4">
                    <p class="font-weight-bold">Contact Us :</p>
                    <p>010-171-101 | admin@gmail.com</p>
                </div>
            </div>
            <div class="row">
                <div class="col mt-4">
                    <div class="mt-3">
                        <p class="text-black text-center">@2021 Key. All Right Reserved | Design by Y&Z</p>
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