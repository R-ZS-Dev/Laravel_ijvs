@extends('layout.main')

@section('cssLinks')
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/rightside.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/usp.css') }}">
@endsection

@section('content')
<div class="p-3">
    <h2 class="text-center"><Image class='mt-1' src="/asset/upload/uploadsite/uspicon.png" height="30" width="30" alt='USP'></Image> Unique Scientific Publishers®</h2>
    <hr class="hrbgline"></hr>
    <div class='uspmaincard py-4'>
        <div class='aimscard'>
          <div class=''>
            <h5 class='p-1'>Aims/Objectives:</h5>
          </div>
          <div class=''>
            <ol>
              <li>Promotion of science culture by conducting seminars/conferences/workshops</li>
              <li>Publication of scientific journals</li>
              <li>Publication of scientific books/magazines</li>
              <li>Editing and language improvement of scientific manuscripts, theses and reports</li>
              <li>Provision of scientific data analysis</li>
            </ol>
          </div>
          </div>
          <div class='aimscard'>
          <div class=''>
            <h5 class='p-1'>PUBLICATIONS:</h5>
          </div>
          <div class=''>
            <ol>
              <b>JOURNALS</b>
              <li><a href='http://agrobiologicalrecords.com/'><span>Agrobiological Records</span></a></li>
              <span>ISSN: 2708-7190 (online); 2708-7182 (print)</span>
              <li><a href='http://ijvets.com/'><span>International Journal of Veterinary Science</span></a></li>
              <span>ISSN: 2305-4360 (online); 2304-3075 (print)</span>
              <li><a href='http://ijagbio.com/'><span>International Journal of Agriculture and Biosciences</span></a></li>
              <span>ISSN: 2306-3599 (online); 2305-6622 (print)</span>
            </ol>
          </div>
          </div>
          <div class='aimscard'>
          <div class=''>
            <h5 class='p-1'>BOOKS</h5>
          </div>
          <div class=''>
            <ol>
              <li><a href='https://uniquescientificpublishers.com/veterinary-pathobiology-and-public-health/'><span>Veterinary Pathobiology and Public Health</span></a>(Published)</li>
              <span>ISBN: 978-969-2201-00-1</span>
              <li><a href='https://uniquescientificpublishers.com/animal-health-perspectives-volume-1/'><span>Animal Health Perspectives Volume I </span></a>(Published)</li>
              <span>ISBN: 978-969-2201-01-8</span>
              <li><a href='https://uniquescientificpublishers.com/animal-health-perspectives-volume-2/'><span>Animal Health Perspectives Volume II </span></a>(Published)</li>
              <span>ISBN: 978-969-2201-04-9</span>
              <li><a href='https://uniquescientificpublishers.com/pdf-files/Sustainable%20bioeconomy%20book.pdf'><span>Sustainable Bioeconomy in Livestock and Crop Production </span></a>(Published)</li>
              <span>ISBN: 978-969-2201-02-5</span>
              <li><a href='https://uniquescientificpublishers.com/pdf-files/Remote-sensing-and-GIS-book.pdf'><span>Remote Sensing & GIS Integration in Veterinary, Agricultural and Health Sciences </span></a>(Published)</li>
              <span>ISBN: 978-969-2201-03-2</span>
              <li><a href='/'><span>One Health Triad</span></a> (Under process)</li>
              <span>ISBN: Applied</span>
            </ol>
          </div>
          </div>
          <div class='aimscard'>
          <div class=''>
            <h5 class='p-1'>Contact us:</h5>
          </div>
          <div class='p-2'>
            <span>Unique Scientific Publishers, Faisalabad, Pakistan.</span>
            <p>Phone: +923336517844</p>
            <span><strong>Email: </strong> <a href='mailto: ahrar1122@yahoo.com'><span>ahrar1122@yahoo.com</span></a></span>
            <p><strong>Email: </strong> <a href='mailto: abdulhannan720@gmail.com'><span>abdulhannan720@gmail.com</span></a></p>
          </div>
        </div>
    </div>
</div>
@endsection