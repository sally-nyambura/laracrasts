@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-9 align-sc m-auto mt-2 py-2">

                @foreach($posts as $post)
                <article>
                    <h1>
                        <a style="text-decoration: none;color: darkgreen" href="/posts/{{ $post->slug }}">
                            {{ $post->title }}
                        </a>
                    </h1>
                    <div>
                        <code>{{ $post->excerpt }}</code>
                    </div>

                    <x-blog.blog-post :post="$post" />

                    <br>

                    <div class="mb-4">
                        {{ $post->body }}
                    </div>

                </article>
                @endforeach


            </div>
        </div>
    </div>


@endsection
