{{-- @dd($favourites->links()) --}}
@extends('site.common')

@section('title', 'Favourites')

@section('content')

    <style>
        .fav-icon {
            position: absolute;
            right: 20px;
            top: 10px;
            font-size: 25px;
        }
    </style>

    <div class="container my-5 pb-5">
        <div class="text-center mb-5">
            <h1>Favourites</h1>
        </div>
        <div class="row">
            @foreach ($favourites as $favourite)
                <div class="col-lg-4 col-md-6 mb-4">
                    <a href="" class="card-container-link" data-image="{{ $favourite->product->image }}"
                        data-id="{{ $favourite->product->id }}"
                        data-placeholder="{{ $favourite->product->placeholder_value }}">
                        <div class="card-container">
                            <div class="card-inner">
                                <div class="card-front">
                                    <img src="{{ asset("category-image/{$favourite->product->image}") }}"
                                        class="img-fluid portfolio-image" alt="{{ $favourite->product->name }}">
                                    <div class="text-placeholder"
                                        data-placeholder-value="{{ $favourite->product->placeholder_value }}">
                                    </div>
                                </div>
                                <div class="card-back">
                                    <div class="category-name">{{ $favourite->product->category->name ?? '' }}</div>
                                    <div class="fav-icon text-success" data-product-id="{{ $favourite->product->id }}"
                                        data-favourite-id="{{ $favourite->id }}">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

            {!! $favourites->links() !!}
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/ajaxSetup.js') }}"></script>
    
    <script>
        $('.card-container-link').on('click', function() {
            event.preventDefault()
            if (event.target.classList.contains('fa-heart')) {
                const favIconEl = $(this).find('.fav-icon')
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
                                    timer: 3000,
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
            } else {
                let image = this.getAttribute('data-image');
                let id = this.dataset.id
                let company = "{{ session()->get('company') }}";
                let urlBase = "{{ url('/') }}";

                let url = urlBase +
                    `/store-session-data-image?image=${encodeURIComponent(image)}&company=${encodeURIComponent(company)}&product-id=${encodeURIComponent(id)}`;

                window.location.href = url;
            }
        })
    </script>
@endsection
