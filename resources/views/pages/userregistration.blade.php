@extends('layout.articlesubmission')

@section('cssLinks')
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/rightside.css') }}">
@endsection

@section('content')
    <div className='row p-5'>
                <div className='col-lg-2'></div>
                <div className='col-lg-8'>
                    <p className='text-center'>Display MESSAGE</p>
                    <div className="form-row">
                        <div className="form-group col-md-6">
                            <label htmlFor=''>First Name</label>
                            <input type="text" name='first_name' className="form-control" placeholder="First Name" />
                        </div>
                        <div className="form-group col-md-6">
                            <label htmlFor=''>Last Name</label>
                            <input type="text" name='last_name' className="form-control" placeholder="Last Name" />
                        </div>
                    </div>
                    <div className="form-row">
                        <div className="form-group col-md-6">
                            <label htmlFor=''>Phone Number</label>
                            <input type="text"name='ph_num' className="form-control" placeholder="Phone Number" />
                        </div>
                        <div className="form-group col-md-6">
                            <label htmlFor=''>Email</label>
                            <input type="text" name='email' className="form-control" placeholder="Enter Email" />
                        </div>
                    </div>
                    <div className="form-row">
                        <div className="form-group col-md-6">
                            <label htmlFor=''>Password</label>
                            <input type="Password" name='password' className="form-control" placeholder="Password" />
                        </div>
                        <div className="form-group col-md-6">
                            <label htmlFor=''>Confirm Password</label>
                            <input type="password" name='confpassword' className="form-control" placeholder="Confirm Password" />
                        </div>
                    </div>
                    <div className="form-group">
                        <label htmlFor=''>Address</label>
                        <input type="text" name='user_address' className="form-control" placeholder="1234 Main St" />
                    </div>
                    <div className="form-row">
                        <div className="form-group col-md-6">
                            <label htmlFor=''>City Name</label>
                            <input type="text" name='city_name' className="form-control" />
                        </div>
                        <div className="form-group col-md-6">
                            <label htmlFor=''>Country Name</label>
                            <input type="text" name='country_name' className="form-control" placeholder="Country Name" />
                        </div>
                    </div>
                    <button className="btn btn-primary">Create</button>
                </div>
                <div className='col-lg-2'></div>
            </div>
@endsection