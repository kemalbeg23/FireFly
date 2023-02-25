<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Fire Fly</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style3.css">
</head>

<body>
    <!-- Header Start -->
    <header class="header">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="brand-name">
                    <a href="index.html">FIRE FLY</a>                   
                </div>
                <img src="FireFly.png" class="img-fluid">
                <div class="nav-toggle">
                    <span></span>
                </div>
                <nav class="nav">
                    <ul>
                        <li><a href="#home">Početna</a></li>
                        <li><a href="#about">O nama</a></li>
                        <li><a href="#services">Servisi</a></li>
                        <li><a href="#works">Mapa</a></li>
                        <li><a href="login_form.php">Logout</a></li>
                        <li class="btn-03">Dobro došao/la <?php echo $_SESSION ['user_name']?></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Početna Section Start -->
    <section class="home-section" id="home">
        <!-- shape -->
        
            <div class="row align-items-center">
                <div class="home-content">
                    <h4>Dobro došli na officialnu stranicu</h4>
                    <h1>FIRE FLY</h1>
                </div>
            </div>
            <div class="container2">
                
            </div>
        
        <!-- scroll down -->
        <a href="#about" class="scroll-down">
            <img src="icons/arrow-down.svg" alt="scroll Down">
        </a>
    </section>
    <!-- Početna Section End -->

    <!-- O nama Section Start -->
    <section class="about-section" id="about">
        <div class="container">
            <div class="row">
                <div class="about-img">
                    <div class="img-box">
                        
                        <img src="slika0.jpg"  alt="about me">
                    </div>
                </div>
                <div class="about-content">
                    <div class="row">
                        <div class="section-title">
                            <h1>O nama</h1>
                        </div>
                    </div>
                    <p>Fire Fly je jedinstvena zvanična stranica za vatrogasce koji
                        otklanjaju požare širom Bosne i Hercegovine. Jer naš posao je
                        da građani budu na prvom mjestu.
                    </p>

                    <div class="stats">
                        <div class="row">
                            <div class="stat-box">
                                <h2>15</h2>
                                <h5>Nagrada</h5>
                            </div>
                            <div class="stat-box">
                                <h2>50</h2>
                                <h5>Aktivnih vatrogasaca</h5>
                            </div>
                            <div class="stat-box">
                                <h2>10</h2>
                                <h5>Intervencija na dan</h5>
                            </div>
                            <div class="stat-box">
                                <h2>50000</h2>
                                <h5>Spašenih drveća</h5>
                            </div>
                        </div>
                    </div>                           
                    <a href="#services" class="btn btn-01" class="scroll-down" alt="scroll Down">Dalje</a>                                                     
                </div>
            </div>
        </div>
    </section>
    <!-- O nama Section End -->

    <!-- Servis Section Start -->
    <section class="service-section" id="services">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h1>Servisi</h1>
                </div>
            </div>
            <div class="row">
                <!-- servis Item Start -->
                <div class="service-item">
                    <div class="service-item-inner">
                        <img src="slika2.jpg" alt="service">
                        <div class="overlay">
                            <h4>Servis aparata za gašenje</h4>
                        </div>
                    </div>
                </div>
                <!-- servis Item End -->
                <!-- servis Item Start -->
                <div class="service-item">
                    <div class="service-item-inner">
                        <img src="img.jpg" alt="service">
                        <div class="overlay">
                            <h4>Servis naših vozila</h4>
                        </div>
                    </div>
                </div>
                <!-- servis Item End -->
            </div>
        </div>
        
        <br>
        
        <a href="#works" class="btn btn-02" class="scroll-down" alt="scroll Down">Dalje</a>
    </section>
    <!-- Servis Section End -->

    <!-- Mapa Section Start -->
    <section class="work-section" id="works">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h1>Fire Weather Index - FWI</h1>
                </div>                                                
                <img src="pozar.png" alt="Paris" class="center">
            </div>
        </div>
        <br>
        <br>
        <a href="#contact" class="btn btn-02" class="scroll-down" alt="scroll Down">Dalje</a>
        
    </section>
    <!-- Mapa Section End -->


    <!-- Kontakt Section Start -->
    <section class="contact-section" id="contact">
        <div class="container">
            <div class="row">
                
                
            </div>
            
                <div class="container1">
                    <img src="vatrogasci.jpg" alt="Snow" style="width:100%;">
                    <div class="centered">
                        <h1>Kontaktirajte nas!
                        <br>Prijavi požar!
                        <br>
                        <br>
                        <a href="prijavi_pozar.php" class="btn btn-02" class="scroll-down" alt="scroll Down">Prijavi požar!</a>
                        </h1>
                    </div>
                </div>
            
            
            <div class="row">
                <div class="contact-info">
                    <div class="row">
                        <!-- info item start -->
                        <br>
                        <div class="info-item">
                            <h5>Adresa</h5>
                            <p>Branilaca Starog Viteza 1, Vitez 72250</p>
                        </div>
                        <!-- info item end -->
                        <!-- info item start -->
                        <br>
                        <div class="info-item">
                            <h5>Telefon</h5>
                            <p> 030 520-004</p>
                        </div>
                        <!-- info item end -->
                        <!-- info item start -->
                        <br>
                        <div class="info-item">
                            <h5>Email</h5>
                            <p>Vatrogasci@gmail.com</p>
                        </div>
                        <!-- info item end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Kontakt Section End -->

    <!-- copyright text -->
    <p class="copyright">&copy;2023 Fire Fly</p>
    <script src="jquery.min.js"></script>
    <script src="main1.js"></script>
           
    <script type="text/javascript">
    function PreviewImage() {
      var oFReader = new FileReader();
      oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

      oFReader.onload = function (oFREvent) {
        document.getElementById("uploadPreview").src = oFREvent.target.result;
        console.log(document.getElementById("uploadPreview").src);

      };
    }
  </script>
</body>

</html>