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

@yield('content')

</body>
</html>
