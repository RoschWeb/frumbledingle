<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Frumbledingle - @yield('page_title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Orbitron:700&display=swap" />
    <style type="text/css">
        #app-container {
            margin: auto;
        }

        .logo {
            color: #121889;
            font-family: 'Orbitron';
            font-size: 1em;
            margin-top: 0px;
            text-align: center;
        }
        .site-header {
            border-bottom:1px solid rgba(18, 24, 137, .25);
        }
    </style>
    @yield('page_style')
</head>

<body>
    <div class="site-header sticky-top py-1 bg-light">
        <div class="container d-flex flex-column flex-md-row align-items-center">
            <a class="navbar-brand my-0 mr-md-auto" href="/">
                <div class="logo"><i class="fa fa-object-group"></i> Frumbledingle Corp</div>
            </a>
            <nav class="my-2 my-md-0 mr-md-3">
                <a class="p-2" href="/">Home</a>
                <a class="p-2" href="/locations">Locations</a>
                <a class="p-2" href="/items">Items</a>
                <a class="p-2" href="/categories">Categories</a>
                <a class="p-2" href="/report">Report</a>
            </nav>
        </div>
    </div>
    <div id="app-container" class="mt-3 container mb-5">
        @yield('content')
    </div>
    <script src=" {{ elixir('js/app.js') }}"></script>
</body>
</html>
