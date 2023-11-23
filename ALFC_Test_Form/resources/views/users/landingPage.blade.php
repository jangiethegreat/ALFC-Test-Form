@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <img src="{{ asset('assets/3.png') }}" class="img-fluid mx-auto d-block mt-5 mb-4" style="max-width: 200px; height: auto;" />

            <p class="text-center px-3 mb-5" style="font-size: 1.5rem; color: #940400;">
                ALFC Insurance Agency started its full operations in January 2004, providing assistance to retail and corporate clients in selecting, designing, implementing, and administering the best insurance products and services to meet their needs.
            </p>

            <div class="text-center mb-5">
            <button style="background-color: #ab0500; color: white; padding: 10px 20px; width: 200px; height: 60px; border: none; border-radius: 30px; font-size: 16px; font-weight: 700; margin-right: 20px;">
                        LOGIN
                    </button>
                    <button style="background-color: #f7f7f700; color: #ab0500; padding: 10px 20px; width: 200px; height: 50px; border: none; font-size: 16px; font-weight: bold; outline: none;">
                        REGISTER
                    </button>
            </div>
        </div>
    </div>
</div>

@endsection
