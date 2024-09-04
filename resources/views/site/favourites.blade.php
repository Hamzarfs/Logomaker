{{-- @dd($favourites->links()) --}}
@extends('site.common')

@section('title', 'My Favourites')

@section('content')

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

        .fav-icon {
            position: absolute;
            right: 20px;
            top: 10px;
            font-size: 25px;
            display: none;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .logo-item {
                width: 100%;
                height: auto;
                /* Adjust height as needed */
            }
        }
    </style>

    <div class="container my-5 pb-5">
        <div class="text-center mb-5">
            <h1>Favourites</h1>
        </div>

        <div class="row logo-gallery">
            @forelse ($favourites as $favourite)
                <div class="col-md-4 logo-item" data-category="{{ $favourite->product->category_id }}">
                    <div class="card-container">
                        <img src="{{ asset("category-image/{$favourite->product->image}") }}"
                            class="img-fluid portfolio-image" alt="{{ $favourite->product->name }}">
                        <a href="{{ url('/store-session-data-image?image=' . $favourite->product->image . '&product-id=' . $favourite->product->id) }}"
                            class="hover-button select-btn" data-product-id="{{ $favourite->product->id }}">Select </a>
                        <div class="fav-icon text-success" data-product-id="{{ $favourite->product->id }}"
                            data-favourite-id="{{ $favourite->id }}">
                            <i class="fa fa-heart" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            @empty
                <div class="text-center">
                    <h1>You don't have any favourite logos.</h1>
                </div>
            @endforelse
        </div>

        {!! $favourites->links() !!}

    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/ajaxSetup.js') }}"></script>

    <script>
        $('.fav-icon').click(function() {
            const favIconEl = $(this)
            const favId = favIconEl.attr('data-favourite-id')
            $.ajax({
                url: "{{ route('favourite.remove', 11111) }}".replace('11111', favId),
                method: 'DELETE',
                success: function(response) {
                    if (response.success) {
                        swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: "Logo removed from favourites!",
                            timer: 1500,
                            timerProgressBar: true
                        }).then(() => {
                            location.reload()
                        })
                    } else {
                        swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: "Unexpected error. Please try again later!!"
                        })
                    }
                },
            })
        })
    </script>
@endsection
