@extends('layouts.app')

@section('content')

<style>
    .card-container {
      display: flex;
      justify-content: space-between;
      margin: 60px; /* Adjust margin between cards */
    }
    .desc-text {
    color: #B80000;
    font-size: 45px;
    font-family: Montserrat, sans-serif;
    font-weight: 600;
    word-wrap: break-word;
    text-align: center; /* Add this line if you want to center the text */
}
.column-container {
        display: flex;
        flex-direction: column;
        align-items: center;
       
    }

    .card {
      width: 400px;
      height: 575px;
      flex-shrink: 0;
      border-radius: 30px;
      background: #CC2E2E;
      display: flex;
      align-items: center;
      justify-content: flex-start;
      margin:60px;
    }
    .card:hover {
        transform: scale(1.05); /* Increase the scale value for a larger growth */
        box-shadow: 0 0 20px rgba(255, 255, 255, 0.8); /* Adjust the shadow color and size as needed */
    }
    .alfc-text {
    color: #2C2C2C;
    font-size: 100px;
    font-family: 'Times New Roman', Times, serif;
    font-weight: 700;
    word-wrap: break-word;
    text-align: center; /* Add this line to center the text */
}


    .agent-text {
      color: #FFF;
      text-align: center;
      font-family: Montserrat;
      font-size: 42px;
      font-style: normal;
      font-weight: 700;
      line-height: normal;
      width: 100%;
      height: 49px;
      margin-top: 41px; /* Adjust this value as needed */
    }
    .providers-text {
      color: #FFF;
      text-align: center;
      font-family: Montserrat;
      font-size: 32px;
      font-style: normal;
      font-weight: 700;
      line-height: normal;
      width: 100%;
      height: 49px;
      margin-top: 15px;
    }
    .agent-image {
      margin-top: -90px;
      width: 100%;
      height: 100%;
      flex-shrink: 0;
      border-radius: 30px;
      background: url({{ asset('assets/marketing-arms.png') }}) 50% / cover no-repeat;
    }

    .providers-image {
        margin-top:-62px;
      width: 100%;
      height: 100%;
      flex-shrink: 0;
      margin-bottom: 40px;
      border-radius: 30px;
      background: url({{ asset('assets/providers.png') }})  50% / cover no-repeat;
    }
    .client-image {
        margin-top:-90px;
      width: 100%;
      height: 100%;
      flex-shrink: 0;
      border-radius: 30px;
      background: url({{ asset('assets/clients.png') }})  50% / cover no-repeat;
    }
    @media screen and (max-width: 736px) {
        .column-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin:20px;
        overflow-x: hidden; /* Hide horizontal scrollbar */
        overflow-y: auto; /* Enable vertical scrollbar */
       
    }
    .card-container {
        flex-direction: column;
        align-items: center;
        
    }

    .card {
        border-radius: 30px; /* Add or adjust the border-radius as needed */
        margin: 50px; /* Add margin between cards */
        width: 350px;
    }
    .card:hover {
        transform: scale(1.00); /* Increase the scale value for a larger growth */
        box-shadow: 0 0 20px rgba(255, 255, 255, 0.8); /* Adjust the shadow color and size as needed */
    }
    a {
        text-decoration: none;
        color: inherit; /* Use the default text color */
    }
    a:hover {
        cursor: pointer;
    }
        
    }
</style>
<div class="alfc-text">ALFC</div>
<div class="desc-text">Insurance Agency Corporation</div>
<div class="column-container">
<div class="card-container">
 <a href="{{ route('users.marketingArm') }}" style="text-decoration: none;">
      <div class="card">
          <div class="agent-text" style="font-size:35px">MARKETING ARMS</div>
          <div class="agent-image"></div>
      </div>
  </a>
  <a href="{{ route('users.insuranceprovider') }}" style="text-decoration: none;">
    <div class="card">
    <div class="providers-text"  >INSURANCE PROVIDERS</div>
        <div class="providers-image"></div>
        
    </div>
    </a>
    <div class="card">
        <div class="agent-text">CLIENTS</div>
        <div class="client-image"></div>
    </div>
</div>
</div>

@endsection
