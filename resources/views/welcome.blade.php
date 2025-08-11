@extends('layouts.landing')

@section('title', 'Welcome')


@section('content')
    <!-- [ Header ] start -->
    <header id="home">
        <!-- [ Nav ] start -->


        <div class="row pt-5">
            <div class="col-lg-6">
                <img src="../assets/images/landing/bg-mockup-theme-1.png" alt="img"
                    class="img-fluid img-home-mokeup img-landing" data-img="../assets/images/landing/bg-mockup-theme-"
                    data-img-type=".png">
            </div>
            <div class="col-lg-6">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-12">
                            <h1 class="mt-sm-3 text-white mb-4 f-w-600 wow fadeInUp" data-wow-delay="0.2s">Carefully
                                Crafted
                                for your
                                <span class="text-primary">Caring React</span> Project
                            </h1>
                            <h5 class="mb-4 text-white opacity-75 wow fadeInUp" data-wow-delay="0.4s"> Mantis React
                                is a
                                blazing-fast
                                dashboard template built using the MUI React library.</h5>
                            <div class="my-5 wow fadeInUp" data-wow-delay="0.6s">
                                <a href="../elements/bc_alert.html" class="btn btn-outline-primary me-2"
                                    target="_blank">Explore Components</a>
                                <a href="../dashboard/index.html" class="btn btn-primary d-inline-flex align-items-center"
                                    target="_blank"> <i class="ti ti-eye me-1"></i> Live Preview</a>
                            </div>
                            <img src="../assets/images/landing/img-headertech.svg" alt="img"
                                class="img-fluid wow fadeInUp" data-wow-delay="0.8s">
                        </div>
                        <div class="col-lg-7">
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </header>
    <!-- [ Header ] End -->
    <!-- [ Why Mantis ] start -->
    <section>
        <div class="container title">
            <div class="row justify-content-center text-center wow fadeInUp" data-wow-delay="0.2s">
                <div class="col-md-10 col-xl-6">
                    <h5 class="text-primary mb-0">Mantis nailed it!</h5>
                    <h2 class="my-3">Why Mantis?</h2>
                    <p class="mb-0">Customize everything with the MantisAdmin Dashboard Template built with
                        latest Bootstrap v5
                        component library</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="card wow fadeInUp" data-wow-delay="0.4s">
                        <div class="card-body">
                            <img src="../assets/images/landing/img-feature1.svg" alt="img" class="img-fluid">
                            <h5 class="my-3">Professional Design</h5>
                            <p class="mb-0 text-muted">Mantis has fully professional grade user interface for any
                                kind of backend
                                project.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card wow fadeInUp" data-wow-delay="0.6s">
                        <div class="card-body">
                            <img src="../assets/images/landing/img-feature2.svg" alt="img" class="img-fluid">
                            <h5 class="my-3">Flexible Solution</h5>
                            <p class="mb-0 text-muted">Highly flexible to work around using Mantis React Template.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card wow fadeInUp" data-wow-delay="0.8s">
                        <div class="card-body">
                            <img src="../assets/images/landing/img-feature3.svg" alt="img" class="img-fluid">
                            <h5 class="my-3">Effective Documentation</h5>
                            <p class="mb-0 text-muted">Need help? Check out the detailed Documentation guide.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- [ Why Mantis ] End -->
    <!-- [ Complete Combo ] start -->
    <section class="pt-0">
        <div class="container title">
            <div class="row justify-content-center text-center wow fadeInUp" data-wow-delay="0.2s">
                <div class="col-md-10 col-xl-6">
                    <h5 class="text-primary mb-0">Mantis for All</h5>
                    <h2 class="my-3">Complete Combo</h2>
                    <p class="mb-0">Wheather you are developer or designer, Mantis serve the need of all - No
                        matter you are
                        novice or expert</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="card wow fadeInUp" data-wow-delay="0.4s">
                        <div class="card-body">
                            <h3 class="mb-3">Design Source File</h3>
                            <p class="mb-4 text-muted">Check the live preview of Mantis figma design file. Figma
                                file included in Plus
                                and Extended License only.</p>
                            <button class="btn btn-outline-primary">Preview Figma <i class="ti ti-brand-figma"></i></button>
                        </div>
                        <div class="card-body pb-0 pe-0">
                            <img src="../assets/images/landing/img-demo1.jpg" alt="img" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card wow fadeInUp" data-wow-delay="0.6s">
                        <div class="card-body bg-light-primary">
                            <h3 class="mb-3">Components</h3>
                            <p class="mb-4 text-muted">Check the all components of Mantis in single place with
                                search feature for
                                easing your development while working.</p>
                            <button class="btn btn-primary">View All Components</button>
                        </div>
                        <div class="card-body bg-light-primary pb-0 pe-0">
                            <img src="../assets/images/landing/img-demo2.jpg" alt="img" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card wow fadeInUp" data-wow-delay="0.8s">
                        <div class="card-body">
                            <h3 class="mb-3">Documentation</h3>
                            <p class="mb-4 text-muted">From Quick start to detailed installation with super easy
                                navigation for find
                                out solution of your queries with complex documentation guide.</p>
                            <button class="btn btn-outline-primary">Explore Documentation</button>
                        </div>
                        <div class="card-body pb-0 pe-0">
                            <img src="../assets/images/landing/img-demo3.jpg" alt="img" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- [ Complete Combo ] End -->
    <!-- [ CTA ] start -->
    <section class="bg-dark cta-block">
        <img src="../assets/images/landing/img-bg-screen.svg" alt="img" class="img-cta">
        <div class="container">
            <div class="row">
                <div class="col-md-7 text-center text-md-start">
                    <h2 class="text-white mb-4">Check Mantis <span class="text-primary"> Free </span> Version
                        Before Purchase</h2>
                    <button class="btn btn-primary"><i class="ti ti-download"></i> Download Now</button>
                </div>
            </div>
        </div>
    </section>
    <!-- [ CTA ] End -->
    <!-- [ number ] start -->
    <section class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="card border-0 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <h2 class="m-0">128+</h2>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h4 class="mb-2">Pages</h4>
                                    <p class="mb-0">Hand Crafted useful pages with best user experience.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card border-0 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <h2 class="m-0">200+</h2>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h4 class="mb-2">MUI Components</h4>
                                    <p class="mb-0">Made using MUI React v5 - A Most popular React Platform.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card border-0 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <h2 class="m-0">5+</h2>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h4 class="mb-2">Conceptual Apps</h4>
                                    <p class="mb-0">Find out 5+ working apps which suits your React Project.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- [ number ] End -->
    <!-- [ light/dark ] start -->
    <section class="position-relative p-0">
        <h2 class="sr-only"><span>temp</span></h2>
        <div class="img-comp-container row">
            <div class="img-comp-img col-md-6">
                <img src="../assets/images/landing/img-theme-light-1.jpg" alt="img" data-img-type=".jpg"
                    class="img-landing img-fluid" data-img="../assets/images/landing/img-theme-light-">
            </div>
            <div class="img-comp-img  col-md-6">
                <img src="../assets/images/landing/img-theme-dark-1.jpg" alt="img" data-img-type=".jpg"
                    class="img-landing img-fluid" data-img="../assets/images/landing/img-theme-dark-">
            </div>
        </div>
    </section>
    <!-- [ light/dark ] End -->
    <!-- [ webapp ] start -->
    <section class="webapp-block">
        <div class="container title">
            <div class="row justify-content-center text-center wow fadeInUp" data-wow-delay="0.2s">
                <div class="col-md-10 col-xl-6">
                    <h2 class="mb-3">Create Beautiful Yet Powerful <span class="text-primary"> web apps </span>
                        with Mantis React
                    </h2>
                    <p class="mb-0">Create your powerful backend project using powerful design system of Mantis
                        React Template.
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-9 position-relative img-webapp-block">
                    <img src="../assets/images/landing/img-element-main-theme-1.png" alt="img" data-img-type=".png"
                        class="img-landing img-fluid" data-img="../assets/images/landing/img-element-main-theme-">
                    <img src="../assets/images/landing/img-element-msg.png" alt="img" class="img-fluid img-msg">
                    <img src="../assets/images/landing/img-element-widget.png" alt="img"
                        class="img-fluid img-widget">
                </div>
                <div class="col-lg-9 position-relative img-webapp-block">
                    <div class="row mt-5">
                        <div class="col-md-4">
                            <div class="d-flex align-items-center my-3">
                                <i class="ti ti-circle-check f-24 text-primary"></i>
                                <span class="ms-2 text-dark opacity-75 lh-1">Auth Methods : JWT, Auth0,
                                    Firebase</span>
                            </div>
                            <div class="d-flex align-items-center my-3">
                                <i class="ti ti-circle-check f-24 text-primary"></i>
                                <span class="ms-2 text-dark opacity-75 lh-1">Code Splitting</span>
                            </div>
                            <div class="d-flex align-items-center my-3">
                                <i class="ti ti-circle-check f-24 text-primary"></i>
                                <span class="ms-2 text-dark opacity-75 lh-1">RTL Support</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex align-items-center my-3">
                                <i class="ti ti-circle-check f-24 text-primary"></i>
                                <span class="ms-2 text-dark opacity-75 lh-1">Internationalization Support</span>
                            </div>
                            <div class="d-flex align-items-center my-3">
                                <i class="ti ti-circle-check f-24 text-primary"></i>
                                <span class="ms-2 text-dark opacity-75 lh-1">React Hooks</span>
                            </div>
                            <div class="d-flex align-items-center my-3">
                                <i class="ti ti-circle-check f-24 text-primary"></i>
                                <span class="ms-2 text-dark opacity-75 lh-1">Light/Dark, Semi Dark Support</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex align-items-center my-3">
                                <i class="ti ti-circle-check f-24 text-primary"></i>
                                <span class="ms-2 text-dark opacity-75 lh-1">Mock API</span>
                            </div>
                            <div class="d-flex align-items-center my-3">
                                <i class="ti ti-circle-check f-24 text-primary"></i>
                                <span class="ms-2 text-dark opacity-75 lh-1">Google Fonts</span>
                            </div>
                            <div class="d-flex align-items-center my-3">
                                <i class="ti ti-circle-check f-24 text-primary"></i>
                                <span class="ms-2 text-dark opacity-75 lh-1">Prettier Code Style</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- [ webapp ] End -->
    <!-- [ Why Mantis ] start -->
    <section class="client-block">
        <div class="container title">
            <div class="row justify-content-center text-center wow fadeInUp" data-wow-delay="0.2s">
                <div class="col-md-10 col-xl-6">
                    <h5 class="text-primary mb-0">Mantis nailed it!</h5>
                    <h2 class="my-3">Why Mantis?</h2>
                    <p class="mb-0">Customize everything with the MantisAdmin Dashboard Template built with
                        latest Bootstrap v5
                        component library</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-center mb-4 mb-md-5">
                <div class="col-auto my-2">
                    <img src="../assets/images/landing/client-01.png" alt="img" class="img-fluid wow fadeInUp"
                        data-wow-delay="0.2s">
                </div>
                <div class="col-auto my-2">
                    <img src="../assets/images/landing/client-02.png" alt="img" class="img-fluid wow fadeInUp"
                        data-wow-delay="0.4s">
                </div>
                <div class="col-auto my-2">
                    <img src="../assets/images/landing/client-03.png" alt="img" class="img-fluid wow fadeInUp"
                        data-wow-delay="0.6s">
                </div>
                <div class="col-auto my-2">
                    <img src="../assets/images/landing/client-04.png" alt="img" class="img-fluid wow fadeInUp"
                        data-wow-delay="0.8s">
                </div>
            </div>
        </div>
        <div class="marquee marquee-text">
            <ul class="list-inline marquee-list h2">
                <li class="list-inline-item">Auth Methods</li>
                <li class="list-inline-item">150+ Pages</li>
                <li class="list-inline-item">6+ Preset Colors</li>
                <li class="list-inline-item">50+ Widgets</li>
                <li class="list-inline-item">Best User Experience</li>
                <li class="list-inline-item">Live Customizer</li>
                <li class="list-inline-item">5+ Apps</li>
                <li class="list-inline-item">Material UI v5</li>
                <li class="list-inline-item">Highly Flexible</li>
                <li class="list-inline-item">Always Updated</li>
                <li class="list-inline-item">Professional Design</li>
                <li class="list-inline-item">TypeScript Support</li>
                <li class="list-inline-item">Figma Design</li>
                <li class="list-inline-item">Dark Layout</li>
                <li class="list-inline-item">RTL Support</li>
                <li class="list-inline-item">Retina Ready</li>
                <li class="list-inline-item">Prettier Code</li>
                <li class="list-inline-item">i18n Support</li>
            </ul>
        </div>
        <div class="marquee-1 marquee-text">
            <ul class="list-inline marquee-list h2">
                <li class="list-inline-item">Retina Ready</li>
                <li class="list-inline-item">Prettier Code</li>
                <li class="list-inline-item">i18n Support</li>
                <li class="list-inline-item">Auth Methods</li>
                <li class="list-inline-item">150+ Pages</li>
                <li class="list-inline-item">6+ Preset Colors</li>
                <li class="list-inline-item">50+ Widgets</li>
                <li class="list-inline-item">Always Updated</li>
                <li class="list-inline-item">Professional Design</li>
                <li class="list-inline-item">TypeScript Support</li>
                <li class="list-inline-item">Figma Design</li>
                <li class="list-inline-item">Dark Layout</li>
                <li class="list-inline-item">RTL Support</li>
                <li class="list-inline-item">Best User Experience</li>
                <li class="list-inline-item">Live Customizer</li>
                <li class="list-inline-item">5+ Apps</li>
                <li class="list-inline-item">Material UI v5</li>
                <li class="list-inline-item">Highly Flexible</li>
            </ul>
        </div>
    </section>
    <!-- [ Why Mantis ] End -->

    <!-- [ Customers Voice ] start -->
    <section class="pt-0">
        <div class="container title">
            <div class="row justify-content-center text-center wow fadeInUp" data-wow-delay="0.2s">
                <div class="col-md-10 col-xl-6">
                    <h5 class="text-primary mb-0">Testament</h5>
                    <h2 class="my-3">Customers Voice</h2>
                    <p class="mb-0">We have proven records in Dashboard development with an average 4.9/5
                        ratings. We are glad to
                        show such a warm reviews from our loyal customers.</p>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row cust-slider">
                <div class="col-md-6 col-lg-4">
                    <div class="card wow fadeInRight" data-wow-delay="0.2s">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <img src="../assets/images/landing/img-user1.svg" alt="img"
                                        class="img-fluid wid-40">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="mb-1">Code Quality</h5>
                                    <div class="star f-12 mb-3">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star-half-alt text-warning"></i>
                                        <i class="far fa-star text-muted"></i>
                                    </div>
                                    <p class="mb-2 text-muted">Fantastic design and good code
                                        quality. Its a great starting point for any new project. They provide plenty
                                        of pre made
                                        components, page views, and authentication options. Definitely the best Ive
                                        found for Material
                                        UI in Typescript.</p>
                                    <h6 class="mb-0">Felipe F.</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card wow fadeInRight" data-wow-delay="0.4s">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <img src="../assets/images/landing/img-user1.svg" alt="img"
                                        class="img-fluid wid-40">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="mb-1">Code Quality</h5>
                                    <div class="star f-12 mb-3">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star-half-alt text-warning"></i>
                                        <i class="far fa-star text-muted"></i>
                                    </div>
                                    <p class="mb-2 text-muted">Great template. Very well written code and good
                                        structure. Very
                                        customizable and tons of nice components. Good documentation. Team is very
                                        responsive too.</p>
                                    <h6 class="mb-0">Besart M.</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card wow fadeInRight" data-wow-delay="0.6s">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <img src="../assets/images/landing/img-user1.svg" alt="img"
                                        class="img-fluid wid-40">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="mb-1">Customizability</h5>
                                    <div class="star f-12 mb-3">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star-half-alt text-warning"></i>
                                        <i class="far fa-star text-muted"></i>
                                    </div>
                                    <p class="mb-2 text-muted">Excellent design, you can use in a
                                        new project or include in your current project. Multiple components for any
                                        use. Good code
                                        quality. Great customer service and support.</p>
                                    <h6 class="mb-0">Rodrigo J.</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card wow fadeInRight" data-wow-delay="0.8s">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <img src="../assets/images/landing/img-user1.svg" alt="img"
                                        class="img-fluid wid-40">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="mb-1">Design Quality</h5>
                                    <div class="star f-12 mb-3">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star-half-alt text-warning"></i>
                                        <i class="far fa-star text-muted"></i>
                                    </div>
                                    <p class="mb-2 text-muted">there is no mistake, great design and organized
                                        code, thank you ...</p>
                                    <h6 class="mb-0">Yang Z.</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- [ Customers Voice ] End -->
    <!-- [ footer ] start -->


@endsection
