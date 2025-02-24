<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title }}</title>
        <meta name="description" content="{{ $description }}">

        <meta property="og:title" content="{{ $title }}">
        <meta property="og:description" content="{{ $description }}">
        <meta property="og:url" content="https://axelcharpentier.fr">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="Axel Charpentier">

        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="{{ $title }}">
        <meta name="twitter:description" content="{{ $description }}">
        <meta name="twitter:site" content="@axeldotdev">
        <meta name="twitter:creator" content="@axeldotdev">

        {{-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" /> --}}
        <link rel="preconnect" href="https://fonts.cdnfonts.com">
        <link href="https://fonts.cdnfonts.com/css/satoshi" rel="stylesheet">

        @vite(['resources/css/app.css'])
    </head>
    <body class="font-sans antialiased">
        {{ $slot }}
    </body>
</html>
