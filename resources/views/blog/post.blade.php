@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container">
        <article class="box">
            <h1 class="title is-2">{{ $post->title }}</h1>
            <h2 class="subtitle is-4" title="{{ $post->publish_date->format('l jS F Y H:i:s') }}">
                {{ $post->publish_date->diffForHumans() }}
            </h2>
            {!! $post->body !!}
        </article>
    </div>
</section>
@endsection
