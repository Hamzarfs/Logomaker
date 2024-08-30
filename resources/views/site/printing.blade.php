@extends('site.common')

@section('title', 'printing')

@section('content')

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Poppins Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet"> <!-- Link to the external CSS file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">



    <!-- ------------------Start FAQs --------------- -->

<div class="container-fluid position-relative" style="background-color:#6868D1; padding-bottom: 100px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 banner-left order-lg-1">
                <h2 style="color:#fff; font-weight:700;"><span class="logo-design-color">Printing</span> Plans</h2>
                <p style="color:#fff;">Printing Made Easier</p>
            </div>
            <div class="col-lg-6 text-center banner-image-sec order-lg-2">
                <img src="images/print(1).png" alt="Example" class="img-fluid">
            </div>
        </div>
    </div>
    <div class="wave"></div>
</div>

<!-------------------- Start 1st section ------------------>

<section class="print-material-section">
    <div class="container">
        <div class="row">
            <div class="col-md-5 image-container">
                <img src="images/print22(1).png" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-7 content">
                <h2 style= font-size:1.6em;> Is the cost of printing business cards, stationery, flyers, and other materials beyond your budget?</h2>
                <p style = text-align:justify;>With the ever-rising prices of printing letterheads, brochures, t-shirts, and visiting cards, small businesses and startups don’t have it easy.</p>
                <p style = text-align:justify;>We understand how important it is for you to have visiting cards for your clients, flyers to advertise, and letters to send everywhere. So, why even 
                think of wasting your money on expensive printing materials that you can’t afford with your tight budget?</p>
            </div>
        </div>
    </div>
</section>

<!-------------------- End 1st section ------------------>


<!-------------------- Start 2nd section ------------------>

<section class="print-material-section" style="background-color: #e0e6f8;">
    <div class="container">
        <div class="row">
            <div class="col-md-7 content">
            <h2 style= font-size:1.6em;>Stress-Free Printing </h2>
                <p style = text-align:justify;>Still wondering how to get the best quality printing materials at the best prices? No need to worry, because we have got your back!</p>
                <p style = text-align:justify;>With RFS Logo Design as your branding partner, rates and quality will be the least of your concerns. Our experience spans over more than 
                15 years, so we know about everything there is about the world of marketing material for print and branding for small businesses.</p>
            </div>
            <div class="col-md-5">
                <img src="images/print1212(1).png" alt="Image" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-------------------- End 2nd section ------------------>


<!-------------------- Start 3rd section ------------------>

<section class="print-material-section">
    <div class="container">
        <div class="row">
            <div class="col-md-5 image-container">
                <img src="images/print3(1).png" alt="Image" style="margin-top:50px;" class="img-fluid">
            </div>
            <div class="col-md-7 content">
            <h2 style= font-size:1.6em;>Get All the Prints You Need</h2>
                <p>RFS Logo Design offers high-quality yet affordable printing solutions for startups and small businesses.</p>
                <p>We provide printing services for all of the RFS Logo Design templates, including:</p>

                <ul>

                    <li>Brochures</li>
                    <li>Flyers</li>
                    <li>Stationery Items</li>
                    <li>Business Cards</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-------------------- End 3rd section ------------------>


<!-------------------- Start Full Width Image Section ------------------>
<section class="full-width-image-section">
    <img src="images/fullwidth image.png" alt="Full Width Image">
</section>
<!-------------------- End Full Width Image Section ------------------>


    <!-------------------- Start Boxed Section ------------------>
    <section class="boxed-section">
        <div class="container">
        <h2 style= font-size:1.6em;>Flexible Printing Options</h2>
            <p>Choose your preferred quantity and quality, and get your materials printed without a worry. 
            All you have to do is pick out a printing service and reach out to us at 
            <a href="mailto:support@rfslogodesign.com">support@rfslogodesign.com</a> or 
                call us at <a href="tel:+15516665255">+1 (551) 666-5255</a>.</p>
                <a href="{{ url('contact-us') }}" class="california-button-online">Get Started</a>

        </div>
    </section>
    <!-------------------- End Boxed Section ------------------>


    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection
