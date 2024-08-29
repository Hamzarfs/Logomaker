@extends('site.common')

@section('title', 'E-commerce Website Development')

@section('content')


    <style>
        .banner-section h1 {
            font-size: 32px;
            font-weight: 700;
        }

        .gradient-heading {
            background: linear-gradient(90deg, #501e9c 0%, #8169f1 40%, #a44cee 75%, #ff847f 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .wp-website {
            background-color: #fffdf6
        }

        .wp-website h1 {
            font-size: 32px;
            font-weight: 700;
            line-height: 45px;
            text-transform: uppercase;
        }

        .wp-website p {
            text-align: justify;
        }

        .wp-website a {
            background-color: #501e9c;
            border: none;
        }

        .wp-website a:hover,
        .wp-website a:focus,
        .wp-website a:focus-visible,
        .wp-website a:active {
            background-color: #a44cee !important;
            border: none !important;
            box-shadow: none;
        }

        .wp-projects .swiper .swiper-slide img {
            width: 360px;
            height: 250px;
        }

        .wp-projects .swiper {
            height: 300px;
        }
    </style>

    <div class="banner-section text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1>
                        Best <span class="logo-design-color">eCommerce website</span> Design & Development Services</h1>
                    <p>
                        Our ecommerce services cover project planning and management for your entire e-commerce project &
                        development, starting from the analysis of your business requirements and user experience design to
                        implementing, integrating, and launching an eCommerce site.
                    </p>
                    <ul class="icon-list">
                        <li><i class="fas fa-trophy"></i> Responsive Design</li>
                        <li><i class="fas fa-briefcase"></i> Easy Navigation</li>
                        <li><i class="fas fa-sync-alt"></i> Site Security</li>
                        <li><i class="fas fa-users"></i> Website Speed Optimization</li>
                    </ul>
                    <a href="{{ url('contact-us') }}" class="california-button-online">Get a Quote</a>
                </div>
                <div class="col-lg-6 text-center about-us-image-sec order-lg-2">
                    <img src="{{ asset('images/pngwing.com_.webp') }}" alt="E-commerce Website Development"
                        title= "E-commerce Website Development" class="img-fluid">
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

    <section class="wp-website py-5 my-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="{{ asset('images/ecommerce.webp') }}" alt="E-commerce Website Development" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <h1 class="mb-3">
                        Best <span class="gradient-heading">eCommerce Website</span> Development</h1>
                        <p>
                            E-commerce Store
                            Best eCommerce Website Development
                            Embark on an exhilarating retail adventure on our cutting-edge E-commerce platform. Immerse
                            yourself in a vast array of products, all at your fingertips for unparalleled convenience.
                            Indulge in an effortless browsing experience through our intuitive interface, tailored to your
                            liking for a seamless online shopping experience.
                        </p>
                        <div id="accordion" class="mb-5">
                            <!-- <-Question 1 -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                            aria-expanded="true" aria-controls="collapseOne">
                                            <span class="faq-question">Build Your Online Empire with Shopify</span>
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        Shopify is a robust eCommerce platform that empowers businesses of all sizes. Create a stunning online store with ease, manage inventory effortlessly, and benefit from a range of powerful tools to boost sales.
                                    </div>
                                </div>
                            </div>

                            <!-- Question 2 -->
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <span class="faq-question">Craft Your Perfect Online Store with WooCommerce</span>

                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        If you prefer the flexibility of WordPress, WooCommerce is the ideal solution. Seamlessly integrate eCommerce functionalities into your WordPress site, offering a customizable and scalable online store.
                                    </div>
                                </div>
                            </div>

                            <!-- Question 3 -->
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            <span class="faq-question">Unleash Your Business Potential with BigCommerce</span>
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        BigCommerce is a feature-rich eCommerce platform designed to scale alongside your growing business. Enjoy a comprehensive suite of tools, responsive themes, and enterprise-level functionality.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a class="btn btn-primary rounded-5" href="{{ url('contact-us') }}">
                            Get Started
                        </a>
                </div>
            </div>
        </div>
    </section>

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

    <section class="boxed-section">
        <div class="container">
            <h2 style=font-size:1.6em;>Get Your E-commerce Website Development Done Today!</h2>
            <p>Enhance your brand with our professional e-commerce website development services. We are your one stop
                shop for quality e-commerce website development. Contact us at <a
                    href="mailto:support@rfslogodesign.com">support@rfslogodesign.com</a> or call us at <a
                    href="tel:+15516665255">+1 (551) 666-5255</a>.</p>
            <a href="{{ url('contact-us') }}" class="california-button-online">Get Started</a>
        </div>
    </section>

    <script>
        $(function() {
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
        })
    </script>


@endsection
