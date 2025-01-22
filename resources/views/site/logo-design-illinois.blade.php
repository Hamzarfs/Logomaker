@extends('site.common')

@section('title', 'Illinois Custom Logo Design Company - RFS Logo Design')
@section('meta_desc', 'At RFS Logo Design, we offer custom logo design services tailored for Illinois businesses. Our expert designers specialize in crafting impactful brand identities.')
@section('content')
   

<style>
       .education-logo-section {
       background-image: url('/images/Illinois.png');
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
    <p>Reliable Logo Designing at RFS Logo Design</p>
        <h1>Custom Logo Design<br>
        Company in Illinois</h1>
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
                    <h2>Custom logo design services in Illinois</h2>
                    <p style="text-align: justify;">Elevate your brand's image with our custom logo design services in Illinois. Our expert designers 
                        at RFS Logo Design specialize in creating unique and impactful logos tailored to your business needs. We work closely with you 
                        to understand your brand identity, values, and target audience, ensuring that every design reflects your vision and resonates 
                        with your customers.</p>
                        <p style="text-align: justify;">With our comprehensive services, including unlimited revisions, we guarantee meticulous attention 
                        to detail and exceptional quality in every design. Trust our talented team to deliver logo designs that set your business apart 
                        and leave a lasting impression. Contact us today to transform your brand with our custom logo design services in Illinois.</p>
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
                    <h2 class="Why-h2">Illinois top talent unleashing creativity with rfs logo designers</h2>
                    <p class="unique-paragraph">At RFS Logo Design in Illinois, creativity is at the core of everything we do. 
                    Our team of skilled logo designers brings a wealth of experience and innovative thinking to every project. 
                    We understand that your logo is the cornerstone of your brand identity, which is why we work tirelessly to 
                    craft designs that are not only visually stunning but also deeply meaningful.</p>
                <p class="unique-paragraph">From concept development to final execution, we collaborate closely with our clients to ensure 
                    that their vision is brought to life in the most compelling way possible. Whether you're a startup, small business, or 
                    large corporation, you can trust our creative logo designers at RFS Logo Design in Illinois to deliver exceptional results 
                    that leave a lasting impression.</p>
                </div>
                <div class="col-md-5 image">
                    <img src="images/hire-section-logos .png" alt="RFS Logo Design">
                </div>
            </div>
        </div>
    </section>

    <!---------------------End why-choose-rfs----------------->



    <!---------------------Start Crafting----------------->









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

