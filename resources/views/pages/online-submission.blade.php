@extends('layout.main')

@section('cssLinks')
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/rightside.css') }}">
@endsection

@section('content')
    <div class="p-3">
        <h2 class="text-center mt-0">Submission</h2>
            <hr class="hrbgline"></hr>
                <div class='bg-light p-2'>
                    <p class="inpresstxtsiz">
                        The manuscript should be prepared according to the format of International Journal of Veterinary Science
                        (IJVS). After receiving of you article, you will get acknowledgement reply from the editor.
                    </p>
                    <div class='inpresstxtsiz text-justify'>
                        <b>Review process: </b> Journal has double blind review policy. The journal’s management will
                        try to get the submitted manuscript reviewed as early as possible. Usually reviewers are
                        requested to complete the review as early as possible; however, delay in the review process
                        will not be on the part of IJVS management. If all processes from complete submission to
                        revision go smoothly, then 10-12 weeks are required to reach to a conclusion (Acceptance/Rejection).
                    </div>
                </div>
                        <div class="container-scroller">
                            <div class="container-fluid page-body-wrapper full-page-wrapper">
                                <div class="content-wrapper d-flex align-items-center auth px-0">
                                    <div class="row w-100 mx-0">
                                        <div class="col-lg-6 mx-auto">
                                            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                                                <h6 class="font-weight-light">Sign in to continue.</h6>
                                                <!-- <form class="pt-3" action='' method='POST'> -->
                                                <div class="form-group">
                                                    <input type="email" name="email" class="form-control form-control-lg" placeholder="Enter Email" />
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" />
                                                </div>
                                                <div class="mt-3">
                                                    <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" >
                                                        <a href="{{ route('article_sub_form_page') }}"> SIGN IN </a> 
                                                    </button>
                                                </div>
                                                <div class="text-center mt-4 font-weight-light">
                                                    Dont have an account? <a href="{{ route('userregistration_page') }}" class="text-primary">Create</a>
                                                </div>
                                                <!-- </form> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div className='archbrder p-2 bg-light mt-3'>
                        <b>If user have any Query Contact us via Email</b>
                        <div className='archartic mt-1'>
                            <a href='mailto: editor@ijvets.com'><span>editor@ijvets.com</span></a>
                        </div>
                    </div>
    </div>
@endsection