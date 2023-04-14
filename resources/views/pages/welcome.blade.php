    @extends('layout.main')
    
    @section('cssLinks')
        <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/header.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/rightside.css') }}">
    @endsection

    @section('content')
            <x-slider></x-slider>
            <x-main-body></x-main-body>
    @endsection