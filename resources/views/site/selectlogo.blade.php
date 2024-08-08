@extends('site.common')

@section('title', 'Select Logo')

@section('content')
    <style>
        @font-face {
            font-family: 'lazy_people';
            src: url('fonts/Atop-R99O3.ttf') format('truetype');
        }

        @font-face {
            font-family: 'Remon Demo';
            src: url('fonts/Remon Demo.ttf') format('truetype');
        }

        @font-face {
            font-family: 'Stifly';
            src: url('fonts/Stifly.ttf') format('truetype');
        }

        @font-face {
            font-family: 'Brandes-Regular';
            src: url('fonts/Brandes-Regular.otf') format('truetype');
        }

        @font-face {
            font-family: 'Rohgaz-DemoVersion-Regular';
            src: url('fonts/Rohgaz-DemoVersion-Regular.ttf') format('truetype');
        }

        @font-face {
            font-family: 'Forest Trophy Textured';
            src: url('fonts/Forest Trophy Textured.otf') format('truetype');
        }

        @font-face {
            font-family: 'AestheticWonderDEMO-Bold';
            src: url('fonts/AestheticWonderDEMO-Bold.ttf') format('truetype');
        }

        @font-face {
            font-family: 'NerveBrushRegular';
            src: url('fonts/NerveBrushRegular.otf') format('truetype');
        }

        @font-face {
            font-family: 'Stander DEMO';
            src: url('fonts/Stander DEMO.otf') format('truetype');
        }

        @font-face {
            font-family: 'Dasport  DEMO';
            src: url('fonts/Dasport  DEMO.otf') format('truetype');
        }

        @font-face {
            font-family: 'Light Sport DEMO';
            src: url('fonts/Light Sport DEMO.otf') format('truetype');
        }

        .logo-gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .logo-item {
            width: 33%;
            margin-bottom: 20px;
            position: relative;
            height: 300px;
            overflow: hidden;
        }

        /* .logo-item img {
                                                    width: 100%;
                                                    height: 100%;
                                                    object-fit: cover;
                                                    object-position: center;
                                                } */
        .select-btn {
            display: none;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10;
        }

        .logo-item:hover .select-btn,
        .logo-item:hover .fav-icon {
            display: block;
        }

        .lazy_people {
            text-decoration: none;
            color: #fff;


        }

        .filter-buttons button.active {
            background-color: #0d6efd;
            color: white;
        }

        @media (max-width: 768px) {
            .logo-item {
                width: 100%;
                height: auto;
                /* Adjust height as needed */
            }
        }

        button#updateButton {
            height: 50px !important;
        }

        .fav-icon {
            position: absolute;
            right: 20px;
            top: 10px;
            font-size: 25px;
            display: none;
            cursor: pointer;
        }
    </style>

    <div class="container">
        <!-- Heading -->
        <div class="row mt-5">
            <div class="col text-center">
                <h2 style= " font-size:54px; font-weight:700;">Free Logo Maker</h1>
                    <p>Online logo creator design in minutes!</p>
            </div>
        </div>
    </div>

    <!-- Input Fields and Update Button -->
    <div class="container-fluid w-100 p-1 mb-5" style="background: #E7EAFB">
        <form id="loogForm" method="POST" action="{{ url('/store-session-data-logo') }}">
            @csrf
            <div class="container">
                <div class="row my-4">
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="company" name="company" placeholder="Brand Name"
                            value="{{ session('company') }}">
                    </div>
                    <div class="col-md-4">
                        <input type="text" id="industry1" class="form-control" placeholder="Enter Your Industry"
                            value="{{ session('category_name') }}">
                        <input type="hidden" id="industryId1" name="category" value="{{ session('category') }}">
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-primary w-100"
                            style = "background-color:#6c73db; border-color:#6c73db; "id="updateButton">Update</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="container">
        <!-- Gallery -->
        <div class="row logo-gallery">
            @php
                $fonts = [
                    'lazy_people',
                    'Remon Demo',
                    'Stifly',
                    'Brandes-Regular',
                    'Rohgaz-DemoVersion-Regular',
                    'Forest Trophy Textured',
                    'AestheticWonderDEMO-Bold',
                    'NerveBrushRegular',
                    'Stander DEMO',
                    'Dasport  DEMO',
                    'Light Sport DEMO',
                ]; // List of fonts
                $colors = ['#900C3F', '#36454F', '#343434', '#191970', '#581845'];
            @endphp


            @foreach ($products as $index => $product)
                @php
                    $font = $fonts[$index % count($fonts)]; // Select font based on index
                    $color = $colors[$index % count($colors)];
                @endphp
                <div class="col-md-4 logo-item" data-category="{{ $product->category_id }}">
                    <div class="card-container">
                        <img src="{{ asset("category-image/$product->image") }}" class="img-fluid portfolio-image"
                            alt="{{ $product->name }}">
                        <div class="text-placeholder"
                            style="font-family: {{ $font }}; color:{{ $color }}; font-size:50px; font-weight:500; margin-top:-30px">
                            {{ session('company') }} </div>
                        <a href="{{ url('/store-session-data-image?image=' . $product->image . '&product-id=' . $product->id) }}"
                            class="hover-button select-btn" data-product-id="{{ $product->id }}">Select </a>
                        @auth
                            @php
                                $i = array_search($product->id, array_column($favourites, 'product_id'));
                            @endphp
                            <div class="fav-icon {{ $i !== false ? 'text-success' : 'text-danger' }}"
                                data-product-id="{{ $product->id }}"
                                @if ($i !== false) data-favourite-id="{{ $favourites[$i]['id'] }}" @endif>
                                <i class="fa fa-heart" aria-hidden="true"></i>
                            </div>
                        @endauth
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Pagination Links -->
        {!! $products->links() !!}
        {{-- @if ($products->hasPages())
            {{ $products->links() }}
        @endif --}}
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/ajaxSetup.js') }}"></script>
    <script>
        $(document).ready(function() {
            var categories = @json($categories); // Convert PHP categories array to JavaScript

            // Extract the category names and ids for the autocomplete
            var availableTags = categories.map(function(category) {
                return {
                    label: category.name,
                    value: category.id
                };
            });

            // Initialize the autocomplete widget
            $('#industry1').autocomplete({
                source: availableTags,
                select: function(event, ui) {
                    $('#industry1').val(ui.item.label);
                    $('#industryId1').val(ui.item.value); // Store the selected category ID
                    return false;
                }
            });

            // Check if there's a session value for category and set the corresponding name
            var sessionCategoryId = $('#industryId1').val();
            if (sessionCategoryId) {
                var selectedCategory = availableTags.find(function(tag) {
                    return tag.value == sessionCategoryId;
                });
                if (selectedCategory) {
                    $('#industry1').val(selectedCategory.label);
                }
            }

            // Form validation
            $('#loogForm').on('submit', function(e) {
                var isValid = true;
                var company = $('#company').val().trim();
                var industry = $('#industry1').val().trim();
                var industryId = $('#industryId1').val().trim();

                if (!company) {
                    isValid = false;
                    alert('Please enter the brand name.');
                }

                if (!industry || !industryId) {
                    isValid = false;
                    alert('Please select a valid industry.');
                }

                if (!isValid) {
                    e.preventDefault(); // Prevent form submission if validation fails
                }
            });

            // Filter functionality
            document.querySelectorAll('.filter-btn').forEach(button => {
                button.addEventListener('click', () => {
                    const filter = button.getAttribute('data-filter');

                    // Remove 'active' class from all buttons
                    document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove(
                        'active'));

                    // Add 'active' class to the clicked button
                    button.classList.add('active');

                    // Show/hide items based on filter
                    document.querySelectorAll('.logo-item').forEach(item => {
                        if (filter === 'all' || item.getAttribute('data-category') ===
                            filter) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });
        });

        $('.fav-icon').click(function() {
            const favIconEl = $(this)
            if (favIconEl.hasClass('text-danger')) {
                const productId = favIconEl.attr('data-product-id')
                $.ajax({
                    url: "{{ route('favourite.add') }}",
                    method: 'POST',
                    data: {
                        productId,
                    },
                    success: function(response) {
                        if (response.success) {
                            swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: "Logo added to favourites!"
                            })
                            favIconEl.removeClass('text-danger')
                            favIconEl.addClass('text-success')
                            favIconEl.attr('data-favourite-id', response.favourite_id)
                        } else {
                            swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: "Unexpected error. Please try again later!!"
                            })
                        }
                    },
                })
            } else {
                const favId = favIconEl.attr('data-favourite-id')
                $.ajax({
                    url: "{{ route('favourite.remove', 11111) }}".replace('11111', favId),
                    method: 'DELETE',
                    success: function(response) {
                        if (response.success) {
                            swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: "Logo removed from favourites!"
                            })
                            favIconEl.removeClass('text-success')
                            favIconEl.addClass('text-danger')
                        } else {
                            swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: "Unexpected error. Please try again later!!"
                            })
                        }
                    },
                })
            }
        })
    </script>
@endsection
