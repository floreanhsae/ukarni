<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('jas-pens.style-user')
    @include('jas-pens.script-user')
</head>

<body class="vh-100">
    @include('jas-pens.header-user')

    @yield('content')

    @include('jas-pens.script-user')

</body>
</html>