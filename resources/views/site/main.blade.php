<!-- resources/views/site/main.blade.php -->
@extends('site.common')

@section('title', 'Welcome')

@section('content')


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"> --}}

    <style>
        .free-logo-heading {
    font-weight: 700;
    font-size: 32px;
    color: #fff;
}

        .owl-carousel .owl-item img {
            display: block;
            width: auto;
        }

form#companyForm {
    padding-top: 10px;
    height: 70px;
}

.sticky {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    width: 100%;
    z-index: 1000;
    background: white;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.sticky .input-group {
    max-width: 800px;
    margin: 0 auto;
}

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

@media (max-width: 768px) {
    .sticky .input-group {
        max-width: 400px;
        margin: 0 auto;
        margin-top: 5px;
    }
}


        @media only screen and (max-width: 767px) {
        .owl-carousel .owl-item img {

            display: block;
            width: auto;
        }
        }
    </style>

    <!----------------------------------------- Start Banner Section ------------------------------->

    <div class="container-fluid position-relative overflow-hidden" style="background-color:#080a2d; padding-bottom: 100px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 banner-left order-lg-1">
                <h1 class="free-logo-heading">Free <span class="logo-design-color">Logo Maker</span> Tailored for Every Industry - Design Your Logo in Minutes</h1>

                    <p style="color:#fff;">Unleash your creativity and watch your logo come to life effortlessly. Get in
                        touch with us now!</p>

                    <form id="companyForm" method="POST" action="{{ url('/store-session-data') }}">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="companyName11" name="company"
                                placeholder="Enter your company name" aria-label="Enter your company name">
                            <input type="hidden" name="flow" value="home">
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
        <h2 class="maim-heading-online">Steps to Craft Your Perfect Logo Design Online</h2>
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
                <a href="{{ url('/logo-maker') }}"><button class="custom-button-online">Explore Logo</button></a>
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
                <a href="{{ url('/logo-maker') }}"><button class="custom-button-online">Try Design Studio</button></a>
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
                        <a href="{{ url('/logo-maker') }}"><button class="custom-button-online">Get Started</button></a>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <img src="{{url('images/bradinggif.gif')}}" class="img-fluid">
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
        </section> -->

    <!-- <------------------End Make A logo---------------->



    <!-- ---------------------start porfolio -------------------->


    <div class="banner-section" style="background-color: #f2f6fe; padding-bottom: 100px;">
        <div class="container portfolio-section">
            <h2 class="portfolio-heading">We Have Logos For Everyone</h2>
            <p class="main-description-online">
    Explore our <a href="{{ url('logo-maker') }}" style="font-weight: bold; color: inherit;">logo builder’s</a> vast template collection, from medical
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






            <h2 class="studioTitle">Uncover Versatile Logo Designs With Our Powerful Design Engine!</h2>
        </div>
    </div>

    <!-----------------End  Portfolio ----------------------->
    <!------------------start No.1 Choice for Businesses ------------->


    <section class="why-logo-design-section">
        <div class="container">
            <!-- Heading -->
            <h2 class="why-logo-design-heading">Why RFS Is Your Go-To Logo Designer
            </h2>

            <!-- Description -->
            <p class="why-logo-design-description">Our team of concept-driven logo designers is passionate about crafting visually stunning and professional logos that truly elevate your brand and leave a lasting impression. Here is why RFS is the perfect choice for you:</p>

            <!-- Row with 3 Columns -->
            <div class="row">
                <!-- Column 1 -->
                <div class="col-md-4">
                    <div class="icon-box business-needs">
                        <img src="{{ url('images/success.gif') }}" alt="Business Needs Icon" class="icon-box-image">
                        <h3 class="icon-box-heading">Bringing Ideas To Life</h3>
                        <p class="icon-box-description">At RFS, we get your vision. We are all about teamwork to craft logo designs that truly capture your business’s identity and values. With decades of experience, we turn your ideas into powerful brand symbols. Whether you are launching or revamping, our logo design services are here to give your business a standout boost.
                        </p>
                    </div>
                </div>

                <!-- Column 2 -->
                <div class="col-md-4">
                    <div class="icon-box premium-quality">
                        <img src= "{{ url('images/best-quality.gif') }}" alt="Premium Quality Icon"
                            class="icon-box-image">
                        <h3 class="icon-box-heading">Conducting Insightful Research</h3>
                        <p class="icon-box-description">We mix your ideas with what your audience craves. Our custom logo design service fuses your brand vision with smart, research-driven elements to create a logo that catches your eyes and engages prospects. Get the best logo design company on your side to make your brand irresistible!
                        </p>
                    </div>
                </div>

                <!-- Column 3 -->
                <div class="col-md-4">
                    <div class="icon-box custom-designers">
                        <img src="{{ url('images/logo-design.gif') }}" alt="Custom Designers Icon"
                            class="icon-box-image">
                        <h3 class="icon-box-heading">Crafting Value</h3>
                        <p class="icon-box-description">We infuse real value into every logo. Our meticulous design process starts with diving deep into your brand’s needs, enabling our top-notch designers to craft a logo packed with persuasive elements and audience appeal. Get ready to see your brand soar to new heights.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Additional Row with 3 Columns -->
            <div class="row">
                <!-- Column 1 -->
                <div class="col-md-4">
                    <div class="icon-box dedicated-support">
                        <img src="{{ url('images/support.gif') }}" alt="Dedicated Support Icon" class="icon-box-image">
                        <h3 class="icon-box-heading">Unique Design Solutions</h3>
                        <p class="icon-box-description">Explore our diverse graphic design solutions! Our portfolio showcases top-tier work across various industries, from eye-catching logos to complete branding and promotion services. Whether you need standout designs for your mobile app, website, or social media, we have got you covered. </p>
                    </div>
                </div>

                <!-- Column 2 -->
                <div class="col-md-4">
                    <div class="icon-box digital-media-design">
                        <img src="{{ url('images/digital-art.gif') }}" alt="Digital Media Design Icon"
                            class="icon-box-image">
                        <h3 class="icon-box-heading">At Your Service 24/7</h3>
                        <p class="icon-box-description">Get the support you deserve with our dedicated, 24/7 expert team. We are here to tackle your queries and offer proactive advice. At RFS, exceptional customer service is our priority, ensuring your branding journey is as smooth and successful as possible.</p>
                    </div>
                </div>

                <!-- Column 3 -->
                <div class="col-md-4">
                    <div class="icon-box brand-kit">
                        <img src="{{ url('images/startup.gif') }}" alt="Brand Kit Icon" class="icon-box-image">
                        <h3 class="icon-box-heading">Impactful Branding For Growth</h3>
                        <p class="icon-box-description">We stick to the best practices in logo design and branding to take your brand to new heights. With our tried-and-true design process, deep expertise, and top-tier designers, we will set your enterprise on the path to exponential growth. Join us now for branding that makes an impact!</p>
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
                    <p style="font-size: 18px; font-weight: 400;">Still unsure? Dive deeper or consult with our expert designers for tailored guidance.</p>
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
                    <div class="heading">Plan Your Way to Success</div>
                </div>
            </div>
            <!-- Card Slider -->
            <div class="row card-price-container flex-column flex-md-row">
                <div class="card" onclick="expandCard(this)">
                <h3 class="bold-heading">Logo Maker for Startups</h3>
                <p>Create eye-catching designs for social media, banners, promotional materials, logos, and beyond - all yours to use at no cost, forever.</p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> 10000+ logos to choose</li>
                        <li><i class="bi bi-check-circle"></i> Endless customization options</li>
                        <li><i class="bi bi-check-circle"></i> High-res design files</li>
                        <b>(PDF, PNG, JPG)</b>
                        <li><i class="bi bi-check-circle"></i> Instant download</li>
                        <li><i class="bi bi-check-circle"></i> Ready brand identity designs</li>
                        <li><i class="bi bi-check-circle"></i> As low as $37</li>
                    </ul>
                    <a href="{{ url('/logo-maker') }}"><button class="plan-btn">For Startups</button></a>
                </div>
                <div class="card" onclick="expandCard(this)">
                <h3 class="bold-heading">Logo Maker for Small Businesses</h3>
                    <p>Get premium logo design to create eye-catching graphics for social media, banners, promotional materials, 
                    logos, and beyond - all yours to use it.</p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> Work directly with skilled designers</li>
                        <li><i class="bi bi-check-circle"></i> Fully bespoke solution</li>
                        <li><i class="bi bi-check-circle"></i> high-res design files</li>
                        <b>(Ai, PSD, EPS, PNG, JPG, PDF, SVG, TIFF)</b>
                        <li><i class="bi bi-check-circle"></i> Premium graphic design work</li>
                        <li><i class="bi bi-check-circle"></i> Dedicated account manager</li>
                        <li><i class="bi bi-check-circle"></i> As low as $199</li>
                    </ul>
                    <a href="{{ url('/logo-maker') }}"><button class="plan-btn">For Startups</button></a>
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
 <!-- {{----------------- End Testiomonial Section --}} -->


    {{-- Start 4 logo type --}}

    <div class="container my-5">
        <div class="row text-center logotypescard d-flex ">
            <div class="col-md-3">
                <a href="{{url('/logos/arts-logo-maker')}}">
                <div class="card logotype-card">
                    <img src="{{url('images/logo-category-Arts-logo.webp')}}" class="card-img-top" alt="Arts Logos">
                    <div class="card-body">
                        <p class="card-text">ARTS LOGO</p>
                    </div>
                </div>
            </a>
            </div>
            <div class="col-md-3">
                <a href="{{url('/logos/beauty-logo-maker')}}">
                <div class="card logotype-card">
                    <img src="{{url('images/logo-category-Beauty-logo.webp')}}" class="card-img-top" alt="Beauty Logos">
                    <div class="card-body">
                        <p class="card-text">BEAUTY LOGOS</p>
                    </div>
                </div>
            </a>
            </div>
            <div class="col-md-3">
                <a href="{{url('/logos/alphabets-logo-maker')}}">
                <div class="card logotype-card">
                    <img src="{{url('images/logo-category-Alphabet-logo.webp')}}" class="card-img-top" alt="Alphabets logos">
                    <div class="card-body">
                        <p class="card-text">ALPHABETS LOGOS</p>
                    </div>
                </div>
            </a>
            </div>
            <div class="col-md-3">
                <a href="{{url('/logos/cleaning-logo-maker')}}">
                <div class="card logotype-card">
                    <img src="{{url('images/logo-category-Cleaning-logo.webp')}}" class="card-img-top" alt="Cleanings Logos">
                    <div class="card-body">
                        <p class="card-text">ClEANING LOGOS</p>
                    </div>
                </div>
            </a>
            </div>
        </div>
    </div>

 {{-- End logo type  --}}



{{-- Start Category List Section --}}



{{-- <div class="container homepage-category-list">
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
</div> --}}



<div class="container homepage-category-list">
    <h2>Try Free Logo Maker for Every Business</h2>
    <p>Explore company logos made easy with our free logo maker tool for all types of professionals and industries.</p>
    <div class="category-buttons">
        @foreach ($categories as $category)
            @if ($category->products->isNotEmpty())
            <a href="{{ url('/logos/'. $category->slug)}}" class="logo-ideas-link">

            <button >{{ $category->name }} Logos</button></a>
            @endif
        @endforeach
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
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
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
            window.onscroll = function() {makeSticky()};

var form = document.getElementById("companyForm");
var sticky = form.offsetTop;

function makeSticky() {
  if (window.pageYOffset > sticky) {
    form.classList.add("sticky");
  } else {
    form.classList.remove("sticky");
  }
}

        </script>
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
