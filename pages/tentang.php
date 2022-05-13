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
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-2019.css">
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

        <title>Tentang SPD</title>
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
                            <a class="nav-link font-weight-bold w3-border-bottom w3-hover-gray badge-pill" href="http://localhost/db_spd/pages/tentang.php">Tentang <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                    <a class="btn text-light" href="http://localhost/db_spd/pages/profil.php" role="button" data-toggle="tooltip" data-placement="bottom" title="Profil Anda"><i class="fas fa-user"></i></a>
                    <a class="btn text-light" href="http://localhost/db_spd/pages/logout.php" role="button" data-toggle="tooltip" data-placement="bottom" title="Keluar"><i class="fas fa-sign-out-alt"></i></a>
                </div>
            </nav>
        </div><br><br><br>
    
        <div class="container w-75 w3-pale-yellow mt-5 p-5 w3-border w3-hover-shadow">
            <h2 class="w3-serif mt-4" style="text-decoration:underline;">Lebih Dekat dengan SPD</h2>
            <p class="w3-serif text-justify ml-4 mt-3">SPD (Sistem Pendidikan Daring) adalah aplikasi belajar daring yang bertujuan untuk memudahkan kegiatan belajar mengajar di masa pandemi sekarang. Yang dimana hampir seluruh siswa dan guru, melakukan kegiatan belajar mengajar dengan daring. Selain itu, juga terdapat berbagai kelas tambahan. Untuk meningkatkan softskill pengguna.<br>
            Dengan SPD, interaksi murid dan guru dapat lebih efektif, karena semuanya dapat dilakukan di satu aplikasi yaitu SPD. Mulai dari pemberian tugas, dan juga meeting online. Sehingga orang tua tidak khawatir dalam membimbing anaknya belajar daring. <br>
            Fokus SPD adalah meningkatkan kualitas pendidikan di Indonesia, terutama dalam pendidikan daring. Yang dimana sesuai dengan visi besar kami yaitu bagaimana seluruh unsur pendidikan dapat dengan mudah melakukan kegiatan belajar mengajar. Mulai dari SD hingga SMA/SMK dapat menggunakan aplikasi ini dengan mudah. <br>
            Berikut adalah produk-produk dan fitur yang terdapat di SPD.</p>
            <br>
            <h2 class="w3-serif mb-3" style="text-decoration:underline;">Produk</h2>
            <ol type="A">
                <li>Paket Belajar</li>
                <p class="text-justify">Merupakan paket-paket yang ditawarkan dalam penggunaan SPD. Terdiri dari 3 Paket belajar dimana masing-masing memiliki akses yang berbeda-beda. Paket belajar dibagi dalam 2 jenis user yaitu individu dan sekolah. Berikut adalah Paket Belajar yang terdapat di SPD beserta akses yang didapatkan.
                    <ol type="1">
                        <li>SPD PLUS</li>
                        <p>SPD PLUS merupakan paket terlengkap di SPD.
                            <ul>
                                <li>Untuk Individu</li>
                                <p class="text-justify">Mendapatkan full akses ke seluruh menu yang ada di SPD tanpa biaya tambahan. Kecuali menu Sekolahku.</p>
                                <li>Untuk Sekolah</li>
                                <p class="text-justify">Mendapatkan full akses ke seluruh menu yang ada di SPD tanpa biaya tambahan. Di menu Sekolahku, Murid dan Guru dapat mengakses dengan lengkap, dan tanpa biaya tambahan. Untuk SPD Meet tidak dibatasi waktu pengunaannya.</p>
                            </ul>
                        </p>
                        <li>SPD STANDARD</li>
                        <p>SPD STANDARD merupakan paket kedua di SPD.
                            <ul>
                                <li>Untuk Individu</li>
                                <p class="text-justify">Mendapatkan full akses ke seluruh menu yang ada. Namun untuk mengakses Paket Keanggotaan dikenakan biaya, jika user ikut dalam Paket Keanggotaan. Kecuali menu Sekolahku.</p>
                                <li>Untuk Sekolah</li>
                                <p class="text-justify">Mendapatkan full akses ke seluruh menu yang ada. Namun untuk mengakses Paket Keanggotaan dikenakan biaya, jika user ikut dalam Paket Keanggotaan. Di menu Sekolahku, Murid dan Guru dapat mengakses dengan lengkap, dan tanpa biaya tambahan. Untuk SPD Meet dibatasi waktu pengunaannya, hanya 40 Menit dalam sekali meet.</p>
                            </ul>
                        </p>
                        <li>SPD FREE</li>
                        <p>SPD FREE merupakan paket awal di SPD yang hanya diperuntukan untuk individu.
                            <ul>
                                <li>Untuk Individu</li>
                                <p class="text-justify">Hanya dapat mengakses menu Fitur yaitu SPD Library. Untuk yang lainnya dikenakan biaya, jika mengambilnya. Untuk menu Sekolahku tidak dapat diakses.</p>
                            </ul>
                        </p>
                    </ol>
                </p>
                <li>Paket Keanggotaan</li>
                <p class="text-justify">Merupakan Paket yang diperuntukkan untuk menambah softskill pengguna. Berisi materi-materi yang terkait. Mentor-mentornya merupakan ahli dibidangnya. Bekerja sama dengan Pemerintah maupun Pihak Swasta lain, dalam penyelenggaraan Paket Keanggotaan.
                    <ol type="1">
                        <li>SPD English</li>
                        <p class="text-justify">Merupakan wadah yang dimana didalamnya mempelajari Bahasa Inggris lebih dalam. Selain itu juga berisi prediksi-prediksi soal terkait Sertifikasi Bahasa Inggris, yaitu IELTS, TOEFL, TOEIC, dll. Dapat diakses untuk semua pengguna, baik individu maupun sekolah.</p>
                        <li>SPD Privat</li>
                        <p class="text-justify">Merupakan wadah yang dimana didalamnya mempelajari mata pelajaran terkait sesuai dengan tingkat kelasnya. Dapat diakses untuk semua pengguna, baik individu maupun sekolah.</p>
                        <li>SPD Skill</li>
                        <p class="text-justify">Merupakan wadah yang dimana didalamnya mempelajari beragam softskill. Sesuai dengan bidang yang akan dipelajari. Dapat diakses untuk semua pengguna, baik individu maupun sekolah.</p>
                    </ol>
                </p>
            </ol><br>
            <h2 class="w3-serif" style="text-decoration:underline;">Fitur</h2>
            <p class="w3-serif text-center ml-5 mr-5 mt-3">
            <ol type="A">
                <li>SPD BOT</li>
                <p class="text-justify">Merupakan fitur yang berfungsi untuk membantu user menyelesaikan soal. Selain itu juga diberikan video terkait materi soal yang ditanyakan.</p>
                <li>SPD Library</li>
                <p class="text-justify">Merupakan fitur yang berfungsi untuk membantu user dalam mencari materi terkait tergantung kelas yang dipilih.</p>
                <li>Tryout Online</li>
                <p class="text-justify">Merupakan fitur yang berfungsi untuk membantu user dalam belajar menghadapi Tryout. Dimana terdapat berbagai macam soal-soal, dan juga video pembahasan soal tersebut.</p>
                <li>Webinar</li>
                <p class="text-justify">Merupakan fitur yang berfungsi sebagai wadah webinar (web seminar). Pengguna dapat dengan mudah menemukan berbagai webinar yang akan datang. Para narasumber webinar merupakan ahli dibidang topik webinar terkait.</p>
            </ol>
        </div>
  
        <div class="container w-75 w3-pale-yellow my-3 p-5 w3-border w3-hover-shadow">
            <h2 class="w3-serif text-center underline">Our Works</h2>
            <p class="w3-serif text-center ml-5 mr-5 mt-3">Browse through our professional portfolio.</p>
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