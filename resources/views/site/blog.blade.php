@extends('site.common')

@section('title', sprintf('%s | %s', $blog->title, env('APP_NAME')))

@section('content')
    <style>
    </style>



    <section class="blog-page py-5">
        <div class="container">
            <div class="blog-container">
                <img src="{{ $blog->image_url }}" alt="{{ $blog->title }}" class="img-fluid">

                <h1 class="text-center mt-4">{{ $blog->title }}</h1>
                <div class="row g-2 align-items-center justify-content-between mb-3">
                    <div class="col-md-auto">
                        <div class="d-flex gap-3 align-items-center">
                            <h6 class="gray-font fw-bold m-0">Category:</h6>
                            <div class="badge rounded-pill text-bg-success px-3 py-2">{{ $blog->category->name }}</div>
                        </div>
                    </div>
                    <div class="col-md-auto">
                        <div class="d-flex gap-3 align-items-center">
                            <h6 class="gray-font fw-bold m-0">Tag(s):</h6>
                            <div>
                                <div class="d-flex flex-wrap gap-2 align-items-center ">
                                    @foreach ($blog->tags as $tag)
                                        <div class="badge rounded-pill text-bg-success px-3 py-2">{{ $tag->name }}</div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <p class="mt-4">{{ $blog->content }}</p>
            </div>
        </div>
    </section>
@endsection
