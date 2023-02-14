@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mt-2 m-auto">
                <h3>{{ $post->title }}</h3>

                <span>{{ $post->excerpt }}</span>
                <br><br>

                <x-blog.blog-post :post="$post" />

                {{ $post->body }}
                <br><br>
                <a style="text-decoration: none" href="/">Go back</a>
            </div>
        </div>
    </div>
@endsection
