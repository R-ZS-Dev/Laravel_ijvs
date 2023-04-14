@extends('layout.main')

@section('cssLinks')
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/rightside.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/contactus.css') }}">
@endsection

@section('content')
<div class="p-3">
    <h2 class="text-center">Contact Us</h2>
        <hr class="hrbgline"></hr>
                    <div class='editorcrd'>
                        <div class='cheifcard py-2'>
                                <h5 class='text-secondary text-center'>Editor</h5>
                            <div class='text-center'>
                                <Image class='imgradius' src="asset/upload/uploadsite/ahrar.jpg" height='100' width='100' alt=''></Image>
                                <span class='editorlink_colorcnt'><h5 class=''>Prof. Dr. Ahrar Khan</h5></span>
                            </div>
                            <div>
                                <h6 class='ml-2 text-center'><strong>Affiliations:</strong></h6>
                                <ul>
                                    <li><a href='https://en.sdmy.edu.cn/info/1007/1310.htm'><span>Shandong Vocational Animal Science and Veterinary College, Weifang, Shandong, China</span></a></li>
                                    <li><a href='http://uaf.edu.pk/EmployeeDetail.aspx?userid=40'><span>Ex-Dean, Faculty of Veterinary Science, University of Agricultue, Faisalabad, Pakistan</span></a></li>
                                </ul>
                            </div>
                            <div class='text-center'>
                                <h6><strong>Phone:</strong> +92 333 6517844</h6>
                                <h6><strong>Email:</strong> <a href='mailto: editor@ijvets.com'><span>editor@ijvets.com</span></a></h6>
                            </div>
                            <hr></hr>
                            <label class='text-center p-2'>Send us your query anytime!</label>
                        </div>
                    
                        <div class='cheifcard py-2'>
                            <div class='text-center'>
                                <h5 class='text-secondary'>Unique Scientific Publishers</h5>
                                <Image class='imgradius' src="/asset/upload/uploadsite/usp.png" height='100' width='100' alt=''></Image>
                            </div>
                            <div class="p-3">
                                <h6 class='mt-2'><strong>Postal/Street Address:</strong> Unique Scientific Publishers</h6>
                                <label>House No. 1122, Street No. 11, Liaquat Abad No. 2, Faisalabad, Pakistan</label>
                                
                                <div class="mt-3">
                                    <h6><strong>Phone:</strong> +923 33 6054000</h6>
                                    <strong>Email:</strong> <a href='mailto: abdulhannan720@gmail.com'> <span>abdulhannan720@gmail.com</span></a>, 
                                    <a href='mailto: proprietor@uniquescientificpublishers.com'> <span>proprietor@uniquescientificpublishers.com</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
@endsection