¡
<!DOCTYPE HTML>
<html class="no-js">

<head>
    <!-- Basic Page Needs
  ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>The queen bees</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <!-- CSS
  ================================================== -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="vendor/prettyphoto/css/prettyPhoto.css" rel="stylesheet" type="text/css">
    <link href="vendor/owl-carousel/css/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="vendor/owl-carousel/css/owl.theme.css" rel="stylesheet" type="text/css">
    <!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
    <link href="css/custom.css" rel="stylesheet" type="text/css"><!-- CUSTOM STYLESHEET FOR STYLING -->
    <!-- Color Style -->
    <link href="colors/color1.css" rel="stylesheet" type="text/css">
    <!-- SCRIPTS
  ================================================== -->
    <script src="js/modernizr.js"></script><!-- Modernizr -->
</head>

<body>
    <!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
    <div class="body">
        <!-- Site Topbar -->
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-1">
                        <nav class="topmenu ddmenu">
                            <ul role="menu" class="sf-menu">
                                <li><a href="index.html">Home</a>
                                    <ul class="dropdown">
                                        <li><a href="index.html">Home Slider</a></li>
                                        <li><a href="index-carousel.html">Home Carousel</a></li>
                                        <li><a href="index-classic.html">Home Classic</a></li>
                                        <li><a href="index-classic-nosidebar.html">Home Classic no Sidebar</a></li>
                                        <li><a href="index-masonry.html">Home Masonry</a></li>
                                        <li><a href="index-masonry-nosidebar.html">Home Masonry no Sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="typography.html">Typography</a></li>
                                        <li><a href="shortcodes.html">Shortcodes</a></li>
                                        <li><a href="404.html">404 Error Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="post.html">Post Formats</a>
                                    <ul class="dropdown">
                                        <li><a href="post.html">Image</a></li>
                                        <li><a href="post-gallery.html">Gallery</a></li>
                                        <li><a href="post-audio.html">Audio</a></li>
                                        <li><a href="post-video.html">Video</a></li>
                                        <li><a href="post-quote.html">Quote</a></li>
                                        <li><a href="post-link.html">Link</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                        <a href="#" class="visible-sm visible-xs" id="menu-toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-11">
                        <div class="search-header">
                            <form>
                                <input type="text" placeholder="type and enter">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <ul class="social-icons pull-right">
                            <li><a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="http://www.instagram.com" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="http://www.pinterest.com" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category Menu -->
        <nav class="cat-menu">
            <ul class="sf-menu">
                <li><a href="#">Photography</a>
                    <ul class="dropdown">
                        <li><a href="archive.html">Sub Category</a></li>
                        <li><a href="archive.html">Sub Category</a>
                            <ul class="dropdown">
                                <li><a href="archive.html">Sub Category</a></li>
                                <li><a href="archive.html">Sub Category</a></li>
                                <li><a href="archive.html">Sub Category</a></li>
                                <li><a href="archive.html">Sub Category</a></li>
                            </ul>
                        </li>
                        <li><a href="archive.html">Sub Category</a></li>
                        <li><a href="archive.html">Sub Category</a></li>
                    </ul>
                </li>
                <li><a href="archive.html">Food</a></li>
                <li><a href="archive.html">Lifestyle</a></li>
                <li><a href="archive.html">Travel</a></li>
                <li><a href="archive.html">Fashion</a></li>
                <li><a href="archive.html">Beauty</a></li>
                <li><a href="archive.html">Music</a></li>
            </ul>
        </nav>
        @yield('content')
        <!-- Site Footer -->
        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <!-- Text Widget -->
                    <div class="col-md-4 col-sm-4">
                        <div class="widget sidebar-widget">
                            <div class="text-align-center">
                                <img data-no-retina src="images/logo.png" alt=""><br><br>
                                <p>Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Twitter Widget -->
                    <div class="col-md-4 col-sm-4">
                        <div class="widget sidebar-widget twitter_widget">
                            <h3 class="widgettitle">Twitter Updates</h3>
                            <div class="twitter-widget" data-tweets-count="2">
                            </div>
                        </div>
                    </div>
                    <!-- Instagram Widget -->
                    <div class="col-md-4 col-sm-4">
                        <div class="widget sidebar-widget instafeed_widget">
                            <h3 class="widgettitle">Instagram Photos</h3>
                            <ul id="insta-widget" class="clearfix"></ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <footer class="site-footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <p>&copy; 2015 Narration - Your way of saying</p>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <ul class="social-icons social-icons-colored pull-right">
                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <a id="back-to-top"><i class="fa fa-chevron-up"></i></a>
    </div>
    <script src="js/jquery-2.1.3.min.js"></script> <!-- Jquery Library Call -->
    <script src="vendor/prettyphoto/js/prettyphoto.js"></script> <!-- PrettyPhoto Plugin -->
    <script src="js/ui-plugins.js"></script> <!-- UI Plugins -->
    <script src="js/helper-plugins.js"></script> <!-- Helper Plugins -->
    <script src="vendor/owl-carousel/js/owl.carousel.min.js"></script> <!-- Owl Carousel -->
    <script src="js/bootstrap.js"></script> <!-- UI -->
    <script src="js/init.js"></script> <!-- All Scripts -->
    <script src="vendor/flexslider/js/jquery.flexslider.js"></script> <!-- FlexSlider -->
    <script id="dsq-count-scr" src="//queenbees-1.disqus.com/count.js" async></script>
</body>

</html>