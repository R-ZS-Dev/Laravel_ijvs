@extends('layout.main')

    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/rightside.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/inpress.css') }}">

@section('content')
    <div class="p-3">
        <h2 class="text-center mt-0">Top Cited Articles</h2>
        <hr class="hrbgline"></hr>
        <div class='inpressarticle p-2 border border-1'>
                <div>
                    <span>
                        <span class='topinpresshead'>Flow of Zoonotic Toxoplasmosis in Food Chain</span>
                        <div class='inpresstxtsiz mt-0'>Abdulaziz M Almuzaini
                            <div>Inter J Vet Sci, 2018, 5(3): 70-75</div>
                        </div>
                    </span>
                    
                    <div class="accordian">
                        <button class='btn btn-info m-1'><span class='text-white' href='/./upload/'
                            target="_blank" download="">PDF</span></button>
                        <span class='text-primary m-1'><b>Citations: 11</b></span>

                        <input type="checkbox" id="trigger01" />
                        <label class='colpsedown' For="trigger01"><button class="btn btn-info">Abstract</button> </label>
                        
                        <div class='ethictxtsize'>
                            The International Journal of Veterinary Science (IJVS) is quarterly Journal (January-March; April-June; July-September;
                            October-December) published by the data.
                        </div>
                        <div>
                            <b>Keywords: </b>ABC, DEF, GHQ
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection