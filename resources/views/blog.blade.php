@extends('layouts.app')

@section('title', 'Blog |')

@section('content')
<div class="row mb-2">
    @foreach ($posts as $post)
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">{{ $post->category }}</strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="{{ route('show', $post->id) }}">{{ Str::limit($post->title, 40, '...') }}</a>
                    </h3>
                    <div class="mb-1 text-muted">{{ $post->posted_at }}</div>
                    <p class="card-text mb-auto">{{ $post->leading }}</p>
                    <a href="{{ route('show', $post->id) }}">Continue reading</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block img-fluid" src="{{ $post->image }}"
                    alt="Card image cap">
            </div>
        </div>
    @endforeach
</div>
</div>
@endsection
