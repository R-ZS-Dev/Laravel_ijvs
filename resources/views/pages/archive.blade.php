@extends('layout.main')

    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/rightside.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/archive.css') }}">

@section('content')
    <div class="p-3">
        <h2 class="text-center">Archive</h2>
        <hr class="hrbgline"></hr>
        <div class='p-2'>
            <div class='text-center'><h3>Year</h3></div>
            <div class='mt-2'>
                <div class='row'>
                    <div class='mntbg bg-primary text-white'><strong>January-March</strong></div>
                    <div class='mntbg bg-primary text-white'><strong>April-June</strong></div>
                    <div class='mntbg bg-primary text-white'><strong>July-September</strong></div>
                    <div class='mntbg bg-primary text-white'><strong>October-December</strong></div>
                    <div class='mntbg'><strong><a href='{{ route('archivevolumeview_page') }}'><span>{v.volumeNo}</span></a></strong></div>
                </div>
                <hr></hr>
            </div>
        </div>
    </div>
@endsection