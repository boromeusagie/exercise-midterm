<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>@yield('title') Blogger</title>

    <!-- Bootstrap core CSS -->
    {{-- <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet"> --}}

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet">
</head>

<body>

    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-center align-items-center">
                <div class="col-4 col-span-4 text-center">
                    <a class="blog-header-logo text-dark" href="{{ route('index') }}">Blogger</a>
                </div>
            </div>
        </header>

        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <a class="p-2 text-muted" href="{{ route('index') }}">All</a>
                <a class="p-2 text-muted" href="{{ route('index', 'technology') }}">Technology</a>
                <a class="p-2 text-muted" href="{{ route('index', 'gaming') }}">Gaming</a>
                <a class="p-2 text-muted" href="{{ route('index', 'life') }}">Life</a>
            </nav>
        </div>

        @yield('content')

    <footer class="blog-footer">
        <p>
            &copy; <a href="{{ route('index') }}">Blogger</a> {{ date('Y') }}
        </p>
        <p>
            <a href="#">Back to top</a>
        </p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
