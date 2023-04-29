@extends('layout.main')

    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/rightside.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/archive.css') }}">

@section('content')
    <div class="p-3">
        {{-- {{ dd($archives[0]->volumes->volumeNo) }} --}}
        <h2 class="text-center mt-0" id=""> {{ @$archives[0]->volumes->volumeNo }}, {{ @$archives[0]->years->yearNo }} </h2>
        <hr class="hrbgline"></hr>
            @if (count($archives)==0)
                <h2>Record Not Found</h2>
            @endif

            @foreach($archives as $archive)
        <div class='p-2 border border-1 mt-1'>
            <strong>{{ @$archive->article_title }}</strong>
            <p>{{ @$archive->all_authors }}</p>
            <a href="{{ route('archiveabstract_page', [$archive->id]) }}"><button class='btn btn-info text-white m-2'>Abstact</button></a>
            <a href="{{ route('archivefulltext_page', [$archive->id]) }}"><button class='btn btn-info text-white m-2'>Full Text</button></a>
            <a href="{{ config('constants.base_url')}}/{{$archive->pdf_file}}"><button class='btn btn-info text-white m-2'>PDF</button></a>
            <a href="{{ route('archivefigure_page')}}"><button class='btn btn-info text-white m-2'>Figures</button></a>
            <a href="{{ config('constants.base_url')}}/{{$archive->epub_file}}"><button class='btn btn-info text-white m-2'>ePUB File</button></a>
            <a href="{{ config('constants.base_url')}}/{{$archive->flip_file}}"><button class='btn btn-info text-white m-2'>Flip File</button></a>
        </div>
        @endforeach
    </div>
@endsection