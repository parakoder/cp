<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Parakoder - Best IT Solution</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="parakoder" name="keywords">
    <meta content="it solution" name="description">
    <meta name="thumbnail" content="https://i.ibb.co/VJXMx3Y/New-Project-3.jpg" />

    <!-- Favicon -->
    <link href="{{asset('img/parakoder_blue.png')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="{{asset('css/fontgoogleapis.css')}}" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <style>
        .float{
            position:fixed;
            width:60px;
            height:60px;
            bottom:100px;
            right:40px;
            background-color:#25d366;
            color:#FFF;
            border-radius:50px;
            text-align:center;
        font-size:30px;
            box-shadow: 2px 2px 3px #999;
        z-index:100;
        }

        .my-float{
            margin-top:16px;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>
    <a href="https://wa.link/3e3wf5" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="{{url('/')}}" class="navbar-brand p-0">
                <h1 class="m-0"><img src="{{asset('img/parakoder_blue.png')}}" class="img-fluid" width="40" height="40" alt="image"> parakoder</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{url('/')}}" class="nav-item nav-link {{($page=='home')?'active':''}}">Beranda</a>
                    <a href="{{url('/about')}}" class="nav-item nav-link {{($page=='about')?'active':''}}">Tentang</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{($page=='service')?'active':''}}" data-bs-toggle="dropdown">Layanan</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{url('/service?service-id=web-development')}}" class="dropdown-item">Web Development</a>
                            <a href="{{url('/service?service-id=mobile-development')}}" class="dropdown-item">Mobile Development</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{($page=='solution')?'active':''}}" data-bs-toggle="dropdown">Solusi</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{url('/solution?solution-id=system-integration')}}" class="dropdown-item">System Integration</a>
                            <a href="{{url('/solution?solution-id=it-infrastructure')}}" class="dropdown-item">IT Infrastructure</a>
                        </div>
                    </div>
                    <a href="{{url('/maintenance')}}" class="nav-item nav-link {{($page=='carer')?'active':''}}">Karir</a>
                    <a href="{{url('/contact')}}" class="nav-item nav-link {{($page=='contact')?'active':''}}">Kontak</a>
                </div>
            </div>
        </nav>
        @includeWhen(Request::is('/'), 'carousel_1')
        @includeWhen(Request::is('about'), 'carousel_2')   
        @includeWhen(Request::is('contact'), 'carousel_3') 
        @includeWhen(Request::is('service'), 'carousel_4')
        @includeWhen(Request::is('solution'), 'carousel_5')
        @includeWhen(Request::is('installation'), 'carousel_7')
        @includeWhen(Request::is('maintenance'), 'carousel_6')   
    </div>
    <!-- Navbar & Carousel End -->
    @includeWhen(Request::is('/'), 'facts')
    @yield('content')

    <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="{{asset('img/tech1.png')}}" alt="">
                    <img src="{{asset('img/tech2.png')}}" alt="">
                    <img src="{{asset('img/tech3.png')}}" alt="">
                    <img src="{{asset('img/tech4.png')}}" alt="">
                    <img src="{{asset('img/tech5.png')}}" alt="">
                    <img src="{{asset('img/tech6.png')}}" alt="">
                    <img src="{{asset('img/tech7.png')}}" alt="">
                    <img src="{{asset('img/tech8.png')}}" alt="">
                    <img src="{{asset('img/tech9.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <img src="{{asset('img/parakoder_white.png')}}" class="img-fluid" width="60" height="40" alt="image">
                        <br>
                        <h3 class="m-0 text-white">Parakoder IT Solution</h3>
                        
                        <p class="mt-3 mb-4">Mengubah proses bisnis dengan menghadirkan solusi digital dengan platform dan teknologi terbaik. kolaborasikan ide digitalisasi bersama parakoder untuk masa depan bisnis yang lebih baik.</p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-6 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Get In Touch</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">Cimanggis, Depok, Jawa Barat</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">marcom@parakoder.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">+62 813 8930 5438 (WA only)</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="https://twitter.com/parakoder" target="_blank"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="https://www.linkedin.com/company/parakoder" target="_blank"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square" href="https://instagram.com/parakoder?igshid=NmE0MzVhZDY=" target="_blank"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Quick Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="{{url('/')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-light mb-2" href="{{url('/about')}}"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <a class="text-light mb-2" href="{{url('/service?service-id=web-development')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                                <a class="text-light mb-2" href="{{url('/maintenance')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Meet The Team</a>
                                <a class="text-light mb-2" href="{{url('/maintenance')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Project</a>
                                <a class="text-light" href="{{url('/contact')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">PARAKODER SOFTWAREHOUSE</a>. All Rights Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jsdelivr.min.js')}}"></script>
    <script src="{{asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>