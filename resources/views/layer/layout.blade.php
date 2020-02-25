<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>HR Management - @yield('title')</title>
    </head>
    <body>
        <nav class="nav">
            <a class="nav-link" href="home">Home</a>
            <a class="nav-link" href="#">About Us</a>
            <a class="nav-link" href="#">Services</a>
            <a class="nav-link" href="#">Contact</a>
        </nav>

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>