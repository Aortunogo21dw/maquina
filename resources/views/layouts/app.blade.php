<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Favicons -->
        <link href="<?php echo asset('assets/img/logo 3.png')?>" rel="icon">
        <link href="<?php echo asset('assets/img/apple-touch-icon.png')?>" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="<?php echo asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i')?>" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="<?php echo asset('assets/vendor/aos/aos.css')?>" rel="stylesheet">
        <link href="<?php echo asset('assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
        <link href="<?php echo asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')?>" rel="stylesheet">
        <link href="<?php echo asset('assets/vendor/boxicons/css/boxicons.min.css')?>" rel="stylesheet">
        <link href="<?php echo asset('assets/vendor/glightbox/css/glightbox.min.css')?>" rel="stylesheet">
        <link href="<?php echo asset('assets/vendor/remixicon/remixicon.css')?>" rel="stylesheet">
        <link href="<?php echo asset('assets/vendor/swiper/swiper-bundle.min.css')?>" rel="stylesheet">
        
        <!-- Template Main CSS File -->
        <link href="<?php echo asset('assets/css/style.css')?>" rel="stylesheet" type="text/css">
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
