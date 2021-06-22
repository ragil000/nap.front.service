<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    
    <!--====== Title ======-->
    <title>Notification App</title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="<?=base_url('user_template/')?>assets/images/favicon.png" type="image/png">
        
    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="<?=base_url('user_template/')?>assets/css/animate.css">
        
    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="<?=base_url('user_template/')?>assets/css/magnific-popup.css">
        
    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="<?=base_url('user_template/')?>assets/css/slick.css">
        
    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="<?=base_url('user_template/')?>assets/css/LineIcons.css">
        
    <!--====== Font Awesome CSS ======-->
    <link rel="stylesheet" href="<?=base_url('user_template/')?>assets/css/font-awesome.min.css">
        
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="<?=base_url('user_template/')?>assets/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="<?=base_url('user_template/')?>assets/css/default.css">
    
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="<?=base_url('user_template/')?>assets/css/style.css">
    
    <style>
        .text-sm-13 {
            font-size: 13px !important;
        }
    </style>
</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->    
   
   
    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->
    
    <!--====== HEADER PART START ======-->
    
    <header class="header-area">
        <div class="navbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="<?=base_url('user_template/')?>assets/images/logo.svg" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <!-- <li class="nav-item active">
                                        <a class="page-scroll" href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#features">Features</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#facts">Why</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#team">Team</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#blog">Blog</a>
                                    </li> -->
                                </ul>
                            </div> <!-- navbar collapse -->
                            
                            <div class="navbar-btn d-none d-sm-inline-block">
                                <?=$this->session->userdata('penyihir') ? '<a class="main-btn" data-scroll-nav="0" href="'.base_url('logout').'">Keluar</a>' : '' ?>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->
        
        <div id="home" class="header-hero bg_cover" style="background-image: url(<?=base_url('user_template/')?>assets/images/banner-bg.svg)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="header-hero-content text-center">
                            <h3 class="header-sub-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">Notification App</h3>
                            <h2 class="header-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">Jadwalkan Pesan yang Anda Kirim</h2>
                            <p class="text wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">Layanan mengirimkan pesan dan pengingat terjadwal gratis</p>
                            <?=$this->session->userdata('penyihir') ? '<a href="#login-card" class="main-btn wow page-scroll fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s">Buat Tugas</a>' : '<a href="#login-card" class="main-btn wow page-scroll fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s">Coba Sekarang</a>' ?>
                        </div> <!-- header hero content -->
                    </div>
                </div> <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-hero-image text-center wow fadeIn" data-wow-duration="1.3s" data-wow-delay="1.4s">
                            <img src="<?=base_url('user_template/')?>assets/images/header-hero2.png" alt="hero">
                        </div> <!-- header hero image -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div id="particles-1" class="particles"></div>
        </div> <!-- header hero -->
    </header>
    
    <!--====== HEADER PART ENDS ======-->
    
    <!--====== BRAMD PART START ======-->
    
    <div class="brand-area pt-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-logo d-flex align-items-center justify-content-center justify-content-md-between">
                        <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <img src="<?=base_url('user_template/')?>assets/images/brand-1.png" alt="brand">
                        </div> <!-- single logo -->
                        <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.2s">
                            <img src="<?=base_url('user_template/')?>assets/images/brand-2.png" alt="brand">
                        </div> <!-- single logo -->
                        <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.3s">
                            <img src="<?=base_url('user_template/')?>assets/images/brand-3.png" alt="brand">
                        </div> <!-- single logo -->
                        <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.4s">
                            <img src="<?=base_url('user_template/')?>assets/images/brand-4.png" alt="brand">
                        </div> <!-- single logo -->
                        <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
                            <img src="<?=base_url('user_template/')?>assets/images/brand-5.png" alt="brand">
                        </div> <!-- single logo -->
                    </div> <!-- brand logo -->
                </div>
            </div>   <!-- row -->
        </div> <!-- container -->
    </div>
    
    <!--====== BRAMD PART ENDS ======-->
