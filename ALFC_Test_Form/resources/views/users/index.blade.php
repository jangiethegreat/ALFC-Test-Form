@extends('layouts.app')

@section('content')

    <div class="container_field_form_design">
        <h2>Text Field Design </h2>
        <!-- with border when click turns to black -->
        <input type="text" style="background-color: #f2f2f2; border: 2px solid #ddd; 
        border-radius: 5px; padding: 10px; width: 200px; font-size: 16px; color: #333;" 
        placeholder="Enter your text here">
        <!-- with border radius amplify when click turns to black -->
        <input type="text" style="background-color: #f2f2f2; border: 2px solid #ddd; 
        border-radius: 20px; padding: 10px; width: 200px; font-size: 16px; color: #333;" 
        placeholder="Enter your text here">
        <!-- text field with shadow-->
        <input type="text" 
        style="box-shadow: 2px 2px 5px #888888; 
                border: none; 
                border-radius: 5px; 
                padding: 10px; 
                width: 200px; 
                font-size: 16px; 
                color: #555; 
                background-color: #f5f5f5;
                outline: none;" 
        placeholder="Enter your text here">
        <input 
            type="text" 
            style="box-shadow: 2px 2px 5px #888888; 
                border: none; 
                border-radius: 5px; 
                padding: 10px; 
                width: 200px; 
                font-size: 16px; 
                color: #555; 
                background-color: #f5f5f5;
                outline: none;" 
            placeholder="Enter your text here"
        >
        <input type="text"  style="box-shadow: 2px 2px 5px #888888; border: 2px solid #ff0000; border-radius: 5px; padding: 10px; width: 200px; font-size: 16px; color: #555; background-color: #f5f5f5; outline: none;" placeholder="Enter your text here">
        <input type="text" style="box-shadow: 2px 2px 5px #888888; border: 2px solid #00ff00; border-radius: 5px; padding: 10px; width: 200px; font-size: 16px; color: #555; background-color: #f5f5f5; outline: none;" placeholder="Enter your text here">
        <input type="text" style="box-shadow: 2px 2px 5px #888888; border: 2px solid #0000ff; border-radius: 5px; padding: 10px; width: 200px; font-size: 16px; color: #555; background-color: #f5f5f5; outline: none;" placeholder="Enter your text here">
        <input type="text" style="box-shadow: 2px 2px 5px #888888; border: 2px dotted #000000; border-radius: 5px; padding: 10px; width: 200px; font-size: 16px; color: #555; background-color: #f5f5f5; outline: none;" placeholder="Enter your text here">
        <input type="text" style="box-shadow: 2px 2px 5px #888888; border: 5px solid #000000; border-radius: 5px; padding: 10px; width: 200px; font-size: 16px; color: #555; background-color: #f5f5f5; outline: none;" placeholder="Enter your text here">
        <input type="text" style="box-shadow: 2px 2px 5px #888888; border: 2px solid #ffA500; border-radius: 5px; padding: 10px; width: 200px; font-size: 16px; color: #555; background-color: #f5f5f5; outline: none;" placeholder="Enter your text here">
        <input type="text" style="box-shadow: 2px 2px 5px #888888; border: 2px solid #800080; border-radius: 5px; padding: 10px; width: 200px; font-size: 16px; color: #555; background-color: #f5f5f5; outline: none;" placeholder="Enter your text here">
        <input type="text" style="box-shadow: 2px 2px 5px #888888; border: 2px solid #000000; border-radius: 20px; padding: 10px; width: 200px; font-size: 16px; color: #fff; background-color: #555; outline: none;" placeholder="Enter your text here">
        <input type="text" style="box-shadow: 5px 5px 5px #888888; border: 2px solid #000000; border-radius: 5px; padding: 10px; width: 200px; font-size: 16px; color: #555; background-color: #f5f5f5; outline: none;" placeholder="Enter your text here">
        <input type="text" style="box-shadow: 2px 2px 5px #888888; border: 2px solid #D3D3D3; border-radius: 5px; padding: 10px; width: 200px; font-size: 16px; color: #fff; background-color: #333; outline: none;" placeholder="Enter your text here">
        <!-- text field with icon -->
        <div style="position: relative; width: 200px;">
        <i style="position: absolute; top: 50%; transform: translateY(-50%); left: 5px; color: #888888;" class="fas fa-search"></i>
        <input type="text" style="box-shadow: 2px 2px 5px #888888; border: none; border-radius: 5px; padding: 10px 10px 10px 30px; width: 100%; font-size: 16px; color: #555; background-color: #f5f5f5; outline: none;" placeholder="Enter your text here">
        </div>
    </div>

    <div class="container_button" style="padding:10px;">
        <h2>Button Design</h2>
    </div>
@endsection
