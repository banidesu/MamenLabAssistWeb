<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:locale" content="id_ID">
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="V-Lab Manajemen Menengah">
    <meta property="og:title" content="Virtual Lab Manajemen Menengah - Universitas Gunadarma">
    <meta name="keywords" content="vlab, vlab mamen, V-Lab, Mamen, mamen, vlab gundar, vlab gunadarma">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}">
    <title>V-Lab Manajemen Menengah - {{ $pageTitle }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    @include('layout.partials.navbar')
    @yield('content')
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>