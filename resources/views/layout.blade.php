<!DOCTYPE html>
<html>
<head>
    <title>Game Library</title>
    <meta http-equiv="Content-Language" content="en">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
    <body>
        @include('Header')
        <div class="container">
            @yield('content')
        </div>
        <div class="blockquote-footer">
            @include('Footer')
        </div>
        
    </body>
</html>