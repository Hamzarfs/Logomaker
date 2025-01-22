<!-- resources/views/site/main.blade.php -->
@extends('site.common')

@section('title', 'About Us - RFS Logo Design')
@section('meta_desc', 'Learn about RFS Logo Design, a trusted provider of professional logo creation services. Discover our mission, values, and commitment to helping brands stand out.')
@section('content')

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .text-justify {
            text-align: justify !important;
            color: #fff;
        }
        a{
            text-decoration: none !important;
        }
    

    </style>

<!------------- Start About Us Banner -------------->
<div class="about-us-section">

    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-12 text-center about-us-content">
                <h1 style="font-weight: 700; font-size: 42px; color: #fff;">
                    Get to Know Us</h1>
                <p style="color: #fff;">
                Dedicated team, innovative solutions, customer-focused, driven by</p>
                <p style= "margin-top:-15px; color: #fff;">passion and excellence.</p>

            </div>
        </div>
    </div>
</div>

    <!-------------End Abouts Us Banner -------------->


    <!---------start Why Choose RFS Logo Design? --------->
    <div class="container custom-container-margin-v3">
        <div class="row align-items-center">
            <div class="col-lg-6 custom-text-section-v3">
                <h2>UNLEASH YOUR VISION</h2>
                <p style="text-align:justify;">
                Welcome to your one-stop solution, RFS Logo Design, and watch your thoughts become a reality. 
                Dive into making your free logo or opt for our expert graphic designers to transform your ideas 
                into stunning visuals with our </a> or opting for <a href="{{ url('/custom-logo') }}" style="color:#512F90;"><b>custom logo design services</b></a>, we are here to create a lasting worthwhile impression on your client. We believe in creating a premier haven for your exceptional branding needs. 
                Hence, this place is the ultimate hub for all your branding problems. </p>
                <p style = text-align:justify;>At RFS, we're committed to ensuring our top-tier website development services 
                enhance your brand's online presence and make your journey effortless, with a responsive support system ready 
                to assist you at every step.</p>
            </div>
            <div class="col-lg-6 about-image-section-v3">
  <img src="images/laptops 1 (1).png" alt="Descriptive Image Text" class="slow-bounce small-image">
</div>

        </div>
    </div>

    <!---------our work---------->


    <div class="container our-work-section">
    <h3>Our Portfolio</h3>
    <p>Through a creative fusion, RFS designs each logo to express the distinct character of your brand. </p>
    <p style= margin-top:-15px;>Through a creative fusion, RFS designs each logo to express the distinct character of your brand. Our talented in-house logo designers combine a keen understanding of current marketing trends with artistic flair to create a wide variety of logo designs that will effectively connect with your target market. Explore our collection to see how we transform ideas into visual branding that make a powerful impact.</p>
    <p style= margin-top:-15px;>market landscape of today.</p>



</div>

<div class="container fun-easy-process-section">
<div class="row align-items-center">
        <div class="col-md-6">
            <img src="images/fun.png" alt="Fun and Easy Process" class="img-fluid">
        </div>
        <div class="col-md-6" style="padding-left: 50px;">
            <h4>SEAMLESS <br>EXPERIENCE</h4>
            <div class="divider"></div>
            <p style=text-align:justify;>Explore a vast range of cutting-edge, colorful, and dynamic options, providing a seamless design experience that makes achieving your vision effortless and enjoyable.</p>

        </div>
    </div>
</div>

<div class="container top-designers-section">
    <div class="row align-items-center">
        <div class="col-md-6 order-md-2">
            <img src="images/top design.png" alt="Top Designers" class="img-fluid">
        </div>
        <div class="col-md-6 order-md-1"style="padding-left: 50px;">
            <h4>TEAM <br>EXPERIENCE</h4>
            <div class="divider"></div>
            <p style=text-align:justify;>RFS provides working with talented designers who merge innovative creative ideas with strategic insight to fulfill 
            your needs. From sleek, modern designs to novel creations our expert team aims to create logos that will give your brand 
            meaning and make a lasting impression.</p>
        </div>
    </div>
</div>

<div class="container full-ownership-section">
    <div class="row align-items-center">
        <div class="col-md-6">
            <img src="images/owner.png" alt="Full Ownership" class="img-fluid">
        </div>
        <div class="col-md-6" style="padding-left: 50px;">
            <h4>Full<br>Ownership</h4>
            <div class="divider"></div>
            <p style=text-align:justify;>An instant download feature that gives you complete authority over your efforts and creativity. RFS provides you with digital files perfectly 
            prepared for print one click away to be used in any manner you opt for.  </p>
            <p style= margin-top:-15px;>however you like.</p>

        </div>
    </div>
</div>


    <!---------our work---------->

    <div class="full-width-section">
        <div class="container-boxed">
            <div class="heading-row">
                <div class="heading" id="mission-heading" onclick="toggleContent('mission')">
                    <img id="mission-img" src="images/mission2.png" alt="Mission Image" style="display: inline-block; width: 30px; height: 30px; margin-right: 10px;">
                    Our Mission
                </div>
                <div class="heading" id="vision-heading" onclick="toggleContent('vision')">
                    <img id="vision-img" src="images/vission2.png" alt="Vision Image" style="display: inline-block; width: 30px; height: 30px; margin-right: 10px;">
                    Our Vision
                </div>
            </div>

            <div id="mission" class="section-content">
                <div class="section-divider"></div>
                <p style=text-align:justify;>Our mission is to revolutionize design with accessible, high-quality solutions. Using our logo maker, we support businesses of all sizes, sparking creativity and innovation. Our user-friendly tools and top-notch customer service make the design process simple and boost your brand’s identity.</p>
                <p style=text-align:justify;>To hit our mission, RFS focuses on using the latest tech for top-notch, accessible designs, and we back it up with great customer support. We keep our pricing reasonable, so you get the right bang for your buck, update our tools to spark creativity, and give complete creative freedom to our talented designers to craft unique logos that make brands shine!</p>
            </div>

            <div id="vision" class="section-content">
                <div class="section-divider"></div>
                <p style=text-align:justify;>Our vision is to make top-notch graphic design accessible to everyone with our cutting-edge logo maker. We cater to entrepreneurs, small businesses, web designers, visual artists, and more, offering unlimited logo design concepts to spark creativity and elevate design standards across the board.</p>
            </div>
        </div>
    </div>


    <!-------------start Why Choose RFS Logo Design? ------------------ */ -->


    <div class="container custom-section-logo">
        <h3>Why Choose RFS LOGO DESIGN?</h3>
        <p>Our expert designers craft unique, impactful logos tailored to your brand.</p>
        <p>Experience top-notch creativity and support with RFS, your go-to branding partner.</p>
        <p>We strive to produce designs that are:</p>

        <div class="text-slider">
            <div class="slide active">Reflective of your brand</div>
            <div class="slide">Crafted with precision</div>
            <div class="slide">Unique illustrations</div>
        </div>

        <a href="{{ url('/logo-maker') }}" class="slider-button" >Learn More</a>



        </div>
    </section>
    <!---------End Why Choose RFS Logo Design? ---------->



    <script>
        const slides = document.querySelectorAll('.text-slider .slide');
        let currentSlide = 0;

        function showNextSlide() {
            slides[currentSlide].classList.remove('show');
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].classList.add('show');
        }

        setInterval(showNextSlide, 2000); // Change slide every 3 seconds
    </script>
       <script>
        function toggleContent(id) {
            // Hide all content and dividers
            var contents = document.querySelectorAll('.section-content');
            contents.forEach(function(content) {
                content.classList.remove('show');
            });

            // Remove active class from all headings
            var headings = document.querySelectorAll('.heading');
            headings.forEach(function(heading) {
                heading.classList.remove('active');
            });

            // Show the selected content and divider
            var selectedContent = document.getElementById(id);
            selectedContent.classList.add('show');

            // Add active class to the clicked heading
            var heading = document.querySelector('.heading[onclick="toggleContent(\'' + id + '\')"]');
            heading.classList.add('active');

            // Change the images based on the active tab
            if (id === 'mission') {
                document.getElementById('mission-img').src = 'images/mission hover.png'; // Change image for active mission
                document.getElementById('vision-img').src = 'images/vission.png'; // Reset vision image
            } else if (id === 'vision') {
                document.getElementById('vision-img').src = 'images/vissionhover.png'; // Change image for active vision
                document.getElementById('mission-img').src = 'images/mission.png'; // Reset mission image
            }
        }

        // Set default active tab
        document.addEventListener('DOMContentLoaded', function() {
            toggleContent('mission'); // Set default tab
        });
    </script>
    <script>
        document.getElementById('tab-mission').addEventListener('click', function() {
            document.getElementById('content-mission').classList.add('show');
            document.getElementById('content-vision').classList.remove('show');
            document.getElementById('tab-mission').classList.add('active');
            document.getElementById('tab-vision').classList.remove('active');
        });

        document.getElementById('tab-vision').addEventListener('click', function() {
            document.getElementById('content-vision').classList.add('show');
            document.getElementById('content-mission').classList.remove('show');
            document.getElementById('tab-vision').classList.add('active');
            document.getElementById('tab-mission').classList.remove('active');
        });
    </script>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection
