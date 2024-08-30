@extends('site.common')

@section('title', 'Shopify Website Development Services - RFS Logo Design')
@section('meta_desc', 'Get Shopify Website Development Services for your web and boost your online business. RFS Logo Design has dedicated developers to create stunning Shopify Websites. ')
@section('content')


    <style>
        .banner-section h1 {
            font-size: 32px;
            font-weight: 700;
        }

        .gradient-heading {
            background: linear-gradient(209deg, #501e9c 0%, #8169f1 40%, #a44cee 75%, #ff847f 100%);
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

        .logo-designs-portfolio h1 {
            font-weight: 700;
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
                    <h2 class="mb-3"><span class="gradient-heading">Shopifiy Website</span> Developments</h2>
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
            <div class="row gallery">
                <div class="col-12 text-center mb-4">
                    <h2 class="gradient-heading">Our Award-Winning Company Website Portfolio</h2>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('images/shopify-1.webp') }}">
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('images/shopify-2.webp') }}">
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('images/shopify-3.webp') }}">
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('images/shopify-4.webp') }}">
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('images/shopify-5.webp') }}">
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('images/shopify-6.webp') }}">
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('images/shopify-7.webp') }}">
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('images/shopify-8.webp') }}">
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('images/shopify-9.webp') }}">
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('images/shopify-10.webp') }}">
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('images/10.webp') }}">
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
            // $('.filter').hide();
            // $('.filter.all').slice(0, 9).show();

            // $('.filter-button').click(function() {
            //     var value = $(this).attr('data-filter');
            //     $('.filter-button').removeClass('active');
            //     $(this).addClass('active');
            //     if (value == 'all') {
            //         $('.filter').hide();
            //         $('.filter.all').slice(0, 9).show();
            //         $('.load-more-button').show();
            //     } else {
            //         $('.filter').hide();
            //         $('.filter.' + value).slice(0, 2).show();
            //         $('.load-more-button').hide();
            //     }
            // });

            // $('.load-more-button').click(function() {
            //     $('.filter.all:hidden').slice(0, 9).slideDown();
            //     if ($('.filter.all:hidden').length == 0) {
            //         $(this).fadeOut('slow');
            //     }
            // });
        })
    </script>


@endsection
