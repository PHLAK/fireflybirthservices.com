<!DOCTYPE html>

<html lang="en">

<head>
    @include('layouts.partials.head')
    @yield('head')
</head>

<body>

    <div class="homepage-wrapper">

        <div>
            <div class="brand-wrapper">
                <img src="/img/baby-small.png" class="brand-logo" alt="Firefly Birth Services">
                <h1 class="brand-title">Firefly Birth Services</h1>
            </div>

            <nav class="homepage-nav">
                <ul>
                    <li><a href="{{ route('doula') }}">Doula</a></li>
                    <li><a href="{{ route('breastfeeding') }}">Breastfeeding</a></li>
                    <li><a href="{{ route('placenta') }}">Placenta</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                </ul>
            </nav>
        </div>

    </div>

</body>

</html>
