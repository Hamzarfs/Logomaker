@extends('site.common')

@section('title', 'Free Logo Maker Tool for Every Business - RFS Logo Design')
@section('meta_desc', 'Use our free logo maker tool for creating custom business logos. With powerful logo generator, design logos in minutes with a variety of templates, fonts and icons.
')

@section('content')

    <!-- Include Select2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />

    <style>
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

        button#updateButton,
        #company,
        #industry1,
        .select2-selection {
            height: 50px !important;
        }

        .select2-selection {
            margin-bottom: 5px;
            display: flex !important;
            align-items: center;
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
                <div class="row my-4 align-items-center">
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="company" name="company" placeholder="Brand Name"
                            value="{{ session('company') }}" maxlength="30">
                    </div>
                    <div class="col-md-4">
                        <select id="industry1" class="form-control" name="category">
                            <option value="">Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @selected(session('category') == $category->id)>{{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        {{-- <input type="text" id="industry1" class="form-control" placeholder="Enter Your Industry"
                            value="{{ session('category_name') }}">
                        <input type="hidden" id="industryId1" name="category" value="{{ session('category') }}"> --}}
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
            



        @foreach ($products as $index => $product)
    <div class="col-md-4 logo-item" data-category="{{ $product->category_id }}">
        <div class="card-container">
            <img class="svg-image img-fluid portfolio-image" 
                src="{{ asset("category-image/$product->image") }}" 
                style="position: absolute; z-index: 10;" 
                alt="{{ $product->name }}" 
                ondragstart="return false;" 
                oncontextmenu="return false;">
            
            <a href="{{ url('/store-session-data-image?image=' . $product->image . '&product-id=' . $product->id  ) }}"
                class="hover-button select-btn" 
                title="{{ $product->name }}" 
                style="z-index: 30;" 
                data-product-id="{{ $product->id }}">
                Select 
            </a>
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


    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Include Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>
    <script src="{{ asset('js/ajaxSetup.js') }}"></script>
    <script>
document.addEventListener("DOMContentLoaded", function() {
    function updateTextInSVG(imageElement, newText) {
        fetch(imageElement.src)
            .then(response => response.text())
            .then(svgText => {
                // Parse SVG string into DOM
                const parser = new DOMParser();
                const svgDoc = parser.parseFromString(svgText, "image/svg+xml");

                // Find all text elements and update their content while preserving styles
                svgDoc.querySelectorAll('text').forEach(textElement => {
                    // Only update text content
                    textElement.textContent = newText;
                });

                // Serialize updated SVG back to string
                const serializer = new XMLSerializer();
                const updatedSVG = serializer.serializeToString(svgDoc);

                // Update image source with the new SVG content
                imageElement.src = 'data:image/svg+xml;charset=utf-8,' + encodeURIComponent(updatedSVG);
            })
            .catch(err => console.error('Error updating SVG text:', err));
    }

    // Example: Update all SVG images with the class "svg-image"
    document.querySelectorAll('.svg-image').forEach(img => {
        updateTextInSVG(img, 'Sample Text');  // Change 'Sample Text' to the desired text
    });
});








        $('#industry1').select2({
            placeholder: "Select Your Industry",
            allowClear: true,
            theme: 'bootstrap-5',
            width: '100%' // Ensures the dropdown is responsive
        });
        // $(document).ready(function() {
        //     // var categories = @json($categories); // Convert PHP categories array to JavaScript

        //     // // Extract the category names and ids for the autocomplete
        //     // var availableTags = categories.map(function(category) {
        //     //     return {
        //     //         label: category.name,
        //     //         value: category.id
        //     //     };
        //     // });

        //     // // Initialize the autocomplete widget
        //     // $('#industry1').autocomplete({
        //     //     source: availableTags,
        //     //     select: function(event, ui) {
        //     //         $('#industry1').val(ui.item.label);
        //     //         $('#industryId1').val(ui.item.value); // Store the selected category ID
        //     //         return false;
        //     //     }
        //     // });


        //     // var categories = @json($categories); // Convert PHP categories array to JavaScript

        //     // Prepare the data for the autocomplete widget
        //     // var availableTags = categories.map(function(category) {
        //     //     return {
        //     //         label: category.name, // The text displayed in the autocomplete suggestions
        //     //         value: category.id // The value to be stored when an option is selected
        //     //     };
        //     // });

        //     // Initialize the autocomplete widget
        //     // $('#industry1').autocomplete({
        //     //     source: availableTags,
        //     //     select: function(event, ui) {
        //     //         $('#industry1').val(ui.item
        //     //             .label); // Set the input field to the selected item’s label
        //     //         $('#industryId1').val(ui.item
        //     //             .value); // Store the selected category ID in the hidden input
        //     //         return false; // Prevent the input field from being updated with the selected value
        //     //     }
        //     // });



        //     // Check if there's a session value for category and set the corresponding name
        //     // var sessionCategoryId = $('#industryId1').val();
        //     // if (sessionCategoryId) {
        //     //     var selectedCategory = availableTags.find(function(tag) {
        //     //         return tag.value == sessionCategoryId;
        //     //     });
        //     //     if (selectedCategory) {
        //     //         $('#industry1').val(selectedCategory.label);
        //     //     }
        //     // }



        //     // Filter functionality
        //     // document.querySelectorAll('.filter-btn').forEach(button => {
        //     //     button.addEventListener('click', () => {
        //     //         const filter = button.getAttribute('data-filter');

        //     //         // Remove 'active' class from all buttons
        //     //         document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove(
        //     //             'active'));

        //     //         // Add 'active' class to the clicked button
        //     //         button.classList.add('active');

        //     //         // Show/hide items based on filter
        //     //         document.querySelectorAll('.logo-item').forEach(item => {
        //     //             if (filter === 'all' || item.getAttribute('data-category') ===
        //     //                 filter) {
        //     //                 item.style.display = 'block';
        //     //             } else {
        //     //                 item.style.display = 'none';
        //     //             }
        //     //         });
        //     //     });
        //     // });
        // });

        // Form validation
        $('#loogForm').on('submit', function(e) {
            e.preventDefault()
            var isValid = true;
            var company = $('#company').val().trim();
            var industry = $('#industry1').val().trim();
            // var industryId = $('#industryId1').val().trim();

            if (!company) {
                isValid = false;
                alert('Please enter the brand name.');
                return
            }

            if (!industry) {
                isValid = false;
                alert('Please select a valid industry.');
                return
            }

            if (isValid) {
                $(this).submit()
                // e.preventDefault(); // Prevent form submission if validation fails
            }
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
