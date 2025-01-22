@extends('site.common')

@section('title', 'Website Design and Development Services - RFS Logo Design')
@section('meta_desc', 'Discover expert website design and development services at RFS Logo Design. From captivating designs to seamless functionality, we bring your online vision to life.')
@section('content')

    <style>
       


        .custom-website h2,
        .wordpress-website h2,
        .shopify-website h2,
        .ecommerce-website h2,
        .graphics-designing h2 {
            font-weight:800;
            font-size: 34px;
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

        .education-logo-section {
       background-image: url('/images/webdesign.png');
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
        <h1>Best Website Design & <br>Development Company</h1>
        <p>Unlock the potential of tomorrow with RFS Logo Design - where every pixel<br>  
        counts in shaping a creative and dynamic digital experience. From website<br>
        development to logo design, our imagination knows no bounds.</p>
    </div>
</section>



   

   

    <section class="custom-website container my-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="gradient-heading">Custom Website<br> Design & Development</h2>
                <p>
                    Designing a one-of-a-kind website requires a thoughtful and deliberate approach to creating a tailored
                    online identity that aligns with your objectives. It begins by clearly defining the purpose, target
                    audience, and specific goals of your website. Next, carefully choose a suitable platform or Content
                    Management System (CMS) to build on. Map out the content structure of your website using a sitemap, and
                    develop a solid content strategy for optimal execution.
                </p>
                <a class="custom-button-online" href="{{ url('custom-website-design-development') }}">
                    Learn more
                </a>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('images/Custom-Website-Development-scaled.webp') }}" alt="Custom Website Development"
                    class="img-fluid">
            </div>
        </div>
    </section>

    <section class="wordpress-website container my-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="{{ asset('images/Shopify-Development.webp') }}" alt="Wordpress Website Development"
                    class="img-fluid">
            </div>
            <div class="col-lg-6">
            <h2 class="gradient-heading">WordPress Website<br> Design & Development</h2>
                <p>
                    Embark on the straightforward journey of building a WordPress website that seamlessly integrates with the dynamic WordPress ecosystem. Begin by selecting a theme that perfectly aligns with your site's goals and aesthetics. Personalize your chosen theme with ease using the user-friendly WordPress Customizer, making effortless visual adjustments to colors, fonts, and layout that reflect your unique brand.
                </p>
                <a class="custom-button-online" href="{{ url('wordpress-website-development') }}">
                    Learn more
                </a>
            </div>

        </div>
    </section>

    <section class="shopify-website container my-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
            <h2 class="gradient-heading">Shopifiy Website<br> Developments</h2>
                <p>
                    Building a website on Shopify is just like opening up a charming boutique in a cozy, welcoming community. Start by claiming your very own personal corner in the virtual world by signing up for a Shopify account and browsing through the Shopify Theme Store to find the perfect design. Then, put the finishing touches on your space by customizing colors, fonts, and layout. Fill up your shelves with an array of products, thoughtfully arranged into categories for a delightful and inviting shopping experience.
                </p>
                <a class="custom-button-online" href="{{ url('shopify-website-development') }}">
                    Learn more
                </a>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('images/shoppify.png') }}" alt="Custom Website Development"
                    class="img-fluid">
            </div>
        </div>
    </section>

    <section class="ecommerce-website container my-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="{{ asset('images/Shopifyweb.webp') }}" alt="Wordpress Website Development"
                    class="img-fluid">
            </div>
            <div class="col-lg-6">
            <h2 class="gradient-heading">E-commerce Website<br> Development</h2>
                <p>
                    Revamp your digital presence with our top-notch e-commerce website development services. Our team specializes in creating attractive and streamlined shopping journeys that are specifically designed for your brand. With our attention to detail, your website will feature eye-catching product displays and effortless checkouts, effectively boosting conversions.
                </p>
                <a class="custom-button-online" href="{{ url('e-commerce-website-development') }}">
                    Learn more
                </a>
            </div>

        </div>
    </section>

    <section class="graphics-designing container my-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
            <h2 class="gradient-heading">Graphics<br> Designing</h2>
                <p>
                    Graphic design is an electrifying field that involves organizing visual elements to effectively communicate messages. With a seamless blend of inventiveness and technical skill, designers mold brand identities by using captivating logos, dynamic color palettes, and captivating aesthetics. Whether working in print or online, they craft powerful materials, including eye-catching brochures, striking posters, sleek web designs, and captivating social media graphics.
                </p>
                <a class="custom-button-online" href="{{ url('graphic-designing') }}">
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
