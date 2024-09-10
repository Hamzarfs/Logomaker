@extends('site.common')

@section('title', 'Custom Logo Design Company Texas  - RFS Logo Design')
@section('meta_desc', 'At RFS Logo Design, we provide premier custom logo services in Texas. As the #1 ranked company, our expert designers specialize in impactful branding solutions.')
@section('content')

<style>
       
       .education-logo-section {
       background-image: url('/images/texas.png');
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
    <p>Professional Logo Designing at RFS Logo Design</p>
        <h1>Custom Logo Design<br>
        Company in Texas</h1>
    </div>
</section>
    <!--------------------- Start PROFESSIONAL LOGO DESIGNS IN CA ----------------------->
    <div class="logo-designs-ca">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center">
                    <img src="images/side-view-man-designing-websites 1.png" alt="Professional Logo Designs" class="professional-logo-image">
                </div>
                <div class="col-lg-6">
                    <h2>Transform Your Brand with Expert Logo Design in Texas</h2>
                    <p style="text-align: justify;">Elevate your brand's identity with top-notch logo design services in Texas. Our expert logo 
                    designers at RFS Logo Design offer comprehensive services tailored to meet your specific business needs. Whether you're a 
                    startup or a well-established company, we provide customized solutions that capture the essence of your brand and resonate 
                    with your target audience. With a focus on creativity and innovation, our agency ensures exceptional results and client satisfaction. 
                    Trust our team to deliver impactful logos that set your business apart and leave a lasting impression. Partner with us to unlock the 
                    full potential of your brand through stunning logo design.</p>
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
                    <h2 class="Why-h2">Discover Our Expert Logo <br>Designers In Texas</h2>
                    <p style="text-align: justify;">Our expert logo designers in Texas are dedicated to crafting captivating visual 
                        identities that set your brand apart. With a keen eye for detail and a passion for creativity, our team brings 
                        your vision to life with precision and flair. Whether you're a startup or a well-established business, we tailor 
                        our services to meet your unique needs and objectives.</p>
                    <p style="text-align: justify;">From concept to completion, we work closely with you to ensure every aspect of your logo 
                        reflects your brand's personality and resonates with your target audience. Trust our talented designers to deliver 
                        exceptional results that elevate your brand and leave a lasting impression.</p>
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

        <div class="col-md-1"></div>

        <!-- Right Side Content -->
        <div class="col-md-5 unique-content-col">
        <h2 class="CRAFT-h2" style="font-weight: 800;">Logo design solutions for<br>businesses of all sizes</h2>
        <p class="unique-paragraph">Businesses across industries can benefit from our expert logo designing services. 
        Whether you're a startup looking to establish a strong brand identity, a small business aiming to stand out in 
        a competitive market, or a large corporation seeking a logo refresh, we're here to help.</p>
        <p class="unique-paragraph">Our tailored approach ensures that we understand your unique needs and objectives, 
        delivering logo designs that resonate with your target audience and leave a lasting impression. From technology 
        firms to restaurants, healthcare providers to fashion brands, we welcome businesses of all sizes and sectors to 
        contact us for exceptional logo designing solutions tailored to their specific requirements.</p>
        </div>
         <!-- Free space on right side -->
         <div class="col-md-1"></div>
      </div>
    </div>
  </section>






  <section class="new-testimonial my-5">
            <div class="container-fluid">
                <h2 class="text-center">Happy Customers and Counting....</h2>
                <div class="new-testimonial-carousel mt-4">
                    <div class="testimonial-card rotate-left ad">
                        <p>❇️❇️❇️❇️❇️</p>
                        {{-- <img src="https://via.placeholder.com/80" alt="Customer 1" class="rounded-circle mb-3"> --}}
                        <h5>Busted Knuckles</h5>
                        <p>I dealt with Ed Harvey through my experience with RFS and he was great! Very polite and helpful.
                            I had drawn a rough sketch of my logo and they brought it to life extremely fast and with
                            perfect accuracy! I would recommend Ed and RFS for anyone looking into getting a logo made!</p>
                    </div>
                    <div class="testimonial-card rotate-right ad">
                        <p>❇️❇️❇️❇️❇️</p>
                        {{-- <img src="https://via.placeholder.com/80" alt="Customer 2" class="rounded-circle mb-3"> --}}
                        <h5>Madelyn Weingarden</h5>
                        <p>Brian Edwin provided me with excellent service. Anytime I asked him for any edits, he did it
                            promptly. I was very happy with the logos and invoices he created for me. 5 Star Service. Thank
                            you, Brian.</p>
                    </div>
                    <div class="testimonial-card rotate-left ad">
                        {{-- <img src="https://via.placeholder.com/80" alt="Customer 3" class="rounded-circle mb-3"> --}}
                        <p>❇️❇️❇️❇️❇️</p>
                        <h5>Spanky</h5>
                        <p>Brian Edwin is who I worked with. I made multiple revisions and he delivered on exactly what I
                            wanted and quickly. Highly recommend him and will be using again in the future.</p>
                    </div>
                    <div class="testimonial-card rotate-right ad">
                        <p>❇️❇️❇️❇️❇️</p>
                        {{-- <img src="https://via.placeholder.com/80" alt="Customer 4" class="rounded-circle mb-3"> --}}
                        <h5>Archelle Jenkins</h5>
                        <p>LOVEEE MY LOGO ! Done exactly how I visioned it! I'll be back for my website !</p>
                    </div>
                    <div class="testimonial-card rotate-right ad">
                        <p>❇️❇️❇️❇️❇️</p>
                        {{-- <img src="https://via.placeholder.com/80" alt="Customer 4" class="rounded-circle mb-3"> --}}
                        <h5>Kyle Bacon</h5>
                        <p>Very helpful crew, I'm very picky with my designs and I was helped greatly with compliant people,
                            I am very satisfied</p>
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
     <script>
          // Ensure carousel can be scrolled via mouse or touch gestures without a scrollbar
          const carousel = document.querySelector('.new-testimonial-carousel');

carousel.addEventListener('wheel', (e) => {
    e.preventDefault();
    carousel.scrollBy({
        left: e.deltaY < 0 ? -30 : 30,
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
