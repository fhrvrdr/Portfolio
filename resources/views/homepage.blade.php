<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Fahri Vardar</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fork-awesome@1.2.0/css/fork-awesome.min.css"
        integrity="sha256-XoaMnoYC5TH6/+ihMEnospgm0J1PM/nioxbOUdnM8HY=" crossorigin="anonymous">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <style>
        html {
            scroll-behavior: smooth;
            scroll-snap-type: x mandatory;
            overflow-x: scroll;
        }

        html section {
            scroll-snap-align: center;
        }

    </style>
</head>

<body>
    <!-- Navbar -->
    <x-main.navbar />
    <!-- Content -->
    <x-main.content />


</body>

</html>
