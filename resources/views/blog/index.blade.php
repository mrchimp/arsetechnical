@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container">
        <h1 class="is-sr-only">Posts</h1>

        <div class="post-list">
            @foreach($posts as $post)
                <article class="box">
                    <a class="post-preview-title" href="{{ route('post.show', $post->slug) }}">
                        <strong>{{ $post->title }}</strong>
                    </a>
                    <div class="post-preview-date" title="{{ $post->publish_date->format('l jS F Y H:i:s') }}">
                        {{ $post->publish_date->diffForHumans() }}
                    </div>
                    <div class="post-preview-exerpt">
                        {{ $post->excerpt }}
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
@endsection
