@extends('layouts.app')

@section('title', 'Post |')

@section('content')
<main role="main" class="container">
    <div class="blog-main">

        <div class="blog-post">
            <h2 class="blog-post-title mt-5">{{ $post->title }}</h2>
            <p class="blog-post-meta">{{ $post->posted_at }}</p>
            <p class="blog-post-meta">
                Tags:
                @foreach ($tags as $tag)
                    <span class="text-primary">{{ $tag }}</span> /
                @endforeach
            </p>

            <img class="img-fluid mb-3" src="{{ $post->image }}" alt="">
            {!! $post->content !!}
        </div><!-- /.blog-post -->

    </div><!-- /.blog-main -->
</main>
@endsection
