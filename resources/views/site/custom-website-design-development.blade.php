@extends('site.common')

@section('title', 'Custom Website Design and Development - RFS Logo Design')
@section('meta_desc', 'Get custom website design and development services at RFS Logo Design. Our Web developers are professional and expert to craft custom website for your business.')
@section('content')

    <style>
        .banner-section h1 {
            font-weight: 700;
            font-size: 32px;
        }

        .banner-section ul li {
            font-weight: 500;
            font-size: 14px;
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
    </style>

    <div class="banner-section text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1>Build Your Site With a Trusted <span class="logo-design-color">Custom Web Design</span> Services</h1>
                    <p>
                        Unlock the potential of tomorrow with Design Dior – where every pixel counts in shaping a creative
                        and dynamic digital experience. From website development to logo design, our imagination knows no
                        bounds.
                    </p>
                    <ul class="icon-list">
                        <li><i class="fas fa-trophy"></i> Custom UX & UI Design</li>
                        <li><i class="fas fa-briefcase"></i> Search & Conversion Optimization</li>
                        <li><i class="fas fa-sync-alt"></i> End-To-End Development</li>
                    </ul>
                    <a href="{{ url('/') }}" class="california-button-online">Get Started</a>
                </div>
                <div class="col-lg-6 text-center about-us-image-sec order-lg-2">
                    <img src="{{ asset('images/CUSTOM-WEBSITE-DESIGN-DEVELOPMENT_.webp') }}" alt="About RFS Logo Design"
                        title= "About RFS Logo Design" class="img-fluid">
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

    <section class="custom-web container py-5 my-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4">
                <h1>
                    Custom <span class="gradient-heading">Web Design & Development</span>
                </h1>
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
    </section>

    <!---------------------- Start Portfolio -------------------------->
    <div class="logo-designs-portfolio">
        <div class="container">
            <div class="row gallery">
                <div class="col-12 text-center mb-4">
                    <h1 class="gradient-heading">Our Award-Winning Company Website Portfolio</h1>
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
        <div class="container">
            <h2 class="text-center mb-5">See What Our Clients Have to Say</h2>
            <div class="owl-carousel owl-theme">
                <!-- Reviews will be inserted here dynamically -->
            </div>
        </div>
    </section>
    <!-- {{-- --------------- End Testiomonial Section --}} -->

    <!-------------------- Start Boxed Section ------------------>
    <section class="boxed-section">
        <div class="container">
            <h2 style=font-size:1.6em;>Get Your Custom Website Design Development Done Today!</h2>
            <p>Enhance your brand with our professional custom website design development services. We are your one stop shop for quality
                custom website design development. Contact us at <a href="mailto:support@rfslogodesign.com">support@rfslogodesign.com</a> or
                call us at <a href="tel:+15516665255">+1 (551) 666-5255</a>.</p>
            <a href="{{ url('contact-us') }}" class="california-button-online">Get Started</a>
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
@endsection
