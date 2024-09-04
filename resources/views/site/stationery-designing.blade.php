@extends('site.common')

@section('title', 'Professional Stationery Designing Services - RFS Logo Design')
@section('meta_desc', 'Elevate your brand identity with RFS Logo Design professional stationery designing services. Get creative branding materials for effective online presence.')

@section('content')

<body>
    <div class="banner-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 content-section">
                    <p>Stationery Design Service in RFS logo Designing</p>
                    <h1>Professional Business <span class="logo-design-color">Stationery  Design</span> Services</h1>
                    <ul class="icon-list">
                        <li><i class="fas fa-trophy"></i> Stand out with unique, customizable designs.</li>
                        <li><i class="fas fa-briefcase"></i> Integrate seamlessly into all content.</li>
                        <li><i class="fas fa-sync-alt"></i> Make a lasting impact with every interaction.</li>
                        <li><i class="fas fa-users"></i> Communicate a polished, polished image.</li>
                        <li><i class="fas fa-star"></i> Collaborate with experienced designers.</li>
                    </ul>
                    <a href="{{ url('/') }}" class="california-button-online">Get Started</a>
                </div>
                <div class="col-lg-6 image-section text-center">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src= "{{ url('images/Letterhead.webp') }}" alt="Logo Design 1">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ url('images/Visiting-Card.webp') }}"  alt="Logo Design 2">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
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

<div class="services-section" >
    <div class="container">
        <h2>What Services Do We Offer?</h2>
        <p>Our experts are dedicated to delivering excellence in every project.</p>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="service-card business-card-design">
                    <img src="{{ url('images/Business Card Design.png') }}" alt="Business Card Design">
                    <h4>Business Card Design</h4>
                    <p>Professionally designed business cards make a great impression and encourage new contacts to connect with you.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="service-card letterhead-design">
                    <img src="{{ url('images/Letterhead Design.png') }}" alt="Letterhead Design">
                    <h4>Letterhead Design</h4>
                    <p>Our letterhead design service helps businesses and brands achieve a polished, professional identity effortlessly.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="service-card envelope-design">
                    <img src="{{ url('images/Envelope Design.png') }}" alt="Envelope Design">
                    <h4>Envelope Design</h4>
                    <p>We offer a wide range of creative and flexible customization options tailored to your diversified requirements.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="service-card email-signature">
                    <img src="{{ url('images/email.png') }}"  alt="Email Signature">
                    <h4>Email Signature</h4>
                    <p>360° email signature solution – create and manage company-wide email signatures for every size of business.</p>
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
 <!-- {{----------------- End Testiomonial Section --}} -->


<!-------------------- Start Boxed Section ------------------>
<section class="boxed-section">
        <div class="container">
        <h2 style= font-size:1.6em;>Get Your Custom Stationery Designs Today!</h2>
            <p>Enhance your brand with our professional stationery design services. We are your one stop shop
            for quality stationery designs & branding materials. Contact us at
            <a href="mailto:support@rfslogodesign.com">support@rfslogodesign.com</a> or
                call us at <a href="tel:+15516665255">+1 (551) 666-5255</a>.</p>
                <a href="{{ url('contact-us') }}" class="california-button-online">Get Started</a>

        </div>
    </section>
    <!-------------------- End Boxed Section ------------------>

    <!---------------------Start Crafting----------------->
<!--
    <section class="crafting-logos">
        <div class="container">
            <div class="row content">
                <div class="col-md-6 image">
                    <img src="images/Crafting Impactful Logos.png" alt="Crafting Impactful Logos">
                </div>
                <div class="col-md-6 text">
                    <h2 style="font-weight: 800;">TAILORED LOGO SOLUTIONS FOR ARIZONA INDUSTRIES</h2>
                    <p style="text-align: justify;">At RFS Logo Design, we offer tailored logo solutions for a wide range of industries in Arizona.
                        Our team of skilled designers collaborates closely with clients to understand their unique requirements and preferences,
                        ensuring that every design reflects the brand's identity and values. Whether you're in healthcare, technology, or retail,
                        we have the expertise to create logos that stand out in the market and resonate with your target audience. With our custom
                        logo design services, we help businesses across industries elevate their brand image and make a lasting impact in the Arizona
                        business landscape. Contact us today to explore how RFS Logo Design can help your business thrive.</p>
                </div>
            </div>
        </div>
    </section> -->

    <!---------------------End Crafting----------------->

    <!-- jQuery and Owl Carousel JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        jQuery(document).ready(function($) {
            "use strict";
            // TESTIMONIALS CAROUSEL HOOK
            $('#customers-testimonials').owlCarousel({
                loop: true,
                center: true,
                items: 3,
                margin: 30,
                autoplay: true,
                dots: true,
                autoplayTimeout: 8500,
                smartSpeed: 450,
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    1170: {
                        items: 3
                    }
                }
            });
        });
    </script> -->
    <!---------------------End Clients Have to Say ----------------->


 <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
