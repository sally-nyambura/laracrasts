<x-layout>

    {{--<div class="container">
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
    </div>--}}

    @include('partials._posts-header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        <x-post.post-featured-card :post="$posts[0]" />

        <div class="lg:grid lg:grid-cols-2">
            <x-post.post-card />
            <x-post.post-card />
        </div>

        <div class="lg:grid lg:grid-cols-3">
            <x-post.post-card />
            <x-post.post-card />
            <x-post.post-card />
        </div>
    </main>

</x-layout>
