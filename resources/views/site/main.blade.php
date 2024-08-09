<!-- resources/views/site/main.blade.php -->
@extends('site.common')

@section('title', 'Welcome')

@section('content')


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"> --}}

    <style>

.owl-carousel .owl-item img {
    display: block;
    width: auto;
}

.homepage-category-list {
        text-align: center;
        padding: 50px 0;
    }
    .category-buttons {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
    .category-buttons button {
        background-color: #d3e3fc;
        border: none;
        color: #333;
        padding: 10px 20px;
        margin: 5px;
        border-radius: 20px;
        font-size: 14px;
        transition: background-color 0.3s;
    }
    .category-buttons button:hover {
        background-color: #b0c7ec;
    }
        #testimonial-section {
            background-color: #f9f9f9;
        }

        .testimonial-card {
            background-color: #ffffff;
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .testimonial-card.active {
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .testimonial-avatar {
            background-color: #5068A9;
            display: flex;
            align-items: center;
            justify-content: center;
            border-top-left-radius: .25rem;
            border-bottom-left-radius: .25rem;
            padding: 20px;
            text-align: center;
        }

        .testimonial-avatar img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }

        .testimonial-content {
            padding: 20px;
        }

        .testimonial-content h5 {
            font-weight: bold;
            margin-top: 15px;
        }

        .rating {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .star {
            width: 24px;
            height: 24px;
            background-color: #00b67a;
            clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%);
            margin-right: 5px;
        }

        .owl-nav button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            border: none;
            background: none;
            outline: none;
            font-size: 2rem;
            color: #333;
        }

        .owl-nav button.owl-prev {
            left: -25px;
        }

        .owl-nav button.owl-next {
            right: -25px;
        }

        .owl-nav button:focus {
            outline: none;
        }
        @media only screen and (max-width: 767px) {
    .owl-carousel .owl-item img {

        display: block;
        width: auto;
    }
}

/* Custom scrollbar styles */
::-webkit-scrollbar {
    width: 8px; /* Width of the scrollbar */
}

::-webkit-scrollbar-track {
    background: white; /* White background */
}

::-webkit-scrollbar-thumb {
    background: #666BC0; /* Purple scrollbar */
    border-radius: 8px; /* Rounded corners */
    position: relative;
}

::-webkit-scrollbar-thumb::before {
    content: 'VIP';
    position: absolute;
    top: 50%;
    right: -50px;
    transform: rotate(270deg) translateY(-50%);
    transform-origin: center;
    background-color: red; /* Red VIP tag background */
    color: white; /* White text color */
    padding: 5px 10px;
    font-weight: bold;
    border-radius: 5px 5px 0 0;
}
/* End Custom scrollbar styles  */

.logotype-card {
    border: none;
    background-color: #f0f8ff; /* Light background color for the cards */
    transition: box-shadow 0.3s ease;
    border-radius: 15px; /* Rounded corners */
    padding-top: 20px;
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    align-content: center;
    justify-content: center;
    text-decoration: none;
}

.logotype-card img {
    /* padding: 20px;
    border-radius: 15px 15px 0 0;
    width: 160px;
    align-self: center; */

    height: 120px;
    width: auto;
    margin-bottom: 20px;


}

.logotype-card .card-body {
    padding: 15px;
}

.logotype-card .card-text {
    font-size: 1rem;
    font-weight: 500;
    color: #5a5a5a;
}

