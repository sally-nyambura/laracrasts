@extends('layouts.app')

@section('content')

    @foreach($posts as $post)
    <div class="container">
        <div class="row">
            <div class="col-md-9 align-sc m-auto mt-2 py-2">
                <article>
                    <h1>
                        <a style="text-decoration: none;color: darkgreen" href="/posts/{{ $post->slug }}">
                            {{ $post->title }}
                        </a>
                    </h1>

                    <div>
                        <code>{{ $post->excerpt }}</code>
                    </div>

                    <div class="border-bottom">
                        <span style="color: gray">Published at</span>
                        <span style="float: right">
                            <a
                                style="text-decoration: none;color: blueviolet"
                                href="/categories/{{ $post->category->slug }}">
                                {{ $post->category->name }}
                            </a>
                        </span>
                    </div>

                    <br>

                    <div>
                        {{ $post->body }}
                    </div>

                </article>
            </div>
        </div>
    </div>
    @endforeach

@endsection
