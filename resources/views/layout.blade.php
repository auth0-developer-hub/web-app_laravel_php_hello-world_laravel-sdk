<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="Learn how to add user authentication to Laravel web apps easily." />
    <link rel="shortcut icon mask-icon" href="https://cdn.auth0.com/website/auth0_favicon.svg" color="#000000" />
    <link rel="shortcut icon" href="https://cdn.auth0.com/website/new-homepage/dark-favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <title>@yield('title', 'Auth0 Laravel Sample')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />
    @stack('styles')
</head>

<body>
    <div class="page-layout">
        <x-nav-bar />
        <x-mobile-nav-bar />
        <div class="page-layout__content">
            @yield('content')
        </div>
        <x-footer />
    </div>
    <script type="module" src="{{ asset('assets/js/main.js') }}"></script>
    @stack('scripts')
</body>

</html>
