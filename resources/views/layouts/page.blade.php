<!DOCTYPE html>

<html lang="en">

    <head>
        @include('layouts.partials.head')
        @yield('head')
    </head>

    <body>
        @include('layouts.partials.navigation')

        <div class="page-content">
            @yield('content')
        </div>

        @include('layouts.partials.footer')
        @yield('javascript')
    </body>

</html>
