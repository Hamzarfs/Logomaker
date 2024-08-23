@extends('site.common')

@section('title', 'Select Logo')

@section('content')
    <style>
        /* @font-face {
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
        } */

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

    <div class="container" >
        <!-- Heading -->
        <div class="row mt-5">
            <div class="col text-center">
                <h1 style= " font-size:42px; font-weight:700;">Free Logo Maker</h1>
                    <p>Create Unique Logo in Minutes with Our Online Logo Builder!</p>
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
                            value="{{ session('company') }}"  maxlength="30" >
                    </div>
                    <div class="col-md-4">
                        <input type="text" id="industry1" class="form-control" placeholder="Enter Your Industry"
                            value="{{ session('category_name') }}"   >

                            
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
                    'lazyp-eople',
                    'Remon-Demo',
                    'Stifly',
                    'Brandes-Regular',
                    'Rohgaz-Demo-VersionRegular',
                    'Forest-Trophy-Textured',
                    'Aesthetic-Wonder-DEMOBold',
                    'Nerve-Brush-Regular',
                    'Stander-DEMO',
                    'Dasport-DEMO',
                    'LightSport-DEMO',
                ]; // List of fonts
                $colors = ['#900C3F', '#36454F', '#343434', '#191970', '#581845'];
            @endphp

            


            @foreach ($products as $index => $product)
                
                @php
                    $font = $fonts[$index % count($fonts)]; // Select font based on index
                    
                    
                   
                    
                    $fontSlug = $product->font->slug ?? null;
                    $font = $fontSlug ? pathinfo($fontSlug, PATHINFO_FILENAME) : '';

                   // echo   $font;
                    $color = $colors[$index % count($colors)];
                    $color=$product->color;
                 
                     $fontSize = (isset($product->logomaker_font_size) && strlen($product->logomaker_font_size) > 1) 
                                    ? $product->logomaker_font_size 
                                    : '38px';

                   {{ session('company') ? $fontSize : $fontSize='22px'; }}


                    $companyName = session('company');
                    $companyNameLength = strlen($companyName);
                    if ($companyNameLength > 10 && $companyNameLength <= 15) {
                         
                        $fontSize = (int)str_replace('px', '', $fontSize) - 6 . 'px';
                    }else  if ($companyNameLength > 15 && $companyNameLength <= 20) {
                        $fontSize = (int)str_replace('px', '', $fontSize) - 12 . 'px';
                    }else  if ($companyNameLength > 20 && $companyNameLength <= 25) {
                        $fontSize = (int)str_replace('px', '', $fontSize) - 15 . 'px';
                    }else  if ($companyNameLength > 25 && $companyNameLength <= 30) {
                        $fontSize = (int)str_replace('px', '', $fontSize) - 20 . 'px';
                    }


                
                    $topPosition = (isset($product->logomaker_top) && strlen($product->logomaker_top) > 1) 
                                    ? $product->logomaker_top 
                                    : '170px';
                    
                    $leftPosition = (isset($product->logomaker_left) && strlen($product->logomaker_left) > 1) 
                                    ? $product->logomaker_left 
                                    : '-30px';
                    
                   

                    
                    $logoPosition = $product->logo_position ?? ''; // Use null coalescing operator to handle unset cases
                    $logoPositionVertical='margin-top:10px';
                    if (isset($logoPosition) && strlen($logoPosition) > 0) {
                        switch ($logoPosition) {
                            case 'left':
                                 if($companyNameLength <= 5){
                                     $leftPositionValue = (int) str_replace('px', '', $leftPosition);
                                     $adjustedLeftPositionValue = $leftPositionValue  - 80;
                                     $leftPosition = "{$adjustedLeftPositionValue}px";
                                 }else if($companyNameLength >= 6 && $companyNameLength<=11){
                                    
                                    $leftPositionValue = (int) str_replace('px', '', $leftPosition);
                                     $adjustedLeftPositionValue = $leftPositionValue  - 20;
                                     $leftPosition = "{$adjustedLeftPositionValue}px";
                                 
                                }    
                               // die($companyNameLength."DDDDDDDDDDD".session('company'));
                                //$logoPosition="margin-left:0px";
                                break;
                            case 'center':
                                // Do something for 'center'
                                $logoPositionVertical='margin-top:10px';
                                break;
                            case 'right':
                                // Do something for 'right'
                                $logoPosition="margin-left:-0px";
                                if($companyNameLength<= 5){
                                     $leftPositionValue = (int) str_replace('px', '', $leftPosition);
                                     $adjustedLeftPositionValue = $leftPositionValue  + 130 ;
                                     $leftPosition = "{$adjustedLeftPositionValue}px";
                                 }elseif($companyNameLength >= 6 && $companyNameLength<=9){
                                     $leftPositionValue = (int) str_replace('px', '', $leftPosition);
                                     $adjustedLeftPositionValue = $leftPositionValue  + 60;
                                     $leftPosition = "{$adjustedLeftPositionValue}px";
                                 
                                }    
                                 
                                
                                break;
                            case 'top':
                                // Do something for 'top'
                                $logoPositionVertical='margin-top:-40px';
                                break;
                            case 'bottom':
                                $logoPositionVertical='margin-top:140px';
                                break;
                            default:
                            $logoPositionVertical='margin-top:-10px';
                                // Optionally handle unexpected values
                                //echo "Unexpected logo position.";
                                break;
                        }
                    }  
                    
                @endphp

                <div class="col-md-4 logo-item" data-category="{{ $product->category_id }}">
                    <div class="card-container">
                    
                    <!-- <img src="{{ route('image.show', $product->image) }}" 
                        style="xwidth: 35% !important; {{ $logoPosition }}; position: absolute; {{ $logoPositionVertical }}; z-index: 10;" 
                        class="img-fluid portfolio-image" 
                        alt="{{ $product->name }}"> -->

                        
                        <!-- <img src="{{ asset("category-image/$product->image") }}" style="xwidth: 35% !important; {{$logoPosition}}  ;position: absolute; {{$logoPositionVertical}};   z-index: 10;" class="img-fluid portfolio-image"
                            alt="{{ $product->name }}"> -->

                            <!-- <img src="{{ asset("category-image/$product->image") }}" 
    style="xwidth: 35% !important; {{$logoPosition}}  ;position: absolute; {{$logoPositionVertical}};   z-index: 10;" 
    class="img-fluid portfolio-image"
    alt="{{ $product->name }}"
    oncontextmenu="return false;"> -->
 
                            <img src="{{ asset("category-image/$product->image") }}" 
                            style="xwidth: 35% !important; {{$logoPosition}}; position: absolute; {{$logoPositionVertical}}; z-index: 10;" 
                            class="img-fluid portfolio-image" 
                            alt="{{ $product->name }}" 
                            ondragstart="return false;" 
                            oncontextmenu="return false;">

                
                           


                            <div class="text-placeholder"
                            style=" z-index: 20;font-family: {{ $font }}; color:{{ $color }}; font-size:{{ $fontSize}}; font-weight:500; margin-left:{{$leftPosition}}; margin-top:{{ $topPosition}}">
                            {{ session('company') ? session('company') : $product->category['name'] }}</div>



                        <a href="{{ url('/store-session-data-image?image=' . $product->image . '&product-id=' . $product->id .'&font=' . $font) }}"
                            class="hover-button select-btn"  title="{{ $product->name}}" style="z-index: 30;" data-product-id="{{ $product->id }}">Select  </a>
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
