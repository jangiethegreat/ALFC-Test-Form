@extends('layouts.app')

@section('content')

<style>
    .card {
        border-radius: 10px;
        background: #CC2E2E;
        width: 200px;
        height: 125px; /* Adjusted height */
        flex-shrink: 0;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        background-size: auto;
        margin:5px;
    }

    /* Override Bootstrap's default column padding */
 
    
    .cardView .card {
        width: 100px; /* Set your preferred width */
        height: 65px; /* Set your preferred height */
        background-size: 70px 45px;

    }
    .cardView .card:hover {
        transform: scale(1.1); /* Increases the size of the card on hover */
        transition: transform 0.3s ease; /* Adds a smooth transition effect */
    }
    .card:hover {
        transform: scale(1.1); /* Increases the size of the card on hover */
        transition: transform 0.3s ease; /* Adds a smooth transition effect */
    }
    
    
</style>

<h2 style="text-align: center; color: #332727; font-family: Montserrat; font-size: 40px; font-weight: 700; margin-top: 45px; margin-bottom: 50px;">
    Insurances for FGEN
</h2>
<div class = "container-fluid d-md-block d-none">
    <div class="row justify-content-center">
        <div class="col-md-2 col-sm-2 mb-3 d-flex justify-content-center">
            <div class="card" style="background-image: url({{ asset('assets/fgen.png') }});"></div>
        </div>
        <div class="col-md-2 col-sm-2 mb-3 d-flex justify-content-center">
            <div class="card" style="background-image: url({{ asset('assets/fgen.png') }});"></div>
        </div>
        <div class="ol-md-2 col-sm-2 mb-3 d-flex justify-content-center">
            <div class="card" style="background-image: url({{ asset('assets/fgen.png') }});"></div>
        </div>
        <div class="col-md-2 col-sm-2 mb-3 d-flex justify-content-center">
            <div class="card" style="background-image: url({{ asset('assets/fgen.png') }});"></div>
        </div>
        <div class="col-md-2 col-sm-2 mb-3 d-flex justify-content-center">
            <div class="card" style="background-image: url({{ asset('assets/fgen.png') }});"></div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-2 col-sm-2 mb-3 d-flex justify-content-center">            <div class="card" style="background-image: url({{ asset('assets/fgen.png') }});"></div>
        </div>
        <div class="col-md-2 col-sm-2 mb-3 d-flex justify-content-center">
            <div class="card" style="background-image: url({{ asset('assets/fgen.png') }});"></div>
        </div>
        <div class="col-md-2 col-sm-2 mb-3 d-flex justify-content-center">
            <div class="card" style="background-image: url({{ asset('assets/fgen.png') }});"></div>
        </div>
        <div class="col-md-2 col-sm-2 mb-3 d-flex justify-content-center">
            <div class="card" style="background-image: url({{ asset('assets/fgen.png') }});"></div>
        </div>
        <div class="col-md-2 col-sm-2 mb-3 d-flex justify-content-center">
            <div class="card" style="background-image: url({{ asset('assets/fgen.png') }});"></div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-2 col-sm-2 mb-3  d-flex justify-content-center">            
            <div class="card" style="background-image: url({{ asset('assets/fgen.png') }});"></div>
        </div>
        <div class="col-md-2 col-sm-2 mb-3  d-flex justify-content-center">
            <div class="card" style="background-image: url({{ asset('assets/fgen.png') }});"></div>
        </div>
        <div class="col-md-2 col-sm-2 mb-3  d-flex justify-content-center">
            <div class="card" style="background-image: url({{ asset('assets/fgen.png') }});"></div>
        </div>
        <div class="col-md-2 col-sm-2 mb-3  d-flex justify-content-center">
            <div class="card" style="background-image: url({{ asset('assets/fgen.png') }});"></div>
        </div>
        <div class="col-md-2 col-sm-2 mb-3  d-flex justify-content-center"></div>
       
    </div>
   
</div>

<div class = "container d-md-none">
    <div class="row justify-content-center">
        <div class="cardView col-4 col-sm-4 col-md-2 mb-3 d-flex justify-content-center">
            <div class="card" style="background-image: url({{ asset('assets/fgen.png') }});"></div>
        </div>
        <div class="cardView col-4 col-sm-4 col-md-2 mb-3 d-flex justify-content-center">
            <div class="card" style="background-image: url({{ asset('assets/fgen.png') }});"></div>
        </div>
        <div class="cardView col-4 col-sm-4 col-md-2 mb-3 d-flex justify-content-center">
            <div class="card" style="background-image: url({{ asset('assets/fgen.png') }});"></div>
        </div>
        <div class="cardView col-4 col-sm-4 col-md-2 mb-3 d-flex justify-content-center">
            <div class="card"  style="background-image: url({{ asset('assets/fgen.png') }});"></div>
        </div>
        <div class="cardView col-4 col-sm-4 col-md-2 mb-3 d-flex justify-content-center">
            <div class="card" style="background-image: url({{ asset('assets/fgen.png') }});"></div>
        </div>
        <div class="cardView col-4 col-sm-4 col-md-2 mb-3 d-flex justify-content-center">           
            <div class="card" style="background-image: url({{ asset('assets/fgen.png') }});"></div>
        </div>
        <div class="cardView col-4 col-sm-4 col-md-2 mb-3 d-flex justify-content-center">
            <div class="card" style="background-image: url({{ asset('assets/fgen.png') }});"></div>
        </div>
        <div class="cardView col-4 col-sm-4 col-md-2 mb-3 d-flex justify-content-center">
            <div class="card" style="background-image: url({{ asset('assets/fgen.png') }});"></div>
        </div>
        <div class="cardView col-4 col-sm-4 col-md-2 mb-3 d-flex justify-content-center">
            <div class="card" style="background-image: url({{ asset('assets/fgen.png') }});"></div>
        </div>
        <div class="cardView col-4 col-sm-4 col-md-2 mb-3 d-flex justify-content-center">
            <div class="card" style="background-image: url({{ asset('assets/fgen.png') }});"></div>
        </div>
        <div class="cardView col-4 col-sm-4 col-md-2 mb-3 d-flex justify-content-center">            
            <div class="card" style="background-image: url({{ asset('assets/fgen.png') }});"></div>
        </div>
        <div class="cardView col-4 col-sm-4 col-md-2 mb-3 d-flex justify-content-center">
            <div class="card" style="background-image: url({{ asset('assets/fgen.png') }});"></div>
        </div>
        <div class="cardView col-4 col-sm-4 col-md-2 mb-3 d-flex justify-content-center">
            <div class="card" style="background-image: url({{ asset('assets/fgen.png') }});"></div>
        </div>
        <div class="cardView col-4 col-sm-4 col-md-2 mb-3 d-flex justify-content-center">
            <div class="card" style="background-image: url({{ asset('assets/fgen.png') }});"></div>
        </div>
        <div class="cardView col-4 col-sm-4 col-md-2 mb-3 d-flex justify-content-center"></div>
       
    </div>
   
</div>

@endsection