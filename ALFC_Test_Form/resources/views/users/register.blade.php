@extends('layouts.app')

@section('content')

<style>
    /* Default styles */
    #login-text {
        flex-shrink: 0;
        color: #D61812;
        font-family: Montserrat;
        font-size: 25px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
        margin-top: 30px;
        margin-left: 30px;
    }

    #login-desc {
        color: #868686;
        font-family: Montserrat;
        font-size: 13px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        width: 439px;
        height: 17px;
        flex-shrink: 0;
    }

    /* Media query for smaller screens */
    @media only screen and (max-width: 768px) {
        .col-md-4{
            overflow:hidden;


        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            max-width: 365px; /* You can adjust the max-width value as per your requirement */
        }

        .button {
            width: 100%;
            max-width: 365px; /* You can adjust the max-width value as per your requirement */
        }

        #login-text {
            max-width: 365px;
            font-size: 23px; /* Adjust the font size for smaller screens */
        }

        #login-desc {
            font-size: 14px; /* Adjust the font size for smaller screens */
        }
    }
</style>

<div class="container-fluid">
    <div class="row">
        
    <div class="col-md-8 d-none d-md-block" style="background: url('{{ asset('assets/login-img.png') }}'), lightgray -147.924px -694.535px / 135.391% 167.544% no-repeat; width: 100%; height: 100vh; flex-shrink: 0; background-size: 100% 100%; background-position: center;">
           
        </div>

     
        <div class="col-md-4" style="background-color: #FFF; height: 100vh; display: flex; flex-direction: column; justify-content: flex-start; align-items: center;">
            <img src="{{ asset('assets/ALFC Logo.png') }}" style="margin-top: 10px; " />
            
            <div>
                <p id="login-text">
                REGISTER AN ACCOUNT <br><span id="login-desc"> Please enter your details to create an account in the system</span>
                </p>
                    <p class="description_tag" style="height: 17px; flex-shrink: 0; color: #585858; font-family: Montserrat; font-size: 15px; font-style: normal; font-weight: 500; line-height: normal; margin-left: 30px; margin-top: 40px;">
                        Username
                    </p>

                        <div style="position: relative; display: inline-block; width: 400px; height: 64px; margin-left: 30px;">
                            <img src="{{ asset('assets/Person.png') }}" style="width: 51px; height: 51px; flex-shrink: 0; position: absolute; top: 50%; left: 5%; transform: translate(0, -50%);">
                            <input type="text" style="width: 100%; height: 100%; border-radius: 9px; background: #F0F0F0; outline: none; border: none; padding-left: 85px;">
                        </div>
                        <p class="description_tag" style="height: 17px; flex-shrink: 0; color: #585858; font-family: Montserrat; font-size: 15px; font-style: normal; font-weight: 500; line-height: normal; margin-left: 30px; margin-top: 15px;">
                        Position
                    </p>

                        <div style="position: relative; display: inline-block; width: 400px; height: 64px; margin-left: 30px;">
                            <img src="{{ asset('assets/Person.png') }}" style="width: 51px; height: 51px; flex-shrink: 0; position: absolute; top: 50%; left: 5%; transform: translate(0, -50%);">
                            <input type="text" style="width: 100%; height: 100%; border-radius: 9px; background: #F0F0F0; outline: none; border: none; padding-left: 85px;">
                        </div>


                            <p style="height: 17px; flex-shrink: 0; color: #585858; font-family: Montserrat; font-size: 15px; font-style: normal; font-weight: 500; line-height: normal; margin-left: 30px; margin-top: 10px;">
                                Password
                            </p>

                                <div style="position: relative; display: inline-block; width: 400px; height: 64px; margin-left: 30px;">
                                    <img src="{{ asset('assets/Padlock Outline.png') }}" style="width: 48px; height: 39px; flex-shrink: 0; position: absolute; top: 50%; left: 5%; transform: translate(0, -50%);">
                                    <input type="password" style="width: 100%; height: 100%; border-radius: 9px; background: #F0F0F0; outline: none; border: none; padding-left: 85px;">
                                </div>

                                <p style="height: 17px; flex-shrink: 0; color: #585858; font-family: Montserrat; font-size: 15px; font-style: normal; font-weight: 500; line-height: normal; margin-left: 30px; margin-top: 10px;">
                                Confirm Password
                            </p>

                                <div style="position: relative; display: inline-block; width: 400px; height: 64px; margin-left: 30px;">
                                    <img src="{{ asset('assets/Padlock Outline.png') }}" style="width: 48px; height: 39px; flex-shrink: 0; position: absolute; top: 50%; left: 5%; transform: translate(0, -50%);">
                                    <input type="password" style="width: 100%; height: 100%; border-radius: 9px; background: #F0F0F0; outline: none; border: none; padding-left: 85px;">
                                </div>
                                    <!-- PALITAN NG ROUTE TO -->
                                    <form method="GET" action="{{ route('users.landingPage') }}">
                                        @csrf
                                        <button class="button" type="submit" style="width: 400px; height: 64px; flex-shrink: 0; border-radius: 18px; background: #AB0500; color: #ffffff; font-family: Montserrat; font-size: 20px; font-style: normal; font-weight: 600; line-height: normal; margin-left: 30px; margin-top: 42px; border: none; outline: none;">
                                            LOGIN
                                        </button>
                                    </form>
                                </div>
                                
                    <p  style="width: 359px; height: 17px; flex-shrink: 0; color: #808080; font-family: Montserrat; font-size: 15px; font-style: normal; font-weight: 400; line-height: normal; text-align: center; display: flex; justify-content: center; margin-top: 12px;">
                        Don’t have an account yet? <a href="#" style="color: #D61812; font-weight: 600; text-decoration: none;">Register here.</a>
                    </p>

        </div>
    </div>
</div>

@endsection