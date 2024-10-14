<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../constants.php';;
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Vrtic Medo - Djecji vrtic Medo</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="<?php echo genFilePath('assets/img/logo/favicon.png');?>">

   <!-- CSS here -->
   <link rel="stylesheet" href="<?php echo genFilePath('assets/css/bootstrap.css');?>">
   <link rel="stylesheet" href="<?php echo genFilePath('assets/css/meanmenu.css');?>">
   <link rel="stylesheet" href="<?php echo genFilePath('assets/css/animate.min.css');?>">
   <link rel="stylesheet" href="<?php echo genFilePath('assets/css/swiper-bundle.css');?>">
   <link rel="stylesheet" href="<?php echo genFilePath('assets/css/slick.css');?>">
   <link rel="stylesheet" href="<?php echo genFilePath('assets/css/nouislider.css');?>">
   <link rel="stylesheet" href="<?php echo genFilePath('assets/css/backtotop.css');?>">
   <link rel="stylesheet" href="<?php echo genFilePath('assets/css/magnific-popup.css');?>">
   <link rel="stylesheet" href="<?php echo genFilePath('assets/css/nice-select.css');?>">
   <link rel="stylesheet" href="<?php echo genFilePath('assets/css/flaticon_kindedo.css');?>">
   <link rel="stylesheet" href="<?php echo genFilePath('assets/css/font-awesome-pro.css');?>">
   <link rel="stylesheet" href="<?php echo genFilePath('assets/css/spacing.css');?>">
   <link rel="stylesheet" href="<?php echo genFilePath('assets/css/main.css');?>">
</head>

<body>   
   <header>
      <div class="bd-header">
         <!-- Upisi u tijeku start  -->
         <div class="theme-bg bd-header-top-3 p-relative d-none d-lg-block" style="<?php printf(showUpisi());?>">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="bd-header-top-wrapper d-flex justify-content-between">
                        <div class="bd-header-top-left">
                           <div class="bd-header-meta-items">
                              <div class="bd-header-meta-item is-white d-flex align-items-center">
                                 <div class="bd-header-meta-icon">
                                    <i class="fa-solid fa-tag"></i>
                                 </div>
                                 <div class="bd-header-meta-text">
                                    <p>Upisi u tijeku!</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="bd-header-top-right d-flex align-items-center">
                           <div class="bd-header-meta-items d-flex align-items-center">
                              <div class="bd-header-meta-item is-white d-flex align-items-center">
                                 <div class="bd-header-meta-icon">
                                    <i class="fa-solid fa-phone"></i>
                                 </div>
                                 <div class="bd-header-meta-text">
                                    <p><a href="tel:<?php echo MOBILE; ?>"><?php echo MOBILE; ?></a></p>
                                 </div>
                              </div>
                              <div class="bd-header-meta-item is-white d-flex align-items-center">
                                 <div class="bd-header-meta-icon">
                                    <i class="fas fa-envelope"></i>
                                 </div>
                                 <div class="bd-header-meta-text">
                                    <p><a href="mailto:<?php echo INFO_MAIL; ?>"><?php echo INFO_MAIL; ?></a></p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Upisi u tijeku end -->

         <!-- header bottom area start -->
         <div id="header-sticky" class="bd-header-bottom ">
            <div class="container">
               <div class="mega-menu-wrapper p-relative">
                  <div class="d-flex align-items-center justify-content-between">
                     <div class="bd-header-logo">
                        <a href="<?php echo genFilePath('index.php');?>">
                           <img src="<?php echo genFilePath('assets/img/logo/logo.svg');?>" alt="logo">
                        </a>
                     </div>
                     <div class="bd-main-menu d-none d-lg-flex align-items-center">
                        <nav id="mobile-menu">
                           <ul>
                              <!-- <li class="has-dropdown"> -->
                              <li>
                                 <a href="<?php echo genFilePath('index.php');?>">Naslovnica</a>
                              </li>
                              <li class="has-dropdown">
                                 <a>O nama</a>
                                 <ul class="submenu">
                                    <li><a href="<?php echo genFilePath('o-nama/nas-vrtic.php');?>">Naš vrtić</a></li>
                                    <li><a href="<?php echo genFilePath('o-nama/radno-vrijeme.php');?>">Radno vrijeme</a></li>
                                    <li><a href="<?php echo genFilePath('o-nama/kucni-red.php');?>">Kućni red</a></li>
                                    <li><a href="<?php echo genFilePath('o-nama/djelatnici.php');?>">Djelatnici</a></li>
                                    <li><a href="<?php echo genFilePath('o-nama/upravno-vijece.php');?>">Upravno vijeće</a></li>
                                 </ul>
                              </li>

                              <li class="has-dropdown">
                                 <a>Dokumenti</a>
                                 <ul class="submenu">
                                    <li><a href="<?php echo genFilePath('dokumenti/natjecaji.php');?>">Natječaji</a></li>
                                    <li><a href="<?php echo genFilePath('dokumenti/pedagoska-dokumentacija.php');?>">Pedagoška dokumentacija</a></li>
                                    <li><a href="<?php echo genFilePath('dokumenti/za-upise.php');?>">Za upise</a></li>
                                    <li><a href="<?php echo genFilePath('dokumenti/ostalo.php');?>">Ostalo</a></li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="<?php echo genFilePath('obavijesti.php');?>">Obavijesti</a>
                              </li>
                              <li>
                                 <a href="<?php echo genFilePath('za-roditelje.php');?>">Kutić za roditelje</a>
                              </li>                              
                              <li>
                                 <a href="<?php echo genFilePath('jelovnik.php');?>">Jelovnik</a>
                              </li>
                              <li>
                                 <a href="<?php echo genFilePath('kontakt.php');?>">Kontakt</a>
                              </li>
                           </ul>
                        </nav>
                     </div>
                     <div class="bd-header-bottom-right d-flex justify-content-end align-items-center">
                        <div class="bd-header-btn d-none d-xl-block">
                           <a href="upisi.php" class="bd-btn">
                              <span class="bd-btn-inner">
                                 <span class="bd-btn-normal">Upisi</span>
                                 <span class="bd-btn-hover">Upisi</span>
                              </span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
