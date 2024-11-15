<!-- resources/views/site/common.blade.php -->
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @isset($categoryObj->meta_title)
        <title>{{ $categoryObj->meta_title }}</title>
    @else
        <title>@yield('title')</title>
    @endisset

    <meta name="description" content="@yield('meta_desc')" />

    <link rel="canonical" href="{{ url()->current() }}" />

    <link rel="icon" type="image/webp" href="{{ asset('rfs-fav.webp') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Poppins:wght@200;400;700&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('site/css/style.css') }}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <!-- Add your CSS links here -->

    {{-- @stack('headerStyles') --}}

    <style>
        @foreach ($logoFonts as $font)
            @php // Extract the font name without the extension
            $fontName =pathinfo($font->name, PATHINFO_FILENAME);
            $fontSlug =pathinfo($font->slug, PATHINFO_FILENAME);

        @endphp
        @font-face {
            font-family: '{{ $fontSlug }}';
            src: url('{{ asset('fonts/' . $font->name) }}') format('opentype');
        }
        @endforeach
    </style>


    <style>
        /* @font-face {
                font-family: 'Remon-Demo';
                src: url('fonts/Remon Demo.ttf') format('truetype');
            }
        */






        /* Custom scrollbar styles */
        ::-webkit-scrollbar {
            width: 8px;
            /* Width of the scrollbar */
        }

        ::-webkit-scrollbar-track {
            background: white;
            /* White background */
        }

        ::-webkit-scrollbar-thumb {
            background: #666BC0;
            /* Purple scrollbar */
            border-radius: 8px;
            /* Rounded corners */
            position: relative;
        }

        ::-webkit-scrollbar-thumb::before {
            content: 'VIP';
            position: absolute;
            top: 50%;
            right: -50px;
            transform: rotate(270deg) translateY(-50%);
            transform-origin: center;
            background-color: red;
            /* Red VIP tag background */
            color: white;
            /* White text color */
            padding: 5px 10px;
            font-weight: bold;
            border-radius: 5px 5px 0 0;
        }
    </style>

    {{-- @yield('styles') --}}



    <meta name="google-site-verification" content="PCblVwSUWCzACg0raNR0v7VHp7F1haeuavWupNiKPhk" />
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-8EQZ5SK5PS"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-8EQZ5SK5PS');
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16744151824"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-16744151824');
    </script>

    <!-- Brevo Conversations {literal} -->
    <script>
        (function(d, w, c) {
            w.BrevoConversationsID = '65eb4c58149bb809250724f4';
            w[c] = w[c] || function() {
                (w[c].q = w[c].q || []).push(arguments);
            };
            var s = d.createElement('script');
            s.async = true;
            s.src = 'https://conversations-widget.brevo.com/brevo-conversations.js';
            if (d.head) d.head.appendChild(s);
        })(document, window, 'BrevoConversations');
    </script>
    <!-- /Brevo Conversations {/literal} -->

    <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "RFS Logo Design",
        "url": "https://rfslogodesign.com/",
        "logo": "https://rfslogodesign.com/images/RFS.svg",
        "sameAs": [
            "https://www.facebook.com/rfslogodesign/",
            "https://www.instagram.com/rfs_logodesign/"
        ]
        }
    </script>

</head>


