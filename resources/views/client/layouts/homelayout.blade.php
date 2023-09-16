<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUB JOB</title>

    <!-- animate.css-->
    <link href="masterlayouts/assets/vendor/animate.css-master/animate.min.css" rel="stylesheet">
    <!-- Load Screen -->
    <link href="masterlayouts/assets/vendor/loadscreen/css/spinkit.css" rel="stylesheet">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!-- Font Awesome 5 -->
    <link href="masterlayouts/assets/vendor/fontawesome/css/fontawesome-all.min.css" rel="stylesheet">
    <!-- Fables Icons -->
    <link href="masterlayouts/assets/custom/css/fables-icons.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="masterlayouts/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="masterlayouts/assets/vendor/bootstrap/css/bootstrap-4-navbar.css" rel="stylesheet">
    <!-- OffCanvasMenu -->
    <link href="masterlayouts/assets/vendor/OffCanvasMenuEffects/css/menu_sideslide.css" rel="stylesheet">
    <!-- portfolio filter gallery -->
    <link href="masterlayouts/assets/vendor/portfolio-filter-gallery/portfolio-filter-gallery.css" rel="stylesheet">
    <!-- Video Background -->
    <link href="masterlayouts/assets/vendor/video-background/video-background.css" rel="stylesheet">
    <!-- FANCY BOX -->
    <link href="masterlayouts/assets/vendor/fancybox-master/jquery.fancybox.min.css" rel="stylesheet">
    <!-- RANGE SLIDER -->
    <link href="masterlayouts/assets/vendor/range-slider/range-slider.css" rel="stylesheet">
    <!-- OWL CAROUSEL  -->
    <link href="masterlayouts/assets/vendor/owlcarousel/owl.carousel.min.css" rel="stylesheet">
    <link href="masterlayouts/assets/vendor/owlcarousel/owl.theme.default.min.css" rel="stylesheet">
    <!-- FABLES CUSTOM CSS FILE -->
    <link href="masterlayouts/assets/custom/css/custom.css" rel="stylesheet">
    <!-- FABLES CUSTOM CSS RESPONSIVE FILE -->
    <link href="masterlayouts/assets/custom/css/custom-responsive.css" rel="stylesheet">




    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="user/lib/animate/animate.min.css" rel="stylesheet">
    <link href="user/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="user/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="user/css/style.css" rel="stylesheet">

</head>

