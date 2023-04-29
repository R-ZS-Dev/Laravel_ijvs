@extends('layout.articlesubmission')

    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">

@section('content')
    <div class='row p-5'>
                <div class='col-lg-2'></div>
                <div class='col-lg-8'>
                    
                    @if (session('status'))
                        <p class='text-center text-success'>{{ session('status') }}</p>
                    @endif
                    <form action="{{ route('userregistration_req') }}" method="post">
                        @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label For=''>First Name</label>
                            <input type="text" name='first_name' class="form-control" placeholder="First Name" />
                        </div>
                        <div class="form-group col-md-6">
                            <label>Last Name</label>
                            <input type="text" name='last_name' class="form-control" placeholder="Last Name" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Phone Number</label>
                            <input type="text" name='ph_num' class="form-control" placeholder="Phone Number" />
                        </div>
                        <div class="form-group col-md-6">
                            <label>Email</label>
                            <input type="text" name='email' class="form-control" placeholder="Enter Email" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Password</label>
                            <input type="Password" name='password' class="form-control" placeholder="Password" />
                        </div>
                        <div class="form-group col-md-6">
                            <label>Confirm Password</label>
                            <input type="password" name='confpassword' class="form-control" placeholder="Confirm Password" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name='user_address' class="form-control" placeholder="1234 Main St" />
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>City Name</label>
                            <input type="text" name='city_name' class="form-control" />
                        </div>
                        <div class="form-group col-md-6">
                            <label>Country Name</label>
                            <input type="text" name='country_name' class="form-control" placeholder="Country Name" />
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Create</button>
                </div>
                </form>
                <div className='col-lg-2'></div>
            </div>
@endsection