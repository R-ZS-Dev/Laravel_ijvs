@extends('layout.main')

        <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/header.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/rightside.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/inpress.css') }}">

@section('content')
    <div class="p-3">
        <h2 class="text-center mt-0">In Press Articles</h2>
        <hr class="hrbgline"></hr>
        <div class='inpressarticle p-2'>
            @foreach($inpress_lists as $inpress_show)
            <div class='p-1'>
                <strong>{{ @$inpress_show->inpress_title }}</strong>
                <div>{{ @$inpress_show->inp_co_authors_names }}</div>
                <div class="accordian">
                    <span>
                        <input class="checktyp" id="toggle1{{@$inpress_show->id}}" type="checkbox">
                        <label class="labclsd btn btn-info" for="toggle1{{@$inpress_show->id}}">Abstract</label>
                        <div class="bg-light">
                            <p>{{ @$inpress_show->inpress_abstract }}</p>
                            <div>
                                <strong>Keywords: </strong> {{ @$inpress_show->inpress_keywords }}
                            </div>
                            <button class='btn btn-info m-1'> <a href="{{ config('constants.base_url') }}/{{ @$inpress_show->inpress_pdf }}" class='text-white'>PDF</a> </button>
                        </div>
                    </span>
                </div>
            </div>
            @endforeach
        </div> 
    </div>
@endsection