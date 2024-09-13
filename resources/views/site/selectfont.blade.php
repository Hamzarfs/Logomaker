@extends('site.common')

@section('title', 'Select Font')

@section('content')
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&family=Moon+Dance&family=New+Rocker&family=Pacifico&family=Sancreek&family=Notable&family=Yesteryear&family=Zilla+Slab&family=Vidaloka&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .mt-5 {
            font-family: Poppins;
            font-size: 54px;
            font-weight: 700;
            text-align: left;
        }

        .nav-item {
            margin-right: 5px;
            font-weight: 700;
            color: black;
        }

        .main-section {
            background-color: #E9EDFF;
            padding: 20px;
            margin-bottom: 20px;
        }

        #text-section {
            margin-top: 20px;
        }

        .font-item {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100px;
            width: 100%;
            border: 2px solid rgb(255, 255, 255);
            margin-bottom: 10px;
            cursor: pointer;
            border-radius: 5px;
            background-color: white;
            transition: box-shadow 0.9s ease;
            /* Smooth transition for box-shadow */
        }

        .font-item:hover {
            box-shadow: 0 4px 8px rgba(46, 46, 46, 0.1);
            /* Box shadow on hover */
            border: 2px solid rgb(0, 0, 0);
        }

        .font-sample {
            font-size: 1.5em;
        }

        .selected {
            background-color: #6A70D6 !important;
            color: white;
        }

        footer {
            background-color: white;
            padding: 20px 0;
            text-align: center;
        }

        .btn-back {
            background: none;
            border: none;
            color: black;
            font-size: 1.1em;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-back i {
            margin-right: 5px;
        }

        .btn-skip {
            width: 10%;
        }

        .button-container {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
    </style>

    <!----------------------------------------- Banner Section ------------------------------->
    <form id="fontForm" method="POST" action="{{ url('/store-session-data') }}">
        @csrf
        <input type="hidden" name="font" id="selectedFont"> <!-- Hidden field for the selected font -->

        <div class="main-section">
            <div class="container">
                <h1 class="mt-5">Select a font styles you like</h1>
                <p>Font choices define the look and feel of your logo</p>
                {{-- {{ session('company') }}
                {{ session('colors') }} --}}
                <div class="row mt-3">
                    <div class="col-md-4">
                        <div class="font-item" data-font="Montserrat">
                            <span class="font-sample" style="font-family: 'Montserrat';">Montserrat</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="font-item" data-font="Moon Dance">
                            <span class="font-sample" style="font-family: 'Moon Dance';">Moon Dance</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="font-item" data-font="New Rocker">
                            <span class="font-sample" style="font-family: 'New Rocker';">New Rocker</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="font-item" data-font="Pacifico">
                            <span class="font-sample" style="font-family: 'Pacifico';">Pacifico</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="font-item" data-font="Sancreek">
                            <span class="font-sample" style="font-family: 'Sancreek';">Sancreek</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="font-item" data-font="Notable">
                            <span class="font-sample" style="font-family: 'Notable';">Notable</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="font-item" data-font="Yesteryear">
                            <span class="font-sample" style="font-family: 'Yesteryear';">Yesteryear</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="font-item" data-font="Zilla Slab">
                            <span class="font-sample" style="font-family: 'Zilla Slab';">Zilla Slab</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="font-item" data-font="Vidaloka">
                            <span class="font-sample" style="font-family: 'Vidaloka';">Vidaloka</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row 5: Footer -->
        <div class="container">
            <div class="row">
                <div class="col text-center button-container">
                    <a href="{{ url('/') }}"> <button type="button" class="custom-button-online">Back</button></a>
                    <button type="submit" class="custom-button-online" disabled>Next</button>
                </div>
            </div>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            // Disable the Next button initially
            $('.custom-button-online').prop('disabled', true).css('background-color', 'grey');

            let selectedFont = '';

            // Handle font selection
            $('.font-item').on('click', function() {
                // If the font is not already selected
                if (!$(this).hasClass('selected')) {
                    // Unselect any previously selected font
                    $('.font-item').removeClass('selected');

                    // Mark the current font as selected
                    $(this).addClass('selected');
                    selectedFont = $(this).data('font');

                    // Enable the Next button
                    $('.custom-button-online').prop('disabled', false).css('background-color', '#646BD9');
                }
            });

            // Handle form submission
            $('#fontForm').on('submit', function(event) {
                if (selectedFont) {
                    // Update the hidden input field with the selected font
                    $('#selectedFont').val(selectedFont);
                } else {
                    alert("Please select a font.");
                    event.preventDefault(); // Prevent form submission if no font is selected
                }
            });
        });
    </script>
@endsection
