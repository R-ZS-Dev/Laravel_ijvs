@extends('layout.main')

    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/rightside.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/archive.css') }}">

@section('content')
    <div class="p-3">
        <h2 class="text-center mt-0"><FaArrowLeft class="iconssizes mb-1" /> {volumeNo}, {yearNo} 
            <FaArrowRight class="iconssizes mb-1" />
        </h2>
        <hr class="hrbgline"></hr>
        <div class='p-2 border border-1 mt-1'>
            <strong>article_title</strong>
            <p>all_authors</p>
            <a href='{{ route('archiveabstract_page') }}'><button class='btn btn-info text-white m-2'>Abstact</button></a>
            <a href='{{ route('archivefulltext_page') }}'><button class='btn btn-info text-white m-2'>Full Text</button></a>
            <a href=''><button class='btn btn-info text-white m-2'>PDF</button></a>
            <a href='{{ route('archivefigure_page') }}'><button class='btn btn-info text-white m-2'>Figures</button></a>
            <a href=''><button class='btn btn-info text-white m-2'>ePUB File</button></a>
            <a href=''><button class='btn btn-info text-white m-2'>Flip File</button></a>
        </div>
    </div>
@endsection