<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>我的博客</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

</head>

<body>

    @include('partials.nav')

    <div class="contain">
        @yield('content')
    </div>

    @include('partials.footer')


    <script src="/js/jquery-2.2.2.js"></script>
    <script src="/js/bootstrap.js"></script>
</body>

</html>