@extends('site.common')

@section('title', 'Contact Us - RFS Logo Design')
@section('meta_desc',
    'Get in touch with RFS Logo Design for all your logo design needs. Contact our team for support,
    inquiries, or to start creating your custom logo today.')


@section('content')

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .contact-section {
            padding-top: 60px;
            padding-bottom: 60px;
        }

        .contact-section h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 20px;
        }

        .contact-section p {
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 30px;
        }

        .contact-section .btn {
            background-color: #512f90;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
        }

        .contact-section .btn:hover {
            background-color: #3d2171;
        }

        .contact-info {
            margin-bottom: 30px;
            display: flex;
            align-items: center;
        }

        .contact-info h5 {
            font-size: 1.2rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
            margin-left: 10px;
        }

        .contact-info i {
            font-size: 1.5rem;
            color: #512f90;
            margin-right: 15px;
        }

        .contact-info p {
            margin: 0;
            font-size: 1.1rem;
            color: #666;
        }

        .contact-info a {
            color: inherit;
            text-decoration: none;
        }

        .form-group label {
            font-weight: 600;
            color: #333;
        }

        .form-control {
            border: none;
            border-bottom: 2px solid #ddd;
            border-radius: 0;
            padding-left: 2.5rem;
        }

        .form-control::placeholder {
            color: #aaa;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #512f90;
        }

        .form-icon {
            position: absolute;
            left: 10px;
            top: 68%;
            transform: translateY(-50%);
            color: #aaa;
        }

        .form-group {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .form-group.filled .form-icon {
            color: #512f90;
        }

        .animated-form {
            animation: slideInRight 1s ease-in-out;
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(100%);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .heading-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .heading-container h3 {
            font-size: 18px;
            font-weight: bold;
            color: #6a70d6;
        }

        .contact-button-online {
            padding: 10px;
            border-radius: 5px;
            color: #fff;
            background-color: #512f90;
            font-size: 15px;
            font-weight: 700;
            line-height: 24px;
            text-align: center;
            border-color: #646BD9;
            margin-bottom: 30px;
        }

        .contact-button-online:hover {
            background-color: #512f90;
            background-color: #512f90;
            color: #fff;
            text-decoration: none;
            /* Remove any text decoration */
        }

        .education-logo-section {
            background-image: url('/images/contact2.jpg');
            background-size: cover;
            background-position: center;
            padding: 150px 0;
            color: #fff;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            /* Center content vertically */
            align-items: center;
            /* Center content horizontally */
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

            .new-testimonial {
                margin-top: 0px !important;

            }
        }
    </style>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <section class="education-logo-section">
        <div class="container">
            <h1>Contact Us</h1>
            <p>Your one-stop solution for all your design needs.</p>

        </div>
    </section>



    <div class="container contact-section">
        <h2>Contact RFS Logo Design</h2>
        <p>If you have a unique idea that you can't find among our templates, chat with a live representative through
            our chat window or reach out to us using the form below. Rest assured, we'll respond promptly.</p>
        <p>For tailored design solutions, explore our comprehensive range of services, including <a
                href="{{ url('/custom-logo') }}">custom logo design</a>,
            business cards, stationery design, banners, and website design and development. Expect a prompt response
            from our team, ready to assist you every step of the way.</p>

        <button class="contact-button-online" onclick="window.location.href='//wa.me/+18482369397'">Chat with Us</button>


        <div class="row">
            <div class="col-md-6">
                <div class="heading-container">
                    <h3>Contact Info</h3>
                </div>
                <div class="contact-info">
                    <i class="fas fa-phone-alt"></i>
                    <p><a href="tel:+15516662555">551-666-2555</a></p>
                </div>
                <div class="contact-info">
                    <i class="fas fa-clock"></i>
                    <p>Mon-Fri, 9am-5pm EST</p>
                </div>
                <div class="contact-info">
                    <i class="fas fa-map-marker-alt"></i>
                    <p><a href="https://www.google.com/maps/search/?api=1&query=41+Winthrop+Rd,+Edison,+NJ+08817"
                            target="_blank">41 Winthrop Rd, Edison, NJ 08817</a></p>
                </div>
            </div>
            <div class="col-md-6 animated-form">
                <div class="heading-container">
                    <h3>Contact Form</h3>
                </div>
                <form id="contactForm" method="POST" action="{{ route('contactUs') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <i class="fas fa-user form-icon"></i>
                        <input type="text" class="form-control" name="name" id="name"
                            placeholder="Enter your name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <i class="fas fa-envelope form-icon"></i>
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="Enter your email"
                            title="Please enter a valid email address ending with .com (e.g., example@example.com)"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <i class="fas fa-phone form-icon"></i>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="+1 2345678901"
                            required pattern="^\+1\s\d{10}$"
                            title="Please enter a valid phone number in the format +1 2345678901">

                    </div>
                    <div class="form-group">
                        <label for="comment">Comment</label>
                        <i class="fas fa-comment form-icon"></i>
                        <textarea class="form-control" name="comment" id="comment" rows="1" placeholder="Enter your comment" required></textarea>
                    </div>
                    <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_SITE_KEY') }}"></div>
                    <button type="submit" class="contact-button-online mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.querySelectorAll('.form-control').forEach(input => {
            input.addEventListener('input', function() {
                if (this.value) {
                    this.parentElement.classList.add('filled');
                } else {
                    this.parentElement.classList.remove('filled');
                }
            });
        });

        document.getElementById('contactForm').addEventListener('submit', function(event) {
            var email = document.getElementById('email').value;
            var phone = document.getElementById('phone').value;
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            var phonePattern = /^\d{10}$/;

            if (!emailPattern.test(email)) {
                event.preventDefault();
                alert('Please enter a valid email address.');
                return;
            }
        });

        @if (session()->has('success'))
            @if (session()->get('success'))
                swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'Contact us form submitted successfully!',
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
