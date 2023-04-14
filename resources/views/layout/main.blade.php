<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>IJVS</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/header.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/rightside.css') }}">
        @yield('cssLinks')
    </head>
    <body>
        <header>
            <x-nav></x-nav>
        </header>
        <main>
            <div class="row">
                <div class="col-lg-9">
                    @yield('content')
                </div>
                <div class="col-lg-3">
                    <x-right-side></x-right-side>
                </div>
            </div>
        </main>
        <footer>
            <x-footer></x-footer>
        </footer>
    </body>
</html>