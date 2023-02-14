@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mt-2 m-auto">
                <h3>{{ $post->title }}</h3>

                <span>{{ $post->excerpt }}</span>
                <br><br>

                <div class="border-bottom">
                    <span style="color: gray">Published at</span>

                    <span style="float: right">
                        By

                        <a href="#" style="color: gray;text-decoration: none">{{ $post->user->name }}</a>

                        in

                        <a
                            style="text-decoration: none;color: blueviolet"
                            href="/categories/{{ $post->category->id }}">
                                <i>{{ $post->category->name }}</i>
                        </a>

                    </span>
                </div>

                {{ $post->body }}
                <br><br>
                <a style="text-decoration: none" href="/">Go back</a>
            </div>
        </div>
    </div>
@endsection
