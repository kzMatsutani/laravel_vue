<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0">
    <meta name="robots" content="noindex">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel_Vue') }} @yield('title')</title>
    <!-- stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/css/bootstrap-reboot.min.css">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet" type="text/css">
    <!-- <link href="{{ mix('/css/app.css') }}" rel="stylesheet"> -->
</head>
<body>
<header class="admgl-header">
    <div class="container">
        <section class="admgl-top">
            <h2>{{ $user->name ?? 'ゲスト'}}さん、ご機嫌いかがですか？</h2>
            <p> <a href="logout.php">ログアウトする</a></p>
        </section>
        <nav class="admgl-nav">
            <ul>
                <li><a href="" >top</a></li>
                <li><a href="{{ url('/admin/product/list') }}" >商品管理</a></li>
                <li><a href="" >売上管理</a></li>
                <li><a href="#">スキル管理</a></li>
                <li><a href="#">コミュニケーション管理</a></li>
                <li><a href="#">管理者管理</a></li>
            </ul>
        </nav>
    </div>
</header>
@yield('content')
<footer class="admgl-footer">
    <div class="container">
        <p>2020 ebacorp.inc</p>
    </div>
</footer>
<script src="{{ mix('/js/app.js') }}" defer></script>
</body>
</html>
