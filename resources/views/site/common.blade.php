<!-- resources/views/site/common.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @isset($categoryObj->meta_title)
        <title>{{ $categoryObj->meta_title }}</title>
    @else
        <title>@yield('title') | {{ env('APP_NAME') }}</title>
    @endisset

    @isset($categoryObj->meta_desc)
        <meta name="description" content="{{ $categoryObj->meta_desc }}">
    @endisset

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
        @font-face { font-family: 'lazyp-eople'; src: url('fonts/Atop-R99O3.ttf') format('truetype'); }
        @font-face { font-family: 'Remon-Demo'; src: url('fonts/Remon Demo.ttf') format('truetype'); }
        @font-face { font-family: 'Stifly'; src: url('fonts/Stifly.ttf') format('truetype'); }
        @font-face { font-family: 'Brandes-Regular'; src: url('fonts/Brandes-Regular.otf') format('truetype'); }
        @font-face { font-family: 'Rohgaz-Demo-VersionRegular'; src: url('fonts/Rohgaz-DemoVersion-Regular.ttf') format('truetype'); }
        @font-face { font-family: 'Forest-Trophy-Textured'; src: url('fonts/Forest Trophy Textured.otf') format('truetype'); }        
        @font-face { font-family: 'Aesthetic-Wonder-DEMOBold'; src: url('fonts/AestheticWonderDEMO-Bold.ttf') format('truetype'); }
        @font-face { font-family: 'Nerve-Brush-Regular'; src: url('fonts/NerveBrushRegular.otf') format('truetype'); }
        @font-face { font-family: 'Stander-DEMO'; src: url('fonts/Stander DEMO.otf') format('truetype'); }
        @font-face { font-family: 'Dasport-DEMO'; src: url('fonts/Dasport  DEMO.otf') format('truetype'); }
        @font-face { font-family: 'LightSport-DEMO'; src: url('fonts/Light Sport DEMO.otf') format('truetype'); }

       
    </style>

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
</head>

<body>
    @include('site.layouts.header')

    @yield('content')

    @include('site.layouts.footer')
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
                nav: true,
                center: true,
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
                const mockReviews = [{
                        avatar: '{{url('/images/userprofileavatar.webp')}}',
                        text: 'I recently purchased a business logo. The graphic design is superb and font quality excellent. I had to reach out to customer service for support. They responded in a timely manner and resolved my issues. I\'m very satisfied.',
                        name: 'Ladina W.',
                        rating: 5
                    },
                    {
                        avatar: '{{url('/images/userprofileavatar.webp')}}',
                        text: 'This site makes it really easy to make a logo. They are very flexible and have great customer support. I made a cool looking logo in 2 minutes. Overall great website with good customer support. Jonathan was the agent that helped me, he answered all my questions and was very nice about it.',
                        name: 'Rylan D.',
                        rating: 5
                    },
                    {
                        avatar: '{{url('/images/userprofileavatar.webp')}}',
                        text: 'Done right from the start. Read this first, point blank did what they said they would do, although our logo was simple we went back in forth about 4-6 times with some changes. FYI we did it all in about 24 hours, do not believe the bad reviews. Attached is our Logo I highly recommend them. shopbalesky.com will soon be up so you can see it in its full glory!',
                        name: 'Rick F.',
                        rating: 5
                    }
                ];

                mockReviews.forEach(review => {
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
