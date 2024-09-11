@extends('site.common')

@section('title', 'Printing Plans for Business Cards and Flyers - RFS Logo Design')
@section('meta_desc', 'Printing for business cards, flyers, brochures, stationery and merchandise at affordable price. Get your business printing materials for boosting your brand.')

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

      .printing-section2 {
      background-image: url('images/printingbg2.webp');
    background-size: cover;
    background-position: center;
    padding: 100px 0;
    min-height: 100vh;
    display: flex;
    align-items: center;
    margin-bottom: 50px; }

    /* Media query for mobile responsiveness */
    @media (max-width: 767px) {
    .printing-section2 {
        padding: 20px 0;
        min-height: auto;
        margin-bottom: 20px;
        background-position: center;
        background-size: cover;
        background-color: rgba(255, 255, 255, 0.6); /* White overlay with 60% opacity */
    }

    .printing-section2 h2 {
        font-size: 1.5em;
    }

    .printing-section2 p {
        font-size: 1em;
    }
    .container.text-center {
    background: #ffffff99;
}
}
.print-material-section{
    padding-top:50px;
}
   .education-logo-section {
    background-image: url('/images/printingbg1.webp');
    background-size: cover;
       background-position: center;
       padding: 150px 0;
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
       font-size: 25px !important;
       text-align: center;
       margin-bottom: 20px;
   }
   
   
   .education-logo-section p {
       margin-bottom: 20px;
   }
   @media (max-width: 768) {

   .new-testimonial{
    margin-top:0px !important;

   }
   }
   
   </style>
   
<section class="education-logo-section">
    <div class="container">
        <h1>Printing Plans</h1>
        <p>Printing Made Easier</p>

    </div>
</section>


<!-------------------- Start 1st section ------------------>

<section class="print-material-section">
    <div class="container">
        <div class="row">
            <div class="col-md-5 image-container">
                <img src="{{ asset('images/printing 1.png') }}" alt="Image" class="img-fluid">
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

<section class="print-material-section" >
    <div class="container">
        <div class="row">
            <div class="col-md-7 content">
            <h2 style= font-size:1.6em;>Stress-Free Printing </h2>
                <p style = text-align:justify;>Still wondering how to get the best quality printing materials at the best prices? No need to worry, because we have got your back!</p>
                <p style = text-align:justify;>With RFS Logo Design as your branding partner, rates and quality will be the least of your concerns. Our experience spans over more than
                15 years, so we know about everything there is about the world of marketing material for print and branding for small businesses.</p>
            </div>
            <div class="col-md-5">
                <img src="{{ asset('images/printing (1).png') }}" alt="Image" class="img-fluid">
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
                <img src="{{ asset('images/printing (2).png') }}" alt="Image" style="margin-top:50px;" class="img-fluid">
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
{{-- <section class="full-width-image-section">
    <img src="images/fullwidth image.png" alt="Full Width Image">
</section> --}}
<!-------------------- End Full Width Image Section ------------------>


    <!-------------------- Start Boxed Section ------------------>
    <section class="printing-section2">
        <div class="container text-center">
            <h2 style="font-size: 2em; font-weight: bold; margin-bottom: 20px;">Flexible Printing Options</h2>
            <p style="font-size: 1.2em; max-width: 800px; margin: 0 auto;">
                Choose your preferred quantity and quality, and get your materials printed without a worry.
                All you have to do is pick out a printing service and reach out to us at
                <a href="mailto:support@rfslogodesign.com">support@rfslogodesign.com</a> or
                call us at <a href="tel:+15516665255">+1 (551) 666-5255</a>.
            </p>
            <a href="{{ url('contact-us') }}" class="california-button-online" style="margin-top: 20px;">Get Started</a>
        </div>
    </section>

    <section class="new-testimonial my-5">
        <div class="container-fluid">
            <h2 class="text-center">Happy Customers and Counting....</h2>
            <div class="new-testimonial-carousel mt-4">
                <div class="testimonial-card rotate-left ad">
                    <p>❇️❇️❇️❇️❇️</p>
                    {{-- <img src="https://via.placeholder.com/80" alt="Customer 1" class="rounded-circle mb-3"> --}}
                    <h5>Busted Knuckles</h5>
                    <p>I dealt with Ed Harvey through my experience with RFS and he was great! Very polite and helpful.
                        I had drawn a rough sketch of my logo and they brought it to life extremely fast and with
                        perfect accuracy! I would recommend Ed and RFS for anyone looking into getting a logo made!</p>
                </div>
                <div class="testimonial-card rotate-right ad">
                    <p>❇️❇️❇️❇️❇️</p>
                    {{-- <img src="https://via.placeholder.com/80" alt="Customer 2" class="rounded-circle mb-3"> --}}
                    <h5>Madelyn Weingarden</h5>
                    <p>Brian Edwin provided me with excellent service. Anytime I asked him for any edits, he did it
                        promptly. I was very happy with the logos and invoices he created for me. 5 Star Service. Thank
                        you, Brian.</p>
                </div>
                <div class="testimonial-card rotate-left ad">
                    {{-- <img src="https://via.placeholder.com/80" alt="Customer 3" class="rounded-circle mb-3"> --}}
                    <p>❇️❇️❇️❇️❇️</p>
                    <h5>Spanky</h5>
                    <p>Brian Edwin is who I worked with. I made multiple revisions and he delivered on exactly what I
                        wanted and quickly. Highly recommend him and will be using again in the future.</p>
                </div>
                <div class="testimonial-card rotate-right ad">
                    <p>❇️❇️❇️❇️❇️</p>
                    {{-- <img src="https://via.placeholder.com/80" alt="Customer 4" class="rounded-circle mb-3"> --}}
                    <h5>Archelle Jenkins</h5>
                    <p>LOVEEE MY LOGO ! Done exactly how I visioned it! I'll be back for my website !</p>
                </div>
                <div class="testimonial-card rotate-right ad">
                    <p>❇️❇️❇️❇️❇️</p>
                    {{-- <img src="https://via.placeholder.com/80" alt="Customer 4" class="rounded-circle mb-3"> --}}
                    <h5>Kyle Bacon</h5>
                    <p>Very helpful crew, I'm very picky with my designs and I was helped greatly with compliant people,
                        I am very satisfied</p>
                </div>


            </div>
        </div>
    </section>



    <!-------------------- End Boxed Section ------------------>


    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Ensure carousel can be scrolled via mouse or touch gestures without a scrollbar
        const carousel = document.querySelector('.new-testimonial-carousel');

carousel.addEventListener('wheel', (e) => {
  e.preventDefault();
  carousel.scrollBy({
      left: e.deltaY < 0 ? -30 : 30,
  });
});
  </script>

@endsection
