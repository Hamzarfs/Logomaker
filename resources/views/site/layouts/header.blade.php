<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
    .topnavbar {
        background-color: #f2f6fe;
        padding: 5px 0;
    }

    .topnavbar .btn {
        margin: 0 5px;
        font-size: 14px;
        padding: 5px 10px;
        border-radius: 5px;
    }

    .topnavbar .phone-btn {

        color: #000;
        text-decoration: none;

    }

    .topnavbar .chat-btn {
        color: #000;
        border: none;
        text-decoration: none;

    }


    .mega-menu {
        display: none;
        top: 60px;
        left: 0;
        width: 100%;
        background-color: #E0E6F8;
        z-index: -11;
        /* Lower z-index to ensure the dropdown menu is above */
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

    /* Add custom styles for the new dropdown menu */
    .navbar .dropdown-menu {
        position: absolute;
        /* Ensure the dropdown is positioned absolutely */
        background-color: #ffffff;
        border: none;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
        margin-top: 0.5rem;
        min-width: 200px;
        /* Ensure the dropdown menu has enough width */
        right: 0;
        /* Align the dropdown menu to the right */
        z-index: 1050;
        /* Ensure the dropdown is above other elements */
    }

    .navbar .dropdown-menu .dropdown-item {
        color: #333333;
    }

    .navbar .dropdown-menu .dropdown-item:hover {
        color: white;
        background-color: #6868D1;
    }

    .navbar .dropdown-toggle::after {
        display: inline-block;
        margin-left: .255em;
        vertical-align: .255em;
        content: "";
        border-top: .3em solid;
        border-right: .3em solid transparent;
        border-bottom: 0;
        border-left: .3em solid transparent;
        color: #fff;
    }



    /* Additional styles to ensure the dropdown is above other content */
    .navbar .dropdown {
        position: relative;
        /* Ensure the dropdown menu is positioned relative to the parent */
    }

    .container-fluid {
        position: relative;
        /* Ensure the container doesn't interfere with the dropdown */

    }

    .dropdown-menu-right {
        position: relative;
        z-index: 21050;
    }

    .navbar-light .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'><path stroke='rgba(255, 255, 255, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/></svg>") !important;
    }


    .navbar-light .navbar-toggler {
        border: 1px solid rgb(255, 255, 255) !important;
    }

    .navbar .dropdown-menu {
        width: 200px;
    }




    /* For screen 1200px to 1399px */
    @media (max-width: 1399.98px) {
        .dropdown-menu.dropdown-menu-right.show {
            left: -60px;
        }
    }

    /* For screen 768px to 991px */
    @media (max-width: 991.98px) {
        .dropdown-menu.dropdown-menu-right.show {
            left: 0px;
        }

        .search-menu-item {
            display: none;
        }
    }

    /* For screen 480px to 575px */
    @media (max-width: 575.98px) {
        .topnavbar .header-links {
            text-align: center !important;
        }
    }
</style>

<div class="topnavbar">
    <div class="container">
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6 text-right header-links">
                <a href="tel:+15516665255" class="phone-btn">+1 (551) 666-5255 |</a>
                <a href="tel:+15516665255" class="chat-btn">Live Chat with Expert</a>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid"
    style="background-color: #6868D1; border-bottom: 1px solid #fff; /* White line at the bottom of the header */">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/RFS.svg') }}" alt="Logo" class="logo">
            </a>
            <div class="d-flex align-items-center">
                <a class="nav-link search-icon d-lg-none" href="javascript:void(0);" style="color:#fff;">
                    <i class="fas fa-search" style="font-size: 20px;"></i>
                </a>
                <button class="navbar-toggler w-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}" style="color:#fff;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/logo-maker') }}" style="color:#fff;">Logo Maker</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('about-us') }}" style="color:#fff;">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('custom-logo') }}" style="color:#fff;">Custom Logo</a>
                    </li>
                    <li class="nav-item dropdown">
                        @guest
                            <a class="nav-link" href="{{ route('login') }}" style="color:#fff;">Login</a>
                        @else
                            @role('admin')
                                <a class="nav-link" href="{{ route('admin.dashboard') }}" style="color:#fff;">Dashboard</a>
                            @else
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#fff;">
                                    <i class="fas fa-user"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="{{ route('orders') }}">My Orders</a>
                                    <a class="dropdown-item" href="{{ route('favourite.index') }}">My Favorites</a>
                                    <a class="dropdown-item" href="{{ route('accountDetails') }}">Account Details</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('favourite.index') }}" style="color:#fff;"><i
                                        class="bi bi-heart"></i></a>
                            </li>
                        @endrole
                    @endguest
                    </li>
                    <li class="nav-item search-menu-item">
                        <a class="nav-link search-icon" href="javascript:void(0);" style="color:#fff;">
                            <i class="fas fa-search"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="mega-menu" style="display:none">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form class="form-inline" id="categoryForm" method="POST"
                        action="{{ url('/store-session-data') }}">
                        @csrf
                        <input type="text" id="industry" class="form-control mr-sm-2" type="search"
                            placeholder="Search Category" aria-label="Search">
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
            {{-- <div class="col-md-2"> --}}
            <div class="col-12 col-sm-12 col-lg-2 col-xl-2">
                <ul class="list-unstyled">
                    @endif
                    <li>
                        <a href="{{ url('/logos/' . $category->slug) }}" class="header-cat-links">
                            {{ $category->name }}
                        </a>
                    </li>
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
</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
{{-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> --}}
<script>
    // $(document).ready(function() {
    //     $('.search-icon').on('click', function() {
    //         $('.mega-menu').slideToggle();
    //     });

    //     $(document).on('click', function(event) {
    //         if (!$(event.target).closest('.mega-menu').length && !$(event.target).closest(
    //                 '.search-icon').length) {
    //             // $('.mega-menu').slideUp();
    //         }
    //     });
    // });


    $(document).ready(function() {
        // Toggle the mega menu on search icon click
        $('.search-icon').on('click', function(event) {
            event.stopPropagation(); // Prevent click from bubbling up to document
            $('.mega-menu').slideToggle();
        });

        // Hide the mega menu when clicking outside
        $(document).on('click', function(event) {
            if (!$(event.target).closest('.mega-menu').length && !$(event.target).closest(
                    '.search-icon').length) {
                // $('.mega-menu').slideUp();
            }
        });

        // Prevent the mega menu from closing when clicking inside it
        $('.mega-menu').on('click', function(event) {
            event.stopPropagation(); // Prevent click from bubbling up to document
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
