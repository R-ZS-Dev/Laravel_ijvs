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
            <div class='b-1'>
                <strong>Article Title</strong>
                <div>Tauseef ur Rehman1*, Ahmed A. El-Mansi2,3, Zohaib Saeed6</div>
                <span>
                    <input class="checktyp" id="toggle" type="checkbox">
                    <label class="labclsd btn btn-info" for="toggle">Abstract</label>
                    <div id="expand" class="bg-light">
                        <strong>Hello Abstract</strong>
                        <div>
                            <strong>Keywords: </strong>ABC, DEF, GHQ
                        </div>
                        <button class='btn btn-info m-1'> <span class='text-white'>PDF</span> </button>
                    </div>
                </span>
            </div>
        </div> 
    </div>
@endsection