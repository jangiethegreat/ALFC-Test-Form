@extends('layouts.app')


@section('content')

<div class="container" >
        <div class="row">
            <div class="col-md-12">
                <img src="{{ asset('assets/3.png') }}"style="display: block; margin: auto; margin-top:40px; width: 200px; height: 200px;" />

                <p style="text-align: center; font-size: 30px; color: #940400; font-weight: 600; margin-top:25px;">ALFC Insurance Agency started its full operations in January 2004, providing assistance to retail and corporate clients in selecting, designing, implementing, and administering the best insurance products and services to meet their needs.</p>

                <button style="background-color: #ab0500; color: white; padding: 10px 20px; width: 200px; height: 50px; border: none; border-radius: 20px; display: block; margin: 20px auto; font-size: 16px; font-weight: 700; margin-top: 35px;">
                    LOGIN
                </button>

                <p style="text-align: center; ">Don’t have an account yet? <span style="color: #ab0500;">Register here</span></p>

            </div>
        </div>
    </div>


@endsection
