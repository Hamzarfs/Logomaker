<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
    .mega-menu {
        display: none;
        top: 60px;
        left: 0;
        width: 100%;
        background-color: #E0E6F8;
        z-index: 1000;
        padding: 20px;
        border: 1px solid #ddd;
    }

    .search-icon,
    .close-icon {
        cursor: pointer;
        color: #fff;
    }

    .mega-menu .form-inline {
        justify-content: center;
    }

    .navbar-light .navbar-toggler {
        color: rgb(255 255 255 / 50%);
        border-color: rgb(255 255 255);
    }

    .header-cat-links {
        color: #000000;
        text-decoration: none;
        background-color: transparent;
        font-size: 12px;
    }
</style>
<div class="container-fluid" style="background-color: #080A2D;">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ url('/images/Footer logo.png') }}" alt="Logo" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}" style="color:#fff;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('about-us') }}" style="color:#fff;">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('custom-logo') }}" style="color:#fff;">Custom Logo</a>
                    </li>
                    <li class="nav-item">
                        @guest
                            <a class="nav-link" href="{{ route('login') }}" style="color:#fff;">Login</a>
                        @else
                            <a class="nav-link" href="{{ route('admin.dashboard') }}" style="color:#fff;">Dashboard</a>
                        @endguest
                    </li>
                    <li class="nav-item">
                        <a class="nav-link search-icon" href="javascript:void(0);" style="color:#fff;">
                            <i class="fas fa-search"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="mega-menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form class="form-inline" id="categoryForm" method="POST"
                        action="{{ url('/store-session-data') }}">
                        @csrf
                        <input type="text" id="industry" class="form-control mr-sm-2" type="search"
                            placeholder="e.g. cafe, dental, tech" aria-label="Search">
                        <input type="hidden" id="industryId" name="category">
                        <button class="custom-button-banner my-2 my-sm-0 " id="nextButton">Search</button>
                    </form>


                </div>
            </div>
            <div class="row mt-3 justify-content-center">
                @foreach ($categories as $index => $category)
                    @if ($index % 10 == 0)
                        @if ($index != 0)
                            </ul>
            </div>
            @endif
            <div class="col-md-2">
                <ul class="list-unstyled">
                    @endif
                    <li><a href="{{ url('/logos/' . $category->slug) }}"
                            class="header-cat-links">{{ $category->name }}</a></li>
                    @endforeach
                    @if (count($categories) % 10 != 0)
                </ul>
            </div>
            @endif
        </div>
    </div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script>
    $(document).ready(function() {
        $('.search-icon').on('click', function() {
            $('.mega-menu').slideToggle();
        });

        $(document).on('click', function(event) {
            if (!$(event.target).closest('.mega-menu').length && !$(event.target).closest(
                    '.search-icon').length) {
                // $('.mega-menu').slideUp();
            }
        });
    });
</script>



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
