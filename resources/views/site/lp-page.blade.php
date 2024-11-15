    @extends('site.common')

    @section('title', 'Custom Logo Design Starting from $49 - +1 (551) 666-5255')

    @section('meta_desc',
        'Get top notch custom logo design services from US top logo designer team at RFS Logo Design.
        We create stunning logos for your business on affordable price.')

    @section('content')

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

        <!-- Swiper CSS -->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

        <style>
            .custom-text-section-v3 h2 {
                font-weight: 800;
                font-family: 'Montserrat', sans-serif;
                font-size: 42px;
                margin-bottom: 20px;
                color: #010935;
            }

            .custom-container-margin-v3 {
                margin-top: 50px;
                margin-bottom: 50px;
            }

            .custom-text-section-v3 p {
                font-size: 18px;
                font-family: 'Montserrat', sans-serif;
                color: #555;
                margin-bottom: 20px;
            }

            .custom-bold-text-v3 {
                font-weight: bold;
                font-size: 18px;
                color: #512F90;
                margin: 20px 0;
            }

            .custom-image-section-v3 {
                display: flex;
                justify-content: center;
                align-items: center;
                /* Center the image vertically */
            }

            .custom-image-section-v3 img {
                max-width: 100%;
                height: auto;
            }

            .box {
                position: relative;
                overflow: hidden;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                transition: transform 0.3s ease;
            }

            .box:hover {
                transform: translateY(-10px);
            }

            .box:hover .box-content {
                background-color: rgb(81, 47, 144);
                /* Purple background on hover */
            }

            .box:hover .box-text {
                display: block;
                /* Show text on hover */
            }

            .box-image {
                width: 100%;
                height: auto;
                display: block;
            }

            .box-content {
                position: absolute;
                top: 0;
                /* Ensure it covers the top of the box */
                left: 0;
                width: 100%;
                height: 100%;
                /* Cover the entire box */
                background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 80%, #512f90f6);
                color: #fff;
                padding: 20px;
                text-align: left;
                transition: background-color 1s ease;
                display: flex;
                flex-direction: column;
                justify-content: flex-end;
                /* Align text to the bottom */
            }

            .box-heading {
                font-size: 30px;
                font-weight: 700;
                margin: 0;
            }

            .box-text {
                font-size: 16px;
                margin-top: 10px;
                display: none;
                /* Hide text initially */
            }

            .box-heading-number {
                display: block;
                /* Make sure the number is on a new line */
                color: #fff;
                padding: 2px 6px;
                border-radius: 4px;
                font-size: 58px;
                /* Adjust as needed */
                font-weight: 900;
            }

            .custom-logo-process {
                padding: 20px 0;
                margin-bottom: -30px;
                margin-top: 50px;
            }

            .custom-logo-process h2 {
                font-weight: 700;
                color: #010935;
                font-size: 40px;
            }

            .custom-logo-process p {
                font-size: 18px;
                color: #000;
            }

            .custom-section-v3 {
                margin: 50px 0;
            }

            .custom-image-v3 img {
                max-width: 100%;
                height: auto;
                display: block;
                margin: 0 auto;
            }

            .custom-content-v3 {
                text-align: left;
            }

            .custom-content-v3 h2 {
                font-weight: 800;
                font-family: 'Montserrat', sans-serif;
                font-size: 42px;
                margin-bottom: 20px;
                color: #010935;
            }

            .custom-content-v3 p {
                font-size: 16px;
                color: #333;
            }


            /* Unique class for contact section */
            .contact-section .icon-circle {
                width: 60px;
                /* Adjust size as needed */
                height: 60px;
                /* Adjust size as needed */
                display: flex;
                align-items: center;
                justify-content: center;
                background-color: #6a70d6;
                /* Background color of the circle */
                border-radius: 50%;
                margin: 0 auto 10px auto;
            }

            .contact-section .icon-circle i {
                color: #ffffff;
                /* White color for icons */
            }

            /* Make h2 bold */
            .contact-section h2.font-weight-bold {
                font-weight: 700;
            }

            /* Style for links in the contact section */
            .contact-section .contact-option a {
                color: #010935;
                /* Black color for text */
                font-weight: bold;
                /* Bold text */
                text-decoration: none;
                /* Remove underline */
            }

            .contact-section .contact-option a:hover {
                color: #010935;
                /* Black color on hover */
                text-decoration: none;
                /* Underline on hover (optional) */
            }






            .custom-logo-page-section {
                background-color: #6868d1;
                border-radius: 25px;
                padding: 10px 0 20px 0;
                color: white;
            }

            .custom-logo-page-content {
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            .custom-logo-page-heading {
                font-weight: 700;
                font-size: 34px;
            }

            .custom-logo-page-button {
                width: 194px;
                height: 50px;
                border-radius: 5px;
                color: #fff;
                background-color: #e78341;
                font-size: 15px;
                font-weight: 700;
                line-height: 24px;
                text-align: center;
                border-color: #e78341;
            }

            .custom-logo-page-button:hover {
                background-color: #e78341;
                border-color: #e78341;
            }

            .custom-logo-page-form input,
            .custom-logo-page-form textarea {
                border-radius: 5px;
                margin-bottom: 5px;
                padding: 5px;
            }

            .custom-logo-page-form {
                border-radius: 20px !important;
                margin-top: 20px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                width: 70%;
                color: black;
            }

            .custom-logo-page-form label {

                font-weight: 600;
            }

            .iti {
                width: 100%;
            }

            .btn-primary {
                background-color: #646bd9;
                border-color: #646bd9;
            }

            .btn-primary:hover {
                background-color: #5058c9;
                border-color: #5058c9;
            }

            .btn-secondary {
                margin-top: 20px color: #fff;
                background-color: #6868D1;
                border-color: #6868D1;
            }

            button.btn.btn-secondary.custom-logo-page-submit {
                width: fit-content;
                width: -webkit-fill-available;
            }



            /* languagelogos */



            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            @keyframes slide {
                from {
                    transform: translateX(0);
                }

                to {
                    transform: translateX(-100%);
                }
            }

            .languagelogos {
                overflow: hidden;
                padding: 20px 0;
                background: #ffffff;
                white-space: nowrap;
                position: relative;
            }

            .languagelogos:before,
            .languagelogos:after {
                position: absolute;
                top: 0;
                width: 250px;
                height: 100%;
                content: "";
                z-index: 2;
            }


            .languagelogos:hover .languagelogos-slide {
                animation-play-state: paused;
            }

            .languagelogos-slide {
                display: inline-block;
                animation: 35s slide infinite linear;
            }

            .languagelogos-slide img {
                height: 100%;

                border-radius: 15px;
            }

            .lpbanner-heading {
                padding-top: 20px;
                font-size: 2.5rem;
                color: #fff;
                font-weight: bold;
                /* display: flex; */
                align-items: center;
                margin-left: 50px;
            }


            .lpbanner-buttons .lpbanner-btn {
                margin-right: 15px;
                padding: 10px 20px;
                border-radius: 5px;
            }

            .lpbanner-btn.btn-outline-light {
                border-color: #fff;
                color: #fff;
            }

            .lpbanner-btn.btn-dark {
                color: #fff;
                background-color: #0f04ad;
            }

            .lpbanner-btn.btn-outline-light:hover {
                color: darkblue;
                /* Change text color to dark blue on hover */
            }


            .lpbanner-badges img {
                margin-top: 20px;
                width: 120px;
                margin-right: 10px;
            }

            .lpbanner-price {
                color: #FFBD35;
            }

            .col-md-6.lp-left-column {
                align-content: center;
            }

            .top-rightlp.col-md-8 {
                align-content: center;
            }



            /* Landing Page CTA */

            .lp-cta1 {
                /* background-image: var(cta1bg.png); */
                background-size: cover;
                background-position: center;
                color: white;
                padding: 60px 0;
                text-align: center;
            }


            .cta-heading {
                font-size: 2rem;
                font-weight: bold;
                margin-bottom: 20px;
            }

            .cta-text {
                font-size: 1rem;
                margin-bottom: 30px;
            }

            .cta-buttons .leave-message-btn {
                background-color: white;
                color: #4B0082;
                border: none;
                padding: 10px 20px;
                font-weight: bold;
                margin-right: 15px;
            }

            .cta-buttons .live-chat-btn {
                background-color: transparent;
                color: white;
                border: 2px solid white;
                padding: 10px 20px;
                font-weight: bold;
            }


            /* End Landing Page CTA */



            /**************** Start Pricing Section *****************/

            /* Unique section CSS */
            /* Unique section CSS */
            .logopackages-sec {
                padding: 40px 20px;
                text-align: center;
                background-color: #f9f9f9;
            }

            .logopackages-sec h2 {
                font-size: 28px;
                font-weight: bold;
            }

            .logopackages-sec p {
                font-size: 16px;
                color: #666;
                margin-bottom: 20px;
            }

            /* Price Box Styling */
            .price-box {
                border: 2px solid #fbb040;
                padding: 20px;
                border-radius: 8px;
                transition: transform 0.3s;
                background-color: #fff;
            }

            .price-box:hover {
                transform: translateY(-5px);
                box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            }

            .price-box h3 {
                font-size: 22px;
                color: #9E1F63;
                margin-bottom: 10px;
                font-weight: 700;
            }

            .price-box .price {
                font-size: 24px;
                font-weight: bold;
                color: #333;
            }

            .price-box .original-price {
                text-decoration: line-through;
                color: #666;
                font-size: 14px;
                margin-left: 5px;
            }

            .price-box .separator {
                width: 80%;
                height: 2px;
                background-color: #fbb040;
                margin: 15px auto;
            }

            /* Feature List Styling with Bullets */
            .price-box .feature-list {
                max-height: 150px;
                overflow-y: auto;
                text-align: left;
                padding-left: 20px;
                /* Adjust padding for bullets */
                list-style-type: disc;
                /* Add bullet style */
                margin: 0;
                font-size: 14px;
                color: #1f1e1e;
            }

            .feature-list li {
                padding: 5px 0;
            }

            .feature-list::-webkit-scrollbar {
                width: 5px;
            }

            .feature-list::-webkit-scrollbar-thumb {
                background: #9E1F63;
                border-radius: 5px;
            }

            .price-box .start-project-btn {
                margin-top: 20px;
                background-color: #3b3fa1;
                color: #fff;
                font-weight: bold;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
            }

            .price-box .start-project-btn:hover {
                background-color: #5a0b9a;
            }


            /* Best Seller Badge Styling */
            .price-box.best-seller::before {
                content: "BEST SELLER";
                position: absolute;
                top: -10px;
                right: -10px;
                background-color: #FF2300;
                /* Red background color */
                color: #fff;
                font-size: 12px;
                font-weight: bold;
                padding: 5px 10px;
                border-radius: 5px;
                transform: rotate(10deg);
                /* Rotate to make it look stylish */
            }


            /**************** End Pricing Section *****************/

            .top-head {
                color: white;
                background: #6868D1;


            }

            .top-head-logo {
                color: white;
                background: #080A2D;
                padding: 20px 0;

            }


            .top-head a {

                text-decoration: none;
            }

            .top-head a {

                text-decoration: none;
            }

            .avail-discount-btn {
                margin-right: 10px;
                background: linear-gradient(to right, #9053F5, #6226EE);

                color: #ffffff;
            }

            .top-rightlp a {
                background: #ffba00;
                padding: 5px 20px;
                color: #000;
                font-weight: bold;
                border-radius: 2px;
                font-size: 15px;
                margin-left: 20px;
            }

            .lp-banner-margin {
                margin-left: 50px;
            }


            .custom-btn {
                padding: 10px;
                border-radius: 10px;
                display: inline-block;
                font-size: 18px;
                text-decoration: none;
                text-align: center;
            }


            .top-left.col-md-8 {
                display: flex;
                align-items: center;
            }

            /* Start Cta Section 3  */


            .lpcta3sec {
                background-image: url(/images/lpcta3bg.png);
                background-size: cover;
                background-position: center;
                padding: 10px 0;
            }

            .btn-custom {
                color: blue;
                background-color: white;
                border: 1px solid blue;
            }

            .btn-custom:hover {
                background-color: blue;
                color: white;
            }


            /* End Cta Section 3  */


            /************************* Start Portfolio Gallery ******************/
            .portfoliogallerylp {
                /* padding: 30px 0; */
            }

            .portfoliogallerylp h2 {
                font-size: 24px;
                font-weight: bold;
                margin-bottom: 10px;
            }

            .portfoliogallerylp-separator {
                width: 50px;
                height: 3px;
                background-color: #333;
                margin: 0 auto 20px auto;
            }

            .portfoliogallerylp-gallery {
                /* gap: 3px
                                                 */
            }

            .portfoliogallerylp-image {
                width: 100%;
                padding: 3px;
                height: auto;
            }

            .portfoliogallerylp .col-md-4 {
                padding-left: 0;
                padding-right: 0;
            }


            .portfoliogallerylp-image:hover {
                transform: scale(0.98);
            }

            /************************* End Portfolio Gallery ******************/



            section.ebook-contact-form.container {
                padding: 100px;
            }


            .ebook-contact-form {
                padding: 50px 20px;


            }

            .ebook-contact-form .left-column {
                text-align: left;
                padding-right: 30px;
            }

            .ebook-contact-form h2 {
                font-weight: bold;
                color: black;
                font-size: 2.5rem;
            }

            .ebook-contact-form .highlight-text {
                color: #6A48FF;
                /* Orange color */
            }

            .ebook-contact-form .btn-custom {
                background: linear-gradient(90deg, #2302B1, #6A48FF);
                color: white;
                border: none;
                border-radius: 30px;
                padding: 10px 25px;
                font-size: 18px;
                margin-bottom: 20px;
            }

            .ebook-contact-form .form-control {
                border-radius: 10px;
            }

            .ebook-contact-form .btn-submit {
                background: linear-gradient(90deg, #2302B1, #6A48FF);
                border: none;
                border-radius: 30px;
                padding: 10px 30px;
                color: white;
                font-size: 18px;
                margin-top: 15px;
            }

            .form-control {
                background-color: #f9f9f9;
                border: 1px solid #2302B1;
                height: 50px;
                font-size: 16px;
                border-radius: 8px;
            }

            section.ebook-contact-form.container {
                padding: 30px;

            }

            .ebook-contact-form {
                flex-direction: column;
            }

            .ebook-contact-form .left-column {
                padding-right: 0;

            }


            .ebook-second-section {
                padding-bottom: 0;
                /* Remove bottom padding in mobile view */
            }


            /* ContactForm.css */
            /* ContactForm.css */
            .left-column {
                margin-bottom: 20px;
            }

            .contact-info {
                list-style: none;
                padding-left: 0;
            }

            .contact-info li {
                display: flex;
                align-items: center;
                margin-bottom: 20px;
            }

            .contact-icon {
                background-color: #eaf2fc;
                /* Light blue background for the icon circle */
                border-radius: 50%;
                color: #007bff;
                /* Icon color */
                padding: 12px;
                /* Padding to give circular shape */
                font-size: 18px;
                /* Size of the icon */
                width: 40px;
                height: 40px;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-right: 15px;
            }

            textarea.form-control {
                height: 100px;
            }

            .contact-info a,
            .contact-info span {
                color: #333;
                font-size: 16px;
                font-weight: bold;
                text-decoration: none;
            }

            .contact-info a:hover {
                color: #007bff;
                text-decoration: underline;
            }

            .btn-submit {
                background-color: #007bff;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }

            .btn-submit:hover {
                background-color: #0056b3;
            }





            /*****************  Start LP Contact ************/

            .lp-contact-sec {
                padding: 30px 0;
                color: white;
            }

            .lp-contact-sec .icon-image {
                width: 60px;
                height: 60px;
            }

            .lp-contact-sec .contact-link {
                color: inherit;
                text-decoration: none;
                display: flex;
                align-items: center;
                transition: color 0.3s ease;
            }

            .lp-contact-sec .contact-link:hover {
                color: #f0f0f0;
                /* Adjust hover color as needed */
            }

            .lp-contact-sec p {
                font-size: 1rem;
                margin: 0;
            }

            .lp-contact-sec h4 {
                font-size: 1.25rem;
                font-weight: bold;
                margin: 0;
            }


            /*****************  Start LP Footer ************/

            .lp-footer-sec {
                padding: 20px 0;
                color: white;
            }

            .lp-footer-sec .footer-logo {
                width: 180px;
                /* Adjust size as needed */
                height: auto;
            }

            .lp-footer-sec p {
                font-size: 0.9rem;
                margin: 0;
            }

            .lp-footer-sec .footer-link {
                font-size: 18px;
                color: white;
                text-decoration: none;
                transition: color 0.3s ease;
            }

            .lp-footer-sec .footer-link:hover {
                color: #f0f0f0;
                /* Adjust hover color as needed */
            }




            /*****************  End LP Footer ************/


            /*****************  End LP Contact ************/

            .awardimgslide {
                background-color: #f9f9f9;
            }

            .award-heading {
                font-size: 24px;
                font-weight: bold;
                color: #333;
            }

            .swiper-container {
                padding: 10px 0;
                overflow-x: hidden;
            }

            .swiper-slide {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .swiper-slide img {
                max-width: 100%;
                height: auto;
            }

            .award-arrow-left,
            .award-arrow-right {
                font-size: 24px;
                color: #333;
                cursor: pointer;
            }

            @media (max-width: 576px) {
                .award-heading {
                    font-size: 18px;
                }

                /* .swiper-slide img {
                    max-width: 100px;
                } */

                .award-arrow-left,
                .award-arrow-right {
                    font-size: 18px;
                }
            }







            @media(max-width: 376px) {


                .top-head {
                    background: #6868D1;
                    padding: 5px 0;
                    font-size: 10px;
                }

            }

            @media (max-width: 576px) {
                .award-heading {
                    font-size: 18px;
                }



                .award-arrow-left,
                .award-arrow-right {
                    font-size: 18px;
                }
            }

            @media (max-width: 658px) {
                .lp-footer-sec .footer-link {
                    font-size: 12px;
                    color: white;
                    text-decoration: none;
                    transition: color 0.3s ease;
                }

                section.ebook-contact-form.container {
                    padding: 30px;
                    text-align-last: center;
                }
            }

            /* For screen 576px to 767px */
            @media (max-width: 767.98px) {
                .custom-logo-page-form {
                    width: 100%;
                }
            }


            @media only screen and (max-width: 768px) {
                .top-right.col-md-5 {
                    width: 100%;
                }

                .custom-text-section-v3 h2 {
                    font-weight: 800;
                    font-family: 'Montserrat', sans-serif;
                    font-size: 23px;
                    margin-bottom: 20px;
                    color: #010935;
                }

                a.toll_icon.text-white.d-flex.align-items-center {
                    font-size: 1.0rem;
                }

                a.chat_icon.chat.text-white.d-flex.align-items-center {
                    font-size: 1.0rem;
                }

                .lpbanner-heading {
                    padding-top: 20px;
                    font-size: 2.5rem;
                    color: #fff;
                    font-weight: bold;
                    /* display: flex; */
                    align-items: center;
                    margin-left: 0px;
                }

                .col-md-6.text-md-end.text-center.ft-names {
                    font-size: 1rem;
                }

                .col-md-6.cta-buttons {
                    padding-bottom: 20px;
                    place-items: center;
                }

                .text-white {
                    --bs-text-opacity: 1;
                    color: rgba(var(--bs-white-rgb), var(--bs-text-opacity)) !important;
                    font-size: 1.2rem;
                    font-family: 'Poppins';
                    text-align: center;
                }

                .portfoliogallerylp-gallery {
                    flex-direction: column;
                }

                .lp-banner-margin {
                    margin-left: 0px;
                }

                .top-rightlp.col-md-8 {
                    display: none;
                }

                .top-left.col-md-4 {

                    text-align-last: center;
                }

                .top-head {
                    background: #6868D1;
                    padding: 5px 0;
                    font-size: 12px;
                }

                .cta-heading {
                    font-size: 1.5rem;
                }

                .lpbanner-badges img {
                    width: 80px !important;
                    margin-top: 20px;
                    margin-right: 0px;
                }

                .lpbanner-heading {
                    font-size: 1.8rem;
                    color: #fff;
                    font-weight: bold;
                    /* display: flex; */
                    align-items: center;
                }

                .lpbanner-badges img {
                    width: 100px !important;
                }

            }




            @media (max-width: 1198px) and (min-width: 992px) {
                .custom-logo-page-form {
                    border-radius: 20px !important;
                    margin-top: 20px;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    width: 90%;
                    color: black;
                }

                .lpbanner-heading {
                    padding-top: 20px;
                    font-size: 2rem;
                    color: #fff;
                    font-weight: bold;
                    /* display: flex; */
                    align-items: center;
                    margin-left: 50px;
                }

                .lpbanner-badges img {
                    width: 95px;
                }

                .top-right.col-md-5 {
                    width: 100%;
                }

                .box-heading-number {
                    font-size: 34px;
                    /* Adjusted size for screens in this range */
                }

                .box-heading {
                    font-size: 22px;
                    /* Adjusted size for screens in this range */
                }
            }

            @media (min-width: 768px) and (max-width: 1200px) {
                .custom-logo-page-form {
                    border-radius: 20px !important;
                    margin-top: 20px;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    width: 90%;
                    color: black;
                }

                .lpbanner-heading {
                    padding-top: 20px;
                    font-size: 2rem;
                    color: #fff;
                    font-weight: bold;
                    /* display: flex; */
                    align-items: center;
                    margin-left: 50px;
                }

                .lpbanner-badges img {
                    width: 95px;
                }

                .top-right.col-md-5 {
                    width: 100%;
                }

                .box-heading-number {
                    font-size: 34px;
                    /* Adjusted size for screens in this range */
                }

                .box-heading {
                    font-size: 22px;
                    /* Adjusted size for screens in this range */
                }
            }

            @media (max-width: 1000px) {

                .ebook-contact-form h2 {
                    font-weight: bold;
                    color: black;
                    font-size: 1.5rem;
                }
            }




            /* end languagelogos */
        </style>





        <div class="container mt-5">
            <div class="row custom-logo-page-section mx-0">
                <div class="col-md-6 lp-left-column">

                    <div class="lpbanner-heading-container" style="display: flex; align-items: center;">

                        <h1 class="lpbanner-heading">
                            Custom Logo Design <br />
                            Starting from <span class="lpbanner-price">$49</span>
                        </h1>
                    </div>
                    <div class="lp-banner-margin">
                        <p class="lpbanner-text">At RFS, our top-tier in-house logo designers create unique, eye-catching
                            brand identities that make your business stand out and leave a lasting impression.</p>
                        <div class="lpbanner-buttons">
                            <button class="btn btn-dark lpbanner-btn" data-bs-toggle="modal" data-bs-target="#contact-modal"
                                data-title="Basic Logo Package - $49">Get Started</button>
                            <a href="#pricing" class="btn btn-outline-light lpbanner-btn">View Pricing</a>
                        </div>
                        <div class="lpbanner-badges">
                            <a href="https://clutch.co/profile/rfs-logo-design" target="_blank">
                                <img src="{{ asset('images/clutchicon.png') }}" alt="Clutch" />
                            </a>
                            <a href="https://www.trustpilot.com/review/rfslogodesign.com" target="_blank">
                                <img src="{{ asset('images/truspiloticon.png') }}" alt="Trustpilot" />
                            </a>
                            <a href="https://www.bark.com/en/us/company/rfs-logo-design/oRvbN/" target="_blank">
                                <img src="{{ asset('images/barkicon.png') }}" alt="Bark" />
                            </a>

                        </div>
                    </div>
                </div>

                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <div class="custom-logo-page-form bg-white border p-3 rounded">
                        <h3 class="custom-logo-page-form-heading text-center">Get a Logo Quote</h3>
                        <form id="custom-form" method="POST" action="{{ route('customLogoSubmit') }}">

                            @csrf

                            <div class="form-group mb-2">
                                <label for="name" class="custom-logo-page-label">Name:</label>
                                <input type="text"
                                    class="form-control custom-logo-page-input @error('name') is-invalid @enderror"
                                    name="name" id="name" placeholder="Enter your name" required
                                    pattern="[A-Za-z\s]+" title="Name cannot contain special characters or numbers.">
                                <div class="invalid-feedback">Please enter a valid name (letters and spaces only).</div>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-2">
                                <label for="email" class="custom-logo-page-label">Email:</label>
                                <input type="email"
                                    class="form-control custom-logo-page-input @error('email') is-invalid @enderror"
                                    name="email" id="email" placeholder="Enter your email" required>
                                <div class="invalid-feedback">Please enter a valid email address.</div>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- <div class="form-group mb-2">
                                <label for="phone" class="custom-logo-page-label">Phone Number:</label>
                                <input type="tel"
                                    class="form-control custom-logo-page-input @error('phone') is-invalid @enderror"
                                    name="phone" id="phone" placeholder="Enter your phone number" required
                                    pattern="^\+?[0-9\s]{10,15}$"
                                    title="Phone number should contain only numbers and spaces, and can start with a '+'."
                                    maxlength="15">
                                <div class="invalid-feedback">Please enter a valid phone number (max 15 digits).</div>
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div> --}}

                            <div class="form-group mb-2">
                                <label for="phone" class="custom-logo-page-label">Phone Number:</label>
                                <input type="tel"
                                    class="form-control custom-logo-page-input @error('phone') is-invalid @enderror"
                                    name="phone" id="phone" placeholder="+15554443322" required
                                    title="Phone number should contain only numbers and spaces, and can start with a '+'."
                                    maxlength="15">
                                <div class="invalid-feedback">Please enter a valid phone number (max 15 digits).</div>
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="form-group mb-2">
                                <label for="message" class="custom-logo-page-label">Message:</label>
                                <textarea class="form-control custom-logo-page-textarea" name="message" id="message" rows="2"
                                    placeholder="Your message..." required></textarea>
                            </div>

                            <button type="submit"
                                class="btn btn-secondary custom-logo-page-submit align-left">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="languagelogos py-5">
                <div class="languagelogos-slide">
                    <img src={{ asset('images/logoslide1.png') }} alt="React Logo" />
                    <img src={{ asset('images/logoslide2.png') }} alt="NOP Logo" />
                    <img src={{ asset('images/logoslide3.png') }} alt="Woo Logo" />
                    <img src={{ asset('images/logoslide4.png') }} alt="WordPress Logo" />
                    <img src={{ asset('images/logoslide5.png') }} alt="Shopify Logo" />
                    <img src={{ asset('images/logoslide6.png') }} alt="PHP Logo" />
                    <img src={{ asset('images/logoslide7.png') }} alt="Laravel Logo" />
                    <img src={{ asset('images/logoslide8.png') }} alt="Laravel Logo" />
                    <img src={{ asset('images/logoslide9.png') }} alt="Laravel Logo" />
                    <img src={{ asset('images/logoslide10.png') }} alt="Laravel Logo" />
                    <img src={{ asset('images/logoslide11.png') }} alt="Laravel Logo" />
                    <img src={{ asset('images/logoslide12.png') }} alt="Laravel Logo" />
                    <img src={{ asset('images/logoslide13.png') }} alt="Laravel Logo" />
                    <img src={{ asset('images/logoslide14.png') }} alt="Laravel Logo" />
                </div>
            </div>
        </div>







        <section class="lp-cta1 d-flex align-items-center justify-content-center text-center"
            style="background-image: url('{{ asset('images/cta1bg.png') }}');">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="cta-heading">Are you looking for a logo that truly captures your brand? </h2>
                        <p class="cta-text">
                            Please message us, and let our designers bring your vision to life.
                        </p>
                        <div class="cta-buttons">

                            <a href="{{ url('https://wa.me/+18482369397') }}"> <button
                                    class="btn btn-primary leave-message-btn">Message Us</button></a>
                            <a href="tel:+15516665255"> <button class="btn btn-outline-light live-chat-btn">Call
                                    Us</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="logopackages-sec" id="pricing">
            <div class="container">
                <!-- Row 1: Heading -->
                <div class="row mb-4">
                    <div class="col">
                        <h2>Professional Logo Design Services</h2>
                        <p>Our professional logo design services in the US offer captivating and timeless custom logos. Our
                            expert designers at RFS Logo Design ensure your company stands out uniquely and memorably in the
                            market.</p>
                        <h2>Logo Design Packages</h2>
                    </div>
                </div>

                <!-- Row 2: Price Boxes -->
                <div class="row g-4">
                    <!-- Basic Logo Package -->
                    <div class="col-md-4">
                        <div class="price-box h-100">
                            <h3>Basic Logo Package</h3>
                            <p>Best Value for Money Guaranteed!</p>
                            <div class="price-section">
                                <span class="price">$49</span>
                                <span class="original-price">$99</span>
                            </div>
                            <p>Only</p>
                            <div class="separator"></div>
                            <ul class="feature-list">
                                <li>2 Logo Design Concepts</li>
                                <li>4 Revisions</li>
                                <li>Dedicated Project Manager</li>
                                <li>24 - 48 Hours Delivery</li>
                                <div class="text-center"><b>What will you get?</b></div>
                                <li>1 Finalized Logo</li>
                                <li>2 File Formats (PNG, JPG)</li>
                            </ul>
                            <button class="start-project-btn" data-bs-toggle="modal" data-bs-target="#contact-modal"
                                data-title="Basic Logo Package - $49">Start Project</button>
                        </div>
                    </div>

                    <!-- Standard Logo Package -->
                    <div class="col-md-4">
                        <div class="price-box h-100 best-seller">
                            <h3>Standard Logo Package</h3>
                            <p>Best Value for Money Guaranteed!</p>
                            <div class="price-section">
                                <span class="price">$99</span>
                                <span class="original-price">$149</span>
                            </div>
                            <p>Only</p>
                            <div class="separator"></div>
                            <ul class="feature-list">
                                <li>4 Logo Design Concepts</li>
                                <li>8 Revisions</li>
                                <li>Dedicated Project Manager</li>
                                <li>24 - 48 Hours Delivery</li>
                                <div class="text-center"><b>What will you get?</b></div>
                                <li>1 Finalized Logo</li>
                                <li>3 File Formats (JPG, PNG, PDF)</li>
                            </ul>
                            <button class="start-project-btn" data-bs-toggle="modal" data-bs-target="#contact-modal"
                                data-title="Standard Logo Package - $99">Start Project</button>
                        </div>
                    </div>

                    <!-- Elite Logo Package -->
                    <div class="col-md-4">
                        <div class="price-box h-100">
                            <h3>Elite Logo Package</h3>
                            <p>Best Value for Money Guaranteed!</p>
                            <div class="price-section">
                                <span class="price">Let's Talk</span>
                                {{-- <span class="price">$199</span>
                                <span class="original-price">$249</span> --}}
                            </div>
                            {{-- <p>Only</p> --}}
                            <div class="separator"></div>
                            <ul class="feature-list">
                                <li>6 Logo Design Concepts</li>
                                <li>Unlimited Revisions</li>
                                <li>Dedicated Project Manager</li>
                                <li>24 - 48 Hours Delivery</li>
                                <div class="text-center"><b>What will you get?</b></div>
                                <li>1 Finalized Logo</li>
                                <li>All File Formats (Ai, PSD, EPS, PNG, JPG, PDF)</li>
                            </ul>
                            <button class="start-project-btn" data-bs-toggle="modal" data-bs-target="#contact-modal"
                                data-title="Elite Logo Package">Start Project</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <!-- Row 1: Heading -->
                <div class="row mb-4 pt-4">
                    <div class="col">
                        <h2>Branding Packages</h2>
                    </div>
                </div>

                <!-- Row 2: Price Boxes -->
                <div class="row g-4">
                    <!-- Basic Logo Package -->
                    <div class="col-md-4">
                        <div class="price-box h-100">
                            <h3>Starter Branding Package</h3>
                            <p>Best Value for Money Guaranteed!</p>
                            <div class="price-section">
                                <span class="price">$179</span>
                                <span class="original-price">$249</span>
                            </div>
                            <p>Only</p>
                            <div class="separator"></div>
                            <ul class="feature-list">
                                <li>Business Card Design</li>
                                <li>Letter head Design</li>
                                <li>Envelope Design</li>
                                <li>MS Word Letterhead</li>
                                <li>Email Signature Design</li>
                                <li>Invoice Design</li>
                                <li>Facebook Banner Design</li>
                                <li>YouTube Banner Design</li>
                                <li>Twitter Banner Design</li>
                                <li>LinkedIn Banner Design</li>
                                <li>Logo Watermark</li>
                            </ul>
                            <button class="start-project-btn" data-bs-toggle="modal" data-bs-target="#contact-modal"
                                data-title="Starter Branding Package - $179">Start Project</button>
                        </div>
                    </div>

                    <!-- Standard Logo Package -->
                    <div class="col-md-4">
                        <div class="price-box h-100 best-seller">
                            <h3>Premium Branding Package</h3>
                            <p>Best Value for Money Guaranteed!</p>
                            <div class="price-section">
                                <span class="price">$249</span>
                                <span class="original-price">$299</span>
                            </div>
                            <p>Only</p>
                            <div class="separator"></div>
                            <ul class="feature-list">
                                <li>Business Card Design</li>
                                <li>Letter head Design</li>
                                <li>Envelope Design</li>
                                <li>MS Word Letterhead</li>
                                <li>Email Signature Design</li>
                                <li>Invoice Design</li>
                                <li>Facebook Banner Design</li>
                                <li>YouTube Banner Design</li>
                                <li>Twitter Banner Design</li>
                                <li>LinkedIn Banner Design</li>
                                <li>Logo Watermark</li>
                                <li>Favicon Design</li>
                                <li>Polo/T-Shirt Design</li>
                                <li>Cap/Hat Design</li>
                            </ul>
                            <button class="start-project-btn" data-bs-toggle="modal" data-bs-target="#contact-modal"
                                data-title="Premium Branding Package - $249">Start Project</button>
                        </div>
                    </div>

                    <!-- Elite Logo Package -->
                    <div class="col-md-4">
                        <div class="price-box h-100">
                            <h3>Professional Branding Package</h3>
                            <p>Best Value for Money Guaranteed!</p>
                            <div class="price-section">
                                <span class="price">Let's Talk</span>
                                {{-- <span class="price">$249</span>
                                <span class="original-price">$299</span> --}}
                            </div>
                            {{-- <p>Only</p> --}}
                            <div class="separator"></div>
                            <ul class="feature-list">
                                <li>Business Card Design</li>
                                <li>Letter head Design</li>
                                <li>Envelope Design</li>
                                <li>MS Word Letterhead</li>
                                <li>Email Signature Design</li>
                                <li>Invoice Design</li>
                                <li>Facebook Banner Design</li>
                                <li>YouTube Banner Design</li>
                                <li>Twitter Banner Design</li>
                                <li>LinkedIn Banner Design</li>
                                <li>Logo Watermark</li>
                                <li>Favicon Design</li>
                                <li>Polo/T-Shirt Design</li>
                                <li>Cap/Hat Design</li>
                                <li>Bag Design</li>
                                <li>Signage Design</li>
                                <li>Flyer Design</li>
                            </ul>
                            <button class="start-project-btn" data-bs-toggle="modal" data-bs-target="#contact-modal"
                                data-title="Professional Branding Package">Start Project</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <!-- Row 1: Heading -->
                <div class="row mb-4 pt-4">
                    <div class="col">
                        <h2>Website Packages</h2>
                    </div>
                </div>

                <!-- Row 2: Price Boxes -->
                <div class="row g-4">
                    <!-- Basic Logo Package -->
                    <div class="col-md-4">
                        <div class="price-box h-100">
                            <h3>Basic Website Package</h3>
                            <p>Best Value for Money Guaranteed!</p>
                            <div class="price-section">
                                <span class="price">$199</span>
                                <span class="original-price">$349</span>
                            </div>
                            <p>Only</p>
                            <div class="separator"></div>
                            <ul class="feature-list">
                                <li>3 Page Website</li>
                                <li>5 Revisions</li>
                                <li>2 Stock Images</li>
                                <li>1 jQuery Slider Banner</li>
                                <li>2 Banner Designs</li>
                                <li>Any two social media designs</li>
                                <li>48 to 72 hours TAT</li>
                                <li>Complete Deployment</li>
                                <li>100% Satisfaction Guarantee</li>
                                <li>100% Unique Design Guarantee</li>
                                <li>100% Money Back Guarantee</li>
                            </ul>
                            <button class="start-project-btn" data-bs-toggle="modal" data-bs-target="#contact-modal"
                                data-title="Basic Website Package - $199">Start Project</button>
                        </div>
                    </div>

                    <!-- Standard Logo Package -->
                    <div class="col-md-4">
                        <div class="price-box h-100 best-seller">
                            <h3>Elite Website Package</h3>
                            <p>Best Value for Money Guaranteed!</p>
                            <div class="price-section">
                                <span class="price">$599</span>
                                <span class="original-price">$999</span>
                            </div>
                            <p>Only</p>
                            <div class="separator"></div>
                            <ul class="feature-list">
                                <li>10 Unique Pages Website</li>
                                <li>Unlimited Revisions</li>
                                <li>CMS / Admin Panel Support</li>
                                <li>24 - 48 Hours Delivery</li>
                                <li>12 Stock images</li>
                                <li>8 Banner Designs</li>
                                <li>1 jQuery Slider Banner</li>
                                <li>Any Three Social Media Integration</li>
                                <li>FREE Google Friendly Sitemap</li>
                                <li>Mobile Responsive</li>
                                <li>48 to 72 hours TAT</li>
                                <li>Complete Deployment</li>
                                <li>100% Satisfaction Guarantee</li>
                                <li>100% Unique Design Guarantee</li>
                                <li>100% Money Back Guarantee</li>
                            </ul>
                            <button class="start-project-btn" data-bs-toggle="modal" data-bs-target="#contact-modal"
                                data-title="Elite Website Package - $599">Start Project</button>
                        </div>
                    </div>

                    <!-- Elite Logo Package -->
                    <div class="col-md-4">
                        <div class="price-box h-100">
                            <h3>Ecommerce Website Package</h3>
                            <p>Best Value for Money Guaranteed!</p>
                            <div class="price-section">
                                <span class="price">Let's Talk</span>
                                {{-- <span class="price">$249</span>
                                <span class="original-price">$299</span> --}}
                            </div>
                            <div class="separator"></div>
                            <ul class="feature-list">
                                <li>Up to 30 Web Pages Design and HTML</li>
                                <li>1 Contact Form</li>
                                <li>Content Management System</li>
                                <li>Google Sitemap Integration</li>
                                <li>Unlimited Revisions and Design Layout</li>
                                <li>3 Sliding Banners</li>
                                <li>Up to 10 Stock Photos</li>
                                <li>SEO Friendly</li>
                                <li>Responsive Layout</li>
                                <li>Payment Gateway Integration</li>
                                <li>Shopping Cart</li>
                                <li>1 Shared Design</li>
                                <li>Dedicated Account Manager</li>
                                <li>Email & Phone Support</li>
                                <li>100% Satisfaction Guarantee</li>
                                <li>100% Unique Design Guarantee</li>
                                <li>100% Money Back Guarantee</li>
                            </ul>
                            <button class="start-project-btn" data-bs-toggle="modal" data-bs-target="#contact-modal"
                                data-title="Ecommerce Website Package">Start Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <div class="container custom-container-margin-v3">
            <div class="row align-items-center">
                <div class="col-lg-6 custom-text-section-v3">
                    <h2>Same Top-Quality Logos Are Now Delivered Quicker Than Ever!</h2>
                    <p>Trusted by thousands, our logo design company offers top-tier modern Graphic Designs. Enjoy an
                        affordable custom logo from our experts – ready in hours!</p>
                    <p>We know that you’re anxious to launch your startup and bring your brand to life, so our minimalistic
                        and rapid custom logo design process is of great assistance. We follow a few steps below to give a
                        dream logo fast that is the envy of many organizations. </p>
                    <button class="btn btn-primary leave-message-btn" data-bs-toggle="modal"
                        data-bs-target="#contact-modal" data-title="Basic Logo Package - $49">Get Started</button>
                </div>
                <div class="col-lg-6 custom-image-section-v3">
                    <img src="images/Mask group.png" alt="Descriptive Image Text">
                </div>
            </div>
        </div>



        <section class="lpcta3sec">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 cta-buttons">
                        <h4 class="text-white">Build your brand identity with a perfect logo, premium branding material,
                            and standout stationery design!</h4>
                        <a href="{{ url('https://wa.me/+18482369397') }}" class="btn btn-primary leave-message-btn">Leave
                            a Message</a>
                    </div>
                    <div class="col-md-6">
                        <img src={{ asset('images/lpcta3secimg.png') }} alt="Description" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <!-- HTML Code -->
        <section class="portfoliogallerylp py-5 container">
            <div class="row">
                <!-- Heading and Separator -->
                <div class="col-12 text-center">
                    <h2>Stunning Logos and Designs in Action</h2>
                    <p>Our talented logo designers create impactful custom logos that elevate your business and leave a
                        memorable impression on your audience. </p>
                    <hr class="portfoliogallerylp-separator">
                </div>
            </div>

            <div class="row portfoliogallerylp-gallery">
                <!-- Column 1 -->
                <div class="col-md-4 col-sm-12">
                    <img src={{ asset('images/gallery1.png') }} alt="Portfolio Image 1" class="portfoliogallerylp-image">
                    <img src={{ asset('images/gallery2.png') }} alt="Portfolio Image 2" class="portfoliogallerylp-image">
                    <img src={{ asset('images/gallery3.png') }} alt="Portfolio Image 3" class="portfoliogallerylp-image">
                </div>

                <!-- Column 2 -->
                <div class="col-md-4 col-sm-12">
                    <img src={{ asset('images/gallery4.png') }} alt="Portfolio Image 4" class="portfoliogallerylp-image">
                    <img src={{ asset('images/gallery5.png') }} alt="Portfolio Image 5" class="portfoliogallerylp-image">
                    <img src={{ asset('images/gallery6.png') }} alt="Portfolio Image 6" class="portfoliogallerylp-image">
                </div>

                <!-- Column 3 -->
                <div class="col-md-4 col-sm-12">
                    <img src={{ asset('images/gallery7.png') }} alt="Portfolio Image 7" class="portfoliogallerylp-image">
                    <img src={{ asset('images/gallery8.png') }} alt="Portfolio Image 8" class="portfoliogallerylp-image">
                    <img src={{ asset('images/gallery9.png') }} alt="Portfolio Image 9" class="portfoliogallerylp-image">
                </div>
            </div>
        </section>

        <section class="lp-cta1 d-flex align-items-center justify-content-center text-center"
            style="background-image: url('{{ asset('images/cta1bg.png') }}');">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="cta-heading">Dreaming of the perfect modern logo? </h2>
                        <p class="cta-text">
                            Connect with us, and our experts will turn your ideas of business logo designs into reality!
                        </p>
                        <div class="cta-buttons">
                            <a href="tel:+15516665255"> <button class="btn btn-primary leave-message-btn">Schedule a
                                    Call</button></a>
                            <a href="{{ url('https://wa.me/+18482369397') }}"> <button
                                    class="btn btn-outline-light live-chat-btn">Chat with
                                    Expert</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!----------------------start simple and fast --------------------->
        <section class="custom-logo-process">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h2>Custom Logo Design <br>Process by Our <br>Top Designers</h2>
                    </div>
                    <div class="col-md-6">
                        <p style="text-align: justify;">Our top designers follow a seamless custom logo design process
                            tailored to your brand. We start by understanding your vision, creating unique concepts, and
                            refining them based on your feedback. The result is a striking, professional logo that resonates
                            with your audience and embodies your brand’s identity perfectly. </p>
                    </div>
                </div>
            </div>
        </section>

        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="box">
                        <img src="images/Frame 20.png" class="box-image" alt="Image 1">
                        <div class="box-content">
                            <span class="box-heading-number">01</span>
                            <h3 class="box-heading">Discovery and Research</h3>
                            <p class="box-text">First up, we dive into learning all about your brand, audience, and
                                competitors. This helps us get
                                a feel for what your logo should say and how it should stand out. We’ll brainstorm, survey,
                                and check out what others in your space are doing.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="box">
                        <img src="images/Frame 21.png" class="box-image" alt="Image 2">
                        <div class="box-content">
                            <span class="box-heading-number">02</span>
                            <h3 class="box-heading">Concept<br> Refinement</h3>
                            <p class="box-text">We begin by sketching ideas and exploring different styles through rough
                                drafts and mood boards.
                                Once the best concepts emerge, we refine them by finalizing colors, typography, and ensuring
                                the logo works across all formats. Your feedback guides the final tweaks.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="box">
                        <img src="images/Frame 22.png" class="box-image" alt="Image 3">
                        <div class="box-content">
                            <span class="box-heading-number">03</span>
                            <h3 class="box-heading">Finalization and Delivery</h3>
                            <p class="box-text">Finally, we prepare your logo for action. We create various formats for
                                different uses and
                                make sure they look great everywhere. Plus, we might put together a style guide to keep
                                everything consistent.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!----------------------end simple and fast --------------------->
        </div>
        {{--
        <section class="awardimgslide py-5">
            <div class="container text-center">
                <h2 class="award-heading">Award-Winning Logo Design Company</h2>
                <div class="row justify-content-center mt-4">
                    <div class="col-1 d-flex align-items-center justify-content-center">
                        <i class="fas fa-arrow-left award-arrow-left"></i>
                    </div>
                    <div class="col-10">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <!-- Slide Items (add more as needed) -->
                                <div class="swiper-slide"><img src={{ asset('images/award1.png') }} class="img-fluid" alt="Award 1"></div>
                                <div class="swiper-slide"><img src={{ asset('images/award2.png') }} class="img-fluid" alt="Award 2"></div>
                                <div class="swiper-slide"><img src={{ asset('images/award3.png') }} class="img-fluid" alt="Award 3"></div>
                                <div class="swiper-slide"><img src={{ asset('images/award4.png') }} class="img-fluid" alt="Award 4"></div>
                                <div class="swiper-slide"><img src={{ asset('images/award5.png') }} class="img-fluid" alt="Award 5"></div>
                                <div class="swiper-slide"><img src={{ asset('images/award6.png') }} class="img-fluid" alt="Award 5"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1 d-flex align-items-center justify-content-center">
                        <i class="fas fa-arrow-right award-arrow-right"></i>
                    </div>
                </div>
            </div>
        </section> --}}


        <section class="lp-logo-slider py-5">
            <div class="container">
                <!-- Heading -->
                <div class="row text-center mb-4">
                    <div class="col-12">
                        <h2>Award-Winning Logo Design Company</h2>
                    </div>
                </div>

                <!-- Swiper with Custom Navigation Buttons -->
                <div class="row align-items-center">
                    <!-- Custom Previous Button -->
                    {{-- <div class="col-2 text-end">
                        <button class="custom-carousel-control custom-carousel-control-prev">
                            <i class="fas fa-arrow-left"></i>
                        </button>
                    </div> --}}

                    <!-- Swiper for Logos -->
                    <div class="col-12">
                        <div class="swiper-container">
                            <div class="swiper-wrapper logo-awards">
                                <!-- Slide Items (Repeat for each logo) -->
                                <a target="_blank"
                                    href="https://www.designrush.com/agency/website-design-development/new-jersey">
                                    <img src="images/award1.png" alt="Award 1" class="logo-image img-fluid">
                                </a>
                                <div class="swiper-slide">
                                    <img src="images/award2.png" alt="Award 2" class="logo-image img-fluid">
                                </div>
                                <div class="swiper-slide">
                                    <img src="images/award3.png" alt="Award 3" class="logo-image img-fluid">
                                </div>
                                <div class="swiper-slide">
                                    <img src="images/award4.png" alt="Award 4" class="logo-image img-fluid">
                                </div>
                                <div class="swiper-slide">
                                    <img src="images/award5.png" alt="Award 5" class="logo-image img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Custom Next Button -->
                    {{-- <div class="col-2 text-start">
                        <button class="custom-carousel-control custom-carousel-control-next">
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div> --}}
                </div>
            </div>
        </section>


        <!----------------------start need help--------------------->



        <section class="container contact-section">
            <div class="text-center mb-4">
                <h2 class="font-weight-bold">Need help choosing a professional logo design?<br> Consult with our expert!
                </h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-3 text-center">
                    <div class="contact-option">
                        <div class="icon-circle">
                            <a href="tel:+15516665255"><i class="fas fa-phone fa-2x"></i></a>
                        </div>
                        <a href="tel:+15516665255"> +1(551)666-5255</a>
                    </div>
                </div>
                <div class="col-md-4 mb-3 text-center">
                    <div class="contact-option">
                        <div class="icon-circle">
                            <a href="mailto:support@rfslogodesign.com"><i class="fas fa-envelope fa-2x"></i></a>
                        </div>
                        <a href="mailto:support@rfslogodesign.com">support@rfslogodesign.com</a>
                    </div>
                </div>
                <div class="col-md-4 mb-3 text-center">
                    <div class="contact-option">
                        <div class="icon-circle">
                            <a href="{{ url('https://wa.me/+18482369397') }}"><i
                                    class="fas fa-comment-dots fa-2x"></i></a>
                        </div>
                        <a href="{{ url('https://wa.me/+18482369397') }}">Live Chat</a>
                    </div>
                </div>
            </div>
        </section>

        <!----------------------start Testimonial--------------------->



        <section class="new-testimonial my-5">
            <div class="container-fluid">
                <p class="text-center">Testimonials</p>
                <h2 class="text-center">Chosen by experts, crafted for success</h2>
                <p class="text-center">Let’s turn your vision into a digital marvel. Ready to make waves? Let’s dive in!
                </p>
                <div class="new-testimonial-carousel mt-4">
                    <div class="testimonial-card rotate-left ad">
                        <p>❇️❇️❇️❇️❇️</p>
                        {{-- <img src="https://via.placeholder.com/80" alt="Customer 1" class="rounded-circle mb-3"> --}}
                        <h5>Tony Ballew</h5>
                        <p>I had a business logo created by AI. There was some errors and I had no idea how to fix it. I
                            absolutely loved the logo, but needed those small mistakes fixed! RFS recreated the logo with
                            the corrections made. I freaking love it! Now I have all the files and I can edit it in the
                            future if I ever need to (which I do t think I will)!</p>
                    </div>
                    <div class="testimonial-card rotate-right ad">
                        <p>❇️❇️❇️❇️❇️</p>
                        {{-- <img src="https://via.placeholder.com/80" alt="Customer 1" class="rounded-circle mb-3"> --}}
                        <h5>Joseph Tenney</h5>
                        <p>Daniel was a breeze to work with and was johny on the spot with everything. Even after I approved
                            the final draft and it was done I seen an adjustment the next day. He quickly corrected it.</p>
                    </div>
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

        <!-- ------------------Start Testiomonial --------------- -->


        <section class="ebook-contact-form container py-5">
            <div class="row">
                <div class="col-md-5 left-column">
                    <h2>Let's Build Your <br> Digital Future</h2>
                    <ul class="contact-info">
                        <li>
                            <i class="fas fa-phone-alt contact-icon"></i>
                            <a href="tel:+15516665255">+1 (551) 666-5255</a>
                        </li>
                        <li>
                            <i class="fas fa-envelope contact-icon"></i>
                            <a href="mailto:support@rfslogodesign.com">support@rfslogodesign.com</a>
                        </li>
                        <li>
                            <i class="fas fa-map-marker-alt contact-icon"></i>
                            <span>43 3rd Ave 2nd Floor, Edison, NJ 08837</span>
                        </li>
                    </ul>
                </div>

                <div class="col-md-7">
                    <div id="thank-you" class="alert alert-success d-none">Thank you! Your message has been sent.</div>
                    <form id="contactForm" method="POST" action="{{ route('customLogoSubmit') }}">
                        @csrf
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" class="form-control" id="name" placeholder="Your full name"
                                    name="name" required>
                            </div>
                            <div class="col">
                                <input type="email" class="form-control" id="email" placeholder="E-mail address"
                                    name="email" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="tel" class="form-control" id="phone" placeholder="+15554443322"
                                required name="phone">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" id="message" rows="5" placeholder="Your message" required name="message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-submit">Submit Now</button>
                    </form>
                </div>
            </div>
        </section>


        <section class="lp-contact-sec d-flex align-items-center pt-4"
            style="background-image: url('{{ asset('images/lpcontactsecbg.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div class="container">
                <div class="row text-center">
                    <!-- Column 1 - Support Team -->
                    <div class="col-md-4">
                        <a href="{{ url('https://wa.me/+18482369397') }}" class="contact-link d-flex align-items-center">
                            <img src="{{ asset('images/lpcontactsec1.png') }}" alt="Support Team Icon" class="me-3" />
                            <div>
                                <p>Our Support Team</p>
                                <h4>24/7 Online</h4>
                            </div>
                        </a>
                    </div>

                    <!-- Column 2 - Phone Number -->
                    <div class="col-md-4">
                        <a href="tel:+15516665255" class="contact-link d-flex align-items-center">
                            <img src="{{ asset('images/lpcontactsec2.png') }}" alt="Consult Expert Icon"
                                class="me-3" />
                            <div>
                                <p>Consult Our Expert</p>
                                <h4>+1 (551) 666-5255</h4>
                            </div>
                        </a>
                    </div>

                    <!-- Column 3 - Live Chat -->
                    <div class="col-md-4">
                        <a href="{{ url('https://wa.me/+18482369397') }}" class="contact-link d-flex align-items-center">
                            <img src="{{ asset('images/lpcontactsec3.png') }}" alt="Live Support Icon" class="me-3" />
                            <div>
                                <p>Live Support</p>
                                <h4>Chat Now</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>




        {{-- Contact us Modal --}}
        <div class="modal fade" id="contact-modal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-0 pb-0">
                        <h2 class="modal-title text-center"></h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-2 px-4">
                        <form action="{{ route('contactUsLP') }}" method="post" id="contactForm">
                            @csrf
                            <input type="hidden" name="title" value>
                            <div class="mb-3">
                                <label for="name" class="form-label"><b>Name</b></label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" id="name" placeholder="John Doe" required pattern="[A-Za-z\s]+"
                                    title="Name cannot contain special characters or numbers.">
                                <div class="invalid-feedback">Please enter a valid name (letters and spaces only).</div>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label"><b>Email address</b></label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" id="email" placeholder="name@example.com" required
                                    title="Please enter a valid email address">
                                <div class="invalid-feedback">Please enter a valid email address.</div>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label"><b>Phone number</b></label>
                                <input type="tel" class="form-control @error('phone') is-invalid @enderror"
                                    name="phone" id="phone" placeholder="+15554443322" required
                                    title="Phone number should be between 11 and 15 digits and may start with a '+'."
                                    maxlength="15">
                                <div class="invalid-feedback">Please enter a valid phone number (11 to 15 digits).</div>
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label"><b>Message</b></label>
                                <textarea name="message" id="message" rows="5" class="form-control" placeholder="Your message..." required></textarea>
                            </div>
                            <div class="text-center d-grid">
                                <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- Swiper JS -->
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <!-- Bootstrap JS Bundle -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

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




        <!-- Custom JS for Swiper Initialization -->
        <script>
            const swiper = new Swiper('.swiper-container', {
                slidesPerView: 5,
                // spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: '.custom-carousel-control-next',
                    prevEl: '.custom-carousel-control-prev',
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1
                    },
                    576: {
                        slidesPerView: 2
                    },
                    768: {
                        slidesPerView: 3
                    },
                    992: {
                        slidesPerView: 4
                    },
                    1200: {
                        slidesPerView: 5
                    },
                }
            });
        </script>




        <script>
            function openPopupForm(title) {
                // Logic to open the popup form can go here
                console.log(`Opening popup for: ${title}`);
            }
        </script>

        <script>
            document.getElementById('email').addEventListener('input', function() {
                var emailInput = this.value;
                var emailError = document.getElementById('emailError');

                // Regular expression to validate email with dot in domain
                var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

                if (!emailPattern.test(emailInput)) {
                    emailError.style.display = 'block'; // Show error
                    this.classList.add('is-invalid'); // Add invalid class to input
                } else {
                    emailError.style.display = 'none'; // Hide error
                    this.classList.remove('is-invalid'); // Remove invalid class
                }
            });
        </script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const logosSlide = document.querySelector('.languagelogos-slide');
                const copy = logosSlide.cloneNode(true);
                document.querySelector('.languagelogos').appendChild(copy);
            });
        </script>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            $(function() {
                $('#contact-modal').on('show.bs.modal', function(event) {
                    $(this).find('.modal-header .modal-title').text(event.relatedTarget.dataset.title)
                    $(this).find('form input[name=title]').val(event.relatedTarget.dataset.title)
                })
            })
        </script>

        <script>
            document.getElementById('custom-form').addEventListener('submit', function(event) {
                let form = event.target;
                let isValid = true;

                // Name validation: no special characters
                let nameField = form.querySelector('#name');
                let nameRegex = /^[A-Za-z\s]+$/;
                if (!nameRegex.test(nameField.value.trim())) {
                    nameField.classList.add('is-invalid');
                    isValid = false;
                } else {
                    nameField.classList.remove('is-invalid');
                }

                // Email validation: properresources/views/site/layouts/footer.blade.php email format
                let emailField = form.querySelector('#email');
                let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(emailField.value.trim())) {
                    emailField.classList.add('is-invalid');
                    isValid = false;
                } else {
                    emailField.classList.remove('is-invalid');
                }

                // Phone validation: only numbers and spaces, and maximum 15 characters
                let phoneField = form.querySelector('#phone');
                let phoneRegex = /^(?:\+?1[-.\s]?)?(?:\(?\d{3}\)?[-.\s]?)?\d{3}[-.\s]?\d{4}$/;
                // let phoneRegex = /^\+?[0-9\s]{10,15}$/;
                if (!phoneRegex.test(phoneField.value.trim())) {
                    phoneField.classList.add('is-invalid');
                    isValid = false;
                } else {
                    phoneField.classList.remove('is-invalid');
                }

                if (!isValid) {
                    event.preventDefault(); // Prevent form submission if validation fails
                }
            });
            document.getElementById('contact-modal').addEventListener('submit', function(event) {
                let form = event.target;
                let isValid = true;

                // Name validation: no special characters
                let nameField = form.querySelector('#name');
                let nameRegex = /^[A-Za-z\s]+$/;
                if (!nameRegex.test(nameField.value.trim())) {
                    nameField.classList.add('is-invalid');
                    isValid = false;
                } else {
                    nameField.classList.remove('is-invalid');
                }

                // Email validation: properresources/views/site/layouts/footer.blade.php email format
                let emailField = form.querySelector('#email');
                let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(emailField.value.trim())) {
                    emailField.classList.add('is-invalid');
                    isValid = false;
                } else {
                    emailField.classList.remove('is-invalid');
                }

                // Phone validation: only numbers and spaces, and maximum 15 characters
                let phoneField = form.querySelector('#phone');
                let phoneRegex = /^(?:\+?1[-.\s]?)?(?:\(?\d{3}\)?[-.\s]?)?\d{3}[-.\s]?\d{4}$/;
                // let phoneRegex = /^\+?[0-9\s]{10,15}$/;
                if (!phoneRegex.test(phoneField.value.trim())) {
                    phoneField.classList.add('is-invalid');
                    isValid = false;
                } else {
                    phoneField.classList.remove('is-invalid');
                }

                if (!isValid) {
                    event.preventDefault(); // Prevent form submission if validation fails
                }
            });
        </script>
        <script>
            document.getElementById('contactForm').addEventListener('submit', function(event) {
                let form = event.target;
                let isValid = true;

                // Name validation: no special characters
                let nameField = form.querySelector('#name');
                let nameRegex = /^[A-Za-z\s]+$/;
                if (!nameRegex.test(nameField.value.trim())) {
                    nameField.classList.add('is-invalid');
                    isValid = false;
                } else {
                    nameField.classList.remove('is-invalid');
                }

                // Email validation: proper email format
                let emailField = form.querySelector('#email');
                let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(emailField.value.trim())) {
                    emailField.classList.add('is-invalid');
                    isValid = false;
                } else {
                    emailField.classList.remove('is-invalid');
                }

                // Phone validation: between 11 to 15 digits
                let phoneField = form.querySelector('#phone');
                let phoneRegex = /^(?:\+?1[-.\s]?)?(?:\(?\d{3}\)?[-.\s]?)?\d{3}[-.\s]?\d{4}$/;
                // let phoneRegex = /^\+?[0-9\s]{11,15}$/;
                if (!phoneRegex.test(phoneField.value.trim())) {
                    phoneField.classList.add('is-invalid');
                    isValid = false;
                } else {
                    phoneField.classList.remove('is-invalid');
                }

                if (!isValid) {
                    event.preventDefault(); // Prevent form submission if validation fails
                }
            });
        </script>




    @endsection
