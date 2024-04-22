<!DOCTYPE html>
<html lang="hu">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css"> <!--connect the bootstrap-->
    <link rel="stylesheet" href="css/style.css"> <!--connect the main css-->
    <link rel="stylesheet" href="css/main.css">
    <title>Undög_Offical</title>  
</head>
<body>
    <div id="head" class="container-fluid">
        <div class="container-fluid"> 
            <img src="img/Title.png" class="" id="Title" alt="Title">
        </div>
    </div>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark">
        <div id="menu" class="container-fluid">
            <button id="navbtn" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                <ul class="navbar-nav col-lg-12">
                    <li id="index"><a class="nav-item" href="#">Rólunk</a></li>
                    <li><a class="nav-item" href="music.html">Zenék</a></li>
                    <li><a class="nav-item" href="photos.html">Képek</a></li>
                    <li><a class="nav-item" href="#news">Események</a></li>
                </ul>
            </div>
        </div> 
    </nav>
    <div id="main_picture" class="container-fluid ">
        <img src="img/background_img.JPG" alt="us" id="background_img">
    </div> 
    <div id="content" >
        <div id="debut" class="content_columns col-lg-3 col-sm-10 ">
            <h2>Rólunk</h2>
            <p>Az Undög vagyunk, egy olyan zenekar, amelyetet középsulis, és egyetemi diákok alkotnak. A zenekar tagjai között megtalálhatóak a legkülönbözőbb zenei ízlések képviselői, amelyeket a rock és a punk zenei stílusokban ötvözünk. A zenekar célja, hogy a hallgatók számára kellemes és szórakoztató zenét játsszon, amelyet élőben adunk elő különböző rendezvényeken. Ha szeretnél többet megtudni rólunk, látogass el a Facebook és Instagram oldalunkra.</p>
            <p>Ének, szólógitár: <b>Asztalos Bence</b><br>
            Gitár: <b onclick="location.href='https://www.facebook.com/undogofficial/';">Bihary Gergely</b><br>
            Doboknál: <b>Czombos Mátyás</b><br>
            Basszusgitár: <b>Simák Kristóf</b></p>
            <!--<a href="contact.html"><button>Tudj többet</button></a>-->
        </div>
        <div id="gallery" class="content_columns col-lg-3 col-sm-10">
            <h2 class="col-lg-12">Galéria</h2>
            <img src="img/Gallery1.jpg" alt="GergelyBihary" class="ContentGallery col-lg-5 col-sm-5">
            <img src="img/Gallery2.jpg" alt="GergelyBihary" class="ContentGallery col-lg-5 col-sm-5">
            <img src="img/Gallery3.jpg" alt="GergelyBihary" class="ContentGallery col-lg-5 col-sm-5">
            <img src="img/Gallery4.jpg" alt="GergelyBihary" class="ContentGallery col-lg-5 col-sm-5" ><br>
            <a href="photos.html" class="col-lg-12 col-sm-12"><button class="content_button">Több</button></a>
        </div>
        <div id="news"  class="content_columns col-lg-3 col-sm-10" >
            <h2>Események</h2>
            <div id="news_content">
                <?php
                require_once "events_write.php";
                ?>
            </div>
        </div>
    </div>
    <div id="footer" class="container-fluid">
        <ul> 
            <li class="soc_med_img"><img src="img/Instagram_img.png" ></li>
            <li><a href="https://www.instagram.com/undog_official/" target="_blank">Instagram</a></li>
            <li class="soc_med_img" id="soc_med_img_right"><img src="img/facebook_img.png" ></li>
            <li><a href="https://www.facebook.com/undogofficial" target="_blank">Facebook</a></li>
        </ul>
    </div>
    <!--<script src="js/events.js"></script>-->
    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>
