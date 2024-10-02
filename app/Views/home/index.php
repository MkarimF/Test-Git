<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MaGer EduApp</title>

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:400,500,700|Sansita:400,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" media="all" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css" />

    <link rel="stylesheet" id="animate-css" href="css/animate.css" type="text/css" media="all" />
    <link rel="stylesheet" id="general-css" href="css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" id="tablet-css" href="css/tablet.css" type="text/css" media="screen and (max-width: 768px)" />
    <link rel="stylesheet" id="mobile-css" href="css/mobile.css" type="text/css" media="screen and (max-width: 768px)" />

    <style>
        .form-control {
            border: none;
            outline: none;
            width: 100%;
            display: block;
            background-color: #f1f1f1;
            height: 77px;
            padding-left: 40px;
            margin-bottom: 10px;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
        }

        video {
            position: relative;
            width: 80%;
            height: 350px;
            left: 0;
        }

        #about-image img {
            position: relative;
            width: 70%;
            height: 350px;
            left: 20%;
            right: 0;
        }
    </style>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>

    <link rel="icon" href="images/icon.png" />
</head>

<body>
    <div class="wrapper">
        <div id="scroll-top" class="scroll-top animated bounceOutDown">
            <i class="fas fa-caret-up"></i>
        </div>
        <!-- header -->
        <header id="header" class="header">
            <div class="container container-navbar">
                <!-- navbar -->
                <nav class="navbar">
                    <div class="navbar-brand font-heading bold wow bounceInLeft">
                        <a href="/" class="navbar-link">
                            <img src="images/icon.png" alt="" class="logo-image" />
                            <div class="logo-text">MaGer EduApp</div>
                        </a>
                        <div class="navbar-toggle">
                            <i class="fas fa-bars"></i>
                        </div>
                    </div>
                    <ul class="navbar-nav" data-show="false">
                        <li class="wow bounceIn" data-wow-delay="0.3s"><a href="/">HOME</a></li>
                        <li class="wow bounceIn" data-wow-delay="0.6s"><a href="/latihan">LATIHAN</a></li>
                        <li class="wow bounceIn" data-wow-delay="0.9s"><a href="/materi">MATERI</a></li>
                        <li class="wow bounceIn" data-wow-delay="1.2s"><a href="/quiz">TES</a></li>
                        <li class="wow bounceIn" data-wow-delay="1.5s"><a href="login.php">MASUK</a></li>
                        <li class="wow bounceIn" data-wow-delay="1.8s"><a href="#footer" class="link-to-element">KONTAK</a></li>
                    </ul>
                </nav>
                <!-- navbar -->
            </div>
            <div class="container">
                <!-- header main -->
                <div class="header-main">
                    <h1 class="header-title animated fadeInLeft">
                        <span> Selamat Datang di Situs Web MaGer </span>
                    </h1>

                    <h4 class="header-description text-muted animated fadeInLeft header-description-display" style="margin-bottom: 0; color: white">
                        Halo! Ini adalah situs web MaGer. Apa itu MaGer? MaGer adalah singkatan dari “Matematika Gampang dan Seru”.
                    </h4>
                    <a href="#welcome" class="header-btn btn btn-primary animated fadeInLeft"> Selengkapnya Tentang Website<i class="fas fa-arrow-right btn-icon"></i> </a>
                </div>
                <!-- header main -->
            </div>
        </header>
        <!-- header -->

        <section id="welcome" class="welcome">
            <div class="container-2">
                <h2 class="welcome-title wow fadeInUp text-center title-spacing">
                    <span class="title-primary"><i class="fas fa-info-circle"></i> Tutorial Pendahuluan Home Page</span>
                </h2>
                <div class="welcome-content">
                    <video src="Video/Video.mkv" poster="Image/logo_upi.png" muted controls loop></video>
                </div>
                <h3 class="about-title wow fadeInUp"><span class="title-primary"><i class="fas fa-eye"></i> Fitur-fitur di web ini, apabila adik-adik ingin menggunakannya, simak baik-baik yaa!</span>
            </div>
        </section>

        <!-- about us -->
        <h2 class="welcome-title wow fadeInUp text-center title-spacing">
            <span class="title-primary"><i class="fas fa-info-circle"></i> Tombol LATIHAN</span>
            <div class="about-description text-muted wow fadeInUp">
                Apabila adik-adik meng-klik atau menekan tombol “LATIHAN” yang terdapat pada navigasi di atas, maka akan tampil halaman seperti ini :
            </div>
        </h2>
        <section id="about" class="about">
            <div class="container grid">
                <div class="about-image">
                    <img src="images/pglatsoal.png" alt="" class="wow flipInX tilt" />
                </div>
                <div class="about-text" id="tentang">
                    <div class="about-description text-muted wow fadeInUp">
                        Nah, halaman Latihan ini terdapat pilihan soal yang adik-adik bisa kerjakan, berfungsi sebagai tempat adik-adik mengerjakan soal dari yang termudah hingga yang tersulit.
                        Yang nantinya skor/nilai adik-adik dalam mengerjakan soal akan tercatat oleh sistem untuk melihat data peringkat kemampuan adik-adik semua.
                    </div>
                    <a href="tentang.html" class="btn btn-primary wow zoomIn" data-wow-delay="0.3s" style="float: right"> Selengkapnya <i class="fas fa-arrow-right btn-icon"></i> </a>
                </div>
            </div>
        </section>

        <h2 class="welcome-title wow fadeInUp text-center title-spacing">
            <span class="title-primary"><i class="fas fa-info-circle"></i> Tombol MATERI</span>
            <div class="about-description text-muted wow fadeInUp">
                Apabila adik-adik meng-klik atau menekan tombol “MATERI” yang ada diatas, maka akan tampil halaman seperti ini :
            </div>
        </h2>
        <section id="about" class="about">
            <div class="container grid">
                <div class="about-image">
                    <img src="images/pgmateri.png" alt="" class="wow flipInX tilt" />
                </div>
                <div class="about-text" id="tentang">
                    <div class="about-description text-muted wow fadeInUp">
                        Pada halaman Materi ini akan banyak terdapat pilihan soal yang adik-adik bisa kerjakan, berfungsi sebagai tempat adik-adik mengerjakan soal dari yang termudah hingga yang tersulit.
                        Yang nantinya skor/nilai adik-adik dalam mengerjakan soal akan tercatat oleh sistem untuk melihat data peringkat kemampuan adik-adik semua.
                    </div>
                    <a href="tentang.html" class="btn btn-primary wow zoomIn" data-wow-delay="0.3s" style="float: right"> Selengkapnya <i class="fas fa-arrow-right btn-icon"></i> </a>
                </div>
            </div>
        </section>

        <h2 class="welcome-title wow fadeInUp text-center title-spacing">
            <span class="title-primary"><i class="fas fa-info-circle"></i> Tombol TES</span>
            <div class="about-description text-muted wow fadeInUp">
                Apabila adik-adik meng-klik atau menekan tombol “TES” yang ada diatas, maka akan tampil halaman seperti ini :
            </div>
        </h2>
        <section id="about" class="about">
            <div class="container grid">
                <div class="about-image">
                    <img src="images/sekolah.jpg" alt="" class="wow flipInX tilt" />
                </div>
                <div class="about-text" id="tentang">
                    <div class="about-description text-muted wow fadeInUp">
                        Pada halaman TES ini akan banyak terdapat pilihan soal yang adik-adik bisa kerjakan, berfungsi sebagai tempat adik-adik mengerjakan soal dari yang termudah hingga yang tersulit.
                        Yang nantinya skor/nilai adik-adik dalam mengerjakan soal akan tercatat oleh sistem untuk melihat data peringkat kemampuan adik-adik semua.
                    </div>
                    <a href="tentang.html" class="btn btn-primary wow zoomIn" data-wow-delay="0.3s" style="float: right"> Selengkapnya <i class="fas fa-arrow-right btn-icon"></i> </a>
                </div>
            </div>
        </section>

        <h2 class="welcome-title wow fadeInUp text-center title-spacing">
            <span class="title-primary"><i class="fas fa-info-circle"></i> Tombol MASUK</span>
            <div class="about-description text-muted wow fadeInUp">
                Apabila adik-adik meng-klik atau menekan tombol “MASUK” yang ada diatas, maka akan tampil halaman seperti ini :
            </div>
        </h2>
        <section id="about" class="about">
            <div class="container grid">
                <div class="about-image">
                    <img src="images/sekolah.jpg" alt="" class="wow flipInX tilt" />
                </div>
                <div class="about-text" id="tentang">
                    <div class="about-description text-muted wow fadeInUp">
                        Halaman MASUK akan digunakan terlebih dahulu untuk adik adik masuk/mendaftar akun nya masing-masing.
                        dalam mengakses tombol-tombol diatas, adik-adik harus MASUK/LOGIN terlebih dahulu. apabila adik-adik belum masuk/login, setiap mengakses tombol diatas, otomatis akan ke halaman masuk terlebih dahulu.
                    </div>
                    <a href="tentang.html" class="btn btn-primary wow zoomIn" data-wow-delay="0.3s" style="float: right"> Selengkapnya <i class="fas fa-arrow-right btn-icon"></i> </a>
                </div>
            </div>
        </section>

        <!-- about us -->
        <footer id="footer" class="footer" style="margin-top: -5px">
            <div class="item">tes</div>
            <div class="container grid">
                <div class="item">
                    <a href="/" class="navbar-link">
                        <img src="images/icon.png" alt="" class="footer-logo wow zoomIn" data-wow-duration="0.3s" />
                        <div class="wow bounceInLeft" data-wow-delay="0.3s">
                            <strong>MaGer EduApp</strong>
                        </div>
                    </a>
                </div>

                <div class="item">
                    <h3 class="footer-title wow fadeInLeft">Kontak</h3>
                    <ul class="footer-list">
                        <li class="wow bounceInLeft" data-wow-delay="0.3s"><i class="list-icon fas fa-map-marker-alt"></i>
                            Jl. Jendral Ahmad Yani No.329, Sukamaju, Kec. Cibeunying Kidul, <br>
                            Kota Bandung, Jawa Barat
                        </li>
                        <li class="wow bounceInLeft" data-wow-delay="0.6s"><i class="list-icon fas fa-phone-square"></i>0853-2412-1041</li>
                        <li class="wow bounceInLeft" data-wow-delay="0.9s"><i class="list-icon fas fa-envelope"></i>mager.promnet@gmail.com</li>
                    </ul>
                </div>

                <div class="item">
                    <h3 class="footer-title wow fadeInLeft">Sosial Media</h3>
                    <ul class="footer-list">
                        <li class="wow bounceInLeft" data-wow-delay="1.2s">
                            <a href="https://www.youtube.com/channel/UCTr4sI6z2iGgCqcpMOkjXhQ" target="_blank"> <i class="list-icon fab fa-youtube"></i> YouTube </a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/tilt.js"></script>
    <script type="text/javascript" src="js/initialize.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>