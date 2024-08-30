@extends('site.common')

@section('title', 'Website Design Development')

@section('content')

    <style>
        .banner-section h1 {
            font-size: 50px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .gradient-heading {
            background: linear-gradient(90deg, #501e9c 0%, #8169f1 40%, #a44cee 75%, #ff847f 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .custom-website h1 {
            font-size: 45px;
            font-weight: 700;
            line-height: 45px;
            text-transform: uppercase;
        }

        .custom-website p {
            text-align: justify;
        }

        .custom-website a {
            background-color: #501e9c;
            border: none;
        }

        .custom-website a:hover,
        .custom-website a:focus,
        .custom-website a:focus-visible,
        .custom-website a:active {
            background-color: #a44cee !important;
            border: none !important;
            box-shadow: none;
        }

        .wordpress-website h1 {
            font-size: 45px;
            font-weight: 700;
            line-height: 45px;
            text-transform: uppercase;
        }

        .wordpress-website p {
            text-align: justify;
        }

        .wordpress-website a {
            background-color: #501e9c;
            border: none;
        }

        .wordpress-website a:hover,
        .wordpress-website a:focus,
        .wordpress-website a:focus-visible,
        .wordpress-website a:active {
            background-color: #a44cee !important;
            border: none !important;
            box-shadow: none;
        }

        .shopify-website h1 {
            font-size: 45px;
            font-weight: 700;
            line-height: 45px;
            text-transform: uppercase;
        }

        .shopify-website p {
            text-align: justify;
        }

        .shopify-website a {
            background-color: #501e9c;
            border: none;
        }

        .shopify-website a:hover,
        .shopify-website a:focus,
        .shopify-website a:focus-visible,
        .shopify-website a:active {
            background-color: #a44cee !important;
            border: none !important;
            box-shadow: none;
        }

        .ecommerce-website h1 {
            font-size: 45px;
            font-weight: 700;
            line-height: 45px;
            text-transform: uppercase;
        }

        .ecommerce-website p {
            text-align: justify;
        }

        .ecommerce-website a {
            background-color: #501e9c;
            border: none;
        }

        .ecommerce-website a:hover,
        .ecommerce-website a:focus,
        .ecommerce-website a:focus-visible,
        .ecommerce-website a:active {
            background-color: #a44cee !important;
            border: none !important;
            box-shadow: none;
        }

        .graphics-designing h1 {
            font-size: 45px;
            font-weight: 700;
            line-height: 45px;
            text-transform: uppercase;
        }

        .graphics-designing p {
            text-align: justify;
        }

        .graphics-designing a {
            background-color: #501e9c;
            border: none;
        }

        .graphics-designing a:hover,
        .graphics-designing a:focus,
        .graphics-designing a:focus-visible,
        .graphics-designing a:active {
            background-color: #a44cee !important;
            border: none !important;
            box-shadow: none;
        }

    </style>

    <div class="banner-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-white">
                    <h1>Creating tomorrow while building today</h1>
                    <p>
                        Unlock the potential of tomorrow with RFS Logo Design - where every pixel counts in shaping a
                        creative and dynamic digital experience. From website development to logo design, our imagination
                        knows no bounds.
                    </p>
                    <a href="{{ url('contact-us') }}" class="california-button-online">Get Started</a>
                </div>
                <div class="col-lg-6 image-section text-center">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src= "{{ url('images/Letterhead.webp') }}" alt="Logo Design 1">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ url('images/Visiting-Card.webp') }}" alt="Logo Design 2">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
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

    <section class="custom-website container py-5 my-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="mb-3"><span class="gradient-heading">Custom Website</span> Design & Development</h1>
                <p>
                    Designing a one-of-a-kind website requires a thoughtful and deliberate approach to creating a tailored
                    online identity that aligns with your objectives. It begins by clearly defining the purpose, target
                    audience, and specific goals of your website. Next, carefully choose a suitable platform or Content
                    Management System (CMS) to build on. Map out the content structure of your website using a sitemap, and
                    develop a solid content strategy for optimal execution.
                </p>
                <a class="btn btn-primary rounded-5" href="{{ url('custom-website-design-development') }}">
                    Learn more
                </a>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('images/Custom-Website-Development-scaled.webp') }}" alt="Custom Website Development"
                    class="img-fluid">
            </div>
        </div>
    </section>

    <section class="wordpress-website container py-5 my-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="{{ asset('images/Shopify-Development.webp') }}" alt="Wordpress Website Development"
                    class="img-fluid">
            </div>
            <div class="col-lg-6">
                <h1 class="mb-3"><span class="gradient-heading">WordPress Website</span> Design & Development</h1>
                <p>
                    Embark on the straightforward journey of building a WordPress website that seamlessly integrates with the dynamic WordPress ecosystem. Begin by selecting a theme that perfectly aligns with your site's goals and aesthetics. Personalize your chosen theme with ease using the user-friendly WordPress Customizer, making effortless visual adjustments to colors, fonts, and layout that reflect your unique brand.
                </p>
                <a class="btn btn-primary rounded-5" href="{{ url('wordpress-website-development') }}">
                    Learn more
                </a>
            </div>

        </div>
    </section>

    <section class="shopify-website container py-5 my-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="mb-3"><span class="gradient-heading">Shopifiy Website</span> Developments</h1>
                <p>
                    Building a website on Shopify is just like opening up a charming boutique in a cozy, welcoming community. Start by claiming your very own personal corner in the virtual world by signing up for a Shopify account and browsing through the Shopify Theme Store to find the perfect design. Then, put the finishing touches on your space by customizing colors, fonts, and layout. Fill up your shelves with an array of products, thoughtfully arranged into categories for a delightful and inviting shopping experience.
                </p>
                <a class="btn btn-primary rounded-5" href="{{ url('shopify-website-development') }}">
                    Learn more
                </a>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('images/Ecommerce-Development.webp') }}" alt="Custom Website Development"
                    class="img-fluid">
            </div>
        </div>
    </section>

    <section class="ecommerce-website container py-5 my-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="{{ asset('images/Shopifyweb.webp') }}" alt="Wordpress Website Development"
                    class="img-fluid">
            </div>
            <div class="col-lg-6">
                <h1 class="mb-3"><span class="gradient-heading">E-commerce Website</span> Development</h1>
                <p>
                    Revamp your digital presence with our top-notch e-commerce website development services. Our team specializes in creating attractive and streamlined shopping journeys that are specifically designed for your brand. With our attention to detail, your website will feature eye-catching product displays and effortless checkouts, effectively boosting conversions.
                </p>
                <a class="btn btn-primary rounded-5" href="{{ url('e-commerce-website-development') }}">
                    Learn more
                </a>
            </div>

        </div>
    </section>

    <section class="graphics-designing container py-5 my-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="mb-3"><span class="gradient-heading">Graphics</span> designing</h1>
                <p>
                    Graphic design is an electrifying field that involves organizing visual elements to effectively communicate messages. With a seamless blend of inventiveness and technical skill, designers mold brand identities by using captivating logos, dynamic color palettes, and captivating aesthetics. Whether working in print or online, they craft powerful materials, including eye-catching brochures, striking posters, sleek web designs, and captivating social media graphics.
                </p>
                <a class="btn btn-primary rounded-5" href="{{ url('graphic-designing') }}">
                    Learn more
                </a>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('images/graphic_designing.webp') }}" alt="Graphics Designing"
                    class="img-fluid">
            </div>
        </div>
    </section>
@endsection
