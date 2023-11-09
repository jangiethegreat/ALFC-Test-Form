@extends('layouts.app')


@section('content')

<div class="container" >
        <div class="row">
            <div class="col-md-12">
                <img src="{{ asset('assets/3.png') }}"style="display: block; margin: auto; margin-top:70px; width: 200px; height: 200px;" />

                <p style="text-align: center; font-size: 30px; color: #940400;  margin-top:60px;">ALFC Insurance Agency started its full operations in January 2004, providing assistance to retail and corporate clients in selecting, designing, implementing, and administering the best insurance products and services to meet their needs.</p>

                <div style="display: flex; justify-content: center; margin-top: 50px;">
                    <button style="background-color: #ab0500; color: white; padding: 10px 20px; width: 200px; height: 60px; border: none; border-radius: 30px; font-size: 16px; font-weight: 700; margin-right: 20px;">
                        LOGIN
                    </button>
                    <button style="background-color: #f7f7f700; color: #ab0500; padding: 10px 20px; width: 200px; height: 50px; border: none; font-size: 16px; font-weight: bold; outline: none;">
                        REGISTER
                    </button>
                </div>

                <!-- <p style="text-align: center; margin-bottom: 100px;">Don’t have an account yet? <span style="color: #ab0500;">Register here</span></p> -->
            </div>
        </div>
    </div>


@endsection
