@extends('site.common')

@section('title', 'Professional Graphic Designing Services - RFS Logo Design')
@section('meta_desc', 'Transform your brand with RFS Logo Design professional graphic designing services. From logos to branding materials, we create visually stunning assets for your brand.')
@section('content')





 
<style>
       .education-logo-section {
          background-image: url('/images/Graphic.png');
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
       <p>Design Just Got Easy</p>
           <h1>Create impressive videos and<br>
           images designs in minutes.</h1>
       </div>
   </section>
   

    <!--------------------- Start PROFESSIONAL LOGO DESIGNS IN CA ----------------------->
    <div class="services-section" style=padding:50px;>
        <div class="container">
            <h2>What Services Do We Offer?</h2>
            <p>Our experts are dedicated to delivering excellence in every project.</p>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-card business-card-design">
                        <img src="{{ url('images/Stationery.png') }}" alt="Business Card Design">
                        <h4>Branding Design</h4>
                        <p>A professional branding design service enhances a brand’s visual identity. It creates a
                            positive ecosystem for the brand to grow amid competitors.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-card letterhead-design">
                        <img src="{{ url('images/BRANDING.png') }}" alt="Letterhead Design">
                        <h4>Stationery Design</h4>
                        <p>Utilizing a custom stationery design service can facilitate the growth of your business. The
                            professional designs will enhance your brand through direct.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-card envelope-design">
                        <img src="{{ url('images/LOGODESIGN(1).png') }}" alt="Envelope Design">
                        <h4>Logo Design</h4>
                        <p>Grow your business with a professional, custom logo designed by our designer creative
                            experts. Because good design makes great business.</p>
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
            <h2 style=font-size:1.6em;>Get Your Custom Graphics Designs Today!</h2>
            <p>Enhance your brand with our professional graphics design services. We are your one</p>
            <p>stop shop for quality graphics designs. Contact us at</p> 
            <p><a href="mailto:support@rfslogodesign.com">support@rfslogodesign.com</a> or
                call us at <a href="tel:+15516665255">+1 (551) 666-5255</a>.</p>
            <a href="{{ url('contact-us') }}" class="california-button-online">Get Started</a>
        </div>
    </section>
    <!-------------------- End Boxed Section ------------------>
    </section>
    <!-------------------- End Boxed Section ------------------>


    <!-- Bootstrap JS and dependencies -->
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}
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
