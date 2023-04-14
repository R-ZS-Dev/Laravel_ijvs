@extends('layout.archiveview')

    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/rightside.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/archive.css') }}">

@section('content')
    <div class='text-center mt-3'>
        <Image src='/asset/upload/uploadsite/slide1.jpg' height='300' width='500' />
        <div>{val.fig_text}</div>
    </div>
@endsection