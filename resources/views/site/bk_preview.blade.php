@extends('site.common')

@section('title', 'Preview logo')

@section('content')
    <style>
        .logo-canvas-container {
            display: flex;
            justify-content: center;
            /* Center horizontally */
            align-items: center;
            /* Center vertically */
            height: 100%;
            /* Ensure it takes full height of its parent */
            margin: 0 auto;
            /* Center horizontally */
        }

        .heading {
            font-family: Poppins, sans-serif;
            background-color: #3557BF;
            color: white;
        }

        .heading h1 {
            margin: 0;
        }

        .preview-section {
            background: #fff url({{ asset('images/preview-popup-bg-dot.png') }})
        }

        .preview-section .customize:hover {
            box-shadow: 13px 13px 26px rgba(0, 0, 0, .12);
        }

        .preview-section button {
            font-family: Poppins, sans-serif;
            font-size: 16px;
            font-weight: 700;
        }

        .blue-bg {
            background-color: #5FAAE9;
            color: white;
        }

        .first-section .mockup-wrapper {
            background: url('{{ asset('checkout_images/plan-website-mockup.png') }}');
            position: relative;
            height: 467px;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
        }

        .first-section h3 {
            font-size: 30px;
            font-weight: 700
        }

        .first-section h2 {
            font-size: 60px;
            font-weight: 200
        }

        .first-section .mockup-wrapper .logo-mockup {
            position: absolute;
            width: 45px;
            height: 35px;
        }

        .first-section .mockup-wrapper .logo-wrapper-3 .logo-mockup {
            position: absolute;
            width: 160px;
            height: 160px;
        }

        .first-section .mockup-wrapper .logo-wrapper-4 .logo-mockup {
            position: absolute;
            width: 130px;
            height: 140px;
        }

        .first-section .mockup-wrapper .logo-wrapper-1 {
            position: absolute;
            bottom: 210px;
            left: 125px;
        }

        .first-section .mockup-wrapper .logo-wrapper-2 {
            position: absolute;
            bottom: 260px;
            left: 260px;
        }

        .first-section .mockup-wrapper .logo-wrapper-3 {
            position: absolute;
            bottom: 440px;
            left: 270px;
        }

        .first-section .mockup-wrapper .logo-wrapper-4 {
            position: absolute;
            bottom: 255px;
            right: 550px;
        }

        .purple-bg {
            background-color: #6B6BD3;
            color: white;
        }

        .second-section h3 {
            font-size: 30px;
            font-weight: 700
        }

        .second-section h2 {
            font-size: 60px;
            font-weight: 200
        }

        .second-section .mockup-wrapper {
            background-image: url('{{ asset('checkout_images/business-card-checkout-mockup.png') }}');
            position: relative;
            height: 363px;
            background-repeat: no-repeat;
            background-position: center;
        }

        .second-section .mockup-wrapper .logo-mockup {
            position: absolute;
            width: 100px;
            height: 100px;
        }

        .second-section .mockup-wrapper .logo-wrapper {
            position: absolute;
            top: 150px;
            left: 525px;
            rotate: -25deg;
        }

        .dark-blue-bg {
            background-color: #4D7FF7;
            color: white;
        }

        .third-section h3 {
            font-size: 30px;
            font-weight: 700
        }

        .third-section h2 {
            font-size: 60px;
            font-weight: 200
        }

        .third-section .mockup-wrapper {
            background-image: url('{{ asset('checkout_images/coffee-cup-checkout-mockup.png') }}');
            position: relative;
            height: 363px;
            background-repeat: no-repeat;
            background-position: center;
        }

        .third-section .mockup-wrapper .logo-mockup {
            position: absolute;
            width: 110px;
            height: 95px;
        }

        .third-section .mockup-wrapper .logo-wrapper {
            position: absolute;
            top: 165px;
            left: 490px;
            rotate: -20deg;
        }

        .pink-bg {
            background-color: #C88584;
            color: white;
        }

        .fourth-section .mockup-wrapper {
            background-image: url('{{ asset('checkout_images/stationery-checkout-mockup.png') }}');
            position: relative;
            height: 363px;
            background-repeat: no-repeat;
            background-position: center;
        }

        .fourth-section h3 {
            font-size: 30px;
            font-weight: 700
        }

        .fourth-section h2 {
            font-size: 60px;
            font-weight: 200
        }

        .fourth-section .mockup-wrapper .logo-mockup {
            position: absolute;
            width: 60px;
            height: 50px;
        }

        .fourth-section .mockup-wrapper .logo-wrapper {
            position: absolute;
            top: 115px;
            left: 425px;
            rotate: -38deg;
        }

        .dark-bg {
            background-color: #35373C;
            color: white;
        }

        .fifth-section .mockup-wrapper {
            background: url('{{ asset('checkout_images/plan-stationery-mockup.png') }}');
            position: relative;
            height: 436px;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
        }

        .fifth-section h3 {
            font-size: 30px;
            font-weight: 700
        }

        .fifth-section h2 {
            font-size: 60px;
            font-weight: 200
        }

        .fifth-section .mockup-wrapper .logo-mockup {
            position: absolute;
            width: 110px;
            height: 100px;
        }

        .fifth-section .mockup-wrapper .logo-wrapper-1 {
            position: absolute;
            top: 55px;
            left: 400px;
            rotate: 90deg;
        }

        .fifth-section .mockup-wrapper .logo-wrapper-2 {
            position: absolute;
            top: 50px;
            left: 480px;
        }

        .fifth-section .mockup-wrapper .logo-wrapper-3 {
            position: absolute;
            bottom: 260px;
            right: 345px;
        }

        .fifth-section .mockup-wrapper .logo-wrapper-4 {
            position: absolute;
            bottom: 145px;
            right: 380px;
        }

        .sixth-section .mockup-wrapper {
            background-image: url('{{ asset('checkout_images/t-shirt-checkout-mockup.png') }}');
            position: relative;
            height: 363px;
            background-repeat: no-repeat;
            background-position: center;
        }

        .sixth-section h3 {
            font-size: 30px;
            font-weight: 700
        }

        .sixth-section h2 {
            font-size: 60px;
            font-weight: 200
        }

        .sixth-section .mockup-wrapper .logo-mockup {
            position: absolute;
            width: 190px;
            height: 180px;
        }

        .sixth-section .mockup-wrapper .logo-wrapper {
            position: absolute;
            bottom: 270px;
            left: 470px;
        }

        /*********************** Responsive Start ***********************/

        /* For screen 1200px to 1399px */
        @media (max-width: 1399.98px) {
            .preview-section .logo-mockup {
                width: 300px;
                height: 300px;
            }

            .first-section .mockup-wrapper .logo-wrapper-1 {
                left: 127px;
            }

            .first-section .mockup-wrapper .logo-wrapper-2 {
                left: 261px;
            }

            .first-section .mockup-wrapper .logo-wrapper-3 {
                left: 271px;
            }

            .first-section .mockup-wrapper .logo-wrapper-4 {
                right: 556px;
            }

            .second-section .mockup-wrapper .logo-wrapper {
                left: 530px;
            }

            .third-section .mockup-wrapper .logo-wrapper {
                left: 490px;
            }

            .fourth-section .mockup-wrapper .logo-wrapper {
                left: 425px;
            }

            .fifth-section .mockup-wrapper .logo-wrapper-1 {
                left: 396px;
            }

            .fifth-section .mockup-wrapper .logo-wrapper-2 {
                left: 471px;
            }

            .fifth-section .mockup-wrapper .logo-wrapper-3 {
                right: 353px;
            }

            .fifth-section .mockup-wrapper .logo-wrapper-4 {
                right: 390px;
            }

            .sixth-section .mockup-wrapper .logo-wrapper {
                /* left: 486px; */
            }
        }

        /* For screen 992px to 1199px */
        @media (max-width: 1199.98px) {
            .preview-section .logo-mockup {
                width: 250px;
                height: 250px;
            }

            .first-section .mockup-wrapper .logo-wrapper-1 {
                left: 34px;
            }

            .first-section .mockup-wrapper .logo-wrapper-2 {
                left: 173px;
            }

            .first-section .mockup-wrapper .logo-wrapper-3 {
                left: 180px;
            }

            .first-section .mockup-wrapper .logo-wrapper-4 {
                right: 466px;
            }

            .second-section .mockup-wrapper .logo-wrapper {
                left: 443px;
            }

            .third-section .mockup-wrapper .logo-wrapper {
                left: 400px;
            }

            .fourth-section .mockup-wrapper .logo-wrapper {
                left: 337px;
            }

            .fifth-section .mockup-wrapper .logo-wrapper-1 {
                left: 305px;
            }

            .fifth-section .mockup-wrapper .logo-wrapper-2 {
                left: 387px;
            }

            .fifth-section .mockup-wrapper .logo-wrapper-3 {
                right: 264px;
            }

            .fifth-section .mockup-wrapper .logo-wrapper-4 {
                right: 299px;
            }

            .sixth-section .mockup-wrapper .logo-wrapper {
                left: 380px;
            }
        }

        /* For screen 768px to 991px */
        @media (max-width: 991.98px) {
            .first-section .mockup-wrapper {
                height: 368px;
            }

            .first-section .mockup-wrapper .logo-mockup {
                width: 35px;
                height: 30px;
            }

            .first-section .mockup-wrapper .logo-wrapper-3 .logo-mockup {
                width: 135px;
                height: 142px;
            }

            .first-section .mockup-wrapper .logo-wrapper-4 .logo-mockup {
                width: 110px;
                height: 125px;
            }

            .first-section .mockup-wrapper .logo-wrapper-1 {
                left: 21px;
                bottom: 168px;
            }

            .first-section .mockup-wrapper .logo-wrapper-2 {
                left: 122px;
                bottom: 205px;
            }

            .first-section .mockup-wrapper .logo-wrapper-3 {
                left: 125px;
                bottom: 360px;
            }

            .first-section .mockup-wrapper .logo-wrapper-4 {
                right: 352px;
                bottom: 215px;
            }

            .second-section .mockup-wrapper .logo-wrapper {
                left: 320px;
            }

            .third-section .mockup-wrapper .logo-wrapper {
                left: 280px;
            }

            .fourth-section .mockup-wrapper .logo-wrapper {
                left: 215px;
            }

            .fifth-section .mockup-wrapper .logo-wrapper-1 {
                left: 200px;
                top: 75px;
            }

            .fifth-section .mockup-wrapper .logo-wrapper-2 {
                left: 265px;
                top: 62px;
            }

            .fifth-section .mockup-wrapper .logo-wrapper-3 {
                right: 165px;
            }

            .fifth-section .mockup-wrapper .logo-wrapper-4 {
                right: 195px;
            }

            .sixth-section .mockup-wrapper .logo-wrapper {
                left: 260px;
            }
        }

        /* For screen 576px to 767px */
        @media (max-width: 767.98px) {
            .preview-section .logo-mockup {
                width: 200px;
                height: 200px;
            }

            .preview-section a.btn {
                font-size: 16px;
            }

            .first-section .mockup-wrapper {
                height: 275px;
            }

            .first-section h2 {
                font-size: 55px;
            }

            .first-section .mockup-wrapper .logo-mockup {
                width: 25px;
                height: 25px;
            }

            .first-section .mockup-wrapper .logo-wrapper-3 .logo-mockup {
                width: 105px;
                height: 115px;
            }

            .first-section .mockup-wrapper .logo-wrapper-4 .logo-mockup {
                width: 90px;
                height: 100px;
            }

            .first-section .mockup-wrapper .logo-wrapper-1 {
                left: 16px;
                bottom: 126px;
            }

            .first-section .mockup-wrapper .logo-wrapper-2 {
                left: 92px;
                bottom: 155px;
            }

            .first-section .mockup-wrapper .logo-wrapper-3 {
                left: 90px;
                bottom: 276px;
            }

            .first-section .mockup-wrapper .logo-wrapper-4 {
                right: 264px;
                bottom: 163px;
            }

            .second-section .mockup-wrapper .logo-wrapper {
                left: 230px;
            }

            .third-section h2 {
                font-size: 52px;
            }

            .third-section .mockup-wrapper .logo-wrapper {
                left: 190px;
            }

            .fourth-section h2 {
                font-size: 51px;
            }

            .fourth-section .mockup-wrapper .logo-wrapper {
                left: 125px;
            }

            .fifth-section h2 {
                font-size: 45px;
            }

            .fifth-section .mockup-wrapper {
                height: 310px;
            }

            .fifth-section .mockup-wrapper .logo-mockup {
                width: 80px;
                height: 90px;
            }

            .fifth-section .mockup-wrapper .logo-wrapper-1 {
                left: 155px;
                top: 45px;
            }

            .fifth-section .mockup-wrapper .logo-wrapper-2 {
                left: 200px;
                top: 35px;
            }

            .fifth-section .mockup-wrapper .logo-wrapper-3 {
                right: 120px;
                bottom: 193px;
            }

            .fifth-section .mockup-wrapper .logo-wrapper-4 {
                right: 145px;
                bottom: 113px;
            }

            .sixth-section h2 {
                font-size: 48px;
            }

            .sixth-section .mockup-wrapper .logo-wrapper {
                left: 170px;
            }
        }

        /* For screen 480px to 575px */
        @media (max-width: 575.98px) {
            .first-section .mockup-wrapper {
                width: 450px;
                margin: auto
            }

            .first-section h3 {
                font-size: 20px;
            }

            .first-section h2 {
                font-size: 35px;
            }

            .first-section .mockup-wrapper .logo-wrapper-1 {
                left: 13px;
                bottom: 129px;
            }

            .first-section .mockup-wrapper .logo-wrapper-2 {
                left: 80px;
                bottom: 153px;
            }

            .first-section .mockup-wrapper .logo-wrapper-3 {
                left: 85px;
                bottom: 246px;
            }

            .first-section .mockup-wrapper .logo-wrapper-4 {
                right: 224px;
            }

            .first-section .mockup-wrapper .logo-wrapper-3 .logo-mockup {
                width: 80px;
                height: 90px;
            }

            .first-section .mockup-wrapper .logo-wrapper-4 .logo-mockup {
                width: 65px;
                height: 90px;
            }

            .second-section .mockup-wrapper {
                width: 456px;
                margin: auto;
            }

            .second-section h2 {
                font-size: 45px;
            }

            .second-section h3 {
                font-size: 25px;
            }

            .second-section .mockup-wrapper .logo-wrapper {
                left: 205px;
            }

            .third-section .mockup-wrapper {
                width: 456px;
                margin: auto;
            }

            .third-section h2 {
                font-size: 45px;
            }

            .third-section h3 {
                font-size: 25px;
            }

            .third-section .mockup-wrapper .logo-wrapper {
                left: 160px;
            }

            .fourth-section .mockup-wrapper {
                width: 456px;
                margin: auto;
            }

            .fourth-section h2 {
                font-size: 45px;
            }

            .fourth-section h3 {
                font-size: 25px;
            }

            .fourth-section .mockup-wrapper .logo-wrapper {
                left: 100px;
            }

            .fifth-section h2 {
                font-size: 45px;
            }

            .fifth-section h3 {
                font-size: 25px;
            }

            .fifth-section .mockup-wrapper {
                width: 456px;
                margin: auto
            }

            .fifth-section .mockup-wrapper .logo-mockup {
                width: 70px;
                height: 70px;
            }

            .fifth-section .mockup-wrapper .logo-wrapper-1 {
                left: 135px;
                top: 60px;
            }

            .fifth-section .mockup-wrapper .logo-wrapper-2 {
                left: 180px;
                top: 55px;
            }

            .fifth-section .mockup-wrapper .logo-wrapper-3 {
                right: 105px;
                bottom: 183px;
            }

            .fifth-section .mockup-wrapper .logo-wrapper-4 {
                right: 125px;
            }

            .sixth-section h2 {
                font-size: 45px;
            }

            .sixth-section h3 {
                font-size: 25px;
            }

            .sixth-section .mockup-wrapper {
                width: 456px;
                margin: auto
            }

            .sixth-section .mockup-wrapper .logo-wrapper {
                left: 145px;
                bottom: 265px;
            }
        }

        /* For screen 350px to 479px */
        @media (max-width: 479.98px) {
            .first-section .mockup-wrapper {
                width: 325px;
                height: 185px;
                margin: auto
            }

            .first-section .mockup-wrapper .logo-mockup {
                width: 15px;
                height: 15px;
            }

            .first-section .mockup-wrapper .logo-wrapper-3 .logo-mockup {
                width: 60px;
                height: 70px;
            }

            .first-section .mockup-wrapper .logo-wrapper-4 .logo-mockup {
                width: 50px;
                height: 70px;
            }

            .first-section .mockup-wrapper .logo-wrapper-1 {
                left: 11px;
                bottom: 86px;
            }

            .first-section .mockup-wrapper .logo-wrapper-2 {
                left: 58px;
                bottom: 103px;
            }

            .first-section .mockup-wrapper .logo-wrapper-3 {
                left: 60px;
                bottom: 178px;
            }

            .first-section .mockup-wrapper .logo-wrapper-4 {
                right: 162px;
                bottom: 114px;
            }

            .second-section .mockup-wrapper {
                width: 325px;
                margin: auto;
            }

            .second-section h2 {
                font-size: 35px;
            }

            .second-section h3 {
                font-size: 20px;
            }

            .second-section .mockup-wrapper .logo-wrapper {
                left: 140px;
            }

            .third-section .mockup-wrapper {
                width: 325px;
                margin: auto;
            }

            .third-section h2 {
                font-size: 35px;
            }

            .third-section h3 {
                font-size: 20px;
            }

            .third-section .mockup-wrapper .logo-wrapper {
                left: 95px;
            }

            .fourth-section .mockup-wrapper {
                width: 325px;
                margin: auto;
            }

            .fourth-section h2 {
                font-size: 35px;
            }

            .fourth-section h3 {
                font-size: 20px;
            }

            .fourth-section .mockup-wrapper .logo-wrapper {
                left: 30px;
            }

            .fifth-section h2 {
                font-size: 35px;
            }

            .fifth-section h3 {
                font-size: 20px;
            }

            .fifth-section .mockup-wrapper {
                width: 325px;
                height: 210px;
                margin: auto
            }

            .fifth-section .mockup-wrapper .logo-mockup {
                width: 50px;
                height: 50px;
            }

            .fifth-section .mockup-wrapper .logo-wrapper-1 {
                left: 95px;
                top: 35px;
            }

            .fifth-section .mockup-wrapper .logo-wrapper-2 {
                left: 130px;
                top: 34px;
            }

            .fifth-section .mockup-wrapper .logo-wrapper-3 {
                right: 75px;
                bottom: 125px;
            }

            .fifth-section .mockup-wrapper .logo-wrapper-4 {
                right: 90px;
                bottom: 75px;
            }

            .sixth-section h2 {
                font-size: 35px;
            }

            .sixth-section h3 {
                font-size: 20px;
            }

            .sixth-section .mockup-wrapper {
                width: 325px;
                margin: auto
            }

            .sixth-section .mockup-wrapper .logo-wrapper {
                left: 80px;
            }

        }

        /*********************** Responsive End *************************/
    </style>

    <!-- Heading -->
    <div class="heading py-3">
        <div class="text-center">
            <h1>Logo Preview</h1>
        </div>
    </div>

    <div class="preview-section pb-4 pb-md-5">
        <div class="logo-canvas-container d-none">
            <canvas id="logo-canvas" width="160" height="175"></canvas>
        </div>

        <div class="d-flex justify-content-center align-items-center">
            <img src="" alt="logo" class="logo-mockup"  ondragstart="return false;"   oncontextmenu="return false;">
        </div>

        <div class="d-flex justify-content-center align-items-center mt-4">
            <a href="{{ route('maker') }}" class="btn btn-lg customize me-1">
                <i class="fa fa-angle-left" aria-hidden="true"></i>&nbsp; Customize
            </a>
            @if ($hasOrder)
                <button id="save-logo" class="btn btn-lg btn-success ms-1">Look Perfect</button>
            @else
                <a href="{{ route('packages') }}" class="btn btn-lg btn-success ms-1">Look Perfect</a>
            @endif

            {{-- @auth
            @else
                <a href="{{ route('login') }}" class="btn btn-lg btn-success ms-1" id="updateButton">Look Perfect</a>
            @endauth --}}

            {{-- @guest
                <a href="{{ route('login') }}" class="btn btn-lg btn-success ms-1" id="updateButton">Look Perfect</a>
            @else
                @if ($hasOrder)
                    <button id="save-logo" class="btn btn-lg btn-success ms-1">Look Perfect</button>
                @else
                    <a href="{{ route('packages') }}" class="btn btn-lg btn-success ms-1">Look Perfect</a>
                @endif
            @endguest --}}
        </div>
    </div>

    <div class="first-section blue-bg py-4 py-md-5">
        <div class="container text-center">
            <h3>Set up your online presence</h3>
            <h2>WEBSITE & HOSTING</h2>

            <div class="mockup-wrapper mt-md-4">
                <div class="logo-wrapper-1">
                    <img class="logo-mockup" alt="logo">
                </div>
                <div class="logo-wrapper-2">
                    <img class="logo-mockup" alt="logo">
                </div>
                <div class="logo-wrapper-3">
                    <img class="logo-mockup" alt="logo">
                </div>
                <div class="logo-wrapper-4">
                    <img class="logo-mockup" alt="logo">
                </div>
            </div>
        </div>
    </div>

    <div class="second-section purple-bg py-4 py-md-5">
        <div class="container text-center">
            <h3>Create a brand new image</h3>
            <h2>BUSINESS CARDS</h2>

            <div class="mockup-wrapper mt-md-4">
                <div class="logo-wrapper">
                    <img class="logo-mockup" alt="logo">
                </div>
            </div>
        </div>
    </div>

    <div class="third-section dark-blue-bg py-4 py-md-5">
        <div class="container text-center">
            <h3>See your design in print</h3>
            <h2>PACKAGING & LABELS</h2>

            <div class="mockup-wrapper mt-md-4">
                <div class="logo-wrapper">
                    <img class="logo-mockup" alt="logo">
                </div>
            </div>
        </div>
    </div>

    <div class="fourth-section pink-bg py-4 py-md-5">
        <div class="container text-center">
            <h3>Complete identity design</h3>
            <h2>BRANDED STATIONERY</h2>

            <div class="mockup-wrapper mt-md-4">
                <div class="logo-wrapper">
                    <img class="logo-mockup" alt="logo">
                </div>
            </div>
        </div>
    </div>

    <div class="fifth-section dark-bg py-4 py-md-5">
        <div class="container text-center">
            <h3>Show off your new brand</h3>
            <h2>MERCHANDISE & ACCESSORIES</h2>

            <div class="mockup-wrapper mt-md-4">
                <div class="logo-wrapper-1">
                    <img class="logo-mockup" alt="logo">
                </div>
                <div class="logo-wrapper-2">
                    <img class="logo-mockup" alt="logo">
                </div>
                <div class="logo-wrapper-3">
                    <img class="logo-mockup" alt="logo">
                </div>
                <div class="logo-wrapper-4">
                    <img class="logo-mockup" alt="logo">
                </div>
            </div>
        </div>
    </div>

    <div class="sixth-section py-4 py-md-5">
        <div class="container text-center">
            <h3>Get more buzz for your startup</h3>
            <h2>SOCIAL MEDIA DESIGNS</h2>

            <div class="mockup-wrapper mt-md-4">
                <div class="logo-wrapper">
                    <img class="logo-mockup" alt="logo">
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/ajaxSetup.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/4.5.0/fabric.min.js"></script>
    <script>
        var company = @json(session('company', []));
        var image = @json(session('image', []));
    </script>
    @php
    $fontSize = (isset($product->logomaker_font_size) && strlen($product->logomaker_font_size) > 1) 
                                    ? $product->logomaker_font_size 
                                    : '38px';
    @endphp
   
    <script>
        var canvas = new fabric.Canvas('logo-canvas');
    // var dataURL

    $(document).ready(function() {
         
        canvas.setWidth(400);
        canvas.setHeight(250);

        // Load SVG function
        function loadCarSVG() {
            $.ajax({
                url: 'category-image/' + image, // Adjust the URL to load your SVG
                dataType: 'text',
                success: function(svgString) {
                    // Clear the canvas
                    canvas.clear();

                    // Load the SVG
                    fabric.loadSVGFromString(svgString, function(objects, options) {
                        // Create a group with the loaded objects
                        var svgGroup = new fabric.Group(objects);

                        
                        // Scale the SVG to fit within the canvas
                        var canvasWidth = canvas.width;
                        var canvasHeight = canvas.height;
                        var boundingBox = svgGroup.getBoundingRect();

                        var scaleX = canvasWidth / boundingBox.width-.4;
                        //var scaleY = canvasHeight / boundingBox.height-.6;
                        var scaleY = canvasHeight / boundingBox.height-.4;
                        var scale = Math.min(scaleX, scaleY);
                        @php
    // Define the initial position for the SVG based on the logo position
    $leftLogoPosition = '(canvasWidth - boundingBox.width * scale) / 2'; // Default to center

    // Adjust the position based on the logo_position
    if ($selectedProduct->logo_position == 'left') {
        $leftLogoPosition = '0'; // Align to the left edge of the canvas
    } elseif ($selectedProduct->logo_position == 'right') {
        $leftLogoPosition = 'canvasWidth - boundingBox.width * scale'; // Align to the right edge of the canvas
    }
@endphp
                        svgGroup.set({
                            scaleX: scale,
                            scaleY: scale,
                            left: 220, 
                            left: {{$leftLogoPosition}},
                            top: (canvasHeight - boundingBox.height * scale) / 2,
                            selectable: false, // Disable selection
                            evented: false, // Disable events
                        });

                        canvas.add(svgGroup);

                        @php
                            
                            $fontSize = (isset($selectedProduct->preview_font_size) && strlen($selectedProduct->preview_font_size) > 1) 
                                    ? $selectedProduct->preview_font_size 
                                    : '35';
                                    
                            $companyName = session('company') ? session('company') : $selectedProduct->category->name;

                           
                           
                            $companyNameLength = strlen($companyName);
                            if ($companyNameLength > 10 && $companyNameLength <= 15) {
                                $fontSize = $fontSize - 6 ;
                            }else  if ($companyNameLength > 15 && $companyNameLength <= 20) {
                                $fontSize = $fontSize - 12 ;
                            }else  if ($companyNameLength > 20 && $companyNameLength <= 25) {
                                $fontSize = $fontSize - 15 ;
                            }else  if ($companyNameLength > 25 && $companyNameLength <= 30) {
                                $fontSize =   $fontSize - 20 ;
                            }
                             
                            $leftPosition = (isset($selectedProduct->preview_left) && strlen($selectedProduct->preview_left) > 1) 
                                    ?  floatval($selectedProduct->preview_left)
                                    : '1.7';   

                            // if ($companyNameLength > 3 && $companyNameLength <= 5) {
                            //     $leftPosition =  $leftPosition + .1; 
                            // }else  if ($companyNameLength > 5 && $companyNameLength <= 7) {
                            //     $leftPosition =  $leftPosition + .2; 
                            // }else  if ($companyNameLength > 7 && $companyNameLength <= 9) {
                            //     $leftPosition =  $leftPosition + .4; 
                            // }else  if ($companyNameLength > 9 && $companyNameLength <= 11) {
                            //     $leftPosition =  $leftPosition + .6; 
                            // }else  if ($companyNameLength > 11 && $companyNameLength <= 13) {
                            //     $leftPosition =  $leftPosition + .8; 
                            // }else  if ($companyNameLength > 13 && $companyNameLength <= 15) {
                            //     $leftPosition =  $leftPosition + 1; 
                            // }else  if ($companyNameLength > 15 && $companyNameLength <= 17) {
                            //     $leftPosition =  $leftPosition + 1.2; 
                            // }else  if ($companyNameLength > 17 && $companyNameLength <= 19) {
                            //     $leftPosition =  $leftPosition + 1.4; 
                            // }else  if ($companyNameLength > 19 && $companyNameLength <= 21) {
                            //     $leftPosition =  $leftPosition + 1.6; 
                            // }else  if ($companyNameLength > 21 && $companyNameLength <= 23) {
                            //     $leftPosition =  $leftPosition + 1.8; 
                            // }else  if ($companyNameLength > 23 && $companyNameLength <= 25) {
                            //     $leftPosition =  $leftPosition + 2; 
                            // }else  if ($companyNameLength > 25 && $companyNameLength <= 27) {
                            //     $leftPosition =  $leftPosition + 2.2; 
                             
                            // }else  if ($companyNameLength > 27 && $companyNameLength <= 30) {
                            //     $leftPosition =  $leftPosition + 2.2; 
                            // }

                            $fontSlug = $selectedProduct->font->slug ?? null;
                            $font = $fontSlug ? pathinfo($fontSlug, PATHINFO_FILENAME) : '';
                            //2 - 60 
                            // $left='canvas.width / '.$selectedProduct->preview_left;
                            $left = 'canvas.width / '.$leftPosition .' - 80'; 
                                      //$left ='canvas.width / 6 - 40';
                                      
                                    //    $left = 'canvas.width / 1 - 55 ';
                                    //   echo  $left."DDDDDDDDDDDDDDDDDDDDDDDDD";
                            //2 + 80

                            //$left = 'canvas.width / 1.05 - 80'; 
                            
                       
                            $top = (isset($selectedProduct->preview_top) && strlen($selectedProduct->preview_top) >= 1) 
                                    ? 'canvas.height / '. $selectedProduct->preview_top .' + 80'
                                    : 'canvas.height / 2 + 80';

                          //$top='canvas.height / 7.5 + 80';                                    
                           
                            $textPosition='center';
                            if ($selectedProduct->logo_position == 'left') {
                                $textPosition='left';
                            } elseif ($selectedProduct->logo_position == 'right') {
                                $textPosition='right';
                            }


                        @endphp
                        
                        // Add text elements
                        var company = "{{ $companyName }}".replace(/&amp;/g, '&');
                        var sampleText1 = new fabric.Textbox(company, {
                            left: {{$left}},
                            top: {{$top}},
                            fontSize: {{ $fontSize}}, // Adjust font size as needed
                            fill: '{{$selectedProduct->color}}',
                            fontFamily: "{{ $font }}",
                            textAlign: '{{$textPosition}}',
                            selectable: false,
                            evented: false,
                            width: 340,
                           
                        });
                        canvas.add(sampleText1);

                        canvas.renderAll();

                        // Generate data URL and save to session storage
                        const dataUrl = canvas.toDataURL();
                        sessionStorage.setItem('logoDataUrl', dataUrl);

                        $('.logo-mockup').each(function() {
                            this.src = dataUrl;
                        });

                        // Optionally send data URL to server
                        $.ajax({
                            url: "{{ route('putImgStringIntoSession') }}",
                            method: 'POST',
                            data: { dataURL: dataUrl },
                            success: function() {
                                @auth
                                    $.ajax({
                                        url: "{{ route('saveLogo') }}",
                                        method: 'POST',
                                        data: {
                                            userId: {{ auth()->id() }},
                                            productId: {{ session()->get('product-id') }},
                                        },
                                    });
                                @endauth
                            },
                        });
                    });

                },
                error: function(xhr, status, error) {
                    console.error("Error loading SVG:", status, error);
                }
            });
        }

        loadCarSVG();
    
            // var dataURL = sessionStorage.getItem('logoDataUrl')

            // console.log(sessionStorage.getItem('logoDataUrl'));
            

            // $.ajax({
            //     url: "{{ route('putImgStringIntoSession') }}",
            //     method: 'POST',
            //     data: { dataURL },
            //     success: function() {
            //         @auth
            //             $.ajax({
            //                 url: "{{ route('saveLogo') }}",
            //                 method: 'POST',
            //                 data: {
            //                     userId: {{ auth()->id() }},
            //                     productId: {{ session()->get('product-id') }},
            //                     // logoString: sessionStorage.getItem('logoDataUrl'),
            //                 },
            //             })
            //         @endauth
            //     },
            // })
        });

        @if ($hasOrder)
            // Save the canvas content as an image
            $('#save-logo').click(function() {
                var dataURL = canvas.toDataURL({
                    format: 'png',
                    quality: 1
                });

                var link = document.createElement('a');
                link.href = dataURL;
                link.download = 'logo.png';
                link.click();
            });
        @endif
    </script>

@endsection
