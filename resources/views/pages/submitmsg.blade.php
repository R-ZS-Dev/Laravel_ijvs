@extends('layout.articlesubmission')

@section('cssLinks')
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/rightside.css') }}">
@endsection

@section('content')
    <div className='py-5 mt-5 mb-5 m-5 text-center'>
        <h1>Your email is received. <span className='text-success'>IJVS Editor Chief</span> will respond to your
          email as early as he could.</h1>
    </div>
@endsection