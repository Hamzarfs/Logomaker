<!-- resources/views/site/main.blade.php -->
@extends('site.common')

@section('title', 'About us')

@section('content')

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .text-justify {
            text-align: justify !important;
            color: #fff;
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
                <h2>Turn Your Visions Into Reality</h2>
                <p style="text-align:justify;">
                Welcome to RFS Logo Design, your ultimate destination for all things branding. Whether 
                you are using our free logo maker or opting for <a href="{{ url('/logo-maker') }}" style="color:#512F90;"><b>custom logo design services</b></a>, we craft unique 
                and impactful logos tailored to your vision.
                </p>
                <p style = text-align:justify;>Our expert graphic designers are dedicated to bringing your ideas to life, while our top-notch 
                website development services ensure your online presence matches your brand's strength.</p>
                <p>At RFS, we guarantee a smooth journey with responsive support at every turn.</p>
            </div>
            <div class="col-lg-6 about-image-section-v3">
  <img src="images/laptops 1 (1).png" alt="Descriptive Image Text" class="slow-bounce small-image">
</div>

        </div>
    </div>

    <!---------our work---------->


    <div class="container our-work-section">
    <h3>Our Work</h3>
    <p>Boost your business with a custom logo crafted by our expert freelance designers. After all,</p>
    <p style= margin-top:-15px;>great design drives success and allows you to differentiate yourself in the competitive market landscape of today.</p>
    <p style= margin-top:-15px;>market landscape of today.</p>


    
</div>

<div class="container fun-easy-process-section">
<div class="row align-items-center">
        <div class="col-md-6">
            <img src="images/fun.png" alt="Fun and Easy Process" class="img-fluid">
        </div>
        <div class="col-md-6" style="padding-left: 50px;">
            <h4>Fun and Easy<br>Process</h4>
            <div class="divider"></div>
            <p>Choose from a variety of options and enjoy a</p>
            <p style= margin-top:-15px;>smooth design experience.</p>

        </div>
    </div>
</div>

<div class="container top-designers-section">
    <div class="row align-items-center">
        <div class="col-md-6 order-md-2">
            <img src="images/top design.png" alt="Top Designers" class="img-fluid">
        </div>
        <div class="col-md-6 order-md-1"style="padding-left: 50px;">
            <h4>Top<br>Designers</h4>
            <div class="divider"></div>
            <p>Work with vetted professionals who deliver</p>
            <p style= margin-top:-15px;>high-quality results.</p>
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
            <p>Receive digital and print-ready files to use</p>
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
