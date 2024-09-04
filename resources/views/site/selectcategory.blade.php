<!-- resources/views/site/main.blade.php -->
@extends('site.common')

@section('title', 'Professional Stationery Designing Services - RFS Logo Design')
@section('meta_desc', 'Elevate your brand identity with RFS Logo Design professional stationery designing services. Get creative branding materials for effective online presence.')

@section('content')

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

        #categoryForm1 {
            min-height: 577px;
        }
    </style>

    <!-- Include Select2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />

    <form id="categoryForm1" method="POST" action="{{ url('/store-session-data') }}">
        @csrf
        <div class="container category-section">
            <div class="mb-3">
                <label for="industry1" class="form-label">Select Your Industry</label>
                <select id="industry1" class="form-control" name="category">
                    <option value="">Select Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="business" class="form-label">Tell us about your business to help us understand your branding
                    needs.</label>
                <textarea id="business" class="form-control" rows="4"
                    placeholder="e.g. a small coffee shop in Lindenwold targeting young executives"></textarea>
            </div>
            <div class="row">
                <div class="col d-flex justify-content-between">
                    <a href="{{ url('/select-font') }}" class="btn btn-secondary"> Back</a>
                    <button class="btn btn-primary btn-custom" id="nextButton" type="submit">Next</button>
                </div>
            </div>
        </div>
    </form>

    <!-- Include Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>

    <script>
        $('#industry1').select2({
            placeholder: "Select Your Industry",
            allowClear: true,
            theme: 'bootstrap-5',
            width: '100%' // Ensures the dropdown is responsive
        });

        // Handle Next button click
        $('#categoryForm1').submit(function() {
            event.preventDefault();
            var selectedIndustryId = $('#industry1').val();

            if (selectedIndustryId > 0) {
                // Submit the form to the storeSessionData route
                $(this).submit();
            } else {
                alert("Please select an industry and fill out the business description.");
            }
        });
    </script>
@endsection
