@extends('site.common')

@section('title', 'Shopify Website Development')

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
                    <h1><span class="logo-design-color">Shopifiy Website</span> Get<br>
                        Started at <span class="logo-design-color">$499</span></h1>
                    <p>
                        Looking to take your online store to the next level? Our team of Shopify developers has got you covered. We specialize in creating visually stunning and user-friendly Shopify websites, complete with secure payment gateways.
                    </p>
                    <ul class="icon-list">
                        <li><i class="fas fa-trophy"></i> Shopify Integration Services</li>
                        <li><i class="fas fa-briefcase"></i> Website Development Services</li>
                        <li><i class="fas fa-sync-alt"></i> Theme Development Services</li>
                        <li><i class="fas fa-users"></i> Upgrading & Extension Services</li>
                        <li><i class="fas fa-star"></i> Shopify Migration Services</li>
                    </ul>
                    <a href="{{ url('contact-us') }}" class="california-button-online">Get a Quote</a>
                </div>
                <div class="col-lg-6 text-center about-us-image-sec order-lg-2">
                    <img src="{{ asset('images/shopify.webp') }}" alt="Shopify Development"
                        title= "Shopify Development" class="img-fluid">
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
                    <img src="{{ asset('images/Ecommerce-Development.webp') }}" alt="E-commerce Website Development"
                        class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <h1 class="mb-3"><span class="gradient-heading">Shopifiy Website</span> Developments</h1>
                    <p>
                        Building a website on Shopify is just like opening up a charming boutique in a cozy, welcoming community. Start by claiming your very own personal corner in the virtual world by signing up for a Shopify account and browsing through the Shopify Theme Store to find the perfect design. Then, put the finishing touches on your space by customizing colors, fonts, and layout. Fill up your shelves with an array of products, thoughtfully arranged into categories for a delightful and inviting shopping experience.
                    </p>
                    <a class="btn btn-primary rounded-5" href="{{ route('packages')}}">
                        Learn more
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
            <h2 style=font-size:1.6em;>Get Your Shopify Website Development Done Today!</h2>
            <p>Enhance your brand with our professional shopify website development services. We are your one stop
                shop for quality shopify website development. Contact us at <a
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
