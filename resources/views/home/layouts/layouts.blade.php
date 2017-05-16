<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title> {{ $title }} </title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content=" {{ csrf_token() }}">
    <meta name="description" content="{{ $description }}">
    <meta name="keywords" content="{{ $keywords }}">
    <link rel="stylesheet" href="/css/common/sunglife.css">
    <link rel="stylesheet" href="/css/home/sunglife_home.css">

    {{--自定义样式--}}
    @yield('diyStyle')

</head>

<body class="body-bg">
    @include("home.layouts.head_nav")
    <div class="container">
        @yield('content')
    </div>

    <script src="js/common/sunglife.min.js"></script>
    @yield('diyJs')
</body>
</html>
