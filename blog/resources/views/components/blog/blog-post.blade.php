

<div class="border-bottom">
    <span style="color: gray">Published at: <small><i>{{ $post->published_at }}</i></small></span>
    <span style="float: right">
        By

        <a href="/authors/{{ $post->author->username }}" style="color: gray;text-decoration: none">{{ $post->author->name }}</a>

        in

        <a
            style="text-decoration: none;color: blueviolet"
            href="/categories/{{ $post->category->slug }}">
                <i>{{ $post->category->name }}</i>
        </a>

    </span>
</div>
