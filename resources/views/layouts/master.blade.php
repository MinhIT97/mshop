<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>

    <base href="{{asset('')}}">
    <link rel="stylesheet" href="/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/css/style.css">

    <link rel="shortcut icon" href="/images/favicon.png" />
</head>

<body>
    @section('header')
    @include('layouts.head')
    @show
    @yield('content')
    @section('footer')
    @include('layouts.footer')
    @show

    <script src="/vendors/js/vendor.bundle.base.js"></script>

    <script src="/vendors/chart.js/Chart.min.js"></script>

    <script src="js/js/off-canvas.js"></script>
    <script src="js/js/hoverable-collapse.js"></script>
    <script src="js/js/misc.js"></script>

    <script src="js/js/dashboard.js"></script>
    <script src="js/js/todolist.js"></script>

</body>


</html>