<body>




    @includeWhen(!request()->is('custom-logo-design'), 'site.layouts.header')

    @includeWhen(request()->is('custom-logo-design'), 'site.layouts.lp-header')

    @yield('content')



    @includeWhen(!request()->is('custom-logo-design'), 'site.layouts.footer')

    @includeWhen(request()->is('custom-logo-design'), 'site.layouts.lp-footer')



    <!-- Add your JS scripts here -->

    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script> --}}
    <script>
        function expandCard(card) {
            const cards = document.querySelectorAll('.plan-section .card');
            cards.forEach(c => c.classList.remove('active'));
            card.classList.add('active');
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> --}}

    {{-- STart JS FOR OWL TESTIMONIAL CAROUSEL --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        $(function() {
            // Initialize Owl Carousel
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                center: true,
                autoplay: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });

            owl.on('changed.owl.carousel', function(event) {
                var items = owl.find('.owl-item');
                items.removeClass('active');
                var centerItem = items.eq(event.item.index + 1);
                centerItem.addClass('active');
            });

            // Function to fetch reviews
            fetchReviews();

            function fetchReviews() {
                const reviews = [{
                        avatar: '{{ asset('images/userprofileavatar.webp') }}',
                        text: 'I dealt with Ed Harvey through my experience with RFS and he was great! Very polite and helpful. I had drawn a rough sketch of my logo and they brought it to life extremely fast and with perfect accuracy! I would recommend Ed and RFS for anyone looking into getting a logo made!',
                        name: 'Busted Knuckles Mobile Repair',
                        rating: 5
                    },
                    // {
                    //     avatar: '{{ asset('images/userprofileavatar.webp') }}',
                    //     text: "I had the pleasure of working with RFS Logo Design Team, led by Mr. Brian Edwin. From the outset, Brian's communication skills were exceptional, making the entire process smooth and efficient. His team's dedication and hard work were evident throughout, providing unwavering support at every step. I am thoroughly impressed with the outcome and highly recommend RFS Logo Design for their professionalism and commitment to excellence.",
                    //     name: 'Danish Sunny',
                    //     rating: 5
                    // },
                    {
                        avatar: '{{ asset('images/userprofileavatar.webp') }}',
                        text: "Brian Edwin is who I worked with. I made multiple revisions and he delivered on exactly what I wanted and quickly. Highly recommend him and will be using again in the future.",
                        name: 'Spanky',
                        rating: 5
                    },
                    {
                        avatar: '{{ asset('images/userprofileavatar.webp') }}',
                        text: "LOVEEE MY LOGO ! Done exactly how I visioned it! I'll be back for my website !",
                        name: 'Archelle Jenkins',
                        rating: 5
                    },
                    {
                        avatar: '{{ asset('images/userprofileavatar.webp') }}',
                        text: "Brian Edwin provided me with excellent service. Anytime I asked him for any edits, he did it promptly. I was very happy with the logos and invoices he created for me. 5 Star Service. Thank you, Brian.",
                        name: 'Madelyn Weingarden',
                        rating: 5
                    },
                    // {
                    //     avatar: '{{ asset('images/userprofileavatar.webp') }}',
                    //     text: "Exceptional Service! RFS Logo Design, led by the talented Mr. Brian Edwin, exceeded all expectations with their Graphic Design, Logo Design & Business cards design package. From start to finish, their team showcased professionalism, creativity, and technical expertise that truly set them apart. Brian's dedication to delivering nothing short of excellence was evident in every aspect of the project. but they also provided unparalleled support throughout the process. If you're looking for top-notch web solutions, look no further than RFS Logo Design. Highly recommended! Cool😜",
                    //     name: 'Mohammad Omar Zmaraiwal',
                    //     rating: 5
                    // },
                    {
                        avatar: '{{ asset('images/userprofileavatar.webp') }}',
                        text: "Very helpful crew, I'm very picky with my designs and I was helped greatly with compliant people, I am very satisfied",
                        name: 'Kyle Bacon',
                        rating: 5
                    },
                    // {
                    //     avatar: '{{ asset('images/userprofileavatar.webp') }}',
                    //     text: "I recently had the pleasure of working with Mr. Brian on our company's web design needs and was thoroughly impressed with his professionalism, expertise, and dedication. Brian's deep understanding of web design, coupled with his passion for helping clients achieve their goals, made the entire process seamless. He was meticulous in understanding our vision, ensuring the website was not only aesthetically pleasing but also user-friendly and SEO-optimized. Throughout the project, Brian's communication was exemplary, keeping us updated and making adjustments as needed, ultimately delivering a product that exceeded our expectations. What truly sets Brian apart is his exceptional customer service, going above and beyond to ensure satisfaction and providing invaluable post-launch support. I highly recommend Mr. Brian to anyone looking for outstanding web design services; his blend of technical skills and customer care is truly remarkable, significantly enhancing our online presence and contributing to our success.",
                    //     name: 'Muhammad Tabish',
                    //     rating: 5
                    // },
                    {
                        avatar: '{{ asset('images/userprofileavatar.webp') }}',
                        text: "RFS LOGO Design work very well",
                        name: 'Muhammad Mohsin',
                        rating: 5
                    },
                    {
                        avatar: '{{ asset('images/userprofileavatar.webp') }}',
                        text: "Professional individuals!",
                        name: 'Greg Nelson',
                        rating: 5
                    },
                ];

                reviews.forEach(review => {
                    const stars = Array(review.rating).fill('<div class="star"></div>').join('');
                    const reviewHtml = `
                            <div class="card testimonial-card">
                                <div class="row no-gutters">
                                    <div class="col-md-4 testimonial-avatar">
                                        <img src="${review.avatar}" alt="Avatar">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body testimonial-content">
                                            <div class="rating">${stars}</div>
                                            <p class="card-text">${review.text}</p>
                                            <h5 class="card-title">${review.name}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `;
                    owl.owlCarousel('add', reviewHtml).owlCarousel('update');
                });

                // Manually trigger the changed event to highlight the first active item
                // owl.trigger('changed.owl.carousel', {
                //     item: {
                //         index: 0
                //     }
                // });
            }
        })
    </script>
    {{-- END JS FOR OWL TESTIMONIAL CAROUSEL --}}
    {{-- @stack('footerScripts') --}}

</body>

</html>
