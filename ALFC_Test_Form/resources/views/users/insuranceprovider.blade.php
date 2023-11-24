@extends('layouts.app')

@section('content')
<style>
    .card {
        transition: transform 0.3s ease-in-out;
    }

    .card:hover {
        transform: scale(1.1);
    }
    .cardView .card {
            border-radius: 10px;
            background: #CC2E2E;
            flex-shrink: 0;
            background-position: center;
            background-size: 80px 60px;
            background-repeat: no-repeat;
            margin-bottom: 20px;
            width: 150px;
            height: 140px;
        }

        /* Individual card styles */

</style>

<h2 style="text-align: center; color: #332727; font-family: Montserrat; font-size: 40px; font-weight: 700; margin-top: 45px; margin-bottom: 50px;">
    PARTNERED INSURANCE COMPANIES
</h2>
<div class = "container d-md-block d-none">
    <div class="row justify-content-center mt-4">
        <div class="col-md-3 mb-4 d-flex justify-content-center" >
            <div class="card" style="border-radius: 10px; background: #CC2E2E; width: 230px; height: 220px; flex-shrink: 0; background-image: url({{ asset('assets/fgen.png') }});  background-position: center; background-size: cover; background-repeat: no-repeat; background-size: auto;  "></div>
        </div>
        <div class="col-md-3 mb-4 d-flex justify-content-center" >
            <div class="card" style="border-radius: 10px; background: #CC2E2E; width: 230px; height: 220px; flex-shrink: 0; background-image: url({{ asset('assets/apa.png') }});  background-position: center; background-size: cover; background-repeat: no-repeat; background-size: auto; "></div>
        </div>
        <div class="col-md-3 mb-4 d-flex justify-content-center" >
            <div class="card" style="border-radius: 10px; background: #CC2E2E; width: 230px; height: 220px; flex-shrink: 0; background-image: url({{ asset('assets/kemp.png') }});  background-position: center; background-size: cover; background-repeat: no-repeat; background-size: auto; "></div>
        </div>
        <div class="col-md-3 mb-4 d-flex justify-content-center">
            <div class="card" style="border-radius: 10px; background: #CC2E2E; width: 230px; height: 220px; flex-shrink: 0; background-image: url({{ asset('assets/wpa.png') }});  background-position: center; background-size: cover; background-repeat: no-repeat; background-size: auto; "></div>
        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-md-3 mb-4 d-flex justify-content-center" >
            <div class="card" style="border-radius: 10px; background: #CC2E2E; width: 230px; height: 220px; flex-shrink: 0; background-image: url({{ asset('assets/mua.png') }});  background-position: center; background-size: cover; background-repeat: no-repeat; background-size: auto; "></div>
        </div>
        <div class="col-md-3 mb-4 d-flex justify-content-center" >
            <div class="card" style="border-radius: 10px; background: #CC2E2E; width: 230px; height: 220px; flex-shrink: 0; background-image: url({{ asset('assets/obtis.png') }});  background-position: center; background-size: cover; background-repeat: no-repeat; background-size: auto; "></div>
        </div>
        <div class="col-md-3 mb-4 d-flex justify-content-center" >
            <div class="card" style="border-radius: 10px; background: #CC2E2E; width: 230px; height: 220px; flex-shrink: 0; background-image: url({{ asset('assets/dom.png') }});  background-position: center; background-size: cover; background-repeat: no-repeat; background-size: auto; "></div>
        </div>
        <div class="col-md-3 mb-4 d-flex justify-content-center">
            <div class="card" style="border-radius: 10px; background: #CC2E2E; width: 230px; height: 220px; flex-shrink: 0; background-image: url({{ asset('assets/aig.png') }});  background-position: center; background-size: cover; background-repeat: no-repeat; background-size: auto; "></div>
        </div>
    </div>
</div>

<div class="container d-md-none">
    <div class="row justify-content-center ">
        <div class="cardView col-6 col-sm-4 col-md-2 mb-3 d-flex justify-content-center">
            <div class="card"style="background-image: url({{ asset('assets/fgen.png') }});"></div>
        </div>
        <div class="cardView col-6 col-sm-4 col-md-2 mb-3 d-flex justify-content-center">
            <div class="card" style="background-image: url({{ asset('assets/apa.png') }});"></div>
        </div>
        <div class="cardView col-6 col-sm-4 col-md-2 mb-3 d-flex justify-content-center">
            <div class="card" style="background-image: url({{ asset('assets/kemp.png') }});"></div>
        </div>
        <div class="cardView col-6 col-sm-4 col-md-2 mb-3 d-flex justify-content-center">
            <div class="card" style="background-image: url({{ asset('assets/wpa.png') }});"></div>
        </div>
        <div class="cardView col-6 col-sm-4 col-md-2 mb-3 d-flex justify-content-center">
            <div class="card" style="background-image: url({{ asset('assets/mua.png') }});"></div>
        </div>
        <div class="cardView col-6 col-sm-4 col-md-2 mb-3 d-flex justify-content-center">
            <div class="card" style="background-image: url({{ asset('assets/obtis.png') }});"></div>
        </div>
        <div class="cardView col-6 col-sm-4 col-md-2 mb-3 d-flex justify-content-center">
            <div class="card" style="background-image: url({{ asset('assets/dom.png') }});"></div>
        </div>
        <div class="cardView col-6 col-sm-4 col-md-2 mb-3 d-flex justify-content-center">
            <div class="card" style="background-image: url({{ asset('assets/aig.png') }});"></div>
        </div>
    </div>
</div>
@endsection