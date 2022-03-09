<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>CV RPC KARYA | @yield('namePage')</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap"
        rel="stylesheet">
    <link href="{{asset('')}}css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('')}}css/fontawesome-all.min.css" rel="stylesheet">
    <link href="{{asset('')}}css/swiper.css" rel="stylesheet">
    <link href="{{asset('')}}css/styles.css" rel="stylesheet">
    <!-- toastr -->
    <link rel="stylesheet" href="{{asset('assets')}}/plugins/toastr/toastr.min.css">

    <!-- Favicon  -->
    <link rel="icon" href="{{asset('')}}images/Tambahan/favicon.png">
</head>

<body data-bs-spy="scroll" data-bs-target="#navbarExample">

    <!-- Navigation -->
    <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
        <div class="container">

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="{{route('home')}}"><img src="{{asset('')}}images/Tambahan/logobaru_15.png"
                    alt="alternative"></a>

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text" href="index.html">Zinc</a> -->

            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                @if(Request::is('home') || Request::is('/'))
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#header">Tentang kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Visi & Misi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">Rencana Kerja</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('home')}}">Tentang kami</a>
                    </li>
                    @endif

                </ul>
                <span class="nav-item">
                    <a class="btn-solid-sm" href="{{route('home')}}#contact">Hubungi Kami</a>
                </span>
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->



    @yield('content')

    <!-- Footer -->
    <div class="footer bg-gray">
        <img class="decoration-city" src="{{asset('')}}images/decoration-city.svg" alt="alternative">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4>Dengan profesionalitas, solutif, inovatif, harmonis, dilandasi kerja cerdas, kerja keras
                        yang berwawasan, CV RPC KARYA akan berperan aktif dalam membangun bangsa.</h4>
                    <div class="social-container">
                        <span class="fa-stack">
                            <a href="@if($profile != null){{$profile->fblink}}@else{{'https://web.facebook.com/'}}@endif" target="_blank">
                                <i class=" fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>


                        <span class="fa-stack">
                            <a href="@if($profile != null){{$profile->iglink}}@else{{'https://www.instagram.com/'}}@endif" target="_blank>
                                <i class=" fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="@if($profile != null){{$profile->walink}}@else{{'https://wa.me/6281903100766'}}@endif" target="_blank">
                                <i class=" fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-whatsapp fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> <!-- end of social-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled li-space-lg p-small">
                        <li><a href="{{route('home.term')}}">Kebijakan perusahaan</a></li>

                    </ul>
                </div> <!-- end of col -->
                <div class="col-lg-3">
                    <p class="p-small statement">Copyright © <a href="#">CV. RPC KARYA</a></p>
                </div> <!-- end of col -->
                <div class="col-lg-3">

                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->


    <!-- Back To Top Button -->
    <button onclick="topFunction()" id="myBtn">
        <img src="{{asset('')}}images/up-arrow.png" alt="alternative">
    </button>
    <!-- end of back to top button -->

    <!-- Scripts -->
    <script src="{{asset('')}}js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="{{asset('')}}js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="{{asset('')}}js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="{{asset('')}}js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="{{asset('')}}js/scripts.js"></script> <!-- Custom scripts -->
    <!-- jQuery -->
    <script src="{{asset('assets')}}/plugins/jquery/jquery.min.js"></script>
    <!-- toastr -->
    <script src="{{asset('assets')}}/plugins/toastr/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))

        toastr.success("{{ session('success') }}", 'BERHASIL!');
        // console.log("{{ session('success') }}");

        @elseif(session()->has('error'))

        toastr.error("{{ session('error') }}", 'GAGAL!');

        @endif
    </script>
    
</body>

</html>