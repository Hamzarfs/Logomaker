@extends('site.common')

@section('title', $categoryObj['meta_title'])

@section('meta_desc', $categoryObj['meta_desc'])

@section('content')

    <style>
        
    .education-logo-section {
    background-image: url('/images/catagories2.jpg');
    background-size: cover;
    background-position: center;
    padding: 100px 0;
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
    font-size: 40px;
    text-align: center;
    margin-bottom: 20px;
}


.education-logo-section p {
    margin-bottom: 20px;
}




        .category-top-textblock {
            padding: 40px 0;
            text-align: center;
        }

        .as-seen-on-section img {
            max-width: 100new-logo%;
            height: auto;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .absolute-img-01 img,
        .absolute-img-02 img,
        .absolute-img-03 img {
            max-width: 100%;
            max-height: 155px;
            border-radius: 15px;
            z-index: 999;
        }

        @media (max-width: 768px) {
            .category-top-section h1 {
                font-size: 2.5em;
            }

            .category-top-section .cta-form {
                flex-direction: column;
                align-items: center;
            }

            .category-top-section .cta-form input {
                margin-bottom: 10px;
            }

            .images-container {
                display: none;
            }
            .education-logo-section h1 {
    font-weight: 700;
    font-size: 30px;
    
}
.education-logo-section h2 {
    font-weight: 700;
    font-size: 24px;
    text-align: center;
}


.education-logo-section p {
    margin-bottom: 20px;
    font-size: 18px;

}




        }

        .custom-section {
            padding: 30px 0;
        }

        .custom-section .custom-content {
            animation: fadeIn 1.5s;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .custom-section img {
            max-width: 100%;
            height: auto;
        }

        .custom-image-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .custom-content-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .custom-logo-wrapper {
            background-color: #DBE1FF;
            padding: 50px 0;
        }

        .custom-logo-section {
            background: linear-gradient(135deg, #DBE1FF, #A3BFF7);
            text-align: center;
            padding: 50px 15px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        .custom-logo-section h2 {
            font-weight: 800;
            margin-bottom: 30px;
            color: #333;
        }

        .custom-logo-section .form-inline {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .custom-logo-section .custom-form-control {
            border-radius: 20px;
            padding: 10px 20px;
        }

        .custom-logo-section .custom-btn-generate {
            border-radius: 20px;
            padding: 5px 20px;
            color: #fff;
            background-color: #646BD9;
            font-size: 15px;
            font-weight: 700;
            line-height: 24px;
            text-align: center;
            border-color: #646BD9;
        }

        new-logo .custom-logo-section .custom-btn-generate:hover {
            background-color: #646BD9;
            border-color: #646BD9;
        }

        .custom-section-title {
            text-align: center;
            margin-top: 50px;
        }

        .custom-section-title h2 {
            color: #000;
            font-weight: 800;
            font-size: 2rem;
            animation: fadeIn 2s ease-in-out;
            margin-bottom: 0;
            /* Remove bottom margin inew-logof not needed */
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .logo-gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .logo-item {
            width: 33%;
            margin-bottom: 20px;
            position: relative;
            height: 300px;
            overflow: hidden;
        }

        .select-btn {
            display: none;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10;
        }

        .logo-item:hover .select-btn,
        .logo-item:hover .fav-icon {
            display: block;
        }

        .fav-icon {
            position: absolute;
            right: 20px;
            top: 10px;
            font-size: 25px;
            display: none;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .logo-item {
                width: 100%;
                height: auto;
                /* Adjust height as needed */
            }
        }

        #companyName2 {
            width: 34%;
        }

        /* For screen 992px to 1199px */
        @media (max-width: 1199.98px) {
            #companyName2 {
                width: 41%;
            }
        }

        /* For screen 767px to 991px */
        @media (max-width: 991.98px) {
            #companyName2 {
                width: 56%;
            }
        }

        /* For screen 768px */
        @media (max-width: 768.98px) {
            #companyName2 {
                width: 44%;
            }
        }

        /* For screen 576px to 767px */
        @media (max-width: 767.98px) {
            #companyName2 {
                width: 60%;
            }
        }

        /* For screen 480px to 575px */
        @media (max-width: 575.98px) {
            #companyName2 {
                width: 56%;
            }
        }

        /* For screen 480px to 575px */
        @media (max-width: 575.98px) {
            #companyName2 {
                width: 68%;
            }
        }

        /* For screen 320px to 479px */
        @media (max-width: 479.98px) {
            #companyName2 {
                width: 100%;
            }
        }
    </style>

    <!-- Top Section Start -->
    








    <section class="education-logo-section">
    <div class="container">
        <h1>Free {{ $categoryObj['name'] ?? '' }} Logo Maker</h1>
        <h2>Design Your Logo in Minutes</h2>
        <p class="text-center">Utilize our advanced {{ $categoryObj['name'] ?? '' }} logo creator tool to design a<br> professional logo for your business or company. Try it now!</p>
        <div class="row justify-content-center">
            <div class="col-md-6">
           
            <form id="companyForm" method="POST" action="{{ url('/store-session-data') }}">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="companyName11" name="company"
                                placeholder="Enter your company name" aria-label="Enter your company name">
                            <input type="hidden" name="flow" value="category">
                            <input type="submit" class="custom-button-banner" value="Get Started">
                        </div>
                    </form>
            </div>
        </div>
    </div>
