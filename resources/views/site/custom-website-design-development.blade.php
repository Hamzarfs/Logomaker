@extends('site.common')

@section('title', 'Custom Website Design and Development - RFS Logo Design')
@section('meta_desc', 'Get custom website design and development services at RFS Logo Design. Our Web developers are professional and expert to craft custom website for your business.')
@section('content')

    <style>

.custom-website-design-development{
       background-image: url('/images/custom-websitebanner.webp');
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

    .custom-website-design-development h1 {
       font-weight: 700;
       font-size: 44px;
       text-align: center;

   }
    .custom-website-design-development h2 {
       font-weight: 700;
       font-size: 25px !important;
       text-align: center;
       margin-bottom: 20px;
   }


    .custom-website-design-development p {
       margin-bottom: 20px;
   }


   .new-getstarted-button{
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    color: #fff;
    background-color: #646BD9;
    text-decoration: none;
    border-radius: 5px;
    margin-top: 20px;
}

.new-getstarted-button:hover{
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    color: #fff;
    background-color: #646BD9;
    text-decoration: none;
    border-radius: 5px;
    margin-top: 20px;
}




        .gradient-heading {
            background: linear-gradient(209deg, #501e9c 0%, #8169f1 40%, #a44cee 75%, #ff847f 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .custom-web h1 {
            font-size: 30px;
            font-weight: 700;
        }

        .custom-web p.column-1 {
            text-align: justify;
        }

        .custom-web .custom-link {
            color: #0c3df4;
            text-decoration: none;
        }

        .custom-web .custom-link:hover {
            color: #12C2E9;
        }

        .custom-web a.btn {
            background-color: #501e9c;
            border: none;
        }

        .custom-web a.btn:hover,
        .custom-web a.btn:focus,
        .custom-web a.btn:focus-visible,
        .custom-web a.btn:active {
            background-color: #a44cee !important;
            border: none !important;
            box-shadow: none;
        }

        .custom-web .card-1 {
            background-color: #5842BC;
        }

        .custom-web .card-2 {
            background-color: #42A1BC;
        }

        .custom-web .card-3 {
            background-color: #F16C6A;
        }

        .custom-web .card-4 {
            background-color: #D67300;
        }

        .logo-designs-portfolio h1 {
            font-weight: 700;
        }
        .logo-designs-ca {
    text-align-last: center;
}

.row.align-items-center {
    place-content: center;
}

        @media (max-width: 768) {
    .new-testimonial{
    margin-top:0px !important;
   }
   }
    </style>


<style>


   </style>

<section class="custom-website-design-development">
    <div class="container">
    <p>Best Custom Website Designers at RFS Logo Design</p>
        <h1>Hire Custom Web Designers for<br>
        Custom Website Design Services</h1>
    </div>
</section>


<div class="logo-designs-ca">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-6-md-10">
                <h2>Custom Web Design & Development</h2>
                <p style="text-align: justify;">At RFS logo design, we specialize in crafting exceptional websites that are customized to suit your business’s needs. Our websites are not only optimized for mobile devices but also visually captivating, making them a powerful tool for achieving your objectives with excellence. Research shows that 85% of consumers visit a company’s website before making a purchase. <br> <br>Recognizing the profound influence of user experience, aesthetics, usability, and accessibility on website success, our adept team is dedicated to crafting a standout online presence for your brand. Elevate your business by turning logo concepts into reality—reach out to us today!</p>
                <a href="{{ url('contact-us') }}" class="new-getstarted-button">Get Started</a>
            </div>

        </div>
    </div>
</div>



    <div class="new-card-design-container py-5">
        <div class="new-card-design-row">
            <div class="new-card-design-col">
                <div class="new-card-design-card">
                    <img src="{{ url('images/card-design1.png') }}" alt="Image 1">
                    <h2>Experienced <br>
                        Website Developers</h2>
                    <i class="fas fa-arrow-up"></i>
                    <div class="new-card-design-overlay">
                        <div class="new-card-design-overlay-text">Leverage our skilled website developers' expertise! Share your vision and our creative team will swiftly bring it to life.</div>
                    </div>
                </div>
            </div>
            <div class="new-card-design-col">
                <div class="new-card-design-card">
                    <img src="{{ url('images/card-design2.png') }}" alt="Image 2">
                    <h2>Swift <br>
                        Project Delivery</h2>
                    <i class="fas fa-arrow-up"></i>
                    <div class="new-card-design-overlay">
                        <div class="new-card-design-overlay-text">As adept web developers, we collaborate with businesses of every scale, prioritizing timely outcomes.</div>
                    </div>
                </div>
            </div>
            <div class="new-card-design-col">
                <div class="new-card-design-card">
                    <img src="{{ url('images/card-design3.png') }}" alt="Image 3">
                    <h2>Customized <br>
                        Design Solutions</h2>
                    <i class="fas fa-arrow-up"></i>
                    <div class="new-card-design-overlay">
                        <div class="new-card-design-overlay-text">We prioritize unique design elements that set your website apart, ensuring a distinctive online presence.</div>
                    </div>
                </div>
            </div>
            <div class="new-card-design-col">
                <div class="new-card-design-card">
                    <img src="{{ url('images/card-design2.png') }}" alt="Image 2">
                    <h2>Emphasis on <br>
                        Performance</h2>
                    <i class="fas fa-arrow-up"></i>
                    <div class="new-card-design-overlay">
                        <div class="new-card-design-overlay-text">We prioritize performance, ensuring fast loading and elevating the overall user experience with efficiency.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


{{--
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
    </div> --}}

    {{-- <section class="custom-web container py-5 my-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4">
                <h2>
                    Custom <span class="gradient-heading">Web Design & Development</span>
                </h2>
                <p class="column-1">
                    At RFS logo design, we specialize in crafting exceptional websites that are customized to suit your
                    business’s needs. Our websites are not only optimized for mobile devices but also visually captivating,
                    making them a powerful tool for achieving your objectives with excellence. Research shows that 85% of
                    consumers visit a company’s website before making a purchase.
                </p>
                <p>
                    Recognizing the profound influence of user experience, aesthetics, usability, and accessibility on
                    website success, our adept team is dedicated to crafting a standout online presence for your brand. <a
                        href="{{ url('graphic-designing') }}" class="custom-link">Elevate your business by turning logo
                        concepts into reality</a>—reach out to us today!
                </p>
                <a class="btn btn-primary rounded-5 px-4 py-3" href="{{ url('contact-us') }}">
                    Get Started
                </a>
            </div>
            <div class="col-lg-6 text-white">
                <div class="row">
                    <div class="col-md-6 d-flex">
                        <div class="card-1 px-4 py-2 rounded-3 mb-4 d-flex align-items-center">
                            <div class="">
                                <h5 class="mb-3">Experienced Website Developers</h5>
                                <p>Leverage our skilled website developers' expertise! Share your vision and our creative
                                    team will swiftly bring it to life.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex">
                        <div class="card-2 px-4 py-2 rounded-3 mb-4 d-flex align-items-center">
                            <div class="">
                                <h5 class="mb-3">Swift Project Delivery</h5>
                                <p>As adept web developers, we collaborate with businesses of every scale, prioritizing
                                    timely outcomes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex">
                        <div class="card-3 px-4 py-2 rounded-3 mb-4 d-flex align-items-center">
                            <div class="">
                                <h5 class="mb-3">Customized Design Solutions</h5>
                                <p>We prioritize unique design elements that set your website apart, ensuring a distinctive
                                    online presence.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex">
                        <div class="card-4 px-4 py-2 rounded-3 mb-4 d-flex align-items-center">
                            <div class="">
                                <h5 class="mb-3">Emphasis on Performance</h5>
                                <p>We prioritize performance, ensuring fast loading and elevating the overall user
                                    experience with efficiency.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!---------------------- Start Portfolio -------------------------->
    <div class="logo-designs-portfolio">
        <div class="container">
            <div class="row gallery">
                <div class="col-12 text-center mb-4">
                    <h2>Our Award-Winning Company Website Portfolio</h2>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('images/1-1.webp') }}">
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('images/2-1.webp') }}">
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('images/3-1.webp') }}">
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('images/4.webp') }}">
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('images/6.webp') }}">
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('images/7.webp') }}">
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('images/8.webp') }}">
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('images/9.webp') }}">
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('images/11.webp') }}">
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('images/12.webp') }}">
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('images/13.webp') }}">
                </div>
            </div>
        </div>
    </div>
    <!---------------------- End Portfolio -------------------------->

    <!-- <-----------------Start Testimonial Section---------------->
    <section id="testimonial-section" class="pt-5 pb-5">
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
    </section>
    <!-- {{-- --------------- End Testiomonial Section --}} -->

    <!-------------------- Start Boxed Section ------------------>
    <section class="boxed-section">
        <div class="container">
            <div class="row align-items-center">
            <div class="col-8-md-12">
            <h2 style=font-size:1.6em;>Get Your Custom Website <br>Design Development Done Today!</h2>
            <p>Enhance your brand with our professional custom website design development services. We are your one stop shop for quality
                custom website design development. Contact us at <a href="mailto:support@rfslogodesign.com">support@rfslogodesign.com</a> or
                call us at <a href="tel:+15516665255">+1 (551) 666-5255</a>.</p>
            <a href="{{ url('contact-us') }}" class="new-getstarted-button">Get Started</a>
        </div>
        </div>
    </div>
    </section>
    <!-------------------- End Boxed Section ------------------>

    <script>
        // $(document).ready(function() {
        //     // Show only the first 9 items on page load
        //     $('.filter').hide();
        //     $('.filter.all').slice(0, 9).show();

        //     $('.filter-button').click(function() {
        //         var value = $(this).attr('data-filter');
        //         $('.filter-button').removeClass('active');
        //         $(this).addClass('active');
        //         if (value == 'all') {
        //             $('.filter').hide();
        //             $('.filter.all').slice(0, 9).show();
        //             $('.load-more-button').show();
        //         } else {
        //             $('.filter').hide();
        //             $('.filter.' + value).slice(0, 2).show();
        //             $('.load-more-button').hide();
        //         }
        //     });

        //     $('.load-more-button').click(function() {
        //         $('.filter.all:hidden').slice(0, 9).slideDown();
        //         if ($('.filter.all:hidden').length == 0) {
        //             $(this).fadeOut('slow');
        //         }
        //     });
        // });
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
