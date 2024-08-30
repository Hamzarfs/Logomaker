@extends('site.common')

@section('title', 'Graphics Designing')

@section('content')

    <div class="banner-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 content-section">
                    <h1>Design Just Got Easy</h1>
                    <h2>Create impressive videos and images <span class="logo-design-color">designs in minutes.</span>
                    </h2>
                    <ul class="icon-list">
                        <li><i class="fas fa-trophy"></i> Graphic Designing In Digital Marketing</li>
                        <li><i class="fas fa-briefcase"></i> Multimedia & Print Media Services</li>
                        <li><i class="fas fa-sync-alt"></i> Character & Creative Design</li>
                        <li><i class="fas fa-users"></i> Corporate Identity Design</li>
                        <li><i class="fas fa-star"></i> Logo Design</li>
                    </ul>
                    <a href="{{ url('/') }}" class="california-button-online">Get Started</a>
                </div>
                <div class="col-lg-6 text-center about-us-image-sec order-lg-2">
                    <img src="images/graphic designer.png" alt="About RFS Logo Design" title= "About RFS Logo Design"
                        class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div class="logo-slider-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="logo-slider">
                        <img src="images/Group 14.png" alt="Logo 1">
                        <img src="images/Group 16.png" alt="Logo 2">
                        <img src="images/Group 17.png" alt="Logo 3">
                        <img src="images/Group 18.png" alt="Logo 4">
                        <img src="images/Group 21.png" alt="Logo 5">
                        <img src="images/Group 22.png" alt="Logo 6">

                        <!-- Repeat logos to ensure continuous animation -->
                        <img src="images/Group 14.png" alt="Logo 1">
                        <img src="images/Group 16.png" alt="Logo 2">
                        <img src="images/Group 17.png" alt="Logo 3">
                        <img src="images/Group 18.png" alt="Logo 4">
                        <img src="images/Group 21.png" alt="Logo 5">
                        <img src="images/Group 22.png" alt="Logo 6">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--------------------- Start PROFESSIONAL LOGO DESIGNS IN CA ----------------------->
    <div class="logo-designs-ca">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center">
                    <img src="images/111 1.png" alt="Professional Logo Designs" class="professional-logo-image">
                </div>
                <div class="col-lg-6">
                    <h3>Graphic Designing</h3>
                    <p style="text-align: justify;">Graphic design is an electrifying field that involves organizing
                        visual elements to effectively communicate messages. With a seamless blend of inventiveness
                        and technical skill, designers mold brand identities by using captivating logos, dynamic color
                        palettes, and captivating aesthetics. Whether working in print or online, they craft powerful
                        materials, including eye-catching brochures, striking posters, sleek web designs, and
                        captivating
                        social media graphics.</p>
                </div>
            </div>
        </div>
    </div>
    <!--------------------- End PROFESSIONAL LOGO DESIGNS IN CA ----------------------->

    <!--------------------- Start PROFESSIONAL LOGO DESIGNS IN CA ----------------------->
    <div class="services-section" style=padding:0px;>
        <div class="container">
            <h2>What Services Do We Offer?</h2>
            <p>Our experts are dedicated to delivering excellence in every project.</p>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-card business-card-design">
                        <img src="{{ url('images/Stationery.png') }}" alt="Business Card Design">
                        <h4>Branding Design</h4>
                        <p>A professional branding design service enhances a brand’s visual identity. It creates a
                            positive ecosystem for the brand to grow amid competitors.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-card letterhead-design">
                        <img src="{{ url('images/BRANDING.png') }}" alt="Letterhead Design">
                        <h4>Stationery Design</h4>
                        <p>Utilizing a custom stationery design service can facilitate the growth of your business. The
                            professional designs will enhance your brand through direct.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-card envelope-design">
                        <img src="{{ url('images/LOGODESIGN(1).png') }}" alt="Envelope Design">
                        <h4>Logo Design</h4>
                        <p>Grow your business with a professional, custom logo designed by our designer creative
                            experts. Because good design makes great business.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------------------- End PROFESSIONAL LOGO DESIGNS IN CA ----------------------->

    <!---------------------- Start Portfolio -------------------------->
    <div class="logo-designs-portfolio">
        <div class="container">
            <div class="row filter-button-group">
                <button class="btn filter-button active" data-filter="all">All</button>
                <button class="btn filter-button" data-filter="iconic">Business Cards</button>
                <button class="btn filter-button" data-filter="typography">Envelope Design</button>
                <button class="btn filter-button" data-filter="illustrative">Letterhead Design</button>
            </div>

            <div class="row gallery">
                <!-- Iconic Logos -->
                <div class="col-lg-4 col-md-6 mb-4 filter all iconic">
                    <img src="{{ url('images/Business Cards01.png') }}" alt="Iconic Logo 1">
                </div>
                <div class="col-lg-4 col-md-6 mb-4 filter all iconic">
                    <img src="{{ url('images/Business Cards02.png') }}" alt="Iconic Logo 2">
                </div>
                <div class="col-lg-4 col-md-6 mb-4 filter all iconic">
                    <img src="{{ url('images/Business Cards03.png') }}" alt="Iconic Logo 3">
                </div>

                <!-- Typography Logos -->
                <div class="col-lg-4 col-md-6 mb-4 filter all typography">
                    <img src="{{ url('images/Envelope Design02.png') }}" alt="Typography Logo 1">
                </div>
                <div class="col-lg-4 col-md-6 mb-4 filter all typography">
                    <img src="{{ url('images/Envelope Design01.png') }}" alt="Typography Logo 2">
                </div>
                <div class="col-lg-4 col-md-6 mb-4 filter all typography">
                    <img src="{{ url('images/Envelope Design03.png') }}" alt="Typography Logo 2">
                </div>


                <!-- Illustrative Logos -->
                <div class="col-lg-4 col-md-6 mb-4 filter all illustrative">
                    <img src="{{ url('images/Letterhead Design.webp') }}" alt="Illustrative Logo 1">
                </div>
                <div class="col-lg-4 col-md-6 mb-4 filter all illustrative">
                    <img src="{{ url('images/Letterhead Design01.webp') }}" alt="Illustrative Logo 1">
                </div>
                <div class="col-lg-4 col-md-6 mb-4 filter all illustrative">
                    <img src="{{ url('images/Letterhead Design02.webp') }}" alt="Illustrative Logo 1">
                </div>



                <!-- Animated Logos -->
                <div class="col-lg-4 col-md-6 mb-4 filter all animated">
                    <img src="images/logo-animation-example-conversable.gif" alt="Animated Logo 1">
                </div>
                <div class="col-lg-4 col-md-6 mb-4 filter all animated">
                    <img src="images/logo-design-animation.gif" alt="Animated Logo 2">
                </div>
            </div>
        </div>
    </div>
    <!---------------------- End Portfolio -------------------------->

    <!-- <-----------------Start Testimonial Section---------------->
    <section id="testimonial-section" class="pt-5 pb-5">
        <div class="container">
            <h2 class="text-center mb-5">See What Our Clients Have to Say</h2>
            <div class="owl-carousel owl-theme">
                <!-- Reviews will be inserted here dynamically -->
            </div>
        </div>
    </section>
    <!-- {{-- --------------- End Testiomonial Section --}} -->

    <!-------------------- Start Boxed Section ------------------>
    <section class="boxed-section">
        <div class="container">
            <h2 style=font-size:1.6em;>Get Your Custom Graphics Designs Today!</h2>
            <p>Enhance your brand with our professional graphics design services. We are your one stop shop for quality
                graphics designs. Contact us at <a href="mailto:support@rfslogodesign.com">support@rfslogodesign.com</a> or
                call us at <a href="tel:+15516665255">+1 (551) 666-5255</a>.</p>
            <a href="{{ url('contact-us') }}" class="california-button-online">Get Started</a>
        </div>
    </section>
    <!-------------------- End Boxed Section ------------------>


    <!-- Bootstrap JS and dependencies -->
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}
    <script>
        $(document).ready(function() {
            // Show only the first 9 items on page load
            $('.filter').hide();
            $('.filter.all').slice(0, 9).show();

            $('.filter-button').click(function() {
                var value = $(this).attr('data-filter');
                $('.filter-button').removeClass('active');
                $(this).addClass('active');
                if (value == 'all') {
                    $('.filter').hide();
                    $('.filter.all').slice(0, 9).show();
                    $('.load-more-button').show();
                } else {
                    $('.filter').hide();
                    $('.filter.' + value).slice(0, 2).show();
                    $('.load-more-button').hide();
                }
            });

            $('.load-more-button').click(function() {
                $('.filter.all:hidden').slice(0, 9).slideDown();
                if ($('.filter.all:hidden').length == 0) {
                    $(this).fadeOut('slow');
                }
            });
        });
    </script>
@endsection
