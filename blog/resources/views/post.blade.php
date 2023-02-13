<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Blog</title>

    <link rel="stylesheet" type="text/css" href="/app.css">
    <script type="text/javascript" src="app.js"></script>
    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9 mt-2 m-auto">
                <h3>{{ $post->title }}</h3>

                <span>{{ $post->excerpt }}</span>
                <br><br>
                <div class="border-bottom">
                    <small><span style="color: gray">{{ $post->date }}</span></small>
                </div>
                {{ $post->body }}
                <br><br>
                <a style="text-decoration: none" href="/">Go back</a>
            </div>
        </div>
    </div>
</body>
</html>
