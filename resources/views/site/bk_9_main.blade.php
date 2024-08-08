<!-- resources/views/site/main.blade.php -->
@extends('site.common')

@section('title', 'Welcome')

@section('content')

    <!----------------------------------------- Start Banner Section ------------------------------->

    <div class="container-fluid position-relative" style="background-color:#080a2d; padding-bottom: 100px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 banner-left order-lg-1">
                <h2 style="font-weight:700; color:#fff;">Free <span class="logo-design-color">Logo Maker</span> Tailored for Every Industry - Design Your Logo in Minutes</h2>
                    <p style="color:#fff;">Unleash your creativity and watch your logo come to life effortlessly. Get in touch with us now!</p>

                    <form id="companyForm" method="POST" action="{{ url('/store-session-data') }}">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="companyName11" name="company"
                                placeholder="Enter your company name" aria-label="Enter your company name">
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
    </section>

    <!-- <------------------End Make A logo---------------->






    <!-- ---------------------start porfolio -------------------->


    <div class="banner-section" style="background-color: #dbe1ff; padding-bottom: 100px;">
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
                            <a href="{{ route('logos', $category->slug) }}" class="card-container-link" data-image="{{ $product->image }}"
                                data-id="{{ $product->id }}" data-placeholder="{{ $product->placeholder_value }}">
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
                    <a href="#" style= "color:#646bd9;">Connect with an expert</a>
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
                    <a href="#" style= "color:#646bd9;">Connect with an expert</a>
                </div>
                <!-- Third Column -->
                <div class="col-md-4 image-column">
                    <img src="images/Imagebox3_font.png" alt="Logo fonts">
                    <h2>Logo fonts</h2>
                    <p style="text-align: justify;">Choosing the right font is crucial for your brand logo, as it reflects your brand’s personality and message. Here are some ideas for you.<br>
                    <b>Serif Fonts:</b> Exude tradition and reliability.<br>
                    <b>Sans-Serif Fonts:</b> Suggest modernity and simplicity.<br>
                    <b>Script Fonts:</b> Add a touch of elegance.<br>
                    <b>Display Fonts:</b> Command attention and stand out.
                    </p>
                    <a href="#" style= "color:#646bd9;">Connect with an expert</a>
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
                <button class="hire-call-now-btn">Call Now</button>
            </div>
            <!-- Right Column -->
            <div class="col-md-6 right-column">
                <img src="images/hire-section-logos.png" class="hire-section-logo" alt="Logo">
            </div>
        </div>
    </div>
</section>




    <!-- End Hire Section -->




    <!-- <-----------------Start 1M Happy Customers Counting---------------->


    <section class="testimonials-section">
        <div class="container">
            <h2><strong>1M Happy Customers Counting</strong></h2>
            <div class="row equal justify-content-center">
                <div class="col-md-4">
                    <div class="owl-item">
                        <div class="owl-item-div">
                            <div class="logoReveiwImage">
                                <div class="circle-white">
                                    <img width="113" height="122" class="lazy"
                                        data-src="/images/testimonials-logo-04.png"
                                        src="images/Logo Flora care Lawn Care Services llc-01-300x300 1.png"
                                        alt="">
                                </div>
                            </div>
                            <div class="logoReveiwText">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <p>Very helpful crew, I’m very picky with my designs and I was helped greatly with compliant
                                    people, I am very satisfied.</p>
                                <p><strong>Kyle Bacon.</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="owl-item">
                        <div class="owl-item-div">
                            <div class="logoReveiwImage">
                                <div class="circle-white">
                                    <img width="113" height="122" class="lazy"
                                        data-src="/images/testimonials-logo-05.png" src="images/Untitled design.png"
                                        alt="">
                                </div>
                            </div>
                            <div class="logoReveiwText">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <p>Brian Edwin provided me with excellent service. Anytime I asked him for any edits, he did
                                    it promptly. I was very happy with the logos and invoices he created for me. 5 Star
                                    Service. Thank you, Brian.</p>
                                <p><strong>Madelyn Weingarden.</strong></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="owl-item">
                        <div class="owl-item-div">
                            <div class="logoReveiwImage">
                                <div class="circle-white">
                                    <img width="113" height="122" class="lazy"
                                        data-src="/images/testimonials-logo-06.png" src="images/image 14.png"
                                        alt="">
                                </div>
                            </div>
                            <div class="logoReveiwText">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <p>LOVEEE MY LOGO! Done exactly how I visioned it! I’ll be back for my website!</p>
                                <p><strong>Archelle Jenkins.</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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

    <!-- Other scripts or libraries -->

@endsection
