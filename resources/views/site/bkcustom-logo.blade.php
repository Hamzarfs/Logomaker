    @extends('site.common')

    @section('title', "Hire a Logo Designer for Custom Logo Design - RFS Logo Design")

    @section('meta_desc', "Hire a professional logo designer for custom logo design because your brand or company deserves the best logo. RFS Logo Design has expert logo designers team.")

    @section('content')

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css">
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
                align-items: center; /* Center the image vertically */
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
                background-color: rgb(81, 47, 144); /* Purple background on hover */
            }

            .box:hover .box-text {
                display: block; /* Show text on hover */
            }

            .box-image {
                width: 100%;
                height: auto;
                display: block;
            }

            .box-content {
                position: absolute;
                top: 0; /* Ensure it covers the top of the box */
                left: 0;
                width: 100%;
                height: 100%; /* Cover the entire box */
                background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 80%, #512f90f6);
                color: #fff;
                padding: 20px;
                text-align: left;
                transition: background-color 1s ease;
                display: flex;
                flex-direction: column;
                justify-content: flex-end; /* Align text to the bottom */
            }

            .box-heading {
                font-size: 30px;
                font-weight: 700;
                margin: 0;
            }

            .box-text {
                font-size: 16px;
                margin-top: 10px;
                display: none; /* Hide text initially */
            }

            .box-heading-number {
                display: block; /* Make sure the number is on a new line */
                color: #fff;
                padding: 2px 6px;
                border-radius: 4px;
                font-size: 58px; /* Adjust as needed */
                font-weight: 900;
            }
            .custom-logo-process {
                padding: 20px 0;
                margin-bottom: -30px;
                margin-top:50px;
            }

            .custom-logo-process h2 {
                font-weight: 700;
                color: #010935;
                font-size:40px;
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
                width: 60px; /* Adjust size as needed */
                height: 60px; /* Adjust size as needed */
                display: flex;
                align-items: center;
                justify-content: center;
                background-color: #6a70d6; /* Background color of the circle */
                border-radius: 50%;
                margin: 0 auto 10px auto;
            }
            .contact-section .icon-circle i {
                color: #ffffff; /* White color for icons */
            }




            /* Make h2 bold */
            .contact-section h2.font-weight-bold {
                font-weight: 700;
            }

            /* Style for links in the contact section */
            .contact-section .contact-option a {
                color: #010935; /* Black color for text */
                font-weight: bold; /* Bold text */
                text-decoration: none; /* Remove underline */
            }

            .contact-section .contact-option a:hover {
                color: #010935; /* Black color on hover */
                text-decoration: none; /* Underline on hover (optional) */
            }




            @media (max-width: 1198px) and (min-width: 992px) {
                .box-heading-number {
                    font-size: 34px; /* Adjusted size for screens in this range */
                }

                .box-heading {
                    font-size: 22px; /* Adjusted size for screens in this range */
                }
            }

            .custom-logo-page-section {
                background-color: #6868d1;
                border-radius: 25px;
                padding: 20px;
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
                margin-top: 20px;
                display: flex;
                flex-direction: column;
                justify-content: center;

                color: black;
            }

            .custom-logo-page-form label {
                display: none;
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
        </style>

        <div class="container mt-5">
            <div class="row custom-logo-page-section mx-0">
                <div class="col-md-6 d-flex align-items-center">
                    <div class="custom-logo-page-content">
                        <h1 class="custom-logo-page-heading">Custom Logo Design Services for Your Business</h1>
                        <p>Let our logo designs turn your ideas into professional magic!</p>
                        <div class="text-center">
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#contact-modal"><button class="custom-logo-page-button">Get Started</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <div class="custom-logo-page-form bg-white border p-3 rounded">
                        <h3 class="custom-logo-page-form-heading text-center">Get a Free Quote</h3>
                        <form id="custom-form" method="POST" action="{{ route('customLogoSubmit') }}">
                            @csrf
                            <div class="form-group mb-2">
                                <label for="name" class="custom-logo-page-label">Name:</label>
                                <input type="text" class="form-control custom-logo-page-input" name="name" id="name"
                                    placeholder="Enter your name" required>
                            </div>
                            <div class="form-group mb-2">
                                <label for="email" class="custom-logo-page-label">Email:</label>
                                <input type="email" class="form-control custom-logo-page-input" name="email" id="email"
                                    placeholder="Enter your email" required>
                            </div>
                            <div class="form-group mb-2">
                                <label for="country" class="custom-logo-page-label">Select Country:</label>
                                <select class="form-control custom-logo-page-input" name="country" id="country" required>
                                    <option value="" disabled selected>Select your country</option>
                                    <!-- Include all countries here -->
                                    <option value="ad">Andorra</option>
                                    <option value="ae">United Arab Emirates</option>
                                    <option value="af">Afghanistan</option>
                                    <option value="ag">Antigua and Barbuda</option>
                                    <option value="ai">Anguilla</option>
                                    <option value="al">Albania</option>
                                    <option value="am">Armenia</option>
                                    <option value="ao">Angola</option>
                                    <option value="ar">Argentina</option>
                                    <option value="as">American Samoa</option>
                                    <option value="at">Austria</option>
                                    <option value="au">Australia</option>
                                    <option value="aw">Aruba</option>
                                    <option value="ax">Åland Islands</option>
                                    <option value="az">Azerbaijan</option>
                                    <option value="ba">Bosnia and Herzegovina</option>
                                    <option value="bb">Barbados</option>
                                    <option value="bd">Bangladesh</option>
                                    <option value="be">Belgium</option>
                                    <option value="bf">Burkina Faso</option>
                                    <option value="bg">Bulgaria</option>
                                    <option value="bh">Bahrain</option>
                                    <option value="bi">Burundi</option>
                                    <option value="bj">Benin</option>
                                    <option value="bl">Saint Barthélemy</option>
                                    <option value="bm">Bermuda</option>
                                    <option value="bn">Brunei Darussalam</option>
                                    <option value="bo">Bolivia</option>
                                    <option value="bq">Bonaire, Sint Eustatius and Saba</option>
                                    <option value="br">Brazil</option>
                                    <option value="bs">Bahamas</option>
                                    <option value="bt">Bhutan</option>
                                    <option value="bv">Bouvet Island</option>
                                    <option value="bw">Botswana</option>
                                    <option value="by">Belarus</option>
                                    <option value="bz">Belize</option>
                                    <option value="ca">Canada</option>
                                    <option value="cc">Cocos (Keeling) Islands</option>
                                    <option value="cd">Congo, Democratic Republic of the</option>
                                    <option value="cf">Central African Republic</option>
                                    <option value="cg">Congo</option>
                                    <option value="ch">Switzerland</option>
                                    <option value="ci">Côte d'Ivoire</option>
                                    <option value="ck">Cook Islands</option>
                                    <option value="cl">Chile</option>
                                    <option value="cm">Cameroon</option>
                                    <option value="cn">China</option>
                                    <option value="co">Colombia</option>
                                    <option value="cr">Costa Rica</option>
                                    <option value="cu">Cuba</option>
                                    <option value="cv">Cabo Verde</option>
                                    <option value="cw">Curaçao</option>
                                    <option value="cx">Christmas Island</option>
                                    <option value="cy">Cyprus</option>
                                    <option value="cz">Czech Republic</option>
                                    <option value="de">Germany</option>
                                    <option value="dj">Djibouti</option>
                                    <option value="dk">Denmark</option>
                                    <option value="dm">Dominica</option>
                                    <option value="do">Dominican Republic</option>
                                    <option value="dz">Algeria</option>
                                    <option value="ec">Ecuador</option>
                                    <option value="ee">Estonia</option>
                                    <option value="eg">Egypt</option>
                                    <option value="eh">Western Sahara</option>
                                    <option value="er">Eritrea</option>
                                    <option value="es">Spain</option>
                                    <option value="et">Ethiopia</option>
                                    <option value="fi">Finland</option>
                                    <option value="fj">Fiji</option>
                                    <option value="fm">Federated States of Micronesia</option>
                                    <option value="fo">Faroe Islands</option>
                                    <option value="fr">France</option>
                                    <option value="ga">Gabon</option>
                                    <option value="gb">United Kingdom</option>
                                    <option value="gd">Grenada</option>
                                    <option value="ge">Georgia</option>
                                    <option value="gf">French Guiana</option>
                                    <option value="gg">Guernsey</option>
                                    <option value="gh">Ghana</option>
                                    <option value="gi">Gibraltar</option>
                                    <option value="gl">Greenland</option>
                                    <option value="gm">Gambia</option>
                                    <option value="gn">Guinea</option>
                                    <option value="gp">Guadeloupe</option>
                                    <option value="gq">Equatorial Guinea</option>
                                    <option value="gr">Greece</option>
                                    <option value="gt">Guatemala</option>
                                    <option value="gu">Guam</option>
                                    <option value="gw">Guinea-Bissau</option>
                                    <option value="gy">Guyana</option>
                                    <option value="hk">Hong Kong</option>
                                    <option value="hm">Heard Island and McDonald Islands</option>
                                    <option value="hn">Honduras</option>
                                    <option value="hr">Croatia</option>
                                    <option value="ht">Haiti</option>
                                    <option value="hu">Hungary</option>
                                    <option value="id">Indonesia</option>
                                    <option value="ie">Ireland</option>
                                    <option value="il">Israel</option>
                                    <option value="im">Isle of Man</option>
                                    <option value="in">India</option>
                                    <option value="io">British Indian Ocean Territory</option>
                                    <option value="iq">Iraq</option>
                                    <option value="ir">Iran</option>
                                    <option value="is">Iceland</option>
                                    <option value="it">Italy</option>
                                    <option value="je">Jersey</option>
                                    <option value="jm">Jamaica</option>
                                    <option value="jo">Jordan</option>
                                    <option value="jp">Japan</option>
                                    <option value="ke">Kenya</option>
                                    <option value="kg">Kyrgyzstan</option>
                                    <option value="kh">Cambodia</option>
                                    <option value="ki">Kiribati</option>
                                    <option value="km">Comoros</option>
                                    <option value="kn">Saint Kitts and Nevis</option>
                                    <option value="kp">North Korea</option>
                                    <option value="kr">South Korea</option>
                                    <option value="kw">Kuwait</option>
                                    <option value="ky">Cayman Islands</option>
                                    <option value="kz">Kazakhstan</option>
                                    <option value="la">Laos</option>
                                    <option value="lb">Lebanon</option>
                                    <option value="lc">Saint Lucia</option>
                                    <option value="li">Liechtenstein</option>
                                    <option value="lk">Sri Lanka</option>
                                    <option value="lr">Liberia</option>
                                    <option value="ls">Lesotho</option>
                                    <option value="lt">Lithuania</option>
                                    <option value="lu">Luxembourg</option>
                                    <option value="lv">Latvia</option>
                                    <option value="ly">Libya</option>
                                    <option value="ma">Morocco</option>
                                    <option value="mc">Monaco</option>
                                    <option value="md">Moldova</option>
                                    <option value="me">Montenegro</option>
                                    <option value="mf">Saint Martin</option>
                                    <option value="mg">Madagascar</option>
                                    <option value="mh">Marshall Islands</option>
                                    <option value="mk">North Macedonia</option>
                                    <option value="ml">Mali</option>
                                    <option value="mm">Myanmar</option>
                                    <option value="mn">Mongolia</option>
                                    <option value="mo">Macao</option>
                                    <option value="mp">Northern Mariana Islands</option>
                                    <option value="mq">Martinique</option>
                                    <option value="mr">Mauritania</option>
                                    <option value="ms">Montserrat</option>
                                    <option value="mt">Malta</option>
                                    <option value="mu">Mauritius</option>
                                    <option value="mv">Maldives</option>
                                    <option value="mw">Malawi</option>
                                    <option value="mx">Mexico</option>
                                    <option value="my">Malaysia</option>
                                    <option value="mz">Mozambique</option>
                                    <option value="na">Namibia</option>
                                    <option value="nc">New Caledonia</option>
                                    <option value="ne">Niger</option>
                                    <option value="nf">Norfolk Island</option>
                                    <option value="ng">Nigeria</option>
                                    <option value="ni">Nicaragua</option>
                                    <option value="nl">Netherlands</option>
                                    <option value="no">Norway</option>
                                    <option value="np">Nepal</option>
                                    <option value="nr">Nauru</option>
                                    <option value="nu">Niue</option>
                                    <option value="nz">New Zealand</option>
                                    <option value="om">Oman</option>
                                    <option value="pa">Panama</option>
                                    <option value="pe">Peru</option>
                                    <option value="pf">French Polynesia</option>
                                    <option value="pg">Papua New Guinea</option>
                                    <option value="ph">Philippines</option>
                                    <option value="pk">Pakistan</option>
                                    <option value="pl">Poland</option>
                                    <option value="pm">Saint Pierre and Miquelon</option>
                                    <option value="pn">Pitcairn</option>
                                    <option value="pr">Puerto Rico</option>
                                    <option value="pt">Portugal</option>
                                    <option value="pw">Palau</option>
                                    <option value="py">Paraguay</option>
                                    <option value="qa">Qatar</option>
                                    <option value="re">Réunion</option>
                                    <option value="ro">Romania</option>
                                    <option value="rs">Serbia</option>
                                    <option value="ru">Russia</option>
                                    <option value="rw">Rwanda</option>
                                    <option value="sa">Saudi Arabia</option>
                                    <option value="sb">Solomon Islands</option>
                                    <option value="sc">Seychelles</option>
                                    <option value="sd">Sudan</option>
                                    <option value="se">Sweden</option>
                                    <option value="sg">Singapore</option>
                                    <option value="sh">Saint Helena</option>
                                    <option value="si">Slovenia</option>
                                    <option value="sj">Svalbard and Jan Mayen</option>
                                    <option value="sk">Slovakia</option>
                                    <option value="sl">Sierra Leone</option>
                                    <option value="sm">San Marino</option>
                                    <option value="sn">Senegal</option>
                                    <option value="so">Somalia</option>
                                    <option value="sr">Suriname</option>
                                    <option value="ss">South Sudan</option>
                                    <option value="st">São Tomé and Príncipe</option>
                                    <option value="sv">El Salvador</option>
                                    <option value="sx">Sint Maarten</option>
                                    <option value="sy">Syrian Arab Republic</option>
                                    <option value="sz">Swaziland</option>
                                    <option value="tc">Turks and Caicos Islands</option>
                                    <option value="td">Chad</option>
                                    <option value="tf">French Southern Territories</option>
                                    <option value="tg">Togo</option>
                                    <option value="th">Thailand</option>
                                    <option value="tj">Tajikistan</option>
                                    <option value="tk">Tokelau</option>
                                    <option value="tl">Timor-Leste</option>
                                    <option value="tm">Turkmenistan</option>
                                    <option value="tn">Tunisia</option>
                                    <option value="to">Tonga</option>
                                    <option value="tr">Turkey</option>
                                    <option value="tt">Trinidad and Tobago</option>
                                    <option value="tv">Tuvalu</option>
                                    <option value="tz">Tanzania</option>
                                    <option value="ua">Ukraine</option>
                                    <option value="ug">Uganda</option>
                                    <option value="um">United States Minor Outlying Islands</option>
                                    <option value="un">United Nations</option>
                                    <option value="us">United States</option>
                                    <option value="uy">Uruguay</option>
                                    <option value="uz">Uzbekistan</option>
                                    <option value="va">Vatican City</option>
                                    <option value="vc">Saint Vincent and the Grenadines</option>
                                    <option value="ve">Venezuela</option>
                                    <option value="vg">British Virgin Islands</option>
                                    <option value="vi">U.S. Virgin Islands</option>
                                    <option value="vn">Viet Nam</option>
                                    <option value="vu">Vanuatu</option>
                                    <option value="wf">Wallis and Futuna</option>
                                    <option value="ws">Samoa</option>
                                    <option value="ye">Yemen</option>
                                    <option value="yt">Mayotte</option>
                                    <option value="za">South Africa</option>
                                    <option value="zm">Zambia</option>
                                    <option value="zw">Zimbabwe</option>
                                </select>
                            </div>
                            <div class="form-group mb-2">
                                <label for="phone" class="custom-logo-page-label">Phone Number:</label>
                                <input type="tel" class="form-control custom-logo-page-input iti" name="phone"
                                    id="phone" placeholder="Enter your phone number" required>
                            </div>
                            <div class="form-group mb-2">
                                <label for="message" class="custom-logo-page-label">Comments:</label>
                                <textarea class="form-control custom-logo-page-textarea" name="message" id="message" rows="2"
                                    placeholder="Your comments" required></textarea>
                            </div>
                            <form action="{{ url('/logo-maker') }}" method="POST">
                            <button type="submit" class="btn btn-secondary custom-logo-page-submit align-left">Submit</button>
                            </form>
                    </div>
                </div>
            </div>


        <div class="container custom-container-margin-v3">
            <div class="row align-items-center">
                <div class="col-lg-6 custom-text-section-v3">
                    <h2>Same Premium Logos, Now Faster!</h2>
                    <p>We have delivered top-notch designs to thousands of clients. With our free logo services,
                    get high-quality, customizable logos in minutes straight from our expert designers!</p>
                    <p>We know you are eager to launch your business, so our simple and speedy customizable
                    logo design process is here to help. Below are a few simple steps we follow and produce
                    a professional logo worthy of your brand in no time at all.</p>
                    <div class="custom-bold-text-v3">Let Us Create A Custom Logo With Ease!</div>
                </div>
                <div class="col-lg-6 custom-image-section-v3">
                    <img src="images/Mask group.png" alt="Descriptive Image Text">
                </div>
            </div>
        </div>


        </div>

        <div class="banner-section" style="background-color: #f2f6fe; padding-bottom: 100px;">
            <div class="container portfolio-section">
                <h2 class="portfolio-heading">Hire Logo Designer for Custom Logo Design</h2>
                <p class="main-description-online">
                    Are you looking for a professional logo that truly represents your company? Hire an expert logo designer for
                    custom logo design at RFS Logo Design tailored to your business. Stand out with a unique and memorable
                    identity that leaves a lasting impression.
                </p>


                <div class="row">
                    @foreach ($categories as $category)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <a href="javascript:void(0)" class="card-container-link" style="cursor: default">
                                <div class="card-container2">
                                    <div class="card-inner">
                                        <div class="card-front">
                                            <img src="{{ asset($category->image ?: "category-image/{$category->latest_product->image}") }}"
                                                class="img-fluid" alt="{{ $category->name }}">
                                        </div>
                                        <div class="card-back">
                                            <div class="category-name">{{ $category->name }}</div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    @endforeach
                    {{-- @foreach ($categories as $category)
                        @if ($category->products->isNotEmpty())
                            @php
                                $product = $category->products->first(); // Get the first product
                            @endphp
                            <div class="col-lg-4 col-md-6 mb-4">
                                <a href="{{ route('logos', $category->slug) }}" class="card-container-link"
                                    data-image="{{ $product->image }}" data-id="{{ $product->id }}"
                                    data-placeholder="{{ $product->placeholder_value }}">
                                    <div class="card-container">
                                        <div class="card-inner">
                                            <div class="card-front">
                                                <img src="category-image/{{ $product->image }}"
                                                    class="img-fluid portfolio-image" alt="{{ $product->name }}">
                                                <div class="text-placeholder"
                                                    data-placeholder-value="{{ $product->placeholder_value }}"></div>

                                            </div>
                                            <div class="card-back">
                                                <div class="category-name">{{ $category->name }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        @endif
                    @endforeach --}}
                </div>


                {{-- <div class="row">
                    @foreach ($products as $product)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card-container">
                                <img src="category-image/{{ $product->image }}" class="img-fluid portfolio-image">
                                <div class="text-placeholder"></div>
                                <a href="{{ url('/store-session-data-image?image=' . $product->image) }}"
                                    class="hover-button select-btn" data-product-id="{{ $product->id }}">Select </a>
                            </div>
                        </div>
                    @endforeach
                </div> --}}






                <h2 class="studioTitle">Uncover Versatile Logo Designs With Our Powerful Design Engine!</h2>
            </div>
        </div>



    <!----------------------start simple and fast --------------------->
    <section class="custom-logo-process">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2>Simple and Fast<br>Customizable Logo<br>Design Process</h2>
                </div>
                <div class="col-md-6">
                    <p style="text-align: justify;">We understand the rush to launch your business startup, and that’s why customizable logos make sense. Getting a professional logo design from our advance studio isn’t hard, just follow these steps.</p>
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
                        <p class="box-text">First up, we dive into learning all about your brand, audience, and competitors. This helps us get
                            a feel for what your logo should say and how it should stand out. We’ll brainstorm, survey, and check out what others in your space are doing.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="box">
                    <img src="images/Frame 21.png" class="box-image" alt="Image 2">
                    <div class="box-content">
                        <span class="box-heading-number">02</span>
                        <h3 class="box-heading">Concept<br> Refinement</h3>
                        <p class="box-text">We begin by sketching ideas and exploring different styles through rough drafts and mood boards.
                            Once the best concepts emerge, we refine them by finalizing colors, typography, and ensuring the logo works across all formats. Your feedback guides the final tweaks.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="box">
                    <img src="images/Frame 22.png" class="box-image" alt="Image 3">
                    <div class="box-content">
                        <span class="box-heading-number">03</span>
                        <h3 class="box-heading">Finalization and Delivery</h3>
                        <p class="box-text">Finally, we prepare your logo for action. We create various formats for different uses and
                            make sure they look great everywhere. Plus, we might put together a style guide to keep everything consistent.</p>
                    </div>
                </div>
            </div>
        </div>

    <!----------------------end simple and fast --------------------->
    <div class="container custom-section-v3">
        <div class="row align-items-center">
            <div class="col-lg-6 custom-image-v3"style = padding-right:50px;>
                <img src="images/Mask group (1).png" alt="Affordable Logo Design">
            </div>
            <div class="col-lg-6 custom-content-v3">
                <h2>We Craft Affordable Logo Designs To Boost Creativity</h2>
                <p style="text-align: justify;">Allow us to create logo designs with top-notch quality! We offer affordable, professional logos perfect for startups and small businesses. Get the same expert design style without the hefty price tag, thanks to our global team of skilled logo designers.</p>
            </div>
        </div>
    </div>

    </div>


        <!----------------------start need help--------------------->



    <section class="container py-5 contact-section">
        <div class="text-center mb-4">
            <h2 class="font-weight-bold">Need help choosing a professional logo design?<br> Consult with our expert!</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 mb-3 text-center">
                <div class="contact-option">
                    <div class="icon-circle">
                        <i class="fas fa-phone fa-2x"></i>
                    </div>
                    <a href="tel:+15516665255"> +1(551)666-5255</a>
                </div>
            </div>
            <div class="col-md-4 mb-3 text-center">
                <div class="contact-option">
                    <div class="icon-circle">
                        <i class="fas fa-envelope fa-2x"></i>
                    </div>
                    <a href="mailto:support@rfslogodesign.com">support@rfslogodesign.com</a>
                </div>
            </div>
            <div class="col-md-4 mb-3 text-center">
                <div class="contact-option">
                    <div class="icon-circle">
                        <i class="fas fa-comment-dots fa-2x"></i>
                    </div>
                    <a href="{{ url('https://wa.me/+18482369397') }}">Live Chat</a>
                </div>
            </div>
        </div>
    </section>

    <!----------------------start need help--------------------->





        <!-- ------------------Start FAQs --------------- -->
        <div class="container faq-section">
            <h2 class="text-center mb-4">Frequently Asked Questions</h2>
            <div id="accordion">
                <!-- <-Question 1 -->
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                <span class="faq-question">How can I effectively utilize a logo maker to create a
                                    unique
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

                            Customize Your Design: Customize the font, colors, and add your company name or tagline.
                            Many
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
                            Ownership: Logos created using templates are owned by the RFS Logo Design. Exclusive rights
                            can
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
                                <span class="faq-question">What are the distinctions between using a logo maker and
                                    opting
                                    for custom logo design services?</span>
                            </button>
                        </h5>
                    </div>

                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            Logo Maker: Uses pre-made templates for customization. You can adjust fonts, colors, and
                            effects
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
                            Absolutely! With our logo maker, you have the flexibility to customize fonts, colors, text,
                            and
                            your company name. Additionally, you can enhance
                            your logo with advanced features like strokes, reflections, shadows, and more, all without
                            needing any design expertise. These tools empower you
                            to generate countless unique design variations from a single logo template.
                        </div>
                    </div>
                </div>

                <!-- Question 7 -->
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven"
                                aria-expanded="false" aria-controls="collapseSeven">
                                <span class="faq-question">Do you provide help in customizing my design?</span>
                            </button>
                        </h5>
                    </div>

                    <div id="collapseSeven" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                        <div class="card-body">
                            We have a dedicated customer support team ready to assist with any inquiries regarding our
                            logo
                            design maker.
                            For custom logo design services by dedicated graphic designers, please contact us at
                            551-666-2555, email us at support@rfslogodesign.com, or fill out a hiring a logo designer
                            form
                            here.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Contact us Modal --}}
        <div class="modal fade" id="contact-modal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title text-center">Get Started</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('contactUs') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label"><b>Name</b></label>
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="John Doe" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label"><b>Email address</b></label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="name@example.com" required
                                    title="Please enter a valid email address">
                            </div>


                            <div class="mb-3">
                                <label for="phone" class="form-label"><b>Phone number</b></label>
                                <input type="tel" class="form-control" name="phone" id="phone"
                                    placeholder="123456789" required pattern="^\d{15}$" title="Please enter phone number">
                            </div>


                            <div class="mb-3">
                                <label for="comment" class="form-label"><b>Comment</b></label>
                                <textarea name="comment" id="comment" rows="5" class="form-control" placeholder="Comments"></textarea>
                            </div>

                            <div class="text-center d-grid">
                                <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            // Initialize phone input
            const input = document.querySelector("#phone");
            intlTelInput(input, {
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
            });

            @if (session()->has('success'))
                @if (session()->get('success'))
                    swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'Custom logo form submitted successfully!',
                        timer: 1500,
                        timerProgressBar: true
                    }).then(() => {
                        location.assign("{{ url('thanks') }}")
                    })
                @else
                    swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Unexpected error occured. Please try again later!'
                    })
                @endif
            @endif
        </script>
    @endsection
