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

<div class="container-fluid position-relative" style="background-color:#080a2d; padding-bottom: 100px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 banner-left order-lg-1">
                <h2 style="color:#fff; font-weight:700;"><span class="logo-design-color">Printing</span> Packages</h2>
                <p style="color:#fff;">Now You Can Print Without a Worry.</p>
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
                <h2>Can't Afford to Print Business Cards, Flyers, Stationery or Even Employee T-shirts?</h2>
                <p>If you’re a startup or small business owner with a tight budget, afraid of the skyrocket pricing of printing visiting cards, letterheads, brochure or even t-shirts, then we understand your concerns.</p>
                <p>When every cent makes a difference, why waste it on expensive printing materials that you can’t afford? Still, you need visiting cards to give to clients, flyers to drop, and letters to write.</p>
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
                <h2>Now You Can Print Without a Worry</h2>
                <p>What if we tell you, you can enjoy beautiful printed materials without breaking the bank?<br> In fact we’ll show you that you can.</p>
                <p>With RFSLogoDesign as a branding partner, now you can get all printing done without a worry in the world. We have been in the business
                    for more than 15 years so we know all about small business branding, and printing marketing materials is an essential need.</p>
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
                <h2>Call the Prints You Want</h2>
                <p>At RFSLogoDesign we provide top notch printing solutions for small business and startups at affordable pricing because we understand your needs (and pocket).</p>
                <p>For all RFSLogoDesign design templates we offer printing services:</p>

                <ul>
                    <li>Visiting Cards</li>
                    <li>Brochures</li>
                    <li>Flyers</li>
                    <li>Stationery</li>
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
            <h2>Quality or Quantity Printing That’s Up to You</h2>
            <p>Whether you want a few letterheads or thousands of business cards,
                you can get them printed in whatever quantity or quality you like.
                Just select a printing service and contact us at <a href="mailto:support@rfslogodesign.com">support@rfslogodesign.com</a> or
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