.logotype-card:hover {
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15); /* Box shadow on hover */
}




    </style>

    <!----------------------------------------- Start Banner Section ------------------------------->

    <div class="container-fluid position-relative overflow-hidden" style="background-color:#080a2d; padding-bottom: 100px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 banner-left order-lg-1">
                    <h2 style="font-weight:700; color:#fff;">Free <span class="logo-design-color">Logo Maker</span> Tailored
                        for Every Industry - Design Your Logo in Minutes</h2>
                    <p style="color:#fff;">Unleash your creativity and watch your logo come to life effortlessly. Get in
                        touch with us now!</p>

                    <form id="companyForm" method="POST" action="{{ url('/store-session-data') }}">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="companyName11" name="company"
                                placeholder="Enter your company name" aria-label="Enter your company name">
                                <input type="hidden" name="flow" value="home" >
                            <input type="submit" class="custom-button-banner" value="Get Started">
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 text-center banner-image-sec order-lg-2">
                    <img src="images/Logos pic.png" alt="Example" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="wave"></div>
    </div>

    <!----------------------------------------- End Banner Section ------------------------------->


    <!------------------------- section online logo------------------------------------>


    <div class="container my-5">
        <h1 class="maim-heading-online">Steps to Craft Your Perfect Logo Design Online</h1>
        <p class="main-description-online">
            Use our top-notch logo maker to browse templates, tweak colors, fonts, and icons, and
            create a logo that’s as unique as your brand. Download and showcase your custom design
            on your website, business cards, and social media with ease!
        </p>
        <div class="row">
            <div class="col-md-5">
                <h2 class="heading-online">Step 1: Dive into Our Free Logo Maker</h2>
                <p class="description-online">
                    Kick off your logo journey with our powerful tool. Browse our vast gallery
                    of templates, visualize design concepts, and select the one that perfectly
                    captures your brand's identity. Create a unique and professional logo with
                    minimal effort on your part and watch your idea come to life.
                </p>
                <a href="{{ url('/select-logo') }}"><button class="custom-button-online">Explore Logo</button></a>
                <img src="images/Logo Pics.png" class="image-online">
            </div>
            <div class="col-md-2 center-image-online"> 
                <img src="images/Line points.png">
            </div>
            <div class="col-md-5">
                <img src="images/Gif-Home.gif" class="image-online">
                <h2 class="heading-online">Step 2: Customize Your Logo Design</h2>
                <p class="description-online">
                    Let our logo maker’s drag-and-drop editor do the heavy lifting. Adjust
                    colors, fonts, icons, and taglines to fit your brand’s vibe. Our user-friendly
                    tools make it a breeze for anyone to design a standout, professional logo!
                </p>
                <a href="{{ url('/select-logo') }}"><button class="custom-button-online">Try Design Studio</button></a>
            </div>
            <div class="container my-5">
                <div class="row">
                    <div class="col-md-5">
                        <h2 class="heading-online">Step 3. Download Your Logo</h2>
                        <p class="description-online">
                            After perfecting your design, use our logo generator to download
                            high-resolution files for all your branding needs. Whether for digital
                            media or print, ensure your logo shines consistently across your website,
                            social media, business cards, and brochures!
                        </p>
                        <a href="{{ url('/select-logo') }}"><button class="custom-button-online">Get Started</button></a>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <img src="images/111 1.png" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5">
    </div>


    <!-------------------------End section online logo------------------------------------>



    <!-- <------------------Make A logo------------------>
<!-- 
<section class="heroSection1">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4">
                    <h1 class="heroTitle1">Ready To Turn Your Vision <br>Into A Logo Masterpiece?</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 d-flex align-items-center mb-3">
                    <input type="text" class="form-control mr-2" id="businessName"
                        placeholder="Enter Your Business Name">
                    <button class="search-button-online" onclick="addText()">Make A logo</button>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <------------------End Make A logo---------------->



    <!-- ---------------------start porfolio -------------------->


    <div class="banner-section" style="background-color: #f2f6fe; padding-bottom: 100px;">
        <div class="container portfolio-section">
            <h2 class="portfolio-heading">We Have Logos For Everyone</h2>
            <p class="main-description-online">
                Explore our logo builder’s vast template collection, from medical
                to fashion, sports to food. RFS Logo Design helps you find the perfect
                logo to match your business identity and branding needs.
            </p>


            <div class="row">
                @foreach ($categories as $category)
                    @if ($category->products->isNotEmpty())
                        @php
                            $product = $category->products->first(); // Get the first product
                        @endphp
                        <div class="col-lg-4 col-md-6 mb-4">
                            <a href="{{ route('logos', $category->slug) }}" class="card-container-link"
                                data-image="{{ $product->image }}" data-id="{{ $product->id }}"
                                data-placeholder="{{ $product->placeholder_value }}">
                                <div class="card-container">
                                    <div class="card-inner">
                                        <div class="card-front">
                                            <img src="category-image/{{ $product->image }}"
                                                class="img-fluid portfolio-image" alt="{{ $product->name }}">
                                            <div class="text-placeholder"
                                                data-placeholder-value="{{ $product->placeholder_value }}"></div>

                                        </div>
                                        <div class="card-back">
                                            <div class="category-name">{{ $category->name }}</div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    @endif
                @endforeach
            </div>


            {{-- <div class="row">
                @foreach ($products as $product)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card-container">
                            <img src="category-image/{{ $product->image }}" class="img-fluid portfolio-image">
                            <div class="text-placeholder"></div>
                            <a href="{{ url('/store-session-data-image?image=' . $product->image) }}"
                                class="hover-button select-btn" data-product-id="{{ $product->id }}">Select </a>
                        </div>
                    </div>
                @endforeach
            </div> --}}






            <h1 class="studioTitle">Uncover Versatile Logo Designs With Our Powerful Design Engine!</h1>
        </div>
    </div>

    <!-----------------End  Portfolio ----------------------->
    <!------------------start No.1 Choice for Businesses ------------->


    <section class="why-logo-design-section">
    <div class="container">
        <!-- Heading -->
        <h2 class="why-logo-design-heading">Why RFS LOGO DESIGN is the No.1 Choice for Businesses</h2>

        <!-- Description -->
        <p class="why-logo-design-description">We are the number one website for DIY logo creator software because customers love our tool and service. From top notch quality logo designs to prompt customer service, we make sure you get the branding your company deserve in the least possible time.</p>

        <!-- Row with 3 Columns -->
        <div class="row">
            <!-- Column 1 -->
            <div class="col-md-4">
                <div class="icon-box business-needs">
                    <img src="{{url('images/success.gif')}}" alt="Business Needs Icon" class="icon-box-image">
                    <h3 class="icon-box-heading">We Understand Business Needs</h3>
                    <p class="icon-box-description">With over 20+ years in the industry, we are pretty sure we understand what kind of branding small businesses and startups need. You will find all the necessarily brand designs that you'll need to launch a new business starting with a company logo.</p>
                </div>
            </div>

            <!-- Column 2 -->
            <div class="col-md-4">
                <div class="icon-box premium-quality">
                    <img src= "{{url('images/best-quality.gif')}}"  alt="Premium Quality Icon" class="icon-box-image">
                    <h3 class="icon-box-heading">Premium Quality Graphic Design</h3>
                    <p class="icon-box-description">We only work with expert graphic and logo designer which is why you will always get professional and quality designs from LogoDesign.net. All our logos, social media, stationery, website, etc. are guaranteed to make your brand shine out!</p>
                </div>
            </div>

            <!-- Column 3 -->
            <div class="col-md-4">
                <div class="icon-box custom-designers">
                    <img src="{{url('images/logo-design.gif')}}"  alt="Custom Designers Icon" class="icon-box-image">
                    <h3 class="icon-box-heading">Work with Custom Designers</h3>
                    <p class="icon-box-description">Not all customers like DIY logo maker tools which is why we also have the option of custom logo design. Work with experienced and professional graphic designers or logo designers one-on-one or via crowdsourcing, just contact us!</p>
                </div>
            </div>
        </div>

        <!-- Additional Row with 3 Columns -->
        <div class="row">
            <!-- Column 1 -->
            <div class="col-md-4">
                <div class="icon-box dedicated-support">
                    <img src="{{url('images/support.gif')}}"  alt="Dedicated Support Icon" class="icon-box-image">
                    <h3 class="icon-box-heading">Dedicated Support 24/7</h3>
                    <p class="icon-box-description">Our support team can get you started with our logo maker free for try out or design a company logo by a logo designer. We can even help guide you how to build an awesome brand from scratch. Just contact us with call, chat or email!</p>
                </div>
            </div>

            <!-- Column 2 -->
            <div class="col-md-4">
                <div class="icon-box digital-media-design">
                    <img src="{{url('images/digital-art.gif')}}" alt="Digital Media Design Icon" class="icon-box-image">
                    <h3 class="icon-box-heading">Ready for Digital Media Design</h3>
                    <p class="icon-box-description">All our graphic designs are ready for integration and use on all types of digital media whether it is a social media, website design, or app design. You can download your business logo from the logo creator for use instantly!</p>
                </div>
            </div>

            <!-- Column 3 -->
            <div class="col-md-4">
                <div class="icon-box brand-kit">
                    <img src="{{url('images/startup.gif')}}" alt="Brand Kit Icon" class="icon-box-image">
                    <h3 class="icon-box-heading">Brand Kit for Startups</h3>
                    <p class="icon-box-description">If you are looking for affordable logo designs and brand designs to make up for your brand kit, then LogoDesign.net offers just the tools to jumpstart your brand. Just start using our logo maker, and download it today!</p>
                </div>
            </div>
        </div>
    </div>
</section>


    <!------------------end No.1 Choice for Businesses ------------->


    <!------------Start Image Box Section ------------->

    <section class="image-box"
        style="padding-top: 100px; padding-bottom: 100px; background-image: url('images/plan.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="container">
            <!-- First Row -->
            <div class="row mb-4">
                <div class="col text-center">
                    <h2>Designing The Perfect Logo Made Easy With Our Logo Creator</h2>
                    <p>Still unsure? Dive deeper or consult with our expert designers for tailored guidance.</p>
                </div>
            </div>
            <!-- Second Row -->
            <div class="row">
                <!-- First Column -->
                <div class="col-md-4 image-column mb-3 mb-md-0">
                    <img src="images/Imagebox1_bird.png" alt="Logo type">
                    <h2>Logo type</h2>
                    <p style="text-align: justify;">Logos come in various types, each serving different purposes: emblem
                        logos combine text and symbols within a badge-like shape; wordmark logos
                        focus on stylized text; lettermark logos use initials or abbreviations; abstract logos represent
                        ideas in a unique, non-literal way; and
                        pictorial logos illustrate the business with a visual icon.</p>
                    <!-- <a href="#" style= "color:#646bd9;">Connect with an expert</a> -->
                </div>
                <!-- Second Column -->
                <div class="col-md-4 image-column mb-3 mb-md-0">
                    <img src="images/Imagebox2_color.png" alt="Logo colors">
                    <h2>Logo colors</h2>
                    <p style="text-align: justify;">
                        Colors are key to your brand’s identity, each evoking distinct
                        emotions. Red bursts with energy and passion, while blue signals
                        trust and professionalism. Use our logo maker tool to pick the perfect
                        palette that captures your brand’s essence and connects with your audience.
                    </p>
                    <!-- <a href="#" style= "color:#646bd9;">Connect with an expert</a> -->
                </div>
                <!-- Third Column -->
                <div class="col-md-4 image-column">
                    <img src="images/Imagebox3_font.png" alt="Logo fonts">
                    <h2>Logo fonts</h2>
                    <p style="text-align: justify;">Choosing the right font is crucial for your brand logo, as it reflects
                        your brand’s personality and message. Here are some ideas for you.<br>
                        <b>Serif Fonts:</b> Exude tradition and reliability.<br>
                        <b>Sans-Serif Fonts:</b> Suggest modernity and simplicity.<br>
                        <b>Script Fonts:</b> Add a touch of elegance.<br>
                        <b>Display Fonts:</b> Command attention and stand out.
                    </p>
                    <!-- <a href="#" style= "color:#646bd9;">Connect with an expert</a> -->
                </div>
            </div>
        </div>
    </section>

    <!------------end Image Box Section ------------->


    <!-- start plan section -->

    <section class="plan-section">
        <div class="container">
            <!-- Heading -->
            <div class="row">
                <div class="col-12">
                    <div class="heading">Sounds Like a Plan</div>
                </div>
            </div>
            <!-- Card Slider -->
            <div class="row card-price-container flex-column flex-md-row">
                <div class="card" onclick="expandCard(this)">
                    <h5>Get Logo Maker Deal</h5>
                    <p>Make standout social content, flyers, logos, banners, and more. Free use forever.</p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> 10000+ logos to choose</li>
                        <li><i class="bi bi-check-circle"></i> Instant download</li>
                        <li><i class="bi bi-check-circle"></i> Unlimited customization</li>
                        <li><i class="bi bi-check-circle"></i> Ready brand identity designs</li>
                        <li><i class="bi bi-check-circle"></i> High-res PDF, PNG, JPG</li>
                        <li><i class="bi bi-check-circle"></i> As low as $37</li>
                    </ul>
                    <a href="{{ url('/select-logo') }}"><button class="plan-btn">For Startups</button></a>
                </div>
                <div class="card" onclick="expandCard(this)">
                    <h5>Get Logo Maker Deal</h5>
                    <p>Make standout social content, flyers, logos, banners, and more. Free use forever.</p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> 10000+ logos to choose</li>
                        <li><i class="bi bi-check-circle"></i> Instant download</li>
                        <li><i class="bi bi-check-circle"></i> Unlimited customization</li>
                        <li><i class="bi bi-check-circle"></i> Ready brand identity designs</li>
                        <li><i class="bi bi-check-circle"></i> High-res PDF, PNG, JPG</li>
                        <li><i class="bi bi-check-circle"></i> As low as $37</li>
                    </ul>
                    <a href="{{ url('/select-logo') }}"><button class="plan-btn">For Startups</button></a>
                </div>
            </div>
        </div>
    </section>


    <!-- End Plan Section -->


    <!-- Start Hire Section -->
<section class="hire-section-bg">
    <div class="container hire-section">
        <div class="row align-items-center">
            <!-- Left Column -->
            <div class="col-md-6 left-column">
                <p>Share Your Unique Vision With Our</p>
                <h2>Custom Logo Designer</h2>
            <a class="toll_icon" href="tel:+15516665255" style="color: white;">
                <button class="hire-call-now-btn">Call Now</button>
            </a>



            </div>
            <!-- Right Column -->
            <div class="col-md-6 right-column">
                <img src="images/hire-section-logos.png" class="hire-section-logo" alt="Logo">
            </div>
        </div>
    </section>




    <!-- End Hire Section -->




    <!-- <-----------------Start Testimonial Section---------------->


    <section id="testimonial-section" class="pt-5 pb-5">
        <div class="container">
            <h2 class="text-center mb-5">1M+ Happy Customers and Counting</h2>
            <div class="owl-carousel owl-theme">
                <!-- Reviews will be inserted here dynamically -->
            </div>
        </div>
    </section>
 {{----------------- End Testiomonial Section --}}


    {{-- Start 4 logo type --}}

    <div class="container my-5">
        <div class="row text-center logotypescard d-flex ">
            <div class="col-md-3">
                <div class="card logotype-card">
                    <img src="{{url('images/logo-category-illustration-logo.png')}}" class="card-img-top" alt="Illustration Logo">
                    <div class="card-body">
                        <p class="card-text">ILLUSTRATION LOGO</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card logotype-card">
                    <img src="{{url('images/logo-category-nature-logo.png')}}" class="card-img-top" alt="Nature Logo">
                    <div class="card-body">
                        <p class="card-text">NATURE LOGO</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card logotype-card">
                    <img src="{{url('images/logo-category-abstract-logo.png')}}" class="card-img-top" alt="Abstract Logo">
                    <div class="card-body">
                        <p class="card-text">ABSTRACT LOGO</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card logotype-card">
                    <img src="{{url('images/logo-category-minimal-logo.png')}}" class="card-img-top" alt="Minimal Logo">
                    <div class="card-body">
                        <p class="card-text">MINIMAL LOGO</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

 {{-- End logo type  --}}



{{-- Start Category List Section --}}



<div class="container homepage-category-list">
    <h2>Try Free Logo Maker for Every Business</h2>
    <p>Explore company logos made easy with our free logo maker tool for all types of professionals and industries.</p>
    <div class="category-buttons">
        <button>Accounting & CPA Logos</button>
        <button>Advertising Logos</button>
        <button>Agriculture Logos</button>
        <button>Alphabets Logos</button>
        <button>Animal & Pet Logos</button>
        <button>Arts Logos</button>
        <button>Auto & Transportation Logos</button>
        <button>Beauty Logos</button>
        <button>Childcare Logos</button>
        <button>Cleaning Logos</button>
        <button>Communication & Media Logos</button>
        <button>Community & Foundation Logos</button>
        <button>Consulting Logos</button>
        <button>Dating & Matchmaking Logos</button>
        <button>Employment & HR Logos</button>
        <button>Engineering & Energy Logos</button>
        <button>Entertainment & Music Logos</button>
        <button>Games & Gambling Logos</button>
        <button>Home Improvement Logos</button>
        <button>Information Technology Logos</button>
        <button>Insurance Logos</button>
        <button>Internet Logos</button>
        <button>Investment & Finance Logos</button>
        <button>Jewelry & Gemstones Logos</button>
        <button>Landscape Logos</button>
        <button>Marketing Logos</button>
        <button>Medical & Pharmacy Logos</button>
        <button>Photography Logos</button>
        <button>Printing & Publishing Logos</button>
        <button>Religion & Spirituality Logos</button>
        <button>Research & Development Logos</button>
        <button>Security Logos</button>
        <button>Spa & Massage Logos</button>
        <button>Sports & Fitness Logos</button>
        <button>Storage Logos</button>
        <button>Text Logos</button>
        <button>Trade & Logistics Logos</button>
        <button>Travel & Hotel Logos</button>
    </div>
</div>







