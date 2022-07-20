<!doctype html>
<html lang="en">

<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link rel="manifest" href="{!!url('assets/manifest.webmanifest')!!}" />
    <link rel="shortcut icon" href="{!!url('assets/images/favicon.png')!!}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/instantsearch.css@7/themes/algolia-min.css" />
    <link rel="stylesheet" href="{!!url('assets/css/index.css')!!}" />
    <link rel="stylesheet" href="{!!url('assets/css/app.css')!!}" />
    
    
    <!--====== Title ======-->
    <title>Ecommerce - Algolia Project</title>

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{!!url('assets/css/bootstrap.min.css')!!}">
    
    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{!!url('assets/css/slick.css')!!}">
    
    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{!!url('assets/css/magnific-popup.css')!!}">
    
    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="{!!url('assets/css/LineIcons.css')!!}">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="{!!url('assets/css/default.css')!!}">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="{!!url('assets/css/style.css')!!}">
  
  
</head>

<body>
  
    <!--====== PRICING START ======-->
    
    @yield('content')

    <!--====== PRICING ENDS ======-->
    
    
    <!--====== FOOTER PART START ======-->

    <footer id="footer" class="footer-area">
        <div class="footer-widget pt-70 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-logo-support d-md-flex align-items-end justify-content-between">
                            <div class="footer-logo d-flex align-items-end pt-30">
                                <a href="index.html"><img src="{!!url('assets/images/footer-logo.svg')!!}" alt="Logo"></a>
                            </div> <!-- footer logo -->
                        </div> <!-- footer logo support -->
                    </div>
                </div> <!-- row -->
                <div class="row">
                    <div class="col-xl-6 col-lg-4 col-sm-12">
                        <div class="footer-support ">
                            <span class="number">09-215-5596</span>
                            <span class="mail">hello@customeagency.com</span>
                        </div>
                        <ul class="social">
                            <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                            <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                            <li><a href="#"><i class="lni-instagram-original"></i></a></li>
                            <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-sm-4">
                        <div class="footer-link">
                            <h6 class="footer-title">Company</h6>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-4">
                        <div class="footer-link">
                            <h6 class="footer-title">Product & Services</h6>
                            <ul>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Developer</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-4">
                        <div class="footer-link">
                            <h6 class="footer-title">Help & Suuport</h6>
                            <ul>
                                <li><a href="#">Support Center</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer widget -->
        
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright text-center">
                            <p class="text">Template Crafted by <a rel="nofollow" href="https://uideck.com">UIdeck</a> - UI Powered by <a el="nofollow" href="https://rebrand.ly/ayroui">AyroUI</a></p>
                        </div> <!-- copyright -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer copyright -->
    </footer>

    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->   
    
    <script src="https://cdn.jsdelivr.net/npm/algoliasearch@4/dist/algoliasearch-lite.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/instantsearch.js@4"></script>
    <script src="{!!url('assets/js/app.js')!!}"></script>
    

    <!--====== jquery js ======-->
    <script src="{!!url('assets/js/vendor/modernizr-3.6.0.min.js')!!}"></script>
    <script src="{!!url('assets/js/vendor/jquery-1.12.4.min.js')!!}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{!!url('assets/js/bootstrap.min.js')!!}"></script>
    <script src="{!!url('assets/js/popper.min.js')!!}"></script>


    <!--====== Images Loaded js ======-->
    <script src="{!!url('assets/js/imagesloaded.pkgd.min.js')!!}"></script>
    
    <!--====== Scrolling Nav js ======-->
    <script src="{!!url('assets/js/jquery.easing.min.js')!!}"></script>
    <script src="{!!url('assets/js/scrolling-nav.js')!!}"></script>
    
    
    <!--====== Slick js ======-->
    <script src="{!!url('assets/js/slick.min.js')!!}"></script>
    
    
    <!--====== Main js ======-->
    <script src="{!!url('assets/js/main.js')!!}"></script>

</body>

</html>
