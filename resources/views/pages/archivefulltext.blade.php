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
            <div><sup>++i</sup>val</div>
        </h3>
        <span>
            <b>Abstract</b>
            <p class='text-justify'>{{ @$archive->article_abstract }}</p>
        </span>
        <span>
            <hr></hr>
            <h5 class="text-center">Article Information</h5>
            <p><b>Received Date:</b> {{ @$archive->received_date }}</p>
            <p><b>Revised Date:</b> {{ @$archive->revised_date }}</p>
            <p><b>Accepted Date:</b> {{ @$archive->accepted_date }}</p>
            <p><b>Available online:</b> {{ @$archive->available_online_date }}</p>
            <p><b>Authors Contribution: </b>
                {{ @$archive->contribution_authors_text }}
            </p>
            <p><b>KeyWords: </b>
                {{ @$archive->article_keywords }}
            </p>
            <p><b>DOI: </b>
                <a href='archive.article_doi'><span> {{ @$archive->article_doi }}</span></a>
            </p>
            <p><b>*Corresponding author:</b> {{ @$archive->corresponding_email }}</p>
            <p>Copyright 2012 IJVS</p>
            <hr></hr>
        </span>
        <span>
            <div class='text-center'><b>INTRODUCTION</b></div>
            <p class='text-justify'>
                <span class="articlintofirstword"></span>
                {{ @$archive->introduction }}
            </p>
        </span>
        <div class='mt-2'>
            <span>
                <div class='text-center'><b>MATERIALS AND METHODS</b></div>
                <p class='text-justify'>
                    {{ @$archive->materials_and_methods }}
                </p>
            </span>
        </div>
        <span>
            <div class='text-center'><b>RESULTS</b></div>
            <p class='text-justify'>
                {{ @$archive->results }}
            </p>
        </span>
        <span>
            <div class='text-center'><b>DISCUSSION</b></div>
            <p class='text-justify'>
                {{ @$archive->discussion }}
            </p>
        </span>
        <span>
            <b>CONCLUSIONS</b>
            <p>
                {{ @$archive->conclusions }}
            </p>
        </span>
        <span>
            <b>Acknowledgements</b>
            <p>
                {{ @$archive->acknowledgements }}
            </p>
        </span>
        <span>
            <b>Authors Contribution</b>
            <p>
                {{ @$archive->contribution_authors_text }}
            </p>
        </span>
        <span>
            <b>Conflict of Interest</b>
            <p>
                {{ @$archive->conflict_of_interest }}
            </p>
        </span>
        <span>
            <div class='text-center'><b>REFERENCES</b></div>
            <div class='text-justify'>
                <div>{{ @$archive->reference }}</div>
            </div>
        </span>
        <h1> {{ @$archive->article_title }}</h1>
    </div>
@endsection