</section>














    <section class="category-top-textblock">
        <div class="container">
            <h2 style="font-weight:700;">{{ $categoryObj['heading'] ?? '' }}</h2>
            <p>{{ $categoryObj['content'] ?? '' }}</p>
        </div>
    </section>

    <div class="banner-section" style="background-color: #dbe1ff; padding-bottom: 100px;">
        <div class="container portfolio-section">
            <h2 class="portfolio-heading text-center">Our Logo Templates Cater to Every Industry</h2>
            <p class="main-description-online text-center">
                Explore our diverse range of logo templates designed to suit all industries, from medical
                logos to food logos, sports logos to fashion logos. RFS Logo Design ensures you find the
                perfect match for your business identity and branding needs.
            </p>



            @php
                $fonts = [
                    'lazyp-eople',
                    'Remon-Demo',
                    'Stifly',
                    'Brandes-Regular',
                    'Rohgaz-Demo-VersionRegular',
                    'Forest-Trophy-Textured',
                    'Aesthetic-Wonder-DEMOBold',
                    'Nerve-Brush-Regular',
                    'Stander-DEMO',
                    'Dasport-DEMO',
                    'LightSport-DEMO',
                ]; // List of fonts
                $colors = ['#900C3F', '#36454F', '#343434', '#191970', '#581845'];
            @endphp


            <div class="row logo-gallery">
                @foreach ($products as $product)
                    @php

                        $fontSlug = $product->font->slug ?? null;
                        $font = $fontSlug ? pathinfo($fontSlug, PATHINFO_FILENAME) : '';

                        // echo   $font;

                        $color = $product->color;

                        $fontSize =
                            isset($product->logomaker_font_size) && strlen($product->logomaker_font_size) > 1
                                ? $product->logomaker_font_size
                                : '38px';

                        $companyName = session('company') ? session('company') : $product->category->name;

                        $companyNameLength = strlen($companyName);
                        if ($companyNameLength > 10 && $companyNameLength <= 15) {
                            $fontSize = (int) str_replace('px', '', $fontSize) - 6 . 'px';
                        } elseif ($companyNameLength > 15 && $companyNameLength <= 20) {
                            $fontSize = (int) str_replace('px', '', $fontSize) - 12 . 'px';
                        } elseif ($companyNameLength > 20 && $companyNameLength <= 25) {
                            $fontSize = (int) str_replace('px', '', $fontSize) - 15 . 'px';
                        } elseif ($companyNameLength > 25 && $companyNameLength <= 30) {
                            $fontSize = (int) str_replace('px', '', $fontSize) - 20 . 'px';
                        }

                        $topPosition =
                            isset($product->logomaker_top) && strlen($product->logomaker_top) > 1
                                ? $product->logomaker_top
                                : '170px';

                        $leftPosition =
                            isset($product->logomaker_left) && strlen($product->logomaker_left) > 1
                                ? $product->logomaker_left
                                : '-30px';

                        $logoPosition = $product->logo_position ?? ''; // Use null coalescing operator to handle unset cases
                        $logoPositionVertical = 'margin-top:10px';
                        if (isset($logoPosition) && strlen($logoPosition) > 0) {
                            switch ($logoPosition) {
                                case 'left':
                                    if ($companyNameLength <= 5) {
                                        $leftPositionValue = (int) str_replace('px', '', $leftPosition);
                                        $adjustedLeftPositionValue = $leftPositionValue - 80;
                                        $leftPosition = "{$adjustedLeftPositionValue}px";
                                    } elseif ($companyNameLength >= 6 && $companyNameLength <= 11) {
                                        $leftPositionValue = (int) str_replace('px', '', $leftPosition);
                                        $adjustedLeftPositionValue = $leftPositionValue - 20;
                                        $leftPosition = "{$adjustedLeftPositionValue}px";
                                    }
                                    // die($companyNameLength."DDDDDDDDDDD".session('company'));
                                    //$logoPosition="margin-left:0px";
                                    break;
                                case 'center':
                                    // Do something for 'center'
                                    $logoPositionVertical = 'margin-top:10px';
                                    break;
                                case 'right':
                                    // Do something for 'right'
                                    $logoPosition = 'margin-left:-0px';
                                    if ($companyNameLength <= 5) {
                                        $leftPositionValue = (int) str_replace('px', '', $leftPosition);
                                        $adjustedLeftPositionValue = $leftPositionValue + 130;
                                        $leftPosition = "{$adjustedLeftPositionValue}px";
                                    } elseif ($companyNameLength >= 6 && $companyNameLength <= 9) {
                                        $leftPositionValue = (int) str_replace('px', '', $leftPosition);
                                        $adjustedLeftPositionValue = $leftPositionValue + 60;
                                        $leftPosition = "{$adjustedLeftPositionValue}px";
                                    }

                                    break;
                                case 'top':
                                    // Do something for 'top'
                                    $logoPositionVertical = 'margin-top:-40px';
                                    break;
                                case 'bottom':
                                    $logoPositionVertical = 'margin-top:140px';
                                    break;
                                default:
                                    $logoPositionVertical = 'margin-top:-10px';
                                    // Optionally handle unexpected values
                                    //echo "Unexpected logo position.";
                                    break;
                            }
                        }

                    @endphp
                    <div class="col-md-4 logo-item" data-category="{{ $product->category_id }}">
                        <div class="card-container">
                            <!-- <img src="{{ asset("category-image/$product->image") }}" class="img-fluid portfolio-image"
                                                                        alt="{{ $product->name }}"> -->


                            <img src="{{ asset("category-image/$product->image") }}"
                                style="xwidth: 35% !important; {{ $logoPosition }}; position: absolute; {{ $logoPositionVertical }}; z-index: 10;"
                                class="img-fluid portfolio-image" alt="{{ $product->name }}" ondragstart="return false;"
                                oncontextmenu="return false;">



                            <div class="text-placeholder"
                                style=" z-index: 20;font-family: {{ $font }}; color:{{ $color }}; font-size:{{ $fontSize }}; font-weight:500; margin-left:{{ $leftPosition }}; margin-top:{{ $topPosition }}">
                                {{ session('company') ? session('company') : $categoryObj['name'] }}
                            </div>



                            <a href="{{ url('/store-session-data-image?image=' . $product->image . '&product-id=' . $product->id) }}"
                                class="hover-button select-btn" style="z-index: 30;"
                                data-product-id="{{ $product->id }}">Select </a>
                            @auth
                                @php
                                    $i = array_search($product->id, array_column($favourites, 'product_id'));
                                @endphp
                                <div class="fav-icon {{ $i !== false ? 'text-success' : 'text-danger' }}"
                                    data-product-id="{{ $product->id }}"
                                    @if ($i !== false) data-favourite-id="{{ $favourites[$i]['id'] }}" @endif>
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                </div>
                            @endauth
                        </div>
                    </div>
                @endforeach
            </div>


            {{-- <div class="row">
                @foreach ($products as $product)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <a href="" class="card-container-link" data-image="{{ $product->image }}"
                            data-id="{{ $product->id }}" data-placeholder="{{ $product->placeholder_value }}">
                            <div class="card-container">
                                <div class="card-inner">
                                    <div class="card-front">
                                        <img src="{{ asset("category-image/$product->image") }}"
                                            class="img-fluid portfolio-image" alt="{{ $product->name }}">
                                        <div class="text-placeholder"
                                            data-placeholder-value="{{ $product->placeholder_value }}"></div>
                                    </div>
                                    <div class="card-back">
                                        <div class="category-name">{{ $categoryObj['name'] ?? '' }}</div>
                                        @auth
                                            @php
                                                $i = array_search(
                                                    $product->id,
                                                    array_column($favourites, 'product_id'),
                                                );
                                            @endphp
                                            <div class="fav-icon {{ $i !== false ? 'text-success' : 'text-danger' }}"
                                                data-product-id="{{ $product->id }}"
                                                @if ($i !== false) data-favourite-id="{{ $favourites[$i]['id'] }}" @endif>
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </div>
                                        @endauth
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

                {!! $products->links() !!}

            </div> --}}

            <h2 class="studioTitle">Discover Versatile Logo Designs in Our Design Engine</h2>
        </div>
    </div>

    <!-- Top Section End -->

    <div class="container">
        <div class="container custom-section-title">
            <h2>{{ $headingsData[0] ?? '' }}</h2>
        </div>

        <div class="row custom-section">
            <div class="col-md-6 custom-image-container">
                <img src="{{ asset('images/select1.webp') }}" alt="Find Logo" title="Find Logo">
            </div>
            <div class="col-md-6 custom-content-container">
                <div class="custom-content">
                    <h2 style="font-weight:700;">{{ $cmsData[0]['title'] ?? '' }}</h2>
                    {!! $cmsData[0]['content'] ?? '' !!}
                </div>
            </div>
        </div>

        <div class="row custom-section">
            <div class="col-md-6 custom-content-container">
                <div class="custom-content">
                    <h2 style="font-weight:700;">{{ $cmsData[1]['title'] ?? '' }}</h2>
                    {!! $cmsData[1]['content'] ?? '' !!}
                </div>
            </div>
            <div class="col-md-6 custom-image-container">
                <img src="{{ asset('images/Personalization.webp') }}" alt="personalized Logo Design"
                    title="personalized Logo Design">
            </div>
        </div>

        <div class="row custom-section">
            <div class="col-md-6 custom-image-container">
                <img src="{{ asset('images/Start Branding.webp') }}" alt="Free Logo Download Maker"
                    title="Free Logo Download Maker">
            </div>
            <div class="col-md-6 custom-content-container">
                <div class="custom-content">
                    <h2 style="font-weight:700;">{{ $cmsData[2]['title'] ?? '' }}</h2>
                    {!! $cmsData[2]['content'] ?? '' !!}
                </div>
            </div>
        </div>

        <div class="container custom-logo-section">
            <h2>Start Making Custom {{ $categoryObj['name'] ?? '' }} Logos Now!</h2>
            <form class="form-inline" id="companyForm3" method="POST" action="{{ url('/store-session-data') }}">
                @csrf
                <input type="text" class="form-control custom-form-control" id="companyName2" name="company"
                    placeholder="Search" aria-label="Enter your company name" required maxlength="30">
                <input type="hidden" name="flow" value="category">
                <input type="submit" class="btn custom-btn-generate" value="Generate Logo">
            </form>
        </div>




        <div class="container custom-section-title">
            <h2>{{ $headingsData[1] ?? '' }}</h2>
        </div>

        <div class="row custom-section">
            <div class="col-md-6 custom-content-container">
                <div class="custom-content">
                    <h2 style="font-weight:700;">{{ $cmsData[3]['title'] ?? '' }}</h2>
                    {!! $cmsData[3]['content'] ?? '' !!}
                </div>
            </div>
            <div class="col-md-6 custom-image-container">
                <img src="{{ asset('images/Logo Symbol.webp') }}" alt="Icon Creator for Logo"
                    title="Icon Creator for Logo">
            </div>
        </div>

        <div class="row custom-section">
            <div class="col-md-6 custom-image-container">
                <img src="{{ asset('images/Color Choices.webp') }}" alt="Color Choices for Logo"
                    title="Color Choices for Logo">
            </div>
            <div class="col-md-6 custom-content-container">
                <div class="custom-content">
                    <h2 style="font-weight:700;">{{ $cmsData[4]['title'] ?? '' }}</h2>
                    {!! $cmsData[4]['content'] ?? '' !!}
                </div>
            </div>
        </div>

        <div class="row custom-section">
            <div class="col-md-6 custom-content-container">
                <div class="custom-content">
                    <h2 style="font-weight:700;">{{ $cmsData[5]['title'] ?? '' }}</h2>
                    {!! $cmsData[5]['content'] ?? '' !!}
                </div>
            </div>
            <div class="col-md-6 custom-image-container">
                <img src="{{ asset('images/Fonts.webp') }}" alt="logo Font Generator" title="logo Font Generator">
            </div>
        </div>

        <div class="row custom-section">
            <div class="col-md-6 custom-image-container">
                <img src="{{ asset('images/Logo Styles.webp') }}" alt="Logotype Generator" title="Logotype Generator">
            </div>
            <div class="col-md-6 custom-content-container">
                <div class="custom-content">
                    <h2 style="font-weight:700;">{{ $cmsData[6]['title'] ?? '' }}</h2>
                    {!! $cmsData[6]['content'] ?? '' !!}
                </div>
            </div>
        </div>

        <div class="container custom-logo-section">

            <h2>Start Making Custom {{ $categoryObj['name'] ?? '' }} Logos Now!</h2>

            <form class="form-inline" id="companyForm3" method="POST" action="{{ url('/store-session-data') }}">
                @csrf
                <input type="text" class="form-control custom-form-control" id="companyName2" name="company"
                    placeholder="Search" aria-label="Enter your company name" maxlength="30" required>
                <input type="hidden" name="flow" value="category">
                <input type="submit" class="btn custom-btn-generate" value="Generate Logo">
            </form>
        </div>
    </div>

    {{-- <div class= "faqs" style= "background: #f6f9ff; margin-top:50px;">
        <div class="container faq-section">
            <h2 class="text-center mb-4">Frequently Asked Questions About {{ $categoryObj['name'] ?? '' }} Logos</h2>
            <div id="accordion">

                @foreach ($faqData as $i => $faq)
                    <div class="card">
                        <div class="card-header" id="heading{{ $i + 1 }}">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse"
                                    data-target="#collapse{{ $i + 1 }}" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    <span class="faq-question">{{ $faq['title'] }}</span>

                                </button>
                            </h5>
                        </div>

                        <div id="collapse{{ $i + 1 }}" class="collapse"
                            aria-labelledby="heading{{ $i + 1 }}" data-parent="#accordion">
                            <div class="card-body">{{ $faq['content'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div> --}}



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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="{{ asset('js/ajaxSetup.js') }}"></script>

    <script>
        $('#companyForm').on('submit', function(event) {
            const companyName = $('#companyName11').val().trim();
            if (!companyName) {
                event.preventDefault();
                alert("Please enter your company name.");
            }

            {{--
            @auth
            @else
                event.preventDefault()
                location.assign("{{ route('login') }}")
            @endauth
            --}}
        })

        $('.fav-icon').click(function() {
            const favIconEl = $(this)
            if (favIconEl.hasClass('text-danger')) {
                const productId = favIconEl.attr('data-product-id')
                $.ajax({
                    url: "{{ route('favourite.add') }}",
                    method: 'POST',
                    data: {
                        productId,
                    },
                    success: function(response) {
                        if (response.success) {
                            swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: "Logo added to favourites!"
                            })
                            favIconEl.removeClass('text-danger')
                            favIconEl.addClass('text-success')
                            favIconEl.attr('data-favourite-id', response.favourite_id)
                        } else {
                            swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: "Unexpected error. Please try again later!!"
                            })
                        }
                    },
                })
            } else {
                const favId = favIconEl.attr('data-favourite-id')
                $.ajax({
                    url: "{{ route('favourite.remove', 11111) }}".replace('11111', favId),
                    method: 'DELETE',
                    success: function(response) {
                        if (response.success) {
                            swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: "Logo removed from favourites!"
                            })
                            favIconEl.removeClass('text-success')
                            favIconEl.addClass('text-danger')
                        } else {
                            swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: "Unexpected error. Please try again later!!"
                            })
                        }
                    },
                })
            }
        })
    </script>
@endsection