{{-- End Category list section --}}




    <!-- -------------------start FAQs --------------- -->


    <div class="container faq-section">
        <h2 class="text-center mb-4">Frequently Asked Questions</h2>
        <div id="accordion">
            <!-- <-Question 1 -->
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                            aria-controls="collapseOne">
                            <span class="faq-question">How can I effectively utilize a logo maker to create a unique
                                logo design?</span>

                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        A logo maker is software that offers a selection of pre-made logo design templates from a
                        database. Here’s how you can create a logo using one:

                        Choose a Template: Browse and select a design template from the gallery that best suits your
                        business or style.

                        Customize Your Design: Customize the font, colors, and add your company name or tagline. Many
                        logo makers also offer advanced tools to apply effects like gradients, shadows, and more.

                        Download Your Logo: After customizing, pay a nominal fee to download high-resolution files
                        instantly. Some platforms offer free downloads with credit attribution.

                    </div>
                </div>
            </div>

            <!-- Question 2 -->
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="false" aria-controls="collapseTwo">
                            <span class="faq-question">Can I use my logo for trademark and copyrights?</span>

                        </button>
                    </h5>
                </div>

                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        Ownership: Logos created using templates are owned by the RFS Logo Design. Exclusive rights can
                        be purchased separately.
                    </div>
                </div>
            </div>

            <!-- Question 3 -->
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                            aria-expanded="false" aria-controls="collapseThree">
                            <span class="faq-question">What are the distinctions between using a logo maker and opting
                                for custom logo design services?</span>
                        </button>
                    </h5>
                </div>

                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        Logo Maker: Uses pre-made templates for customization. You can adjust fonts, colors, and effects
                        without needing design skills. The design is not exclusive to you.
                        Custom Design: Involves working with a dedicated designer who creates a unique logo based on
                        your specific requirements. This design is exclusive to your brand.

                    </div>
                </div>
            </div>

            <!-- Question 4 -->
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour"
                            aria-expanded="false" aria-controls="collapseFour">
                            <span class="faq-question">Is it possible to personalize my logo design using your logo
                                maker tool?</span>
                        </button>
                    </h5>
                </div>

                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="card-body">
                        Absolutely! With our logo maker, you have the flexibility to customize fonts, colors, text, and
                        your company name. Additionally, you can enhance
                        your logo with advanced features like strokes, reflections, shadows, and more, all without
                        needing any design expertise. These tools empower you
                        to generate countless unique design variations from a single logo template.
                    </div>
                </div>
            </div>

            <!-- Question 5 -->
            <div class="card">
                <div class="card-header" id="headingFive">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive"
                            aria-expanded="false" aria-controls="collapseFive">
                            <span class="faq-question">Are the logo design files suitable for printing business
                                cards?</span>
                        </button>
                    </h5>
                </div>

                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                    <div class="card-body">
                        File Availability: Once customized, download high-resolution files suitable for printing
                        business cards, stationery, banners, and digital platforms.
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- -------------------End FAQs --------------- -->




    <!-- <-----------------End 1M Happy Customers Counting---------------->
    <script>
        function addText() {
            const businessName = document.getElementById('businessName').value;
            const textPlaceholders = document.querySelectorAll('.text-placeholder');
            const companyName =
                textPlaceholders.forEach(placeholder => {
                    placeholder.innerText = businessName;

                });
        }
    </script>


    {{-- <script>
        // document.querySelectorAll('.card-container-link').forEach(link => {
        //     link.addEventListener('click', function(e) {
        //         e.preventDefault();
        //         let image = this.getAttribute('data-image');
        //         let id = this.dataset.id
        //         let company = document.getElementById('businessName').value;
        //         let urlBase = "{{ url('/') }}";

        //         let url = urlBase +
        //             `/store-session-data-image?image=${encodeURIComponent(image)}&company=${encodeURIComponent(company)}&product-id=${encodeURIComponent(id)}`;

        //         window.location.href = url;
        //     });
        // });
    </script> --}}



    <!-- jQuery library -->
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> --}}

    <script>
        $(document).ready(function() {
            $('#companyForm').on('submit', function(event) {
                const companyName = $('#companyName11').val().trim();
                if (!companyName) {
                    event.preventDefault();
                    alert("Please enter your company name.");
                }
            })
            // @if (request()->query('login'))
            //     $('#login-modal').modal('show')
            // @endif
            // $('.login-link').click(function() {
            //     $('#login-modal').modal('show')
            // })
            // $('#companyForm').on('submit', function(event) {
            //     event.preventDefault();
            //     const companyName = $('#companyName').val().trim();
            //     if (companyName) {
            //         const nextUrl = `color?companyName=${encodeURIComponent(companyName)}`;
            //         window.location.href = nextUrl;
            //     } else {
            //         alert("Please enter your company name.");
            //     }
            // });


        });


    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Other scripts or libraries -->

@endsection
