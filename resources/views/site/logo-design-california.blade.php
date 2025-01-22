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
    <p>Ranked #1 Logo Design Agency in California</p>
        <h1>Best Custom Logo Design<br>
        Company in California</h1>
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
                <h2>PROFESSIONAL LOGO<br>DESIGNS IN CA</h2>
                    <p style="text-align: justify;">RFS Logo Design stands out as a premier logo design company
                    based in California, renowned for its exceptional services in custom logo design. With a
                    talented team of designers dedicated to crafting unique and impactful logos, RFS Logo Design
                    ensures that each design reflects the essence of the brand it represents.
                    </p>
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

        <div class="col-md-1"></div>

        <!-- Right Side Content -->
        <div class="col-md-5 unique-content-col">
        <h2 class="CRAFT-h2" style="font-weight: 800;">Crafting impactful logos<br> Across industries in California</h2>
        <p class="unique-paragraph">We serve a diverse array of industries with custom
                        logo design solutions tailored to their unique needs. From small businesses, including
                        cafes, boutiques, and local services, to professionals such as lawyers, doctors, and
                        consultants, RFS Logo Design caters to a wide range of clients. Additionally, we extend
                        our services to industries like technology, real estate, hospitality, fashion, and more.
                        No matter the industry or profession, we are dedicated to crafting visually striking logos
                        that effectively communicate the essence of each brand, leaving a lasting impression on customers and clients alike.</p>
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
