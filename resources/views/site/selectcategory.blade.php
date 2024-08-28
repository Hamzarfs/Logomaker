<!-- resources/views/site/main.blade.php -->
@extends('site.common')

@section('title', 'Welcome')

{{-- @push('headerStyles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" rel="stylesheet">
    <style>
        .category-section {
            padding: 20px;
        }

        .form-label {
            font-size: 1.25rem;
            font-weight: 600;
        }

        .btn-custom {
            width: 100px;
        }
    </style>
@endpush --}}

@section('content')

    <style>
        footer.footer {
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" rel="stylesheet">
    <style>
        .category-section {
            padding: 20px;
        }

        .form-label {
            font-size: 1.25rem;
            font-weight: 600;
        }

        .btn-custom {
            width: 100px;
        }
    </style>

    <!-- Include Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include Select2 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>


    <form id="categoryForm" method="POST" action="{{ url('/store-session-data') }}">
        @csrf
        <div class="container category-section">
        <div class="row mb-3">
    <label for="industry1" class="form-label">Select Your Industry</label>
    <select id="industry1" class="form-control" name="category" >
        <!-- Options will be dynamically added via JavaScript -->
    </select>
</div>
            <div class="row mb-3">
                <label for="business" class="form-label">Tell us about your business to help us understand your branding
                    needs.</label>
                <textarea id="business" class="form-control" rows="4"
                    placeholder="e.g. a small coffee shop in Lindenwold targeting young executives"></textarea>
            </div>
            <div class="row">
                <div class="col d-flex justify-content-between">
                    <a href="{{ url('/select-font') }}" class="btn btn-secondary"> Back</a>

                    <button class="btn btn-primary btn-custom" id="nextButton">Next</button>
                </div>
            </div>
        </div>
    </form>

    <!-- Include jQuery and jQuery UI for autocomplete -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script>
        $(document).ready(function() {
                  
            var categories = @json($categories);

             
            categories.forEach(function(category) {
                $('#industry1').append(
                    $('<option>', {
                        value: category.id,
                        text: category.name
                    })
                );
            });

           
            $('#industry1').select2({
                placeholder: "Select Your Industry",
                allowClear: true,
                width: '100%' // Ensures the dropdown is responsive
            });

            // Handle Next button click
            $('#nextButton').on('click', function(event) {
                event.preventDefault();
                var selectedIndustryId = $('#industryId').val();

                if (selectedIndustryId > 0) {
                    // Submit the form to the storeSessionData route
                    $('#categoryForm').submit();

                } else {
                    alert("Please select an industry and fill out the business description.");
                }
            });
        });
    </script>
@endsection

{{-- @push('footerScripts')
    <!-- Include jQuery and jQuery UI for autocomplete -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script>
        $(document).ready(function() {
            // Prepare an array of categories for the autocomplete widget
            var categories = @json($categories);

            // Extract the category names and ids for the autocomplete
            var availableTags = categories.map(function(category) {
                return {
                    label: category.name,
                    value: category.id
                };
            });

            // Initialize the autocomplete widget
            $('#industry').autocomplete({
                source: availableTags,
                select: function(event, ui) {
                    $('#industry').val(ui.item.label);
                    $('#industryId').val(ui.item.value); // Store the selected category ID
                    return false;
                }
            });

            // Handle Next button click
            $('#nextButton').on('click', function(event) {
                event.preventDefault();
                var selectedIndustryId = $('#industryId').val();

                if (selectedIndustryId > 0) {
                    // Submit the form to the storeSessionData route
                    $('#categoryForm').submit();

                } else {
                    alert("Please select an industry and fill out the business description.");
                }
            });
        });
    </script>
@endpush --}}