<body>
    <div class="container-xxl bg-white p-0">
        <div class="search-section">
            <a class="close-search" href="#"></a>
            <div class="d-flex justify-content-center align-items-center h-100">
                <form method="post" action="#" class="w-50">
                    <div class="row">
                        <div class="col-10">
                            <input type="search" value="" class="form-control palce bg-transparent border-0 search-input" placeholder="Search Here ..." />
                        </div>
                        <div class="col-2 mt-3">
                            <button type="submit" class="btn bg-transparent text-white"> <i class="fas fa-search"></i> </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

        <!-- Loading Screen -->
        <div id="ju-loading-screen">
            <div class="sk-double-bounce">
                <div class="sk-child sk-double-bounce1"></div>
                <div class="sk-child sk-double-bounce2"></div>
            </div>
        </div>



        <!-- Start Top Header -->
        <div class="fables-forth-background-color fables-top-header-signin">
            <div class="container">
                <div class="row" id="top-row">
                    <div class="col-12 col-sm-3 col-lg-5">
                        <a href="{{route('login')}}" class="top-link fables-third-text-color fables-second-hover-color font-13 top-header-link px-3 d-inline-block float-left"><span class="fables-iconuser"></span> Sign in</a>
                        <a href="{{route('registration')}}" class="top-link top-link fables-third-text-color fables-second-hover-color font-13 top-header-link px-3 d-inline-block border-left-0 float-left"><i class="fas fa-user-plus"></i> Register </a>
                        <a href="#" class="open-search fables-third-text-color fables-second-hover-color top-header-link px-3 d-inline-block border-left-0 float-left">
                            <span class="fables-iconsearch-icon"></span>
                        </a>
                    </div>
                    <div class="col-12 col-sm-5 col-lg-4 text-left text-lg-right">
                        <p class="fables-third-text-color font-13"><span class="fables-iconphone"></span> Phone : (+880) 1610 158095 - (+880) 1760 158095</p>
                    </div>
                    <div class="col-12 col-sm-4 col-lg-3 text-left text-lg-right">
                        <p class="fables-third-text-color font-13"><span class="fables-iconemail"></span> Email: rifatrayhan2001@gmail.com</p>
                    </div>

                </div>
            </div>
        </div>

        <!-- /End Top Header -->

        <!-- Start Fables Navigation -->
        <div class="fables-navigation fables-main-background-color py-3 py-lg-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-10 col-lg-9 pr-md-0">
                        <nav class="navbar navbar-expand-md btco-hover-menu py-lg-2">

                            <a class="navbar-brand pl-0" href="index.html"><img src="masterlayouts/assets/custom/images/fables-logo.png" alt="Fables Template" class="fables-logo"></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fablesNavDropdown" aria-controls="fablesNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="fables-iconmenu-icon text-white font-16"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="fablesNavDropdown">

                                <ul class="navbar-nav mx-auto fables-nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="{{route('homepage')}}" id="sub-nav1">
                                            Home
                                        </a>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="sub-nav2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Features
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="sub-nav2">

                                            <li><a class="dropdown-item dropdown-toggle" href="#">Headers</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item dropdown-toggle" href="#">Header 1</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="header1-transparent.html">Header 1 Transparent</a></li>
                                                            <li><a class="dropdown-item" href="header1-light.html">Header 1 Light</a></li>
                                                            <li><a class="dropdown-item" href="header1-dark.html">Header 1 Dark</a></li>
                                                            <li><a class="dropdown-item" href="header-megamenu.html">Header Mega menu</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a class="dropdown-item dropdown-toggle" href="#">Header 2</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="header2-transparent.html">Header 2 Transparent</a></li>
                                                            <li><a class="dropdown-item" href="header2-light.html">Header 2 Light</a></li>
                                                            <li><a class="dropdown-item" href="header2-dark.html">Header 2 Dark</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a class="dropdown-item dropdown-toggle" href="#">Header 3</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="header3-transparent.html">Header 3 Transparent</a></li>
                                                            <li><a class="dropdown-item" href="header3-light.html">Header 3 Light</a></li>
                                                            <li><a class="dropdown-item" href="header3-dark.html">Header 3 Dark</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a class="dropdown-item dropdown-toggle" href="#">Header 4</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="header4-transparent.html">Header 4 Transparent</a></li>
                                                            <li><a class="dropdown-item" href="header4-light.html">Header 4 Light</a></li>
                                                            <li><a class="dropdown-item" href="header4-dark.html">Header 4 Dark</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a class="dropdown-item dropdown-toggle" href="#">Header 5</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="header5-transparent.html">Header 5 Transparent</a></li>
                                                            <li><a class="dropdown-item" href="header5-light.html">Header 5 Light</a></li>
                                                            <li><a class="dropdown-item" href="header5-dark.html">Header 5 Dark</a></li>
                                                        </ul>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li><a class="dropdown-item" href="team.html">Team Members</a></li>
                                            <li><a class="dropdown-item" href="pricing-table.html">Pricing Table</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="sub-nav3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            About
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="sub-nav4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Job
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="sub-nav4">
                                            <li><a class="dropdown-item" href="#">Job List </a></li>
                                            <li><a class="dropdown-item" href="{{route('job-detail')}}">Job Detail</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="sub-nav5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Blog
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="sub-nav5">
                                            <li><a class="dropdown-item" href="blog-single-img.html">Blog Single image</a></li>
                                            <li><a class="dropdown-item" href="blog-single-slider.html">Blog Single Slider</a></li>
                                            <li><a class="dropdown-item" href="blog-single-video.html">Blog Single Video</a></li>
                                            <li><a class="dropdown-item" href="blog-timeLine.html">Blog Timeline</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="sub-nav6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Pages
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="sub-nav6">
                                            <li><a class="dropdown-item" href="404.html">404</a></li>
                                            <li><a class="dropdown-item" href="comming-soon.html">Comming Soon</a></li>
                                            <li><a class="dropdown-item" href="gallery.html">Gallery</a></li>
                                            <li><a class="dropdown-item" href="gallery-filter.html">Gallery Filter</a></li>
                                            <li><a class="dropdown-item" href="gallery-filter-masonry.html">Gallery Filter Masonry</a></li>
                                            <li><a class="dropdown-item" href="gallery-history.html">Gallery History</a></li>
                                            <li><a class="dropdown-item" href="gallery-history2.html">Gallery History 2</a></li>
                                            <li><a class="dropdown-item" href="gallery-single.html">Gallery Single</a></li>
                                            <li><a class="dropdown-item" href="gallery-timeline.html">Gallery Timeline </a></li>
                                            <li><a class="dropdown-item" href="gallery-timeline2.html">Gallery Timeline 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('contact-us')}}" id="sub-nav7">
                                            Contact Us
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- /End Fables Navigation -->

        <main>
            @hasSection('content')
            @yield('content')

            @else
            <h2>No content fount</h2>
            @endif
        </main>


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Company</h5>
                        <a class="btn btn-link text-white-50" href="">About Us</a>
                        <a class="btn btn-link text-white-50" href="">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="">Our Services</a>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Quick Links</h5>
                        <a class="btn btn-link text-white-50" href="">About Us</a>
                        <a class="btn btn-link text-white-50" href="">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="">Our Services</a>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Contact</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Dhaka, Bangladesh</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+880 1610 158095</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>rifatrayhan2001@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href="https://github.com/Rifat-R-Rayhan"><i class="fab fa-github"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/rifatrrayhan"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/rifatrrayhan/?hl=en"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/in/rifatrrayhan/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Newsletter</h5>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">NUB JOB</a>, All Right Reserved.

                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                            & Developed By <a class="border-bottom" href="https://www.facebook.com/rifatrrayhan">Rifat R Rayhan</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <script src="masterlayouts/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="masterlayouts/assets/vendor/jquery-circle-progress/circle-progress.min.js"></script>
    <script src="masterlayouts/assets/vendor/loadscreen/js/ju-loading-screen.js"></script>
    <script src="masterlayouts/assets/vendor/popper/popper.min.js"></script>
    <script src="masterlayouts/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="masterlayouts/assets/vendor/bootstrap/js/bootstrap-4-navbar.js"></script>
    <script src="masterlayouts/assets/vendor/WOW-master/dist/wow.min.js"></script>
    <script src="masterlayouts/assets/vendor/owlcarousel/owl.carousel.min.js"></script>
    <script src="masterlayouts/assets/vendor/loadscreen/js/ju-loading-screen.js"></script>
    <script src="masterlayouts/assets/vendor/fancybox-master/jquery.fancybox.min.js"></script>
    <script src="masterlayouts/assets/vendor/timeline/jquery.timelify.js"></script>
    <script src="masterlayouts/assets/custom/js/custom.js"></script>




    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="user/lib/wow/wow.min.js"></script>
    <script src="user/lib/easing/easing.min.js"></script>
    <script src="user/lib/waypoints/waypoints.min.js"></script>
    <script src="user/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="user/js/main.js"></script>
</body>

</html>