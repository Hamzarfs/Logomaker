@extends('site.common')

@section('title', 'E-Commerce Website Development Services - RFS Logo Design')
@section('meta_desc', 'Get your online store with RFS Logo Design e-commerce website development services. Expert solutions for seamless user experiences and secure transactions.')
@section('content')


    <style>
        
    
    
        .wp-website h2 {
            font-size: 34px;
            font-weight: 800;
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
   
        .education-logo-section {
       background-image: url('/images/ecoeco.png');
       background-size: cover;
       background-position: center;
       padding: 150px 0;
       color: #fff;
       text-align: center;
       display: flex;
       flex-direction: column;
       justify-content: center; /* Center content vertically */
       align-items: center; /* Center content horizontally */
   }
   
   .education-logo-section h1 {
       font-weight: 700;
       font-size: 44px;
       text-align: center;
       
   }
   .education-logo-section h2 {
       font-weight: 700;
       font-size: 25px !important;
       text-align: center;
       margin-bottom: 20px;
   }
   
   
   .education-logo-section p {
       margin-bottom: 20px;
   }
   @media (max-width: 768) {

   .new-testimonial{
    margin-top:0px !important;

   }
   }
   
   </style>
   
<section class="education-logo-section">
    <div class="container">
        <h1>Best eCommerce website <br>Design & Development Services</h1>
        <p>Our ecommerce services cover project planning and management for your 
            entire e-<br>commerce project & development, starting from the analysis of 
            your business requirements<br> and user experience design to implementing, 
            integrating, and launching an eCommerce site.</p>

    </div>
</section>





<section class="wp-website my-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="{{ asset('images/eCommercesec2.png') }}" alt="E-commerce Website Development" class="img-fluid">
            </div>
            <div class="col-lg-6">
                <h2 class="mb-3">
                    Best <span class="gradient-heading">eCommerce Website</span> Development
                </h2>
                <p>
                    Embark on an exhilarating retail adventure on our cutting-edge E-commerce platform. Immerse
                    yourself in a vast array of products, all at your fingertips for unparalleled convenience. Indulge
                    in an effortless browsing experience through our intuitive interface, tailored to your preferences
                    for a seamless online shopping experience.
                </p>
                <ul>
                    <li><b>Build Your Online Empire with Shopify</li>
                    <li>Craft Your Perfect Online Store with WooCommerce</li>
                    <li>Unleash Your Business Potential with BigCommerce</b></li>
                </ul>
                <a href="{{ url('contact-us') }}" class="btn btn-primary mt-3">Learn More</a>
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
                    <img src="{{ asset('images/1-ecommerce.webp') }}">
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('images/2-ecommerce.webp') }}">
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('images/3-ecommerce.webp') }}">
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('images/4-ecommerce.webp') }}">
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('images/5-ecommerce.webp') }}">
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('images/6-ecommerce.webp') }}">
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('images/7-ecommerce.webp') }}">
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('images/8-ecommerce.webp') }}">
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('images/9-ecommerce.webp') }}">
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('images/10-ecommerce.webp') }}">
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('images/11-ecommerce.webp') }}">
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('images/migral.webp') }}">
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('images/vital1.webp') }}">
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
