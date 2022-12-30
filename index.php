<?php
/*if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off"){
    $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $redirect);
    exit();
}*/
include 'functions.php';
//if(empty($_SESSION[login]))
    //header("location:login.php");
?>
<!DOCTYPE html>
<html lang="en" id="home">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    
    <link rel="icon" href="img/logo1.png" />
    <!-- <link rel="canonical" href="https://sarjanakomedi.com/demo/spk-smart/" /> -->
    
    <title>Pemilihan BP PAM</title>
    <link href="assets/css/lumen-bootstrap.min.css" rel="stylesheet"/>
    <link href="assets/css/general.css" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/css/bootstrap.min.cs">
    <link rel="stylesheet" href="assets/css/style.css">

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>           
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand page-scroll" href="?=home">KLASIS PORT NUMBAY</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <?php if($_SESSION['login']):?>
            <li><a href="?m=kriteria" id="#kriteria" ><span class="glyphicon glyphicon-th-large"></span> Kriteria</a></li>
            <li class="dropdown">
                <a href="?m=alternatif" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Alternatif <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="?m=alternatif"><span class="glyphicon glyphicon-user"></span> Alternatif</a></li>
                    <li><a href="?m=rel_alternatif"><span class="glyphicon glyphicon-star"></span> Nilai Alternatif</a></li>
                </ul>
            </li>
            <li><a href="?m=hitung"><span class="glyphicon glyphicon-calendar"></span> Perhitungan</a></li>    
            <!-- <li><a href="?m=password"><span class="glyphicon glyphicon-lock"></span> Password</a></li> -->
            <li><a href="aksi.php?act=logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li> 
        <?php else: ?> 
            <li><a href="#alternatif" class="page-scroll"> Alternatif</a></li>
            <li><a href="#about" class="page-scroll"> About</a></li>
            <li><a href="#portfolio" class="page-scroll"> Portfolio</a></li>
            <li><a href="#contact" class="page-scroll"> Contact</a></li>
            <li><a href="?m=login" class="page-scroll"> Login</a></li> 
        <?php endif?>                
    </ul>          
</div>
</div>
</nav>
<!-- akhir navbar -->


<!-- jumbotron -->
<div class="jumbotron text-center" >
    <img src="img/pamklasis.jpg" class="img-circle">
    <h1>PAM KLASIS PORT NUMBAY</h1>
    <p>Alamat: Jl. Ahmad Yani No.3, Gurabesi, Jayapura Utara, Kota Jayapura, Papua 99222</p>
</div>



<div class="container">
    <!--<center><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>-->
        <!-- Spanduk Utama -->
<!--<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-6386401534449923"
     data-ad-slot="8340411336"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></center>-->
<?php

if(!in_array($mod, array('login', 'password', 'hitung')) && !$_SESSION['login'])
    $mod='home';
if(file_exists($mod.'.php'))
    include $mod.'.php';
else
    include 'home.php';
?>
</div>

<footer>
    <div class="container text-center">
        <div class="row">
          <div class="col-sm-12">
            <p>&copy; Powered by. <a href="https://instagram.com/napi.sup" target="_blank">Napi Sup</a>.</p>
        </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <a href="https://www.youtube.com/channel/UCsFt7PLt8cKHgBtASSmEn7A" target="_blank" class="btn btn-danger"><i class="glyphicon glyphicon-play"></i> Subscribe to YouTube</a>
    </div>
</div>
</div>
</footer>

<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/jquery.easing.1.3.js"></script>

<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>