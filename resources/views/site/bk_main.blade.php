<!-- resources/views/site/main.blade.php -->
@extends('site.common')

@section('title', 'Welcome')

@section('content')


    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"> --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

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
            padding-top: 50px;
            padding-bottom: 50px;
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
            background-color: #f0f8ff;
            /* Light background color for the cards */
            transition: box-shadow 0.3s ease;
            border-radius: 15px;
            /* Rounded corners */
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
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
            /* Box shadow on hover */
        }


        /* New Banner Section CSS */
        .new-banner {
            background-color: #6868D1;
            /* Background color as per image */
            color: white;
            padding: 40px 0;
            font-family: 'Arial', sans-serif;
        }

        .new-banner h1 {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: start;
        }

        .new-banner p {
            font-size: 1.25rem;
            /* Font size for paragraph */
            margin-bottom: 30px;
        }

        .new-banner .logo-images {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
        }

        .new-banner .logo-images img {
            max-width: 250px;
            /* Set image width */
            margin-left: 20px;
            /* Space between text and image */
        }

        .new-banner .trust-images {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        /* .new-banner .trust-images img {
                                                    max-width: 150px;
                                                    margin: 10px;
                                                } */

        .new-banner .divider {
            height: 1px;
            background-color: white;
            margin: 40px 0;
            opacity: 0.2;
        }

        .new-banner .form-inline {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            /* Adds space between input and button */
        }

        .new-banner .form-control {
            border-radius: 30px;
            padding: 10px 20px;
            max-width: 500px;
            width: 100%;
        }

        .new-banner .btn-dark {
            border-radius: 30px;
            padding: 10px 20px;
        }

        .float-right {
            float: right;
            margin-left: 20px;
        }

        .float-left {
            float: left;
            margin-right: 20px;
        }

        .ptb-100 {
            padding-top: 100px;
            padding-bottom: 100px;
        }

        .education {
            --bg-color: #ffd861;
            --bg-color-light: #ffeeba;
            --text-color-hover: #4C5656;
            --box-shadow-color: rgba(255, 215, 97, 0.48);
        }

        .overlay {
            width: 70px;
            position: absolute;
            height: 70px;
            border-radius: 50%;
            background: linear-gradient(180deg, #1C8A82 0%, #0C6C6C 100%);
            top: 7px;
            left: 21px;
            z-index: 0;
            transition: transform 0.3s ease-out;
        }

        .overlay1 {
            width: 70px;
            position: absolute;
            height: 70px;
            border-radius: 50%;
            background: #F7B318;
            top: 7px;
            left: 21px;
            z-index: 0;
            transition: transform 0.3s ease-out;
        }

        .overlay2 {
            width: 70px;
            position: absolute;
            height: 70px;
            border-radius: 50%;
            background: #C32626;
            top: 7px;
            left: 21px;
            z-index: 0;
            transition: transform 0.3s ease-out;
        }

        .overlay4 {
            width: 70px;
            position: absolute;
            height: 70px;
            border-radius: 50%;
            background: #09525A;
            top: 7px;
            left: 21px;
            z-index: 0;
            transition: transform 0.3s ease-out;
        }


        .education {
            background: #152441;
            border-radius: 9.95392px;
        }

        .col-md-8 span.headi {
            position: relative;
            top: 41px;
        }

        span.headi {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 700;
            font-size: 17.9171px;
            line-height: 22px;
            color: #ffffff;
        }


        .card11 p {
            font-size: 14px;
            color: #fff;
            margin-top: 50px;
            z-index: 1000;
            transition: color 0.3s ease-out;
            font-family: 'Montserrat';
        }

        p.dettial {
            position: absolute;
            left: 25px;
            top: 17px;
        }

        .opeer {
            width: 37px;
            height: 32px;
            position: absolute;
            z-index: 9;
            display: block;
            top: 23px;
            left: 37px;
        }

        span.headi {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 700;
            font-size: 17.9171px;
            line-height: 22px;
            color: #ffffff;
        }



        .card11:hover {
            transform: translateY(-5px) scale(1.005) translateZ(0);
            box-shadow: 0 24px 36px rgba(0, 0, 0, 0.11),
                0 24px 46px var(--box-shadow-color);
        }

        .card11:hover .overlay {
            transform: scale(4) translateZ(0);
        }

        .card11:hover .overlay1 {
            transform: scale(4) translateZ(0);
        }

        .card11:hover .overlay2 {
            transform: scale(4) translateZ(0);
        }

        .card11:hover .overlay4 {
            transform: scale(4) translateZ(0);
        }

        .card11:hover .circle {
            border-color: var(--bg-color-light);
            background: var(--bg-color);
        }

        .card:hover .circle:after {
            background: var(--bg-color-light);
        }

        .card11:hover p {
            color: var(--text-color-hover);
        }

        .card11:active {
            transform: scale(1) translateZ(0);
            box-shadow: 0 15px 24px rgba(0, 0, 0, 0.11),
                0 15px 24px var(--box-shadow-color);
        }


        .gt {
            font-family: 'Montserrat';
        }

        .circle {
            width: 131px;
            height: 131px;
            border-radius: 50%;
            background: #fff;
            border: 2px solid var(--bg-color);
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            z-index: 1;
            transition: all 0.3s ease-out;
        }

        .circle:after {
            content: "";
            width: 118px;
            height: 118px;
            display: block;
            position: absolute;
            background: var(--bg-color);
            border-radius: 50%;
            top: 7px;
            left: 7px;
            transition: opacity 0.3s ease-out;
        }

        .circle svg {
            z-index: 10000;
            transform: translateZ(0);
        }

        .overlay {
            width: 70px;
            position: absolute;
            height: 70px;
            border-radius: 50%;
            /* background: linear-gradient(180deg, #1C8A82 0%, #0C6C6C 100%); */
            background: linear-gradient(180deg, #fff 0%, #fff 100%);
            top: 7px;
            left: 21px;
            z-index: 0;
            transition: transform 0.3s ease-out;
        }

        .education:hover .overlay {
            color: #000;
            width: 181px;
            position: absolute;
            height: 181px;
            border-radius: 50%;
            background: #f20000;
            top: 14px;
            left: 8px;
            z-index: 0;
            transition: transform 0.8s ease-out;
            /* background: #FFFFFF; */
            /* border-radius: 9.95392px; */
            background: linear-gradient(180deg, #fff 0%, #fff 100%);
        }

        .education:hover .overlay1 {
            width: 181px;
            position: absolute;
            height: 181px;
            border-radius: 50%;
            background: #f20000;
            top: 14px;
            left: 8px;
            z-index: 0;
            transition: transform 0.8s ease-out;
            /* background: #FFFFFF; */
            /* border-radius: 9.95392px; */
            background: #F7B318;
        }

        .education:hover .overlay2 {
            width: 181px;
            position: absolute;
            height: 181px;
            border-radius: 50%;
            background: #f20000;
            top: 14px;
            left: 8px;
            z-index: 0;
            transition: transform 0.8s ease-out;
            /* background: #FFFFFF; */
            /* border-radius: 9.95392px; */
            background: #C32626;
        }

        .education:hover .overlay4 {
            width: 181px;
            position: absolute;
            height: 181px;
            border-radius: 50%;
            background: #09525A;
            top: 14px;
            left: 8px;
            z-index: 0;
            transition: transform 0.8s ease-out;
            /* background: #FFFFFF; */
            /* border-radius: 9.95392px; */
            background: #09525A;
        }

        .education:hover p.dettial {
            color: #000000;
        }

        .education:hover span.headi {
            color: #000000;
        }

        .opeer {
            width: 37px;
            height: 32px;
            position: absolute;
            z-index: 9;
            display: block;
            top: 23px;
            left: 37px;
        }

        .slider {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            margin-right: auto;
            margin-left: auto;
            padding-right: 0;
            padding-bottom: 0;
            padding-left: 0;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: stretch;
            -webkit-align-items: stretch;
            -ms-flex-align: stretch;
            align-items: stretch;
            background-color: transparent;
            text-align: left;
        }

        .why-rfs {

            color: #fff;
        }

        a.card11 {
            text-decoration: none;
        }



        .new-card-design-section {
            background-color: #f4f4f4;
            padding: 20px;
        }

        .new-card-design-title {
            text-align: center;
            margin-bottom: 30px;
            font-size: 24px;
            font-weight: bold;
        }

        .new-card-design-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .new-card-design-row {
            display: flex;
            flex-wrap: wrap;
            margin: -10px;
        }

        .new-card-design-col {
            padding: 10px;
            flex: 1 1 33.33%;
            box-sizing: border-box;
        }

        .new-card-design-card {
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: relative;
            text-align: center;
            padding: 20px;
            transition: transform 0.3s;
        }

        .new-card-design-card img {
            max-width: 100%;
            height: auto;
            margin: 0 auto;
            display: block;
        }

        .new-card-design-card h2 {
            font-size: 20px;
            margin: 15px 0;
            color: #333;
        }

        .new-card-design-card i {
            font-size: 24px;
            color: #ffffff;
            margin-bottom: 15px;
            background: #6868D1;
            padding: 5px;
            border-radius: 10px;
        }

        .new-card-design-card:hover {
            transform: translateY(-5px);
        }

        .new-card-design-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .new-card-design-card:hover .new-card-design-overlay {
            opacity: 1;
        }

        .new-card-design-overlay-text {
            padding: 10px;
            text-align: center;
        }

        @media (max-width: 480px) {
            .new-card-design-col {
                flex: 1 1 100%;
            }
        }



        @media only screen and (max-width: 500px) {
            a.card11 {
                height: 395px;
            }

            .card11.education .col-md-4 {
                max-width: 30% !important;
            }

            a.card11.education .col-md-8 {
                max-width: 70% !important;
                flex: 70% !important;
            }
        }



        @media only screen and (max-width: 722px) {
            .card11.education .col-md-4 {
                max-width: 22%;
            }

            .card11.education .col-md-8 {
                max-width: 78% !important;
                flex: 78% !important;
            }
        }


        @media only screen and (max-width: 767px) {
            .owl-carousel .owl-item img {

                display: block;
                width: auto;
            }
        }

        @media (max-width: 768px) {
            .new-card-design-col {
                flex: 1 1 100%;
            }
        }

        @media (max-width: 768px) {
            .new-banner h1 {
                font-size: 2rem;
                text-align: center;
            }

            .new-banner .logo-images img,
            .new-banner .trust-images img {
                max-width: 350px;
            }

            .float-right,
            .float-left {
                float: none;
                display: inline;
                margin: 0 auto 20px auto;
            }
        }

        @media (max-width: 768px) {
            .sticky .input-group {
                max-width: 400px;
                margin: 0 auto;
                margin-top: 5px;
            }
        }




        @media only screen and (max-width:801px) {

            p.dettial {
                position: absolute;
                left: 25px;
                top: 37px;
            }

            .education:hover .overlay {
                width: 381px;
            }

            .education:hover .overlay1 {
                width: 381px;
            }

            .edyy {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .trrw {
                max-width: 100%;
                flex: 0 0 100%;
            }

            .lightt {
                background: url(images/secc-light.png) #2D3446 no-repeat;
                height: 100%;
            }

            .card11 {
                width: 100%;
                height: 380px;
                margin-bottom: 20px;
                background: #fff;
                border-top-right-radius: 9.95392px;
                overflow: hidden;
                display: flex;
            }
        }


        @media only screen and (max-width: 802px) {
            a.card11 {
                height: 269px;
            }

            div.col-md-3.edyy {
                flex: 0 0 100% !important;
                max-width: 100% !important;
            }

            .card11.education .col-md-4 {
                max-width: 16%;
            }

            .card11.education .col-md-8 {
                max-width: 84% !important;
                flex: 84% !important;
            }

            div.col-md-8 span.headi {
                left: 0 !important;
            }
        }

        @media only screen and (max-width: 890px) {
            a.card11 {
                height: 380px;
            }
        }

        @media only screen and (max-width: 821px) {
            div.col-md-8 span.headi {
                left: 21px;
            }
        }


        @media only screen and (max-width: 992px) {
            .card11 {
                height: 262px;
                margin-bottom: 20px;
            }
        }


        @media only screen and (max-width:1536px) {
            .card11 {
                height: 410px;
                background: #152441;
                border-top-right-radius: 9.95392px;
                overflow: hidden;
                display: flex;
                flex-direction: column;
                justify-content: flex-start;
                align-items: flex-start;
                position: relative;
                box-shadow: none;
                transition: all 0.3s ease-out;
                text-decoration: none;
                border: 0px;
            }
        }

        @media only screen and (max-width: 1920px) {
            .card11 {
                color: #fff;
                padding-left: 10px;
                padding-right: 10px;
                width: 100%;
                height: 380px;
                background: #152441;
                border-top-right-radius: 9.95392px;
                overflow: hidden;
                display: flex;
                flex-direction: column;
                justify-content: flex-start;
                align-items: flex-start;
                position: relative;
                box-shadow: none;
                transition: all 0.3s ease-out;
                text-decoration: none;
                border: 0px;
            }
        }

        .logos-carousel-section {
            background-color: #6868D1;
        }

        .logos-carousel-section h1 {
            font-weight: 700;
        }

        .logos-carousel-section img {
            background-color: white;
            border-radius: 10px;
            width: 360px;
            height: 310px;
        }

        .swiper-button-next,
        .swiper-button-prev {
            background-color: white;
            padding: 8px 16px;
            border-radius: 100%;
            border: 2px solid white;
            color: white;
            width: 50px;
            height: 50px;
            background-color: #6868D1;
        }

        .swiper-button-next:after,
        .swiper-button-prev:after {
            font-size: 25px;
        }
    </style>

    <!----------------------------------------- Start Banner Section ------------------------------->

    {{-- <div class="container-fluid position-relative overflow-hidden" style="background-color:#080a2d; padding-bottom: 100px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 banner-left order-lg-1">
                    <h1 class="free-logo-heading">Free <span class="logo-design-color">Logo Maker</span> Tailored for Every
                        Industry - Design Your Logo in Minutes</h1>

                    <p style="color:#fff;">Unleash your creativity and watch your logo come to life effortlessly. Get in
                        touch with us now!</p>

                    <form id="companyForm" method="POST" action="{{ url('/store-session-data') }}">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="companyName11" name="company"
                                placeholder="Enter your company name" aria-label="Enter your company name" maxlength="30">
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
    </div> --}}



    <section class="new-banner ptb-100">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <div class="mb-4">
                            <h1>Free Logo Maker
                                <img src="images/Property 1=Default.png" alt="Logo 1" class="float-right"> <br>
                                Tailored for Every Industry
                            </h1>
                        </div>

                        <div class="mb-4">
                            <img src="images/Property 1=Default (1).png" alt="Logo 1" class="float-left">
                            <h1>Design Your Logo <br>in Minutes</h1>
                        </div>

                        <p>Unleash your creativity and watch your logo come to life effortlessly. Get in touch with us now!
                        </p>
                        <div class="trust-images">
                            <img src="images/Group 124.png" alt="Trust 1">
                        </div>
                        <div class="divider"></div>
                        <form id="companyForm" method="POST" action="{{ url('/store-session-data') }}">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="companyName11" name="company"
                                    placeholder="Enter your company name" aria-label="Enter your company name"
                                    maxlength="30">
                                <input type="hidden" name="flow" value="home">
                                <input type="submit" class="custom-button-banner" value="Get Started">
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </section>
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
                <div class="text-center">
                    <a href="{{ url('/logo-maker') }}"><button class="custom-button-online">Explore Logo</button></a>
                </div>
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
                <div class="text-center">
                    <a href="{{ url('/logo-maker') }}"><button class="custom-button-online">Try Design Studio</button></a>
                </div>
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
                        <div class="text-center">
                            <a href="{{ url('/logo-maker') }}"><button class="custom-button-online">Get Started</button></a>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <img src="{{ url('images/bradinggif.gif') }}" class="img-fluid">
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
                Explore our <a href="{{ url('logo-maker') }}" style="font-weight: bold; color: inherit;">logo builder</a>'s
                vast template collection, from medical
                to fashion, sports to food. RFS Logo Design helps you find the perfect
                logo to match your business identity and branding needs.
            </p>



            <div class="row">
                @foreach ($categories as $category)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <a href="{{ route('logos', $category->slug) }}" class="card-container-link">
                            <div class="card-container2">
                                <div class="card-inner">
                                    <div class="card-front">
                                        {{-- <img src="{{ $category->image ? asset($category->image) : logo_asset_helper($category->latest_product->image) }}"
                                            class="img-fluid" alt="{{ $category->name }}"> --}}
                                        <img src="{{ $category->image ? asset($category->image) : asset('category-image/' . $category->latest_product->image) }}"
                                            class="img-fluid" alt="{{ $category->name }}">
                                        {{-- <img src="{{ asset($category->image ?: "category-image/{$category->latest_product->image}") }}" logo_asset_helper
                                            class="img-fluid" alt="{{ $category->name }}"> --}}
                                    </div>
                                    <div class="card-back">
                                        <div class="category-name">{{ $category->name }}</div>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>
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

    <div style="padding-top: 70px; padding-bottom: 100px; background-color:#6868D1">


        <div class="container">
            <div class="why-rfs">
                <h2 class="portfolio-heading"> Why RFS Is Your Go-To Logo Designer</h2>
                <p class="main-description-online">
                    Our team of concept-driven logo designers is passionate about crafting visually stunning and
                    professional logos that truly elevate your brand and leave a lasting impression. Here is why RFS is the
                    perfect choice for you:
                </p>
            </div>
            <div class="row">

                <div class="col-md-4 edyy">
                    <a class="card11 education">
                        <div class="row" style="WIDTH: 100%;">
                            <div class="col-md-4">
                                <div class="overlay"></div>
                                <div class="imgicon">
                                    <img src="{{ url('images/image 52.png') }}" class="opeer">
                                </div>
                            </div>


                            <div class="col-md-8">
                                <span class="headi">Bringing
                                    Ideas To Life</span>

                            </div>
                            <div class="col-md-12">
                                <p class="dettial">At RFS, we get your vision. We are all about teamwork to craft logo
                                    designs that truly capture your business’s identity and values. With decades of
                                    experience, we turn your ideas into powerful brand symbols. Whether you are launching or
                                    revamping, our logo design services are here to give your business a standout boost.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 edyy">
                    <a class="card11 education">
                        <div class="row" style="WIDTH: 100%;">
                            <div class="col-md-4">
                                <div class="overlay"></div>
                                <div class="imgicon">
                                    <img src="{{ url('images/image 53.png') }}" class="opeer">
                                </div>
                            </div>


                            <div class="col-md-8">
                                <span class="headi">Conducting
                                    Insightful Research</span>

                            </div>
                            <div class="col-md-12">
                                <p class="dettial">We mix your ideas with what your audience craves. Our custom logo design
                                    service fuses your brand vision with smart, research-driven elements to create a logo
                                    that catches your eyes and engages prospects. Get the best logo design company on your
                                    side to make your brand irresistible!</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 edyy">
                    <a class="card11 education">
                        <div class="row" style="WIDTH: 100%;">
                            <div class="col-md-4">
                                <div class="overlay"></div>
                                <div class="imgicon">
                                    <img src="{{ url('images/image 54.png') }}" class="opeer">
                                </div>
                            </div>


                            <div class="col-md-8">
                                <span class="headi">Crafting
                                    Value</span>

                            </div>
                            <div class="col-md-12">
                                <p class="dettial">We infuse real value into every logo. Our meticulous design process
                                    starts with diving deep into your brand’s needs, enabling our top-notch designers to
                                    craft a logo packed with persuasive elements and audience appeal. Get ready to see your
                                    brand soar to new heights.</p>
                            </div>
                        </div>
                    </a>
                </div>



            </div>

        </div>

        <div class="container" style="padding-top: 50px">
            <div class="row">

                <div class="col-md-4 edyy">
                    <a class="card11 education">
                        <div class="row" style="WIDTH: 100%;">
                            <div class="col-md-4">
                                <div class="overlay"></div>
                                <div class="imgicon">
                                    <img src="{{ url('images/image 55.png') }}" class="opeer">
                                </div>
                            </div>


                            <div class="col-md-8">
                                <span class="headi">Unique Design
                                    Solutions</span>

                            </div>
                            <div class="col-md-12">
                                <p class="dettial">Explore our diverse graphic design solutions! Our portfolio showcases
                                    top-tier work across various industries, from eye-catching logos to complete branding
                                    and promotion services. Whether you need standout designs for your mobile app, website,
                                    or social media, we have got you covered.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 edyy">
                    <a class="card11 education">
                        <div class="row" style="WIDTH: 100%;">
                            <div class="col-md-4">
                                <div class="overlay"></div>
                                <div class="imgicon">
                                    <img src="{{ url('images/image 56.png') }}" class="opeer">
                                </div>
                            </div>


                            <div class="col-md-8">
                                <span class="headi">At Your
                                    Service 24/7</span>

                            </div>
                            <div class="col-md-12">
                                <p class="dettial">Get the support you deserve with our dedicated, 24/7 expert team. We are
                                    here to tackle your queries and offer proactive advice. At RFS, exceptional customer
                                    service is our priority, ensuring your branding journey is as smooth and successful as
                                    possible.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 edyy">
                    <a class="card11 education">
                        <div class="row" style="WIDTH: 100%;">
                            <div class="col-md-4">
                                <div class="overlay"></div>
                                <div class="imgicon">
                                    <img src="{{ url('images/image 57.png') }}" class="opeer">
                                </div>
                            </div>


                            <div class="col-md-8">
                                <span class="headi">Impactful Branding
                                    For Growth</span>

                            </div>
                            <div class="col-md-12">
                                <p class="dettial">We stick to the best practices in logo design and branding to take your
                                    brand to new heights. With our tried-and-true design process, deep expertise, and
                                    top-tier designers, we will set your enterprise on the path to exponential growth. Join
                                    us now for branding that makes an impact!</p>
                            </div>
                        </div>
                    </a>
                </div>



            </div>

        </div>


    </div>
    <!------------------start No.1 Choice for Businesses ------------->


    {{-- <section class="why-logo-design-section">
        <div class="container">

            <h2 class="why-logo-design-heading">Why RFS Is Your Go-To Logo Designer
            </h2>


            <p class="why-logo-design-description">Our team of concept-driven logo designers is passionate about crafting
                visually stunning and professional logos that truly elevate your brand and leave a lasting impression. Here
                is why RFS is the perfect choice for you:</p>


            <div class="row">

                <div class="col-md-4">
                    <div class="icon-box business-needs">
                        <img src="{{ url('images/success.gif') }}" alt="Business Needs Icon" class="icon-box-image">
                        <h3 class="icon-box-heading">Bringing Ideas To Life</h3>
                        <p class="icon-box-description">At RFS, we get your vision. We are all about teamwork to craft logo
                            designs that truly capture your business’s identity and values. With decades of experience, we
                            turn your ideas into powerful brand symbols. Whether you are launching or revamping, our logo
                            design services are here to give your business a standout boost.
                        </p>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="icon-box premium-quality">
                        <img src= "{{ url('images/best-quality.gif') }}" alt="Premium Quality Icon"
                            class="icon-box-image">
                        <h3 class="icon-box-heading">Conducting Insightful Research</h3>
                        <p class="icon-box-description">We mix your ideas with what your audience craves. Our custom logo
                            design service fuses your brand vision with smart, research-driven elements to create a logo
                            that catches your eyes and engages prospects. Get the best logo design company on your side to
                            make your brand irresistible!
                        </p>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="icon-box custom-designers">
                        <img src="{{ url('images/logo-design.gif') }}" alt="Custom Designers Icon"
                            class="icon-box-image">
                        <h3 class="icon-box-heading">Crafting Value</h3>
                        <p class="icon-box-description">We infuse real value into every logo. Our meticulous design process
                            starts with diving deep into your brand’s needs, enabling our top-notch designers to craft a
                            logo packed with persuasive elements and audience appeal. Get ready to see your brand soar to
                            new heights.
                        </p>
                    </div>
                </div>
            </div>


            <div class="row">

                <div class="col-md-4">
                    <div class="icon-box dedicated-support">
                        <img src="{{ url('images/digital-art.gif') }}" alt="Dedicated Support Icon"
                            class="icon-box-image">
                        <h3 class="icon-box-heading">Unique Design Solutions</h3>
                        <p class="icon-box-description">Explore our diverse graphic design solutions! Our portfolio
                            showcases top-tier work across various industries, from eye-catching logos to complete branding
                            and promotion services. Whether you need standout designs for your mobile app, website, or
                            social media, we have got you covered. </p>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="icon-box digital-media-design">
                        <img src="{{ url('images/support.gif') }}" alt="Digital Media Design Icon"
                            class="icon-box-image">
                        <h3 class="icon-box-heading">At Your Service 24/7</h3>
                        <p class="icon-box-description">Get the support you deserve with our dedicated, 24/7 expert team.
                            We are here to tackle your queries and offer proactive advice. At RFS, exceptional customer
                            service is our priority, ensuring your branding journey is as smooth and successful as possible.
                        </p>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="icon-box brand-kit">
                        <img src="{{ url('images/startup.gif') }}" alt="Brand Kit Icon" class="icon-box-image">
                        <h3 class="icon-box-heading">Impactful Branding For Growth</h3>
                        <p class="icon-box-description">We stick to the best practices in logo design and branding to take
                            your brand to new heights. With our tried-and-true design process, deep expertise, and top-tier
                            designers, we will set your enterprise on the path to exponential growth. Join us now for
                            branding that makes an impact!</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    <!------------------end No.1 Choice for Businesses ------------->



    <div style="padding-top: 70px; padding-bottom: 100px; background-color:#6868D1">
        <div class="new-card-design-section">
            <div class="new-card-design-container">
                <h2 class="new-card-design-title">Designing The Perfect Logo Made Easy With Our Logo Creator</h2>
                <p style="text-align: center;">Still unsure? Dive deeper or consult with our expert designers for tailored
                    guidance.</p>
            </div>

            <div class="new-card-design-container">
                <div class="new-card-design-row">
                    <div class="new-card-design-col">
                        <div class="new-card-design-card">
                            <img src="{{ url('images/card-design1.png') }}" alt="Image 1">
                            <h2>Card Title 1</h2>
                            <i class="fas fa-arrow-up"></i>
                            <div class="new-card-design-overlay">
                                <div class="new-card-design-overlay-text">Logos come in various types, each serving
                                    different purposes: emblem logos combine text and symbols within a badge-like shape;
                                    wordmark logos focus on stylized text; lettermark logos use initials or abbreviations;
                                    abstract logos represent ideas in a unique, non-literal way; and pictorial logos
                                    illustrate the business with a visual icon.</div>
                            </div>
                        </div>
                    </div>
                    <div class="new-card-design-col">
                        <div class="new-card-design-card">
                            <img src="{{ url('images/card-design2.png') }}" alt="Image 2">
                            <h2>Card Title 2</h2>
                            <i class="fas fa-arrow-up"></i>
                            <div class="new-card-design-overlay">
                                <div class="new-card-design-overlay-text">Colors are key to your brand’s identity, each
                                    evoking distinct emotions. Red bursts with energy and passion, while blue signals trust
                                    and professionalism. Use our logo maker tool to pick the perfect palette that captures
                                    your brand’s essence and connects with your audience.</div>
                            </div>
                        </div>
                    </div>
                    <div class="new-card-design-col">
                        <div class="new-card-design-card">
                            <img src="{{ url('images/card-design3.png') }}" alt="Image 3">
                            <h2>Card Title 3</h2>
                            <i class="fas fa-arrow-up"></i>
                            <div class="new-card-design-overlay">
                                <div class="new-card-design-overlay-text">Choosing the right font is crucial for your brand
                                    logo, as it reflects your brand’s personality and message. Here are some ideas for
                                    you. Serif Fonts: Exude tradition and reliability. Sans-Serif Fonts: Suggest modernity
                                    and simplicity. Script Fonts: Add a touch of elegance. Display Fonts: Command attention
                                    and stand out.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!------------Start Image Box Section ------------->

    <section class="image-box"
        style="padding-top: 100px; padding-bottom: 100px; background-image: url('images/plan.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="container">
            <!-- First Row -->
            <div class="row mb-4">
                <div class="col text-center">
                    <h2>Designing The Perfect Logo Made Easy With Our Logo Creator</h2>
                    <p style="font-size: 18px; font-weight: 400;">Still unsure? Dive deeper or consult with our expert
                        designers for tailored guidance.</p>
                </div>
            </div>
            <!-- Second Row -->
            <div class="row">
                <!-- First Column -->
                <div class="col-md-4 image-column mb-3 mb-md-0">
                    <div class="text-center">
                        <img src="images/Imagebox1_bird.png" alt="Logo type">
                        <h2>Logo type</h2>
                    </div>
                    <p style="text-align: justify;">Logos come in various types, each serving different purposes: emblem
                        logos combine text and symbols within a badge-like shape; wordmark logos
                        focus on stylized text; lettermark logos use initials or abbreviations; abstract logos represent
                        ideas in a unique, non-literal way; and
                        pictorial logos illustrate the business with a visual icon.</p>
                    <!-- <a href="#" style= "color:#646bd9;">Connect with an expert</a> -->
                </div>
                <!-- Second Column -->
                <div class="col-md-4 image-column mb-3 mb-md-0">
                    <div class="text-center">
                        <img src="images/Imagebox2_color.png" alt="Logo colors">
                        <h2>Logo colors</h2>
                    </div>
                    <p style="text-align: justify;">
                        Colors are key to your brand’s identity, each evoking distinct
                        emotions. Red bursts with energy and passion, while blue signals
                        trust and professionalism. Use our logo maker tool to pick the perfect
                        palette that captures your brand’s essence and connects with your audience.
                    </p>
                    <!-- <a href="#" style= "color:#646bd9;">Connect with an expert</a> -->
                </div>
                <!-- Third Column -->
                <div class="col-md-4 image-column mb-3 mb-md-0">
                    <div class="text-center">
                        <img src="images/Imagebox3_font.png" alt="Logo fonts">
                        <h2>Logo fonts</h2>
                    </div>
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
            <div class="card-price-container flex-column flex-md-row">
                <div class="card" onclick="expandCard(this)">
                    <h3 class="bold-heading">Logo Maker for Startups</h3>
                    <p>Create eye-catching designs for social media, banners, promotional materials, logos, and beyond - all
                        yours to use at no cost, forever.</p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> 10000+ logos to choose</li>
                        <li><i class="bi bi-check-circle"></i> Endless customization options</li>
                        <li><i class="bi bi-check-circle"></i> High-res design files</li>
                        <li style="font-size: 14px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><b>(PDF, PNG,
                                    JPG)</b></small></li>
                        <li><i class="bi bi-check-circle"></i> Instant download</li>
                        <li><i class="bi bi-check-circle"></i> Ready brand identity designs</li>
                        <li><i class="bi bi-check-circle"></i> As low as $37</li>
                    </ul>
                    <a href="{{ url('/logo-maker') }}"><button class="plan-btn">For Startups</button></a>
                </div>
                <div class="card" onclick="expandCard(this)">
                    <h3 class="bold-heading">Logo Maker for Small Businesses</h3>
                    <p>Get premium logo design to create eye-catching graphics for social media, banners, promotional
                        materials,
                        logos, and beyond - all yours to use at no cost, forever.</p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> Work directly with skilled designers</li>
                        <li><i class="bi bi-check-circle"></i> Fully bespoke solution</li>
                        <li><i class="bi bi-check-circle"></i> high-res design files</li>
                        <li style="font-size: 14px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><b>(Ai, PSD, EPS,
                                    PNG, JPG,
                                    PDF, SVG, TIFF)</b></small></li>
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

    <section class="logos-carousel-section py-5">
        <div class="container">
            <div class="text-center text-white mb-5">
                <h1>We Have Logos For Everyone</h1>
            </div>

            <!-- Slider main container -->
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <img src="{{ asset('images/01-01.webp') }}" class="img-fluid">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/01-02.webp') }}" class="img-fluid">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/01-03.webp') }}" class="img-fluid">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/01-04.webp') }}" class="img-fluid">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/01-05.webp') }}" class="img-fluid">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/01-07.webp') }}" class="img-fluid">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/01-08.webp') }}" class="img-fluid">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/01-09.webp') }}" class="img-fluid">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/01-10.webp') }}" class="img-fluid">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/01-15.webp') }}" class="img-fluid">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/01-17.webp') }}" class="img-fluid">
                    </div>
                </div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>


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
            <h2 class="text-center mb-5">Happy Customers and Counting</h2>
            <div class="owl-carousel owl-theme">
                <!-- Reviews will be inserted here dynamically -->
            </div>
        </div>
    </section>
    <!-- {{-- --------------- End Testiomonial Section --}} -->


    {{-- Start 4 logo type --}}

    <div class="container my-5">
        <div class="row text-center logotypescard d-flex ">
            <div class="col-md-3">
                <a href="{{ url('/logos/arts-logo-maker') }}">
                    <div class="card logotype-card">
                        <img src="{{ url('images/logo-category-Arts-logo.webp') }}" class="card-img-top"
                            alt="Arts Logos">
                        <div class="card-body">
                            <p class="card-text">ARTS LOGO</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{ url('/logos/beauty-logo-maker') }}">
                    <div class="card logotype-card">
                        <img src="{{ url('images/logo-category-Beauty-logo.webp') }}" class="card-img-top"
                            alt="Beauty Logos">
                        <div class="card-body">
                            <p class="card-text">BEAUTY LOGOS</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{ url('/logos/alphabets-logo-maker') }}">
                    <div class="card logotype-card">
                        <img src="{{ url('images/logo-category-Alphabet-logo.webp') }}" class="card-img-top"
                            alt="Alphabets logos">
                        <div class="card-body">
                            <p class="card-text">ALPHABETS LOGOS</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{ url('/logos/cleaning-logo-maker') }}">
                    <div class="card logotype-card">
                        <img src="{{ url('images/logo-category-Cleaning-logo.webp') }}" class="card-img-top"
                            alt="Cleanings Logos">
                        <div class="card-body">
                            <p class="card-text">CLEANING LOGOS</p>
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
                    <a href="{{ url('/logos/' . $category->slug) }}" class="logo-ideas-link">

                        <button>{{ $category->name }} Logos</button></a>
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

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        $(function() {
            new Swiper('.swiper', {
                autoplay: true,

                // Optional parameters
                loop: true,

                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },

                slidesPerView: 3,
                spaceBetween: 40,
                // Responsive breakpoints
                breakpoints: {
                    // when window width is >= 480px
                    500: {
                        slidesPerView: 3,
                        spaceBetween: 30
                    },
                }
            });
        })
    </script>

    <script>
        window.onscroll = function() {
            makeSticky()
        };

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
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> --}}
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
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}

    <!-- Other scripts or libraries -->

@endsection
