<!-- resources/views/site/main.blade.php -->
@extends('site.common')

@section('title', 'Professional Stationery Designing Services - RFS Logo Design')
@section('meta_desc', 'Elevate your brand identity with RFS Logo Design professional stationery designing services. Get creative branding materials for effective online presence.')

@section('content')

  
    <style>
            a {
           text-decoration: none !important;
        }
        /* Custom Styles */
      .unique-main-container {
            max-width: 1400px; /* Set the width to 1400px */
            margin: 0 auto;    /* Center the content */
        }

        .unique-news-section .unique-card img {
            max-height: 150px;
            object-fit: cover;
        }
        .unique-sidebar-text{
            text-align: justify;
            color: #5d5d5d;
        }

        .unique-about-company,
        .unique-categories,
        .unique-tags {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 12px;
        }
        .unique-sidebar-image {
            width: 100%; /* Adjusts the image to the full width of the sidebar */
            margin-top: 15px; /* Adds some space above the image */
            border-radius: 8px; /* Optional: rounds the image corners */
        }
        .unique-sidebar-btn {
            background-color: transparent; 
            color: #000; 
            text-decoration: none;
            font-weight: 400; 
            font-size: 14px; 
            display: inline-block;
            text-align: center; 
            margin-bottom: 4px; 
            border: 1px solid #000; 
            border-radius: 4px; 
            padding: 6px ; 
        }
        .unique-sidebar-btn:hover .unique-sidebar-link-tag  {
            color: #000; /* Slightly lighter text color on hover */
        }

        @media (max-width: 768px) {
            .unique-sidebar-btn {
                width: 100%; /* Full width on smaller screens */
            }
        }
            

    </style>

    <!------------- Start Banner -------------->
    <div class="about-us-section" style="background-image: url('images/BLIODIMAGE.jpg'); background-size: cover; background-position: center; padding: 100px 0;">
    <div class="container mt-5">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-12 text-center about-us-content">
                        <h1 style="font-weight: 700; font-size: 42px; color: #fff;">
                            Blogs</h1>
                        <p style="color: #fff;">
                        Dedicated team, innovative solutions, customer-focused, driven by</p>
                        <p style= "margin-top:-15px; color: #fff;">passion and excellence.</p>

                    </div>
                </div>
            </div>
        </div>

<!-------------End Banner -------------->



    <!-- Main Content -->
    <div class="container my-5 unique-main-container">
        <div class="row unique-row">
            <!-- News Section -->
            <div class="col-lg-8 unique-news-section">
                <div class="row g-4 unique-news-row">
                    <!-- Post 1 -->
                    <div class="col-md-6 unique-news-col">
                        <div class="card unique-card">
                            <img src="{{ url('images/Envelope Design04.png') }}" class="card-img-top unique-card-img" alt="Post 1">
                            <div class="card-body unique-card-body">
                                <h5 class="card-title unique-card-title">The 2024 Watering Season Begins</h5>
                                <p class="card-text unique-card-text">We water the trees...</p>
                                <a href="#" class="btn btn-link unique-read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Post 2 -->
                    <div class="col-md-6 unique-news-col">
                        <div class="card unique-card">
                        <img src="{{ url('images/Envelope Design.png') }}" class="card-img-top unique-card-img" alt="Post 2">
                            <div class="card-body unique-card-body">
                                <h5 class="card-title unique-card-title">The 2024 Watering Season Begins</h5>
                                <p class="card-text unique-card-text">We water the trees...</p>
                                <a href="#" class="btn btn-link unique-read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Post 3 -->
                    <div class="col-md-6 unique-news-col">
                        <div class="card unique-card">
                        <img src="{{ url('images/email.png') }}" class="card-img-top unique-card-img" alt="Post 3">
                            <div class="card-body unique-card-body">
                                <h5 class="card-title unique-card-title">The 2024 Watering Season Begins</h5>
                                <p class="card-text unique-card-text">We water the trees...</p>
                                <a href="#" class="btn btn-link unique-read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Post 4 -->
                    <div class="col-md-6 unique-news-col">
                        <div class="card unique-card">
                             <img src="{{ url('images/BRANDING.png') }}" class="card-img-top unique-card-img" alt="Post 4">
                            <div class="card-body unique-card-body">
                                <h5 class="card-title unique-card-title">The 2024 Watering Season Begins</h5>
                                <p class="card-text unique-card-text">We water the trees...</p>
                                <a href="#" class="btn btn-link unique-read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Post 5 -->
                    <div class="col-md-6 unique-news-col">
                        <div class="card unique-card">
                             <img src="{{ url('images/latterhead01.webp') }}" class="card-img-top unique-card-img" alt="Post 5">
                            <div class="card-body unique-card-body">
                                <h5 class="card-title unique-card-title">The 2024 Watering Season Begins</h5>
                                <p class="card-text unique-card-text">We water the trees...</p>
                                <a href="#" class="btn btn-link unique-read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Post 6 -->
                    <div class="col-md-6 unique-news-col">
                        <div class="card unique-card">
                             <img src="{{ url('images/Logo Pics.png') }}" class="card-img-top unique-card-img" alt="Post 6">
                            <div class="card-body unique-card-body">
                                <h5 class="card-title unique-card-title">The 2024 Watering Season Begins</h5>
                                <p class="card-text unique-card-text">We water the trees...</p>
                                <a href="#" class="btn btn-link unique-read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

            <!-- Sidebar -->
