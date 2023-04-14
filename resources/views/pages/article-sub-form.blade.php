@extends('layout.articlesubmission')

@section('cssLinks')
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/rightside.css') }}">
@endsection

@section('content')
    <div className="row p-4">
                <div className="col-lg-12">
                    <p className="text-center">{errorMsg}</p>
                    <h3 className='text-center'>Article Submission Form</h3>
                    <div className="row">                        
                        <div className="col">
                            <span><b>Article Title</b></span>
                            <input type="text" name="article_title" className="form-control" placeholder="Enter Article Title..." />
                        </div>
                    </div>
                    <div className="row mt-1">
                        <div className="col">
                            <span><b>Author Name</b></span>
                            <input type="text" name="author_name" className="form-control" placeholder="Enter Author Name..." />
                        </div>
                    </div>
                    <div className="row mt-1">
                        <div className="col">
                            <span><b>Corresponding Email</b></span>
                            <input type="email" name="co_author_email" className="form-control" placeholder="Enter Article Authors..." />
                        </div>
                    </div>
                    <div className="form-group mt-1">
                        <span ><b>Department/Affiliation</b></span>
                        <textarea name="dept" className="form-control" rows="3"></textarea>
                    </div>
                    <div className="form-group mt-1">
                        <span><b>Abstract</b></span>
                        <textarea className="form-control" name="abstract" rows="5"></textarea>
                    </div>
                    <div className="row">
                        <div className="col-lg-12 mt-1">
                            <span><b>Keywords</b></span>
                            <input type="text" name="keywords" className="form-control" placeholder="Enter Keywords" />
                        </div>
                    </div>
                    <div className='row'>
                        <div className="form-group mt-1 col-4">
                            <span><b>Upload MS Word File</b></span>
                            <div className='text-small'>(including Text, Table, Figure)</div>
                            <input type="file" name='ms_file' className="form-control-file" />
                        </div>
                        <div className="form-group mt-1 col-4">
                            <span><b>Upload Potential Reviewer</b></span>
                            <input type="file" name='potential_reviewer' className="form-control-file" />
                        </div>
                        <div className="form-group mt-1 col-4">
                            <span><b>Attached Performa-Doc</b></span>
                            <input type="file" name='performa' className="form-control-file" />
                        </div>
                    </div>
                    <div>
                        <button type="submit" className="btn btn-primary mr-2">
                            <a href="{{ route('submitmsg_page') }}">Submit</a>
                        </button>
                        <button className="btn btn-light">Cancel</button>
                    </div>
                </div>
            </div>
@endsection