@extends('site.common')

@section('title', 'Shopify Website Development Services - RFS Logo Design')
@section('meta_desc', 'Get Shopify Website Development Services for your web and boost your online business. RFS Logo Design has dedicated developers to create stunning Shopify Websites. ')
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
       background-image: url('/images/bannerShopifiy.png');
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
        <h1>Shopifiy Website Design &<br>Development Services</h1>
        <p>Looking to take your online store to the next level? Our team of Shopify<br> developers has got you covered. We specialize in creating visually stunning<br> and user-friendly Shopify websites, complete with secure payment gateways.</p>

    </div>
</section>

  

    <section class="wp-website my-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="{{ asset('images/Shopify Developments.png') }}" alt="E-commerce Website Development"
                        class="img-fluid">
                </div>
                <div class="col-lg-6">
                <h2 class="gradient-heading">Shopifiy Website<br> Developments</h2>
                    <p>
                    Building a website on Shopify is just like opening up a charming boutique in a cozy, welcoming community. Start by claiming your very own personal corner in the virtual world by signing up for a Shopify account and browsing through the Shopify Theme Store to find the perfect design. Then, put the finishing touches on your space by customizing colors, fonts, and layout. Fill up your shelves with an array of products, thoughtfully arranged into categories for a delightful and inviting shopping experience.
                    </p>
                    <a class="custom-button-online" href="{{ url('contact-us')}}">
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
