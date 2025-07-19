<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
        <meta name="description"
            content="{{ config('app.name') }} - European Sovereign Cloud Provider powered by 100% renewable energy. Sustainable, efficient, and resilient data centers with zero water usage and complete GDPR compliance.">
        <meta name="keywords"
            content="sovereign cloud, renewable energy, sustainable data center, green hosting, GDPR compliant, European cloud provider, zero water usage, district heating, sustainable infrastructure, eco-friendly hosting, {{ config('app.name') }}">

        @if(config('app.env') != 'production')
            <meta name="robots" content="noindex, nofollow">
        @endif

        <!-- Open Graph / Social Media Meta Tags -->
        <meta property="og:title" content="{{ config('app.name') }} - {{ config('app.slogan') }}">
        <meta property="og:description"
            content="European Sovereign Cloud Provider powered by 100% renewable energy. Sustainable, efficient, and resilient data centers.">
        <meta property="og:image" content="{{ asset('assets/images/logo.png') }}">
        <meta property="og:url" content="{{ config('app.url') }}">
        <meta property="og:type" content="website">

        <!-- Twitter Card Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ config('app.name') }} - {{ config('app.slogan') }}">
        <meta name="twitter:description"
            content="European Sovereign Cloud Provider powered by 100% renewable energy. Sustainable, efficient, and resilient data centers.">
        <meta name="twitter:image" content="{{ asset('assets/images/logo.png') }}">

        <!-- Canonical URL -->
        <link rel="canonical" href="{{ config('app.url') . strtok($_SERVER["REQUEST_URI"], '?') }}">

        <!-- Page Title -->
        <title>@yield('title', config('app.name')) - {{ config('app.slogan') }}</title>
        <!-- Favicon Icon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/logo.png') }}">

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    </head>

    <body>

        @include('frontend.include.header')
        @yield('content')
        @include('frontend.include.footer')

        <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/validator.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.slicknav.js') }}"></script>
        <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets/js/SmoothScroll.js') }}"></script>
        <script src="{{ asset('assets/js/parallaxie.js') }}"></script>
        <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
        <script src="{{ asset('assets/js/SplitText.js') }}"></script>
        <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.mb.YTPlayer.min.js') }}"></script>
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('assets/js/function.js') }}"></script>
    </body>
</html>
