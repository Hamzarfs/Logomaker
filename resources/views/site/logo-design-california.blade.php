@extends('site.common')

@section('title', 'Custom Logo Design Company in California - RFS Logo Design')
@section('meta_desc', 'RFS Logo Design company provides custom logo design services in California. We are the ranked #1 professional logo design agency with expert logo designers.')

@section('content')


<style>
       

       .education-logo-section {
       background-image: url('/images/california12.png');
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
       font-size: 40px;
       text-align: center;
       margin-bottom: 20px;
   }
   
   
   .education-logo-section p {
       margin-bottom: 20px;
   }
   
   </style>








<section class="education-logo-section">
    <div class="container">
    <p>Ranked #1 Logo Design Agency in California</p>
        <h1>Best Custom Logo Design<br>
        Company in California</h1>
    </div>
</section>




<!-- 


    <div class="banner-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 content-section">
                    <p>Ranked #1 Logo Design Agency in California</p>
                    <h1>Best Custom <span class="logo-design-color">Logo Design</span> Company in California</h1>
                    <ul class="icon-list">
                        <li><i class="fas fa-trophy"></i> Ranked #1 Logo Design Agency in California</li>
                        <li><i class="fas fa-briefcase"></i> Versatile Expertise Across Diverse Industries</li>
                        <li><i class="fas fa-sync-alt"></i> Unlimited Logo Design Revisions</li>
                        <li><i class="fas fa-users"></i> Personalized Approach to Client Needs</li>
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
    </div> -->

    <!-- <div class="logo-slider-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="logo-slider">
                        <img src="images/Group 14.png" alt="Logo 1">
                        <img src="images/Group 16.png" alt="Logo 2">
                        <img src="images/Group 17.png" alt="Logo 3">
                        <img src="images/Group 18.png" alt="Logo 4">
                        <img src="images/Group 21.png" alt="Logo 5">
                        <img src="images/Group 22.png" alt="Logo 6"> -->

                        <!-- Repeat logos to ensure continuous animation -->
                        <!-- <img src="images/Group 14.png" alt="Logo 1">
                        <img src="images/Group 16.png" alt="Logo 2">
                        <img src="images/Group 17.png" alt="Logo 3">
                        <img src="images/Group 18.png" alt="Logo 4">
                        <img src="images/Group 21.png" alt="Logo 5">
                        <img src="images/Group 22.png" alt="Logo 6">
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!--------------------- Start PROFESSIONAL LOGO DESIGNS IN CA ----------------------->
    <div class="logo-designs-ca">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center">
                    <img src="images/side-view-man-designing-websites 1.png" alt="Professional Logo Designs" class="professional-logo-image">
                </div>
                <div class="col-lg-6">
                    <h2>PROFESSIONAL LOGO<br>DESIGNS IN CA</h2>
                    <p style="text-align: justify;">RFS Logo Design stands out as a premier logo design company
                        based in California, renowned for its exceptional services in custom logo design. With a
                        talented team of designers dedicated to crafting unique and impactful logos, RFS Logo Design
                        ensures that each design reflects the essence of the brand it represents.</p>
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
            <hr class="custom-divider-ca">

                <!-- Iconic Logos -->
                <div class="col-lg-4 col-md-6 mb-4 filter all iconic">
                    <img src="images/portfoliologo1.png" alt="Iconic Logo 1">
                </div>
            
                <div class="col-lg-4 col-md-6 mb-4 filter all typography">
                    <img src="images/portfoliologo5.png" alt="Typography Logo 1">
                </div>
                <div class="col-lg-4 col-md-6 mb-4 filter all iconic">
                    <img src="images/portfoliologo3.png" alt="Illustrative Logo 2">
                </div>

                <!-- Typography Logos -->
                <div class="col-lg-4 col-md-6 mb-4 filter all iconic">
                    <img src="images/portfoliologo2.png" alt="Iconic Logo 2">
                </div>
                <div class="col-lg-4 col-md-6 mb-4 filter all typography">
                    <img src="images/portfoliologo6.png" alt="Typography Logo 2">
                </div>

                <!-- Illustrative Logos -->
                <div class="col-lg-4 col-md-6 mb-4 filter all illustrative">
                    <img src="images/portfoliologo4.png" alt="Illustrative Logo 1">
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


 <!-- <section id="testimonial-section" class="pt-5 pb-5">
        <div class="container">
            <h2 class="text-center mb-5">See What Our Clients Have to Say</h2>
            <div class="owl-carousel owl-theme">
                 Reviews will be inserted here dynamically -->
            <!-- </div>
        </div>
    </section> --> 
 <!-- {{----------------- End Testiomonial Section --}} -->

    <!---------------------Start why-choose-rfs----------------->


    <section class="why-choose-rfs">
        <div class="container">
            <div class="row content">
                <div class="col-md-7 text">
                    <h2 class="Why-h2">Why Choose RFS Logo <br>Design In California?</h2>
                    <p style="text-align: justify;">As a leading design agency in California, RFS Logo Design excels in
                        providing comprehensive logo design services tailored to meet the specific needs of businesses
                        across various industries. Their expertise lies in translating clients' visions into captivating
                        visual identities that resonate with their target audience.</p>
                    <p style="text-align: justify;">With a focus on creativity, innovation, and attention to detail, RFS
                        Logo Design goes above and beyond to deliver outstanding results that exceed client expectations.
                        Their commitment to quality and customer satisfaction sets them apart as a trusted partner for
                        businesses seeking top-notch logo design solutions.</p>
                    <p style="text-align: justify;">Whether you're a startup looking to establish your brand identity or an
                        established company seeking a logo refresh, RFS Logo Design offers the expertise and creativity
                        needed to bring your vision to life. Experience the difference of working with a premier logo design
                        company in California—choose RFS Logo Design for all your logo design needs.</p>
                </div>
                <div class="col-md-5 image">
                    <img src="images/hire-section-logos .png" alt="RFS Logo Design">
                </div>
            </div>
        </div>
    </section>

    <!---------------------End why-choose-rfs----------------->



    <!---------------------Start Crafting----------------->






<section class="unique-section">
    <div class="container-fluid">
      <div class="row">
        <!-- Left Side Image -->
        <div class="col-md-5 unique-image-col">
          <img src="images/unique.png" class="unique-image" alt="Image Description">
        </div>

       
        <!-- Right Side Content -->
        <div class="col-md-5 unique-content-col">
        <h2 class="CRAFT-h2" style="font-weight: 700;">Crafting impactful logos<br> across industries in<br> California</h2>
        <p class="unique-paragraph">We serve a diverse array of industries with custom logo design solutions tailored to their 
            unique needs. From small businesses, including cafes, boutiques, and local services, to professionals such as lawyers, 
            doctors, and consultants, RFS Logo Design caters to a wide range of clients. Additionally, we extend our services to industries 
            like technology, real estate, hospitality, fashion, and more. No matter the industry or profession, we are dedicated to crafting 
            visually striking logos that effectively communicate the essence of each brand, leaving a lasting impression on customers and clients alike.</p>
        </div>
         <!-- Free space on right side -->
         <div class="col-md-2"></div>
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
