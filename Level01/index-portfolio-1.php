<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) 
  {
    $_SESSION['msg'] = "You must log in first";
    header('location: ../forbidden.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: ../index.php");
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/ico/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="assets/img/ico/apple-touch-icon-57x57.png">

    <title>Kompleet by Distinctive Themes</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/plugins.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/pe-icons.css" rel="stylesheet">

</head>

<body id="page-top" class="index">

    <div class="master-wrapper">

        <div class="preloader">
            <div class="preloader-img">
                <span class="loading-animation animate-flicker"><img src="assets/img/loading.GIF" alt="loading"/></span>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top side-menu-only fadeInDown" data-wow-delay="0.5s">
            <div class="top-bar smoothie hidden-xs">
                <div class="container">
                    <div class="clearfix">
                        <ul class="list-inline social-links wow pull-left">
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>

                        <div class="pull-right text-right">
                            <ul class="list-inline">
                                <li>
                                    <div><i class="fa fa-envelope-o"></i> email@domain.com</div>
                                </li>
                                <li>
                                    <div class="meta-item"><i class="fa fa-mobile"></i> +44 8780 648 605</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand smoothie logo logo-light" href="level01page.php"><img src="assets/img/logo.png" alt="logo"></a>
                    <a class="navbar-brand smoothie logo logo-dark" href="level01page.php"><img src="assets/img/logo_reverse.png" alt="logo"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="main-navigation">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#search" class="hidden-xs"><i class="pe-7s-search"></i></a></li>
                        <li><a href="javascript:void(0);" class="side-menu-trigger hidden-xs"><i class="fa fa-bars"></i></a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <div id="search-wrapper">
            <button type="button" class="close">×</button>
            <div class="vertical-center text-center">
                <form>
                    <input type="search" value="" placeholder="Enter Search Term" />
                    <button type="submit" class="btn btn-primary btn-white">Search</button>
                </form>
            </div>
        </div>

        <!-- Header -->
        <header id="headerwrap" class="backstretched fullheight no-overlay">
            <div class="container vertical-center">
                <div class="intro-text vertical-center text-left smoothie">
                    <div class="intro-heading wow fadeIn heading-font" data-wow-delay="0.2s">Kompleet</div>
                    <div class="intro-sub-heading wow fadeIn secondary-font" data-wow-delay="0.4s">Acclaimed <span class="rotate">graphic design, photography, sound design</span></div>
                    <a href="#welcome" class="btn btn-primary btn-white mt30 page-scroll" data-wow-delay="0.6s">View Works</a>
                </div>
            </div>
        </header>

        <section>
            <div class="section-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 mb100 wow">
                            <h2 class="section-heading">Recent Works</h2>
                            <h3 class="section-subheading secondary-font">A small taste of our success.</h3>
                        </div>
                        <div class="col-md-6 text-right">
                            <ul class="portfolio-filter mb30 list-inline wow">
                                <li><a class="btn btn-primary active" href="#" data-filter="*">All</a></li>
                                <li><a class="btn btn-primary" href="#" data-filter=".apps">Apps</a></li>
                                <li><a class="btn btn-primary" href="#" data-filter=".design">Design</a></li>
                                <li><a class="btn btn-primary" href="#" data-filter=".photography">Photography</a></li>
                                <li><a class="btn btn-primary" href="#" data-filter=".video">Video</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="col-md-12">
                        <ul class="portfolio-items nopadding-lr isotope list-unstyled">
                            <li class="col-sm-4 col-xs-12 portfolio-item nopadding-lr apps isotope-item">
                                <div class="hover-item">
                                    <img src="assets/img/portfolio/portfolio1.jpg" class="img-responsive smoothie" alt="">
                                    <div class="overlay-item-caption smoothie"></div>
                                    <div class="hover-item-caption smoothie">
                                        <div class="vertical-center smoothie">
                                            <h3 class="smoothie mb30"><a href="single-portfolio-fullscreen.php" title="view project">Fullscreen Gallery</a></h3>
                                            <a href="assets/img/portfolio/portfolio1.jpg" title="View Gallery" class="btn btn-primary lb-link smoothie">Zoom</a>
                                            <a href="single-portfolio-fullscreen.php" class="smoothie btn btn-primary">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-4 col-xs-12 portfolio-item nopadding-lr apps isotope-item">
                                <div class="hover-item">
                                    <img src="assets/img/portfolio/portfolio2.jpg" class="img-responsive smoothie" alt="">
                                    <div class="overlay-item-caption smoothie"></div>
                                    <div class="hover-item-caption smoothie">
                                        <div class="vertical-center smoothie">
                                            <h3 class="smoothie mb30"><a href="single-portfolio-fullscreen.php" title="view project">Fullscreen Gallery</a></h3>
                                            <a href="assets/img/portfolio/portfolio2.jpg" title="View Gallery" class="btn btn-primary lb-link smoothie">Zoom</a>
                                            <a href="single-portfolio-fullscreen.php" class="smoothie btn btn-primary">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-4 col-xs-12 portfolio-item nopadding-lr photography isotope-item">
                                <div class="hover-item">
                                    <img src="assets/img/portfolio/portfolio3.jpg" class="img-responsive smoothie" alt="">
                                    <div class="overlay-item-caption smoothie"></div>
                                    <div class="hover-item-caption smoothie">
                                        <div class="vertical-center smoothie">
                                            <h3 class="smoothie mb30"><a href="single-portfolio-fullscreen.php" title="view project">Fullscreen Gallery</a></h3>
                                            <a href="assets/img/portfolio/portfolio3.jpg" title="View Gallery" class="btn btn-primary lb-link smoothie">Zoom</a>
                                            <a href="single-portfolio-fullscreen.php" class="smoothie btn btn-primary">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-4 col-xs-12 portfolio-item nopadding-lr video isotope-item hover-item">
                                <img src="assets/img/portfolio/portfolio4.jpg" class="img-responsive smoothie" alt="">
                                <div class="overlay-item-caption smoothie"></div>
                                <div class="hover-item-caption smoothie">
                                    <div class="vertical-center smoothie">
                                        <h3 class="smoothie mb30"><a href="single-portfolio-carousel.php" title="view project">Carousel Gallery</a></h3>
                                        <a href="assets/img/portfolio/portfolio1.jpg" title="View Gallery" class="btn btn-primary lb-link smoothie">Zoom</a>
                                        <a href="single-portfolio-carousel.php" class="smoothie btn btn-primary">View</a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-4 col-xs-12 portfolio-item nopadding-lr design isotope-item">
                                <div class="hover-item">
                                    <img src="assets/img/portfolio/portfolio5.jpg" class="img-responsive smoothie" alt="">
                                    <div class="overlay-item-caption smoothie"></div>
                                    <div class="hover-item-caption smoothie">
                                        <div class="vertical-center smoothie">
                                            <h3 class="smoothie mb30"><a href="single-portfolio-fullscreen.php" title="view project">Fullscreen Gallery</a></h3>
                                            <a href="assets/img/portfolio/portfolio5.jpg" title="View Gallery" class="btn btn-primary lb-link smoothie">Zoom</a>
                                            <a href="single-portfolio-fullscreen.php" class="smoothie btn btn-primary">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-4 col-xs-12 portfolio-item nopadding-lr photography isotope-item">
                                <div class="hover-item">
                                    <img src="assets/img/portfolio/portfolio6.jpg" class="img-responsive smoothie" alt="">
                                    <div class="overlay-item-caption smoothie"></div>
                                    <div class="hover-item-caption smoothie">
                                        <div class="vertical-center smoothie">
                                            <h3 class="smoothie mb30"><a href="single-portfolio-fullscreen.php" title="view project">Fullscreen Gallery</a></h3>
                                            <a href="assets/img/portfolio/portfolio6.jpg" title="View Gallery" class="btn btn-primary lb-link smoothie">Zoom</a>
                                            <a href="single-portfolio-fullscreen.php" class="smoothie btn btn-primary">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-4 col-xs-12 portfolio-item nopadding-lr video isotope-item">
                                <div class="hover-item">
                                    <img src="assets/img/portfolio/portfolio7.jpg" class="img-responsive smoothie" alt="">
                                    <div class="overlay-item-caption smoothie"></div>
                                    <div class="hover-item-caption smoothie">
                                        <div class="vertical-center smoothie">
                                            <h3 class="smoothie mb30"><a href="single-portfolio-fullscreen.php" title="view project">Fullscreen Gallery</a></h3>
                                            <a href="assets/img/portfolio/portfolio7.jpg" title="View Gallery" class="btn btn-primary lb-link smoothie">Zoom</a>
                                            <a href="single-portfolio-fullscreen.php" class="smoothie btn btn-primary">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-4 col-xs-12 portfolio-item nopadding-lr design isotope-item">
                                <div class="hover-item">
                                    <img src="assets/img/portfolio/portfolio8.jpg" class="img-responsive smoothie" alt="">
                                    <div class="overlay-item-caption smoothie"></div>
                                    <div class="hover-item-caption smoothie">
                                        <div class="vertical-center smoothie">
                                            <h3 class="smoothie mb30"><a href="single-portfolio-fullscreen.php" title="view project">Fullscreen Gallery</a></h3>
                                            <a href="assets/img/portfolio/portfolio8.jpg" title="View Gallery" class="btn btn-primary lb-link smoothie">Zoom</a>
                                            <a href="single-portfolio-fullscreen.php" class="smoothie btn btn-primary">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-4 col-xs-12 portfolio-item nopadding-lr design isotope-item">
                                <div class="hover-item">
                                    <img src="assets/img/portfolio/portfolio9.jpg" class="img-responsive smoothie" alt="">
                                    <div class="overlay-item-caption smoothie"></div>
                                    <div class="hover-item-caption smoothie">
                                        <div class="vertical-center smoothie">
                                            <h3 class="smoothie mb30"><a href="single-portfolio-fullscreen.php" title="view project">Fullscreen Gallery</a></h3>
                                            <a href="assets/img/portfolio/portfolio9.jpg" title="View Gallery" class="btn btn-primary lb-link smoothie">Zoom</a>
                                            <a href="single-portfolio-fullscreen.php" class="smoothie btn btn-primary">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="dark-wrapper dark-grey-opaqued opaqued parallax" data-parallax="scroll" data-image-src="assets/img/bg/bg6.jpg" data-speed="0.7">
            <div class="section-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.2s">
                            <div class="icon-box-1 match-height mb30">
                                <i class="fa-4x pe-7s-camera"></i>
                                <div class="content-area">
                                    <h3 class="title">Web Design</h3>
                                    <div class="content">Goodbye gray sky hello blue. There's nothing can hold me when I hold you. Feels so right it cant be wrong.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.2s">
                            <div class="icon-box-1 match-height mb30">
                                <i class="fa-4x pe-7s-camera"></i>
                                <div class="content-area">
                                    <h3 class="title">Web Design</h3>
                                    <div class="content">Goodbye gray sky hello blue. There's nothing can hold me when I hold you. Feels so right it cant be wrong.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.2s">
                            <div class="icon-box-1 match-height mb30">
                                <i class="fa-4x pe-7s-camera"></i>
                                <div class="content-area">
                                    <h3 class="title">Web Design</h3>
                                    <div class="content">Goodbye gray sky hello blue. There's nothing can hold me when I hold you. Feels so right it cant be wrong.</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="white-bg">
            <div class="section-inner nopadding-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9 match-height">
                            <div class="row">
                                <div class="col-xs-12">
                                    <ul class="owl-carousel-paged testimonial-owl wow fadeIn list-unstyled" data-items="3" data-items-tablet="[768,2]" data-items-mobile="[479,1]">
                                        <li>
                                            <div class="row hover-item">
                                                <div class="col-xs-12">
                                                    <img src="assets/img/team/1.jpg" class="img-responsive smoothie" alt="">
                                                </div>
                                                <div class="col-xs-12 hover-item-caption smoothie">
                                                    <div class="vertical-center">
                                                        <h3 class="smoothie"><a href="single-portfolio.php" title="view project">John Doe</a></h3>
                                                        <ul class="smoothie list-inline social-links wow">
                                                            <li>
                                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-behance"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row hover-item">
                                                <div class="col-xs-12">
                                                    <img src="assets/img/team/2.jpg" class="img-responsive smoothie" alt="">
                                                </div>
                                                <div class="col-xs-12 hover-item-caption smoothie">
                                                    <div class="vertical-center">
                                                        <h3 class="smoothie"><a href="single-portfolio.php" title="view project">Barry Scott</a></h3>
                                                        <ul class="smoothie list-inline social-links wow">
                                                            <li>
                                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-behance"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row hover-item">
                                                <div class="col-xs-12">
                                                    <img src="assets/img/team/3.jpg" class="img-responsive smoothie" alt="">
                                                </div>
                                                <div class="col-xs-12 hover-item-caption smoothie">
                                                    <div class="vertical-center">
                                                        <h3 class="smoothie"><a href="single-portfolio.php" title="view project">Tom Smooth</a></h3>
                                                        <ul class="smoothie list-inline social-links wow">
                                                            <li>
                                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-behance"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row hover-item">
                                                <div class="col-xs-12">
                                                    <img src="assets/img/team/4.jpg" class="img-responsive smoothie" alt="">
                                                </div>
                                                <div class="col-xs-12 hover-item-caption smoothie">
                                                    <div class="vertical-center">
                                                        <h3 class="smoothie"><a href="single-portfolio.php" title="view project">Harvey Wallace</a></h3>
                                                        <ul class="smoothie list-inline social-links wow">
                                                            <li>
                                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-behance"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 match-height">
                            <div class="vertical-center">
                                <h2 class="section-heading">The Team</h2>
                                <h3 class="section-subheading secondary-font">Dedicated to excellence.</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="white-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="list-inline social-links wow">
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>

                    <hr class="thin-hr" />

                    <div class="col-md-12 text-center wow">
                        <span class="copyright">Copyright 2019. Designed by DISTINCTIVE THEMES</span>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <div class="flexpanel">
        <div class="viewport-wrap">
            <div class="viewport">
                <div class="side-menu">
                    <ul class="nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home <span class="pe-7s-angle-down"></span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home - Agency</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index-agency-1.php">Agency - Layout 1</a></li>
                                        <li><a href="index-agency-2.php">Agency - Layout 2</a></li>
                                        <li><a href="index-agency-3.php">Agency - Layout 3</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home - Portfolio</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index-portfolio-1.php">Portfolio - Layout 1</a></li>
                                        <li><a href="index-portfolio-2.php">Portfolio - Layout 2</a></li>

                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home - Corporate</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index-corporate-1.php">Corporate - Layout 1</a></li>
                                        <li><a href="index-corporate-2.php">Corporate - Layout 2</a></li>
                                        <li><a href="index-corporate-3.php">Corporate - Layout 3</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home - Landing Page</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index-landing-1.php">Landing Page - Layout 1</a></li>
                                        <li><a href="index-landing-2.php">Landing Page - Layout 2</a></li>

                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home - Shop</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index-agency-1.php">Shop - Layout 1</a></li>
                                        <li><a href="index-agency-2.php">Shop - Layout 2</a></li>
                                        <li><a href="index-agency-3.php">Shop - Layout 3</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home - Minimal</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index-agency-1.php">Minimal - Restraunt</a></li>
                                        <li><a href="index-agency-2.php">Minimal - Fashion</a></li>
                                        <li><a href="index-agency-3.php">Minimal - Medical</a></li>
                                    </ul>
                                </li>
                                <li><a href="index-app.php">Home - App</a></li>
                                <li><a href="index-agency-1.php">Home - Restraunt</a></li>
                                <li><a href="index-agency-2.php">Home - Fashion</a></li>
                                <li><a href="index-agency-3.php">Home - Medical</a></li>
                                <li><a href="index-countdown.php">Home - Coming Soon</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <span class="pe-7s-angle-down"></span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages - About Us</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="about-us-1.php">About Us - Layout 1</a></li>
                                        <li><a href="about-us-2.php">About Us - Layout 2</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages - Services</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="services-1.php">Services - Layout 1</a></li>
                                        <li><a href="services-2.php">Services - Layout 2</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages - Contact</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="contact-us-1.php">Contact - Layout 1</a></li>
                                        <li><a href="contact-us-2.php">Contact - Layout 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="404.php">Pages - 404</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <span class="pe-7s-angle-down"></span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio - Full Grid</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="portfolio-full-grid-4col.php">Full Grid - 4 Columns</a></li>
                                        <li><a href="portfolio-full-grid-3col.php">Full Grid - 3 Columns</a></li>
                                        <li><a href="portfolio-full-grid-2col.php">Full Grid - 2 Columns</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio - Boxed Grid</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="portfolio-boxed-grid-4col.php">Boxed Grid - 4 Columns</a></li>
                                        <li><a href="portfolio-boxed-grid-3col.php">Boxed Grid - 3 Columns</a></li>
                                        <li><a href="portfolio-boxed-grid-2col.php">Boxed Grid - 2 Columns</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio - Full Masonry</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="portfolio-full-masonry-4col.php">Full Masonry - 4 Columns</a></li>
                                        <li><a href="portfolio-full-masonry-3col.php">Full Masonry - 3 Columns</a></li>
                                        <li><a href="portfolio-full-masonry-2col.php">Full Masonry - 2 Columns</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio - Boxed Masonry</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="portfolio-boxed-masonry-4col.php">Boxed Masonry - 4 Columns</a></li>
                                        <li><a href="portfolio-boxed-masonry-3col.php">Boxed Masonry - 3 Columns</a></li>
                                        <li><a href="portfolio-boxed-masonry-2col.php">Boxed Masonry - 2 Columns</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Single Portfolio</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="single-portfolio-slider.php">Single Portfolio - Slider</a></li>
                                        <li><a href="single-portfolio-carousel.php">Single Portfolio - Carousel</a></li>
                                        <li><a href="single-portfolio-video.php">Single Portfolio - Video</a></li>
                                        <li><a href="single-portfolio-fullscreen-slider.php">Single Portfolio - Fullscreen Slider</a></li>
                                        <li><a href="single-portfolio-fullscreen-video.php">Single Portfolio - Fullscreen Video</a></li>
                                        <li><a href="single-portfolio-image-list.php">Single Portfolio - Image List</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="pe-7s-angle-down"></span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog Feeds</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-grid-2col.php">Blog Grid - 2 Column</a></li>
                                        <li><a href="blog-grid-3col.php">Blog Grid - 3 Column</a></li>
                                        <li><a href="blog-grid-2col-sidebar.php">Blog Grid - 2 Column Sidebar</a></li>
                                        <li><a href="blog-grid-3col-sidebar.php">Blog Grid - 3 Column Sidebar</a></li>
                                        <li><a href="blog-traditional.php">Blog Traditional</a></li>
                                        <li><a href="blog-traditional-sidebar.php">Blog Traditional Sidebar</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Single Posts</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="single-post-fullwidth.php">Single Post - Full Width</a></li>
                                        <li><a href="single-post-thin.php">Single Post - Thin</a></li>
                                        <li><a href="single-post-left-sidebar.php">Single Post - Left Sidebar</a></li>
                                        <li><a href="single-post-right-sidebar.php">Single Post - Right Sidebar</a></li>
                                        
                                        
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Shop <span class="pe-7s-angle-down"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="index-shop.php">Home Shop</a></li>
                                <li><a href="single-product.php">Single Product</a></li>
                            </ul>
                        </li>
                        <li><a href="#search"><i class="pe-7s-search"></i></a></li>
                        <li><a href="javascript:void(0);" class="side-menu-trigger hidden-xs"><i class="fa fa-bars"></i></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="assets/js/init.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript">
    $(document).ready(function() {
        'use strict';
        jQuery('#headerwrap').backstretch([
            "assets/img/bg/bg7.jpg"
        ], {
            duration: 8000,
            fade: 500
        });
    });
    </script>

</body>

</html>
