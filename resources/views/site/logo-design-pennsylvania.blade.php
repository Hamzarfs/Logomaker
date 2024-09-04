@extends('site.common')

@section('title', 'Pennsylvania Custom Logo Design Compnay - RFS Logo Design')
@section('meta_desc', 'At RFS Logo Design, we specialize in custom logo services in Pennsylvania. With our expert designers, we craft impactful branding solutions for businesses.')
@section('content')

    <div class="banner-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 content-section">
                    <p>Custom Logo Designing at RFS Logo Design</p>
                    <h1>Custom <span class="logo-design-color">Logo Design</span> Company in Pennsylvania</h1>
                    <ul class="icon-list">
                        <li><i class="fas fa-trophy"></i> Ranked #1 Logo Design Agency in Pennsylvania</li>
                        <li><i class="fas fa-briefcase"></i> Broad Industry Knowledge for Flexible Solutions</li>
                        <li><i class="fas fa-sync-alt"></i> Unlimited Logo Design Revisions Offered</li>
                        <li><i class="fas fa-users"></i> Tailored Solutions for Individual Client Needs</li>
                        <li><i class="fas fa-star"></i> 100% Satisfaction Guaranteed</li>
                    </ul>
                    <a href="{{ url('/') }}" class="california-button-online">Get Started</a>
                </div>
                <div class="col-lg-6 image-section text-center">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/Laptop-1-Image 1.png" alt="Logo Design 1">
                            </div>
                            <div class="carousel-item">
                                <img src="images/Logo Pics.png" alt="Logo Design 2">
                            </div>
                            <div class="carousel-item">
                                <img src="images/111 1.png" alt="Logo Design 3">
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
    <div class="logo-designs-ca">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center">
                    <img src="images/111 1.png" alt="Professional Logo Designs" class="professional-logo-image">
                </div>
                <div class="col-lg-6">
                    <h3>PREMIER LOGO DESIGN SERVICES IN PENNSYLVANIA</h3>
                    <p style="text-align: justify;">Transform your brand's image with top-tier logo design services in Pennsylvania. Our seasoned logo designers at RFS Logo Design specialize in creating bespoke solutions tailored to your specific business requirements. As a leading agency in the field, we excel in crafting visually captivating logos that encapsulate your brand's essence and resonate with your target audience. With our comprehensive range of services, including unlimited revisions, we ensure meticulous attention to detail and unparalleled quality in every design. Partner with our skilled team today to elevate your brand's identity and make a lasting impression in the competitive market landscape. Contact us now to explore the possibilities.</p>
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
            <button class="btn filter-button" data-filter="iconic">Iconic Logo</button>
            <button class="btn filter-button" data-filter="typography">Typography Logo</button>
            <button class="btn filter-button" data-filter="illustrative">Illustrative Logo</button>
            <button class="btn filter-button" data-filter="animated">Animated Logo</button>
        </div>

        <div class="row gallery">
            <!-- Iconic Logos -->
            <div class="col-lg-4 col-md-6 mb-4 filter all iconic">
                <img src="images/portfoliologo3.png" alt="Iconic Logo 1">
            </div>
            <div class="col-lg-4 col-md-6 mb-4 filter all iconic">
                <img src="images/portfoliologo1.png" alt="Iconic Logo 2">
            </div>
            <div class="col-lg-4 col-md-6 mb-4 filter all iconic">
                <img src="images/portfoliologo6.png" alt="Iconic Logo 3">
            </div>

            <!-- Typography Logos -->
            <div class="col-lg-4 col-md-6 mb-4 filter all typography">
            <img src="images/portfoliologo6.png" alt="Typography Logo 1">
            </div>
            <div class="col-lg-4 col-md-6 mb-4 filter all typography">
            <img src="images/portfoliologo5.png" alt="Typography Logo 2">
            </div>

            <!-- Illustrative Logos -->
            <div class="col-lg-4 col-md-6 mb-4 filter all illustrative">
                <img src="images/Illustrative-Logo-Design3.webp" alt="Illustrative Logo 1">
            </div>
            <!-- <div class="col-lg-4 col-md-6 mb-4 filter all illustrative">
                <img src="illustrative2.jpg" alt="Illustrative Logo 2">
            </div> -->

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

    <!---------------------Start why-choose-rfs----------------->
<!-- 

    <section class="why-choose-rfs">
        <div class="container">
            <div class="row content">
                <div class="col-md-6 text">
                <h2 class="Why-h2">Expert <span class="logo-choose-color">Logo Designers</span> At Your Service</h2>
                    <p style="text-align: justify;">Entrust your brand's visual identity to our team of expert logo designers. With years of experience and a keen eye for design, our professionals specialize in crafting unique and impactful logos that leave a lasting impression. From concept to execution, we work closely with you to understand your brand's personality, values, and target audience, ensuring that every design reflects your vision and resonates with your customers.</p>
                    <p style="text-align: justify;">Whether you're a startup, small business, or established corporation, we tailor our services to meet your specific needs and objectives. With a commitment to excellence and creativity, we strive to deliver logo designs that not only stand out but also drive your business forward. Collaborate with our talented designers today and elevate your brand to new heights. Contact us for custom logo designs for medical practices, schools, legal firms, and more.</p>
                </div>
                <div class="col-md-6 image">
                    <img src="images/hire-section-logos .png" alt="RFS Logo Design">
                </div>
            </div>
        </div>
    </section> -->

    <!---------------------End why-choose-rfs----------------->



    <!---------------------Start Crafting----------------->

    <section class="crafting-logos">
        <div class="container">
        <div class="row content">
                <div class="col-md-6 text">
                <h2 class="Why-h2">Expert <span class="logo-choose-color">Logo Designers</span> At Your Service</h2>
                    <p style="text-align: justify;">Entrust your brand's visual identity to our team of expert logo designers. With years of experience and a keen eye for design, our professionals specialize in crafting unique and impactful logos that leave a lasting impression. From concept to execution, we work closely with you to understand your brand's personality, values, and target audience, ensuring that every design reflects your vision and resonates with your customers.</p>
                    <p style="text-align: justify;">Whether you're a startup, small business, or established corporation, we tailor our services to meet your specific needs and objectives. With a commitment to excellence and creativity, we strive to deliver logo designs that not only stand out but also drive your business forward. Collaborate with our talented designers today and elevate your brand to new heights. Contact us for custom logo designs for medical practices, schools, legal firms, and more.</p>
                </div>
                <div class="col-md-6 image">
                    <img src="images/hire-section-logos .png" alt="RFS Logo Design">
                </div>
            </div>
        </div>
    </section>

    <!---------------------End Crafting----------------->

    <!-- jQuery and Owl Carousel JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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
    </script>
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
