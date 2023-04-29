@extends('layout.articlesubmission')

@section('cssLinks')
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/rightside.css') }}">
@endsection

@section('content')
    <div class="row p-4">
                <div class="col-lg-12">
                    <h3 class='text-center'>Article Submission Form</h3>
                    <form action="{{ route('article_sub_form_req') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="row">                        
                        <div class="col">
                            <span><b>Article Title</b></span>
                            <input type="text" name="article_title" class="form-control" placeholder="Enter Article Title..." />
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col">
                            <span><b>Author Name</b></span>
                            <input type="text" name="author_name" class="form-control" placeholder="Enter Author Name..." />
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col">
                            <span><b>Corresponding Email</b></span>
                            <input type="email" name="co_author_email" class="form-control" placeholder="Enter Article Authors..." />
                        </div>
                    </div>
                    <div class="form-group mt-1">
                        <span ><b>Department/Affiliation</b></span>
                        <textarea name="dept" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="form-group mt-1">
                        <span><b>Abstract</b></span>
                        <textarea class="form-control" name="abstract" rows="5"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mt-1">
                            <span><b>Keywords</b></span>
                            <input type="text" name="keywords" class="form-control" placeholder="Enter Keywords" />
                        </div>
                    </div>
                    <div class='row'>
                        <div class="form-group mt-2 col-md-4">
                            <span><b>Upload MS Word File</b></span>
                            <div class='text-small'>(including Text, Table, Figure)</div>
                            <input type="file" name='ms_file1' class="form-control-file" />
                        </div>
                        <div class="form-group mt-4 col-md-4">
                            <span><b>Upload Potential Reviewer</b></span>
                            <input type="file" name='potential_reviewer1' class="form-control-file" />
                        </div>
                        <div class="form-group mt-4 col-md-4">
                            <span><b>Attached Performa-Doc</b></span>
                            <input type="file" name='performa1' class="form-control-file" />
                        </div>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                        <button class="btn btn-light m-2">Cancel</button>
                    </div>
                    </form>
                </div>
            </div>
@endsection