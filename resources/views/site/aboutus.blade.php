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

    <!------------- Start Abouts Us Banner -------------->
<div class="about-us-section">
    <div class="container mt-5">
        <div class="row align-items-center">
            <div class="col-lg-6 about-us-left order-lg-1">
                <h1 style="font-weight:700; font-size: 42px; color:#fff;">Hello From<span class="logo-design-color"> RFS!</span></h1>
                <p style="color: #fff;">Unleash Your Creativity!</p>
                <form>
                    <a href="{{ url('/logo-maker') }}" class="custom-button-online" type="submit">Get Started</a>
                </form>
            </div>
            <div class="col-lg-6 text-center about-us-image-sec order-lg-2">
                <img src="images/about-us-logo.png" alt="About RFS Logo Design" title= "About RFS Logo Design" class="img-fluid">
            </div>
        </div>
    </div>
</div>
    <!-------------End Abouts Us Banner -------------->


    <!---------start Why Choose RFS Logo Design? --------->
    <section class="choose-us-section">
        <div class="container">
            <div class="choose-us-content">
           <h2 style="font-weight:700; font-size:24px;">Turn Your Visions Into Reality</h2>
                <p style = " text-align:center;">Welcome to RFS Logo Design, your ultimate destination for all things branding. Whether you are 
                using our free logo maker or opting for <a href="{{ url('/custom-logo') }}" >custom design services</a>, we craft unique and impactful logos tailored to your vision.</p>
                <p style = " text-align:center;">Our expert graphic designers are dedicated 
                to bringing your ideas to life, while our top-notch website development services ensure your online presence matches your brand's strength.</p>
                <p style = " text-align:center;">At RFS, we guarantee a smooth journey with responsive support at every turn.</p>

            </div>
        </div>
    </section>
    <!---------End Why Choose RFS Logo Design? ---------->


    <!---------Strat Our Mission $ Our vision --------->
<section class="vision-section">
  <div class="container">
    <div class="row vision-content">
      <div class="col-md-5 image">
        <img src="images/vission.png" alt="Vision Image">
      </div>
      <div class="col-md-7 text">
        <h2>Our Vision</h2>
        <p style = " text-align:justify;">Our vision is to make top-notch graphic 
            design accessible to everyone with our cutting-edge logo maker. We cater 
            to entrepreneurs, small businesses, web designers, visual artists, and more, 
            offering unlimited logo design concepts to spark creativity and elevate design 
            standards across the board.
        </p>
      </div>
    </div>
  </div>
</section>
<!---------End Our vision-------->



<!------- Start Our Mission ---------> 

<section class="mission-section">
  <div class="container">
    <div class="row mission-content">
      <div class="col-md-7 text">
        <h2>Our Mission</h2>
        <p style = " text-align:justify;">Our mission is to revolutionize design with 
            accessible, high-quality solutions. Using our logo maker, we support businesses 
            of all sizes, sparking creativity and innovation. Our user-friendly tools and top-notch 
            customer service make the design process simple and boost your brand’s identity.
        </p>
        <p style = " text-align:justify;">To hit our mission, RFS focuses on using the latest tech for 
        top-notch, accessible designs, and we back it up with great customer support. We keep our pricing 
        reasonable, so you get the right bang for your buck, update our tools to spark creativity, and give 
        complete creative freedom to our talented designers to craft unique logos that make brands shine!</p>




      </div>
      <div class="col-md-5 image">
        <img src="images/mission.png" alt="Mission Image">
      </div>
    </div>
  </div>
</section>

<!------- End  Our Mission ---------> 







<section class="work-section">
  <div class="container">
    <div class="row work-content">
      <div class="col-md-5 image">
        <img src="images/work-image.png" alt="Work Image">
      </div>
      <div class="col-md-7 text">
        <h2>Our Work</h2>
        <p style = " text-align:justify;">Boost your business with a custom logo crafted by our 
            expert freelance designers. After all, great design drives success and allows you to 
            differentiate yourself in the competitive market landscape of today. 
        </p>
        <ul>
          <li><b>Fun and Easy Process:</b> Choose from a variety of options and enjoy a smooth design experience.</li>
          <li><b>Top Designers:</b> Work with vetted professionals who deliver high-quality results.</li>
          <li><b>Full Ownership:</b> Receive digital and print-ready files to use however you like.</li>
        </ul>
        <p>So, what are you waiting for? This is your time to stand out and make a mark in your field!</p>
      </div>
    </div>
  </div>
</section>



<!-------------start Why Choose RFS Logo Design? ------------------ */ -->

<section class="why-choose-section">
        <div class="container">
            <h2 class="why-choose-heading">Why Choose RFS LOGO DESIGN?</h2>
            <p>Our expert designers craft unique, impactful logos tailored to your brand. 
            Experience top-notch creativity and support with RFS, your go-to branding partner.
            </p>
            <p>We strive to produce designs that are:</p>
            <ul class="why-choose-list">
                <li><i class="fas fa-cog"></i>Crafted with precision</li>
                <li><i class="fas fa-paint-brush"></i>Unique illustrations</li>
                <li><i class="fas fa-bolt"></i>Reflective of your brand</li>
            </ul>
            <a href="{{ url('/logo-maker') }}" class="about-button-online" type="submit">Get Started</a>

            <p><b>Address:</b> 41 Winthrop Rd, Edison, NJ 08817</p>
        </div>
    </section>
<!---------End Why Choose RFS Logo Design? ---------->


    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection
