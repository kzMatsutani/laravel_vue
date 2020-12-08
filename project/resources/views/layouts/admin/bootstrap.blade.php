<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel_Vue') }} @yield('title')</title>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container-fluid bg-dark mb-3">
        <div class="container">
            <nav class="navbar navbar-dark navbar-expand-sm">
                <span class="navbar-brand mb-0 h1">Laravel_Vue</span>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navmenu1" aria-controls="navmenu1" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navmenu1">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" href="#">Product</a>
                        <a class="nav-item nav-link" href="#">News</a>
                        <a class="nav-item nav-link" href="#">Other</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    @yield('content')
    <footer class="fixed-bottom">
        <div class="bg-dark text-right">
            <span class="mb-0 mr-5 h4 text-light">.inc</span>
        </div>
    </footer>
    <script src="{{ mix('/js/app.js') }}" defer></script>
</body>
</html>
