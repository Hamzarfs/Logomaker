@extends('site.common')

@section('title', 'Blogs - RFS Logo Design')

@section('content')
    <style>
        .blogs-page .blog-container img {
            border-radius: 20px;
        }
        .blogs-page .blog-container a {
            text-decoration: none;
            color: black;
        }
    </style>



    <section class="blogs-page py-5">
        <div class="container">
            <h1 class="text-center mb-4 fw-semibold">
                BLOGS
            </h1>

            <div class="row g-4">
                @forelse ($blogs as $blog)
                    <div class="col-md-6">
                        <div class="blog-container">
                            <a href="{{ route('blogs.show', $blog->slug) }}">
                                <img src="{{ $blog->image_url }}" alt="{{ $blog->title }}" class="img-fluid">

                                <h3>{{ $blog->title }}</h3>

                                {{-- <p>{{ substr($blog->content, 0, 100) }}</p> --}}
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <h2>No Blogs found...</h2>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
