@extends('layout.main')

    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/rightside.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/inpress.css') }}">

@section('content')
    <div class="p-3">
        <h2 class="text-center mt-0">Top Cited Articles </h2>
        <hr class="hrbgline"></hr>
        @foreach($topcited_lists as $topcited_show)
        <div class='inpressarticle p-2 border border-1'>
            <span class='topinpresshead'>{{ @$topcited_show->top_title }}</span>
            <div class='inpresstxtsiz mt-0'> {{ @$topcited_show->top_co_authors_names }}
                <div>{{ @$topcited_show->top_year_pages }}</div>
            </div>
                    
            <div class="accordian">
                <button class='btn btn-info m-1'><a class='text-white' href="{{ config('constants.base_url') }}/{{ @$topcited_show->top_pdf }}"
                    target="_blank" download="">PDF</a></button>
                    <span class='text-primary m-1'><b>Citations: {{ @$topcited_show->top_citations }}</b></span>
                    <span>
                        <input class="checktyp" id="toggle{{@$topcited_show->id}}" type="checkbox">
                        <label class="labclsd btn btn-info" for="toggle{{@$topcited_show->id}}">Abstract</label>
                        <div  class="bg-light expand">
                            <p>{{ @$topcited_show->top_abstract }}</p>
                            <div>
                                <strong>Keywords: </strong> {{ @$topcited_show->top_keywords }}
                            </div>
                        </div>
                    </span>
            </div>
        </div>
        @endforeach
    </div>
@endsection