<div class="col-lg-4 unique-sidebar">
    <!-- About Company -->
    <div class="unique-about-company">
        <h5 class="unique-sidebar-heading">About Company</h5>
        <p class="unique-sidebar-text">At RFS Logo Design, we turn your ideas into reality with custom 
        logos and expert design services. Our top-tier website development and responsive support ensure your 
        brand stands out online.</p>
        <!-- Add Image Here -->
        <img src="{{ url('images/laptops 1 (1).png') }}" alt="Descriptive Image Text" class="slow-bounce small-image">
    </div>
    <!-- Recent Posts -->
    <div class="unique-about-company">
        <h5 class="unique-sidebar-heading">Most Recent Posts</h5>
        <ul class="unique-sidebar-list">
            <li><a href="#" class="unique-sidebar-link">The 2024 Watering Season Begins</a></li>
            <li><a href="#" class="unique-sidebar-link">Planting Season Ends</a></li>
        </ul>
    </div>
        <!--Tags -->
    <div class="unique-about-company">
    <h5 class="unique-sidebar-heading">Tags</h5>
    <ul class="unique-sidebar-tags">
        <button class="unique-sidebar-btn"><a href="#" class="unique-sidebar-link-tag">UI/UX Design</a></button>
        <button class="unique-sidebar-btn"><a href="#" class="unique-sidebar-link-tag">Logo Design</a></button>
        <button class="unique-sidebar-btn"><a href="#" class="unique-sidebar-link-tag">Stationery Design</a></button>
        <button class="unique-sidebar-btn"><a href="#" class="unique-sidebar-link-tag">Graphic Designing</a></button>
        <button class="unique-sidebar-btn"><a href="#" class="unique-sidebar-link-tag">Website Design</a></button>
        <button class="unique-sidebar-btn"><a href="#" class="unique-sidebar-link-tag">WordPress Website</a></button>
    </ul>
   </div>
    <!-- Recent Posts -->
    <div class="unique-about-company">
        <h5 class="unique-sidebar-heading">Contact Us</h5>
        <ul class="unique-sidebar-list">
        <a href="tel:+15516665255" class="phone-btn">+1 (551) 666-5255 |</a>
        <a href="tel:+15516665255" class="chat-btn">Live Chat with Expert</a>
        </ul>
    </div>


    
</div>
        </div>
    </div>

@endsection
