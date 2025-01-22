@extends('site.common')

@section('title', 'Wordpress Website Development Services - RFS Logo Design')
@section('meta_desc', 'Experience custom WordPress website development services with RFS Logo Design. From custom themes to seamless functionality, we bring your vision to life.')
@section('content')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

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
       background-image: url('/images/wordpresbanner.png');
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
        <h1>High-Quality WordPress<br>Web Design Services</h1>
        <p>Running a thriving business with innovative concepts? Your website should<br>  mirror your success and
        ingenuity. That’s where RFS Logo Design comes in. With<br>  our WordPress mastery, we’re primed to
        transform your online presence.</p>

    </div>
</section>


    <section class="wp-website my-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                <h2 class="gradient-heading">WordPress Website<br> Development</h2>
                    <p>
                        Embark on the straightforward journey of building a WordPress website that seamlessly integrates
                        with the dynamic WordPress ecosystem. Begin by selecting a theme that perfectly aligns with your
                        site's goals and aesthetics. Personalize your chosen theme with ease using the user-friendly
                        WordPress Customizer, making effortless visual adjustments to colors, fonts, and layout that reflect
                        your unique brand.
                    </p>
                    <a class="btn btn-primary rounded-5" href="{{ url('custom-website-design-development') }}">
                        Learn more
                    </a>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('images/wordpresssec.png') }}" alt="WordPress Website Development"
                        class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="wp-projects my-5 bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2>
                    Our Latest WordPress Web Design Projects
                </h2>
            </div>
            <!-- Slider main container -->
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <img src="{{ asset('images/FBCA-1.webp') }}" class="img-fluid">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/Moishes.webp') }}" class="img-fluid">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/Joolala.webp') }}" class="img-fluid">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/Salone-Work.webp') }}" class="img-fluid">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/Nsepon.webp') }}" class="img-fluid">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/Restoratiuon1-Franchise.webp') }}" class="img-fluid">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/Simply-Organic.webp') }}" class="img-fluid">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/Breeders-Planet.webp') }}" class="img-fluid">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/Bmscat.webp') }}" class="img-fluid">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/Hurst-Glass.webp') }}" class="img-fluid">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/Paddle-Candyt.webp') }}" class="img-fluid">
                    </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
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
                    <img src="{{ asset('images/fundflow.webp') }}">
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('images/global.webp') }}">
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('images/noweco.webp') }}">
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('images/navitas.webp') }}">
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('images/home.webp') }}">
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('images/cleaning.webp') }}">
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('images/building.webp') }}">
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('images/maplin.webp') }}">
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('images/orbis.webp') }}">
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('images/paints1.webp') }}">
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('images/digilit.webp') }}">
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('images/vital.webp') }}">
                </div>
            </div>
        </div>
    </div>



    <div class="container faq-section">
        <h2 class="text-center mb-4">Frequently Asked Questions</h2>
        <div id="accordion">
            <!-- <-Question 1 -->
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                            <span class="faq-question">What's the difference between frontend and backend development?</span>
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        Frontend development focuses on what users see and interact with, while backend development handles behind-the-scenes functionality.
                    </div>
                </div>
            </div>

            <!-- Question 2 -->
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="false" aria-controls="collapseTwo">
                            <span class="faq-question">How long does it take to develop a website?</span>
                        </button>
                    </h5>
                </div>

                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        The time varies depending on complexity, but it could range from a few days or weeks for a simple site to several months for a complex one.
                    </div>
                </div>
            </div>

            <!-- Question 3 -->
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                            aria-expanded="false" aria-controls="collapseThree">
                            <span class="faq-question">What is web hosting?</span>
                        </button>
                    </h5>
                </div>

                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        Web hosting is a service that allows individuals and organizations to make their websites accessible via the World Wide Web.
                    </div>
                </div>
            </div>

            <!-- Question 4 -->
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour"
                            aria-expanded="false" aria-controls="collapseFour">
                            <span class="faq-question">What are the key steps in website development?</span>
                        </button>
                    </h5>
                </div>

                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="card-body">
                        Key steps include planning, design, development, content creation, testing, and deployment.
                    </div>
                </div>
            </div>

            <!-- Question 5 -->
            <div class="card">
                <div class="card-header" id="headingFive">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive"
                            aria-expanded="false" aria-controls="collapseFive">
                            <span class="faq-question">How do you ensure my website is secure?</span>
                        </button>
                    </h5>
                </div>

                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                    <div class="card-body">
                        Implement security measures such as HTTPS, regular software updates, strong passwords, and protection against common vulnerabilities like SQL injection and cross-site scripting (XSS).
                    </div>
                </div>
            </div>

            <!-- Question 6 -->
            <div class="card">
                <div class="card-header" id="headingFive">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive"
                            aria-expanded="false" aria-controls="collapseFive">
                            <span class="faq-question">Why is responsive design important in website development?</span>
                        </button>
                    </h5>
                </div>

                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                    <div class="card-body">
                        Responsive design ensures that websites adapt to different screen sizes and devices, providing a seamless user experience.
                    </div>
                </div>
            </div>
            </div>
    </div>


            <section class="boxed-section">
        <div class="container">
            <h2 style=font-size:1.6em;>Get Your Wordpress Website Design Development Done Today!</h2>
            <p>Enhance your brand with our professional wordpress website design development services. We are your one stop
                shop for quality custom website design development. Contact us at <a
                    href="mailto:support@rfslogodesign.com">support@rfslogodesign.com</a> or call us at <a
                    href="tel:+15516665255">+1 (551) 666-5255</a>.</p>
            <a href="{{ url('contact-us') }}" class="california-button-online">Get Started</a>
        </div>
    </section>
        
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        $(function() {
            new Swiper('.swiper', {
                autoplay: true,

                // Optional parameters
                loop: true,

                // If we need pagination
                pagination: {
                    el: '.swiper-pagination',
                },

                slidesPerView: 3
            });

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
