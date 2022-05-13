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
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-2019.css">
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

        <title>SPD Homepage</title>
    </head>
    <body class="bg">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-dark w3-win8-steel fixed-top">
                <img class="img img-responsive" src="http://localhost/db_spd/images/logo_spd.png" style="width:80px;">&emsp;
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active w3-border-bottom w3-hover-gray badge-pill">
                            <a class="nav-link font-weight-bold" href="http://localhost/db_spd/pages/welcome.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown active font-weight-bold">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produk</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item w3-bar-item w3-button" href="http://localhost/db_spd/pages/pbelajar.php">Paket Belajar</a>
                                <a class="dropdown-item w3-bar-item w3-button" href="http://localhost/db_spd/pages/panggota.php">Paket Keanggotaan</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown active font-weight-bold">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sekolahku</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item w3-bar-item w3-button" href="http://localhost/db_spd/pages/laporb.php">Laporan Belajar</a>
                                <a class="dropdown-item w3-bar-item w3-button" href="http://localhost/db_spd/pages/ruangk.php">Ruang Kelas</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown active font-weight-bold">
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
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="http://localhost/db_spd/images/ruang2.jpg" alt="First slide">
                        <div class="carousel-caption w3-display-right w3-container w3-black rounded" style="opacity:60%;">
                        <h1>SISTEM PENDIDIKAN DARING</h1>
                        <h4 class="text-center w3-serif py-2 mb-5">Belajar apapun disini aja. Semua aplikasi belajar dalam satu web. Semua yang dibutuhkan untuk persiapan ulangan sekolah, PTS, PAS, UTBK, dan Ujian Mandiri<br>
                        </h4>
                    </div>
                </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="http://localhost/db_spd/images/ruang4jpg.jpg" alt="Second slide">
                <div class="carousel-caption w3-display-right w3-container w3-black rounded py-3" style="opacity:60%;">
                    <h1>Produk</h1>
                    <h4 class="text-center w3-serif pt-2 mb-5">Tentukan paket belajar mu disini. Mulai dari SPD Free, SPD Standard, dan SPD Plus. Tentukan juga paket keanggotaan mu, dimana beragam softskill bisa dipelajari. <br><br>
                    </h4>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="http://localhost/db_spd/images/ruang3.jpg" alt="Third slide">
                <div class="carousel-caption w3-display-right w3-container w3-black rounded" style="opacity:60%;">
                    <h1>Fitur</h1>
                    <h4 class="text-center w3-serif pt-2 mb-5">Berbagai macam fitur yang bisa didapatkan di SPD. SPD BOT yang berguna membantu anda menyelesaikan soal. SPD Library yang mana dapat dengan mudah menemukan materi pelajaran. Tryout Online yang membantu anda menghadapi ujian. Dan Webinar yang merupakan wadah dari berbagai webinar terkait dunia pendidikan.<br><br>
                    </h4>
                </div>
            </div>

            <a class="w3-button w3-black w3-display-left" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="w3-button w3-black w3-display-right" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="container-fluid mt-3">
            <div class="row px-5">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body w3-win8-cyan w3-hover-shadow rounded">
                            <h5 class="card-title text-center font-weight-bold">SPD Plus</h5><hr class="bg-light">
                            <p class="card-text">Merupakan paket terlengkap di SPD</p>
                            <p>- Untuk Individu</p>
                            <p>Mendapatkan full akses ke seluruh menu yang ada di SPD tanpa biaya tambahan. Kecuali menu Sekolahku.</p>
                            <div class="card w3-2021-marigold badge-pill text-dark text-center py-3">
                                <h5>Harga Rp 600.000/tahun</h5>
                            </div><br>
                            <p>- Untuk Sekolah</p>
                            <p>Mendapatkan full akses ke seluruh menu yang ada di SPD tanpa biaya tambahan. Di menu Sekolahku, Murid dan Guru dapat mengakses dengan lengkap, dan tanpa biaya tambahan. Untuk SPD Meet tidak dibatasi waktu pengunaannya.</p>
                            <div class="card w3-2021-marigold badge-pill text-dark text-center py-3">
                                <h5>Harga Rp 1.200.000/tahun</h5>
                            </div><br>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body w3-win8-blue w3-hover-shadow rounded">
                            <h5 class="card-title text-center font-weight-bold">SPD Standard</h5><hr class="bg-light">
                            <p class="card-text">Merupakan paket kedua di SPD</p>
                            <p>- Untuk Individu</p>
                            <p>Mendapatkan full akses ke seluruh menu yang ada. Namun untuk mengakses Paket Keanggotaan dikenakan biaya, jika user ikut dalam Paket Keanggotaan. Kecuali menu Sekolahku.</p>
                            <div class="card w3-2021-marigold badge-pill text-dark text-center py-3">
                                <h5>Harga Rp 240.000/tahun</h5>
                            </div><br>
                            <p>- Untuk Sekolah</p>
                            <p>Mendapatkan full akses ke seluruh menu yang ada. Namun untuk mengakses Paket Keanggotaan dikenakan biaya, jika user ikut dalam Paket Keanggotaan. Di menu Sekolahku, Murid dan Guru dapat mengakses dengan lengkap, dan tanpa biaya tambahan. Untuk SPD Meet dibatasi waktu pengunaannya, hanya 40 Menit dalam sekali meet.</p>
                            <div class="card w3-2021-marigold badge-pill text-dark text-center py-3">
                                <h5>Harga Rp 800.000/tahun</h5>
                            </div><br>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body w3-win8-indigo w3-hover-shadow rounded">
                            <h5 class="card-title text-center font-weight-bold">SPD Free</h5><hr class="bg-light">
                            <p class="card-text">SPD FREE merupakan paket awal di SPD yang hanya diperuntukan untuk individu.</p>
                            <p>Untuk Individu</p>
                            <p>Hanya dapat mengakses menu Fitur yaitu SPD Library. Untuk yang lainnya dikenakan biaya, jika mengambilnya. Untuk menu Sekolahku tidak dapat diakses.</p>
                            <div class="card w3-2021-marigold badge-pill text-dark text-center py-3">
                                <h5>Harga Rp 0</h5>
                            </div><br>
                        </div>
                    </div>
                </div>
            </div>
        </div><br>
        
        <div class="container-fluid mt-3 w3-highway-blue text-dark">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row p-5">
                        <div class="col">
                            <h1 class="w3-helvetica text-white">Alasan mengapa harus SPD!!</h1>
                        </div>
                    </div>
                    <div class="row px-5">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body w3-pale-blue">
                                <h1 class="w3-text-yellow">1</h1>
                                <h2 class="card-title font-weight-bold">Semua aplikasi dalam satu</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body w3-pale-blue">
                            <h1 class="w3-text-blue">2</h1>
                                <h3 class="card-title font-weight-bold">Harga yang ramah dikantong</h3>
                            </div>
                        </div>
                    </div>
                    </div><br>
                    <div class="row px-5 pb-5">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body w3-pale-blue">
                            <h1 class="w3-text-red">3</h1>
                                <h3 class="card-title font-weight-bold">Beragam fitur yang ditawarkan</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body w3-pale-blue">
                            <h1 class="w3-text-green">4</h1>
                                <h3 class="card-title font-weight-bold">Materi untuk semua jenjang sekolah</h3>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4 align-self-center">
                    <img class="w-100 p-2"src="http://localhost/db_spd/images/alasan1.png">
                </div>
            </div>
        </div>

        <div class="container-fluid py-4 w3-pale-yellow">
            <div class="container">
                <div class="text-white text-center">
                    <div class="row w3-2021-willow mySlides w3-animate-right p-5 mt-5 mb-5 rounded">
                        <div class="col">
                            <h2 class="w3-helvetica" style="text-decoration:underline;">Testimonials</h2>
                            <h2><img class="pc" src="http://localhost/db_spd/images/client.jpg" alt="Avatar" style="width: 200px;">
                            <h1 class="font-weight-bold">SPD sangat membantu saya dalam memahami materi.</h1><br>
                            <h3 class="text-center">"Waktu pertama kali menggunakan SPD masih agak asing. Tapi lama-lama kok nyaman make SPD. Eh, akhirnya keterusan sampe sekarang. Terimakasih SPD."</h3><br>
                            <h4 class="font-weight-bold pb-3"><i class="fas fa-user-circle"></i> Budi Setiawan, Bandung</h4>
                        </div>
                    </div>
                    <div class="row w3-2021-willow mySlides w3-animate-right p-5 mt-5 mb-5 rounded">
                        <div class="col">
                            <h2 class="w3-helvetica" style="text-decoration:underline;">Testimonials</h2>
                            <h2><img class="pc" src="http://localhost/db_spd/images/client.jpg" alt="Avatar" style="width: 200px;">
                            <h1 class="font-weight-bold">Fiturnya keren banget.</h1><br>
                            <h3 class="text-center">"Seneng banget ama SPD. Fiturnya beragam, mulai dari SPD BOT yang bantu banget ngerjain soal dari guru. SPD Library juga bagus bangeeeeet. The best lah buat SPD."</h3><br>
                            <h4 class="font-weight-bold pb-3"><i class="fas fa-user-circle"></i> Neneng, Surabaya</h4>
                        </div>
                    </div>
                    <div class="row w3-2021-willow mySlides w3-animate-right p-5 mt-5 mb-5 rounded">
                        <div class="col">
                            <h2 class="w3-helvetica" style="text-decoration:underline;">Testimonials</h2>
                            <h2><img class="pc" src="http://localhost/db_spd/images/client.jpg" alt="Avatar" style="width: 200px;">
                            <h1 class="font-weight-bold">Biaya langganannya murah.</h1><br>
                            <h3 class="text-center">"Dengar SPD sih dari kawan. Kirain SPD mahal kek web belajar yang lain. Eh taunya harganya aman banget dikantong. Mana banyak fiturnya juga."</h3><br>
                            <h4 class="font-weight-bold pb-3"><i class="fas fa-user-circle"></i> Dadang, Papua Barat</h4>
                        </div>
                    </div>
                </div>
            
                <script>
                var myIndex = 0;
                carousel();
                
                function carousel() {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";  
                    }
                    myIndex++;
                    if (myIndex > x.length) {myIndex = 1}    
                    x[myIndex-1].style.display = "block";  
                    setTimeout(carousel, 5000);    
                }
                </script>
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