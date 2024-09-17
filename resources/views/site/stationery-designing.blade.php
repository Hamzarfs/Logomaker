@extends('site.common')

@section('title', 'Professional Stationery Designing Services - RFS Logo Design')
@section('meta_desc', 'Elevate your brand identity with RFS Logo Design professional stationery designing services. Get creative branding materials for effective online presence.')

@section('content')

<style>


       .education-logo-section {
          background-image: url('/images/bannerStationery.png');
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
       <p>Stationery Design Service in RFS logo Designing</p>
           <h1>Professional Business<br>
           Stationery Design Services</h1>
       </div>
   </section>


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
                    <img src="{{ url('images/latterhead01.webp') }}" alt="Letterhead Design">
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
        <hr class="custom-divider-ca">

        <div class="row gallery">
            <!-- Iconic Logos -->
            <div class="col-lg-4 col-md-6 mb-4 filter all iconic">
                <img src="{{ url('images/Business Cards01.png') }}" alt="Iconic Logo 1">
            </div>
            <div class="col-lg-4 col-md-6 mb-4 filter all illustrative">
                <img src="{{ url('images/Letterhead Design01.png') }}" alt="Illustrative Logo 1">
            </div>
            <div class="col-lg-4 col-md-6 mb-4 filter all typography">
            <img src="{{ url('images/Envelope Design03.png') }}" alt="Typography Logo 2">
            </div>
            <!-- Typography Logos -->
            <div class="col-lg-4 col-md-6 mb-4 filter all typography">
            <img src="{{ url('images/Envelope Design02.png') }}" alt="Typography Logo 1">
            </div>
            <div class="col-lg-4 col-md-6 mb-4 filter all iconic">
                <img src="{{ url('images/Business Cards02.png') }}" alt="Iconic Logo 2">
            </div>
            <div class="col-lg-4 col-md-6 mb-4 filter all illustrative">
                <img src="{{ url('images/Letterhead Design02.png') }}" alt="Illustrative Logo 1">
            </div>
            <!-- Illustrative Logos -->
            <div class="col-lg-4 col-md-6 mb-4 filter all illustrative">
                <img src="{{ url('images/Letterhead Design.png') }}" alt="Illustrative Logo 1">
            </div>
            <div class="col-lg-4 col-md-6 mb-4 filter all typography">
            <img src="{{ url('images/Envelope Design01.png') }}" alt="Typography Logo 2">
            </div>
            <div class="col-lg-4 col-md-6 mb-4 filter all iconic">
                <img src="{{ url('images/Business Cards03.png') }}" alt="Iconic Logo 3">
            </div>
           
        
        </div>
    </div>
   </div>
<!---------------------- End Portfolio -------------------------->



     <!-- <-----------------Start Testimonial Section---------------->


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


     <!-- <-----------------End Testimonial Section---------------->


<!-------------------- Start Boxed Section ------------------>
<section class="boxed-section">
        <div class="container">
        <h2 style= font-size:32px>Get Your Custom Stationery Designs Today!</h2>
            <p>Enhance your brand with our professional stationery design services. We are your one</p>
            <p>stop shop for quality stationery designs & branding materials. Contact us at</p>
            <p><a href="mailto:support@rfslogodesign.com">support@rfslogodesign.com</a> or
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
@endsection
