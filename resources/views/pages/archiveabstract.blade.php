@extends('layout.archiveview')

    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/rightside.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/archive.css') }}">

@section('content')
    <div class="p-3 mt-2">
        <a href=''><button class='btn btn-success'>← Previous</button></a>
        <a href=''><button class='btn btn-success float-end'>Next →</button></a>

        <h1 class='mt-3'>{{ @$archive->article_title }}</h1>
        <h2>{{ @$archive->all_authors }}</h2>
        <h3>
            <span>{{ @$archive->departments }}</span>
            <div> <sup>{++i}</sup>{val} </div>
        </h3>
        <span>
            <h4>Abstract</h4>
            <p class='text-justify'>{{ @$archive->article_abstract }}</p>
        </span>
    </div>
@endsection