<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @include('layouts.style')
</head>

<body class="vh-100">
  @include('sweetalert::alert')
  @include('layouts.header')
  @include('layouts.sidebar')
  @yield('content')
  @include('layouts.footer')
  
  @include('layouts.script')

</body>
</html>