@extends('layouts.landing')

@section('title', 'Contact Us')

@section('content')

    <header class="contact-hero">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-5 text-light">
                    <h2 class="text-light">Hubungi <span class="text-primary">Kami</span></h2>
                    <p class="text-light">Silakan hubungi kami untuk pertanyaan, informasi, atau bantuan lebih lanjut terkait
                        layanan kami.</p>
                </div>
                <div class="col-md-6">
                    <img src="../assets/images/pages/worldMap.png" alt="images" class="img-fluid">
                </div>
            </div>
        </div>
    </header>

    <section class="contact-form">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-10 col-xl-5 mb-4">
                    <h5 class="text-primary mb-0">Get In touch</h5>
                    <h2 class="my-3">Send us your message</h2>
                    <p class="text-muted">The starting point for your next project based on easy-to-customize Material-UI ©
                        helps
                        you build apps faster and better.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-md-8 col-sm-10">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Company Name">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Email address">
                        </div>
                        <div class="col-md-6">
                            <input type="number" class="form-control" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <select class="form-select mb-3">
                                <option selected="">1 - 5</option>
                                <option value="1">5 - 10</option>
                                <option value="2">10+</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <select class="form-select mb-3">
                                <option selected="">Below $1000</option>
                                <option value="1">$1000 - $5000</option>
                                <option value="2">Not Specified</option>
                            </select>
                        </div>
                    </div>
                    <textarea class="form-control form-control-lg mb-3" rows="4" placeholder="Message"></textarea>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
                        <label class="form-check-label" for="flexCheckChecked">
                            By submitting this, you agree to the<a href="#" class="link-primary"> Privacy Policy </a>
                            and <a href="#" class="link-primary">CookiePolicy</a>
                        </label>
                    </div>
                    <div class="mt-3 text-end">
                        <button type="button" class="btn btn-primary">Submit Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
