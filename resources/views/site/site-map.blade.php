@extends('site.common')

@section('title', 'Sitemap - RFS Logo Design')
@section('meta_desc', 'Explore the RFS Logo Design sitemap to easily navigate our website. Find links to all pages, including services, FAQs, contact information, and more.')

@section('content')

    {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"> --}}
    <style>
        .sitemap {
            width: 100%;
            padding: 20px 0;
        }

        .sitemap-container {
            border-radius: 10px;
            padding: 20px;
        }

        .sitemap h1 {
            color: #512f90;
            margin-bottom: 30px;
            font-weight: 800;
            font-size: 28px;
            text-align: center;
            margin-top: 30px;
        }

        .sitemap-item {
            padding: 15px;
            margin-bottom: 20px;
            transition: transform 0.3s;
        }

        .sitemap-item:hover {
            transform: scale(1.02);
        }

        .sitemap-item a {
            text-decoration: none;
            color: #646bd9;
            font-weight: 600;
            display: block;
        }

        .sitemap-item a:hover {
            color: #512f90;
        }

        .sitemap-item .fa {
            font-size: 20px;
            margin-right: 10px;
            color: #512f90;
        }

        .sitemap ul {
            list-style-type: disc;
            padding-left: 20px;
        }

        .sitemap ul ul {
            padding-left: 20px;
        }

        .sitemap ul ul li {
            margin-bottom: 10px;
        }

        .sitemap ul li::marker {
            color: #512f90;
        }

        .sitemap-item h4 {
            font-size: 22px;
            margin-bottom: 15px;
            line-height: 1.2;
            color: #333;
            font-weight: 700;
        }

        .divider-logo {
            height: 2px;
            background-color: #512f90;
            margin: 40px 0;
        }

        .logo-ideas-link {
            text-decoration: none;
            color: #646bd9;
            font-weight: 600;
        }
    </style>

    <div class="sitemap">
        <div class="container sitemap-container">
            <h1>Site Map</h1>
            <div class="row">
                <div class="col-md-3">
                    <div class="sitemap-item">
                        <h4>Free Design Tool</h4>
                        <ul class="list-unstyled">
                            <li><a href="{{ route('logo-maker') }}">Logo Maker</a></li>
                            <li><a href="{{ url('custom-logo') }}">Custom Design</a></li>
                            <li><a href="{{ url('printing') }}">Print Services</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sitemap-item">
                        <h4>Information</h4>
                        <ul class="list-unstyled">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('about-us') }}">About Us</a></li>
                            <li><a href="{{ url('contact-us') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sitemap-item">
                        <h4>Customer Zone</h4>
                        <ul class="list-unstyled">
                            <li><a href="{{ url('/frequently-asked-question') }}">FAQ</a></li>
                            <li><a href="{{ url('/how-it-works') }}">How it Works</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sitemap-item">
                        <h4>Our Top Locations</h4>
                        <ul class="list-unstyled">
                            <li><a href="{{ url('/logo-design-california') }}">California Logo Design</a></li>
                            <li><a href="{{ url('/logo-design-florida') }}">Florida Logo Design</a></li>
                            <li><a href="{{ url('/logo-design-texas') }}">Texas Logo Design</a></li>
                            <li><a href="{{ url('/logo-design-pennsylvania') }}">Pennsylvania Logo Design</a></li>
                            <li><a href="{{ url('/logo-design-illinois') }}">Illinois Logo Design</a></li>
                            <li><a href="{{ url('/logo-design-ohio') }}">Ohio Logo Design</a></li>
                            <li><a href="{{ url('/logo-design-new-jersey') }}">New Jersey Logo Design</a></li>
                            <li><a href="{{ url('/logo-design-arizona') }}">Arizona Logo Design</a></li>
                            <li><a href="{{ url('/logo-design-new-york') }}">New York Logo Design</a></li>
                            <li><a href="{{ url('/logo-design-virginia') }}">Virginia Logo Design</a></li>
                        </ul>
                    </div>
                </div>
                <div class="divider-logo"></div>
                <div class="col-md-4">
                    <div class="sitemap-item">
                        <h4>Other services</h4>
                        <ul class="list-unstyled">
                            <li><a href="{{ url('stationery-designing') }}">Stationery Designing</a></li>
                            <li><a href="{{ url('graphic-designing') }}">Graphic Designing</a></li>
                            <li><a href="{{ url('website-design-development') }}">Website Design Development</a></li>
                            <li><a href="{{ url('custom-website-design-development') }}">Custom Website Design Development</a></li>
                            <li><a href="{{ url('wordpress-website-development') }}">Wordpress Website Development</a></li>
                            <li><a href="{{ url('shopify-website-development') }}">Shopify Website Development</a></li>
                            <li><a href="{{ url('e-commerce-website-development') }}">E-commerce Website Development</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="divider-logo"></div>
            <!-- Logo Ideas Section -->
            <div class="sitemap-item">
                <h4>Categories</h4>
                <div class="row">
                    @foreach ($categories as $index => $category)
                        @if ($index % 4 == 0)
                            @if ($index != 0)
                            </div>
                            @endif
                <div class="col-md-3">
                    <ul class="list-unstyled">
                        @endif
                        <li><a href="{{ url('/logos/' . $category->slug) }}"
                                class="logo-ideas-link">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}

@endsection
