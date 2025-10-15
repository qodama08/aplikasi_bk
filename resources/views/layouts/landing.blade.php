<!DOCTYPE html>
<html lang="en">

    <head>

        <title>@yield('title') - Aplikasi BK SMK</title>
        <!-- [Meta] -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description"
            content="Mantis is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
        <meta name="keywords"
            content="Mantis, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template">
        <meta name="author" content="CodedThemes">

        <!-- [Favicon] icon -->
        <link rel="icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon">
        <!-- [Page specific CSS] start -->
        <link href="{{ asset('assets/css/plugins/animate.min.css') }}" rel="stylesheet" type="text/css">
        <!-- [Page specific CSS] end -->
        <!-- [Google Font] Family -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap"
            id="main-font-link">
        <!-- [Tabler Icons] https://tablericons.com -->
        <link rel="stylesheet" href="{{ asset('assets/fonts/tabler-icons.min.css') }}">
        <!-- [Feather Icons] https://feathericons.com -->
        <link rel="stylesheet" href="{{ asset('assets/fonts/feather.css') }}">
        <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
        <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome.css') }}">
        <!-- [Material Icons] https://fonts.google.com/icons -->
        <link rel="stylesheet" href="{{ asset('assets/fonts/material.css') }}">
        <!-- [Template CSS Files] -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" id="main-style-link">
        <link rel="stylesheet" href="{{ asset('assets/css/style-preset.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/css/landing.css') }}">


        <style>
            .navbar {
                transition: background .2s ease-in-out;
            }

            .navbar.default {
                transition: background .2s ease-in-out;
            }
        </style>
    </head>

    <body class="landing-page">
        <!-- [ Main Content ] start -->
        <!-- [ Pre-loader ] start -->
        <div class="loader-bg">
            <div class="loader-track">
                <div class="loader-fill"></div>
            </div>
        </div>

        <nav class="navbar navbar-expand-md navbar-dark top-nav-collapse default py-0">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img width="70" src="{{ asset('assets/images/my/images.png') }}" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item pe-1">
                            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
                        </li>
                        <li class="nav-item pe-1">
                            <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}"
                                href="/dashboard">Dashboard</a>
                        </li>
                        <li class="nav-item pe-1">
                            <a class="nav-link {{ request()->is('contact-us') ? 'active' : '' }}"
                                href="/contact-us">Contact Us</a>
                        </li>

                        @if (auth()->check())
                            <li class="nav-item">
                                <a class="btn btn-primary" href="/myprofile">{{ auth()->user()->name }}</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="btn btn-primary" href="/login">Login</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <!-- [ Pre-loader ] End -->
        @yield('content')
        <footer class="footer bg-dark text-white py-4">
            <div class="top-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('assets/images/my/images.png') }}"
                                alt="Logo Sekolah Harapan Bangsa" class="img-fluid mb-3" style="max-width: 200px;">
                            <p class="opacity-75">Sekolah Harapan Bangsa berkomitmen untuk mencetak generasi penerus
                                yang cerdas, kreatif, dan berakhlak mulia melalui pendidikan berkualitas.</p>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-sm-4">
                                    <h5 class="text-white mb-4">Navigasi</h5>
                                    <ul class="list-unstyled footer-link">
                                        <li><a href="/">Beranda</a></li>
                                        <li><a href="/#alur">Alur Pendaftaran</a></li>
                                        <li><a href="#">Pengumuman</a></li>
                                        <li><a href="/contact">Kontak</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <h5 class="text-white mb-4">Hubungi Kami</h5>
                                    <ul class="list-unstyled footer-link">
                                        <li class="d-flex">
                                            <i class="ti ti-map-pin me-2 mt-1"></i>
                                            <span>Jl. Pendidikan No. 123, Jakarta Selatan, Indonesia</span>
                                        </li>
                                        <li class="d-flex">
                                            <i class="ti ti-mail me-2 mt-1"></i>
                                            <span>info@harapanbangsa.sch.id</span>
                                        </li>
                                        <li class="d-flex">
                                            <i class="ti ti-phone me-2 mt-1"></i>
                                            <span>(021) 123-4567</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <h5 class="text-white mb-4">Tautan Lainnya</h5>
                                    <ul class="list-unstyled footer-link">
                                        <li><a href="#">Kebijakan Privasi</a></li>
                                        <li><a href="#">Syarat & Ketentuan</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-footer">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col my-1">
                            <p class="text-white mb-0">© {{ date('Y') }} Sekolah Harapan Bangsa. Hak Cipta
                                Dilindungi.</p>
                        </div>
                        <div class="col-auto my-1">
                            <ul class="list-inline footer-sos-link mb-0">
                                <li class="list-inline-item"><a href="#"><i
                                            class="ph-duotone ph-facebook-logo f-20"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i
                                            class="ph-duotone ph-instagram-logo f-20"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i
                                            class="ph-duotone ph-youtube-logo f-20"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- [ footer ] End -->

        <!-- [ Customize ] start -->

        <!-- [ Customize ] End -->

        <!-- [ Main Content ] end -->
        <!-- Required Js -->
        <script src="../assets/js/plugins/popper.min.js"></script>
        <script src="../assets/js/plugins/simplebar.min.js"></script>
        <script src="../assets/js/plugins/bootstrap.min.js"></script>
        <script src="../assets/js/fonts/custom-font.js"></script>
        <script src="../assets/js/pcoded.js"></script>
        <script src="../assets/js/plugins/feather.min.js"></script>





        <script>
            layout_change('light');
        </script>




        <script>
            change_box_container('false');
        </script>



        <script>
            layout_rtl_change('false');
        </script>


        <script>
            preset_change("preset-1");
        </script>


        <script>
            font_change("Public-Sans");
        </script>



        <!-- [Page Specific JS] start -->
        <script src="{{ asset('assets/js/plugins/wow.min.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.marquee/1.4.0/jquery.marquee.min.js"></script>
        <script>
            // Start [ Menu hide/show on scroll ]
            let ost = 0;
            document.addEventListener('scroll', function() {
                let cOst = document.documentElement.scrollTop;
                if (cOst == 0) {
                    document.querySelector(".navbar").classList.add("top-nav-collapse");
                } else if (cOst > ost) {
                    document.querySelector(".navbar").classList.add("top-nav-collapse");
                    document.querySelector(".navbar").classList.remove("default");
                } else {
                    document.querySelector(".navbar").classList.add("default");
                    document.querySelector(".navbar").classList.remove("top-nav-collapse");
                }

                // if (cOst > 500) {
                //     document.querySelector(".pc-landing-custmizer").classList.add("active");
                // } else {
                //     document.querySelector(".pc-landing-custmizer").classList.remove("active");
                // }
                ost = cOst;
            });
            // End [ Menu hide/show on scroll ]
            var wow = new WOW({
                animateClass: 'animated',
            });
            wow.init();
            // light dark image start
            function initComparisons() {
                var x, i;
                /*find all elements with an "overlay" class:*/
                x = document.getElementsByClassName("img-comp-overlay");
                for (i = 0; i < x.length; i++) {
                    /*once for each "overlay" element:
                    pass the "overlay" element as a parameter when executing the compareImages function:*/
                    compareImages(x[i]);
                }

                function compareImages(img) {
                    var slider, img, clicked = 0,
                        w, h;
                    /*get the width and height of the img element*/
                    w = img.offsetWidth;
                    h = img.offsetHeight;
                    /*set the width of the img element to 50%:*/
                    img.style.width = (w / 2) + "px";
                    /*create slider:*/
                    slider = document.createElement("DIV");
                    slider.setAttribute("class", "img-comp-slider ti ti-separator-vertical bg-primary");
                    /*insert slider*/
                    img.parentElement.insertBefore(slider, img);
                    /*position the slider in the middle:*/
                    slider.style.top = (h / 2) - (slider.offsetHeight / 2) + "px";
                    slider.style.left = (w / 2) - (slider.offsetWidth / 2) + "px";
                    /*execute a function when the mouse button is pressed:*/
                    slider.addEventListener("mousedown", slideReady);
                    /*and another function when the mouse button is released:*/
                    window.addEventListener("mouseup", slideFinish);
                    /*or touched (for touch screens:*/
                    slider.addEventListener("touchstart", slideReady);
                    /*and released (for touch screens:*/
                    window.addEventListener("touchend", slideFinish);

                    function slideReady(e) {
                        /*prevent any other actions that may occur when moving over the image:*/
                        e.preventDefault();
                        /*the slider is now clicked and ready to move:*/
                        clicked = 1;
                        /*execute a function when the slider is moved:*/
                        window.addEventListener("mousemove", slideMove);
                        window.addEventListener("touchmove", slideMove);
                    }

                    function slideFinish() {
                        /*the slider is no longer clicked:*/
                        clicked = 0;
                    }

                    function slideMove(e) {
                        var pos;
                        /*if the slider is no longer clicked, exit this function:*/
                        if (clicked == 0) return false;
                        /*get the cursor's x position:*/
                        pos = getCursorPos(e)
                        /*prevent the slider from being positioned outside the image:*/
                        if (pos < 0) pos = 0;
                        if (pos > w) pos = w;
                        /*execute a function that will resize the overlay image according to the cursor:*/
                        slide(pos);
                    }

                    function getCursorPos(e) {
                        var a, x = 0;
                        e = (e.changedTouches) ? e.changedTouches[0] : e;
                        /*get the x positions of the image:*/
                        a = img.getBoundingClientRect();
                        /*calculate the cursor's x coordinate, relative to the image:*/
                        x = e.pageX - a.left;
                        /*consider any page scrolling:*/
                        x = x - window.pageXOffset;
                        return x;
                    }

                    function slide(x) {
                        /*resize the image:*/
                        img.style.width = x + "px";
                        /*position the slider:*/
                        slider.style.left = img.offsetWidth - (slider.offsetWidth / 2) + "px";
                    }
                }
            }
            initComparisons();
            // light dark image end
            // marquee start
            $('.marquee').marquee({
                duration: 500000,
                pauseOnHover: true,
                startVisible: true,
                duplicated: true
            });
            $('.marquee-1').marquee({
                duration: 500000,
                pauseOnHover: true,
                startVisible: true,
                duplicated: true,
                direction: 'right'
            });
            // marquee end
            // configurations start
            var elem = document.querySelectorAll('.color-checkbox');
            for (var j = 0; j < elem.length; j++) {
                elem[j].addEventListener('click', function(event) {
                    var targetElement = event.target;
                    if (targetElement.tagName == 'INPUT') {
                        targetElement = targetElement.parentNode;
                    }
                    if (targetElement.tagName == 'I') {
                        targetElement = targetElement.parentNode;
                    }
                    var temp = targetElement.children[0].getAttribute('data-pc-value');
                    document.getElementsByTagName('body')[0].setAttribute('data-pc-preset', 'preset-' + temp);
                    var img_elem = document.querySelectorAll('.img-landing');
                    for (var i = 0; i < img_elem.length; i++) {
                        var img_name = img_elem[i].getAttribute('data-img');
                        var img_type = img_elem[i].getAttribute('data-img-type');
                        img_elem[i].setAttribute('src', img_name + temp + img_type);
                    }
                });
            }
            // configurations end
        </script>
        <!-- [Page Specific JS] end -->
        <div class="offcanvas pct-offcanvas offcanvas-end" tabindex="-1" id="offcanvas_pc_layout">
            <div class="offcanvas-header bg-primary">
                <h5 class="offcanvas-title text-white">Mantis Customizer</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="pct-body" style="height: calc(100% - 60px)">
                <div class="offcanvas-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a class="btn border-0 text-start w-100" data-bs-toggle="collapse"
                                href="#pctcustcollapse1">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avtar avtar-xs bg-light-primary">
                                            <i class="ti ti-layout-sidebar f-18"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">Theme Layout</h6>
                                        <span>Choose your layout</span>
                                    </div>
                                    <i class="ti ti-chevron-down"></i>
                                </div>
                            </a>
                            <div class="collapse show" id="pctcustcollapse1">
                                <div class="pct-content">
                                    <div class="pc-rtl">
                                        <p class="mb-1">Direction</p>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="layoutmodertl">
                                            <label class="form-check-label" for="layoutmodertl">RTL</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <a class="btn border-0 text-start w-100" data-bs-toggle="collapse"
                                href="#pctcustcollapse2">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avtar avtar-xs bg-light-primary">
                                            <i class="ti ti-brush f-18"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">Theme Mode</h6>
                                        <span>Choose light or dark mode</span>
                                    </div>
                                    <i class="ti ti-chevron-down"></i>
                                </div>
                            </a>
                            <div class="collapse show" id="pctcustcollapse2">
                                <div class="pct-content">
                                    <div class="theme-color themepreset-color theme-layout">
                                        <a href="#!" class="active" onclick="layout_change('light')"
                                            data-value="false"><span><img
                                                    src="../assets/images/customization/default.svg"
                                                    alt="img"></span><span>Light</span></a>
                                        <a href="#!" class="" onclick="layout_change('dark')"
                                            data-value="true"><span><img src="../assets/images/customization/dark.svg"
                                                    alt="img"></span><span>Dark</span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <a class="btn border-0 text-start w-100" data-bs-toggle="collapse"
                                href="#pctcustcollapse3">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avtar avtar-xs bg-light-primary">
                                            <i class="ti ti-color-swatch f-18"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">Color Scheme</h6>
                                        <span>Choose your primary theme color</span>
                                    </div>
                                    <i class="ti ti-chevron-down"></i>
                                </div>
                            </a>
                            <div class="collapse show" id="pctcustcollapse3">
                                <div class="pct-content">
                                    <div class="theme-color preset-color">
                                        <a href="#!" class="active" data-value="preset-1"><span><img
                                                    src="../assets/images/customization/theme-color.svg"
                                                    alt="img"></span><span>Theme 1</span></a>
                                        <a href="#!" class="" data-value="preset-2"><span><img
                                                    src="../assets/images/customization/theme-color.svg"
                                                    alt="img"></span><span>Theme 2</span></a>
                                        <a href="#!" class="" data-value="preset-3"><span><img
                                                    src="../assets/images/customization/theme-color.svg"
                                                    alt="img"></span><span>Theme 3</span></a>
                                        <a href="#!" class="" data-value="preset-4"><span><img
                                                    src="../assets/images/customization/theme-color.svg"
                                                    alt="img"></span><span>Theme 4</span></a>
                                        <a href="#!" class="" data-value="preset-5"><span><img
                                                    src="../assets/images/customization/theme-color.svg"
                                                    alt="img"></span><span>Theme 5</span></a>
                                        <a href="#!" class="" data-value="preset-6"><span><img
                                                    src="../assets/images/customization/theme-color.svg"
                                                    alt="img"></span><span>Theme 6</span></a>
                                        <a href="#!" class="" data-value="preset-7"><span><img
                                                    src="../assets/images/customization/theme-color.svg"
                                                    alt="img"></span><span>Theme 7</span></a>
                                        <a href="#!" class="" data-value="preset-8"><span><img
                                                    src="../assets/images/customization/theme-color.svg"
                                                    alt="img"></span><span>Theme 8</span></a>
                                        <a href="#!" class="" data-value="preset-9"><span><img
                                                    src="../assets/images/customization/theme-color.svg"
                                                    alt="img"></span><span>Theme 9</span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item pc-boxcontainer">
                            <a class="btn border-0 text-start w-100" data-bs-toggle="collapse"
                                href="#pctcustcollapse4">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avtar avtar-xs bg-light-primary">
                                            <i class="ti ti-border-inner f-18"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">Layout Width</h6>
                                        <span>Choose fluid or container layout</span>
                                    </div>
                                    <i class="ti ti-chevron-down"></i>
                                </div>
                            </a>
                            <div class="collapse show" id="pctcustcollapse4">
                                <div class="pct-content">
                                    <div class="theme-color themepreset-color boxwidthpreset theme-container">
                                        <a href="#!" class="active" onclick="change_box_container('false')"
                                            data-value="false"><span><img
                                                    src="../assets/images/customization/default.svg"
                                                    alt="img"></span><span>Fluid</span></a>
                                        <a href="#!" class="" onclick="change_box_container('true')"
                                            data-value="true"><span><img
                                                    src="../assets/images/customization/container.svg"
                                                    alt="img"></span><span>Container</span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <a class="btn border-0 text-start w-100" data-bs-toggle="collapse"
                                href="#pctcustcollapse5">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avtar avtar-xs bg-light-primary">
                                            <i class="ti ti-typography f-18"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">Font Family</h6>
                                        <span>Choose your font family.</span>
                                    </div>
                                    <i class="ti ti-chevron-down"></i>
                                </div>
                            </a>
                            <div class="collapse show" id="pctcustcollapse5">
                                <div class="pct-content">
                                    <div class="theme-color fontpreset-color">
                                        <a href="#!" class="active" onclick="font_change('Public-Sans')"
                                            data-value="Public-Sans"><span>Aa</span><span>Public Sans</span></a>
                                        <a href="#!" class="" onclick="font_change('Roboto')"
                                            data-value="Roboto"><span>Aa</span><span>Roboto</span></a>
                                        <a href="#!" class="" onclick="font_change('Poppins')"
                                            data-value="Poppins"><span>Aa</span><span>Poppins</span></a>
                                        <a href="#!" class="" onclick="font_change('Inter')"
                                            data-value="Inter"><span>Aa</span><span>Inter</span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="collapse show">
                                <div class="pct-content">
                                    <div class="d-grid">
                                        <button class="btn btn-light-danger" id="layoutreset">Reset Layout</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </body>

</html>
