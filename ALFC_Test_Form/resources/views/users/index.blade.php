@extends('layouts.app')


@section('content')
<style>
    /* button 2 start */
     .button2 {
            -moz-appearance: none;
            -webkit-appearance: none;
            appearance: none;
            border: none;
            background: none;
            color: #0f1923;
            cursor: pointer;
            position: relative;
            padding: 8px;
            margin-bottom: 20px;
            text-transform: uppercase;
            font-weight: bold;
            font-size: 14px;
            transition: all .15s ease;
        }

        .button2::before,
        .button2::after {
            content: '';
            display: block;
            position: absolute;
            right: 0;
            left: 0;
            height: calc(50% - 5px);
            border: 1px solid #7D8082;
            transition: all .15s ease;
        }

        .button2::before {
            top: 0;
            border-bottom-width: 0;
        }

        .button2::after {
            bottom: 0;
            border-top-width: 0;
        }

        .button2:active,
        .button2:focus {
            outline: none;
        }

        .button2:active::before,
        .button2:active::after {
            right: 3px;
            left: 3px;
        }

        .button2:active::before {
            top: 3px;
        }

        .button2:active::after {
            bottom: 3px;
        }

        .button2_lg {
            position: relative;
            display: block;
            padding: 10px 20px;
            color: #fff;
            background-color: #0f1923;
            overflow: hidden;
            box-shadow: inset 0px 0px 0px 1px transparent;
        }

        .button2_lg::before {
            content: '';
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            width: 2px;
            height: 2px;
            background-color: #0f1923;
        }

        .button2_lg::after {
            content: '';
            display: block;
            position: absolute;
            right: 0;
            bottom: 0;
            width: 4px;
            height: 4px;
            background-color: #0f1923;
            transition: all .2s ease;
        }

        .button2_sl {
            display: block;
            position: absolute;
            top: 0;
            bottom: -1px;
            left: -8px;
            width: 0;
            background-color: #ff4655;
            transform: skew(-15deg);
            transition: all .2s ease;
        }

        .button2_text {
            position: relative;
        }

        .button2:hover {
            color: #0f1923;
        }

        .button2:hover .button2_sl {
            width: calc(100% + 15px);
        }

        .button2:hover .button2_lg::after {
            background-color: #fff;
        }
        /* button 2 end */

        /* button 3 start */
        .button3 {
            position: relative;
            overflow: hidden;
            height: 3rem;
            padding: 0 2rem;
            border-radius: 1.5rem;
            background: #3d3a4e;
            background-size: 400%;
            color: #fff;
            border: none;
        }

        .button3:hover::before {
            transform: scaleX(1);
        }

        .button3-content {
            position: relative;
            z-index: 1;
        }

        .button3::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            transform: scaleX(0);
            transform-origin: 0 50%;
            width: 100%;
            height: inherit;
            border-radius: inherit;
            background: linear-gradient(82.3deg, rgba(150, 93, 233, 1) 10.8%, rgba(99, 88, 238, 1) 94.3%);
            transition: all 0.475s;
        }
        /* button 3 end */

        /* button 4 starts */
        .button4 {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: rgb(20, 20, 20);
            border: none;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.164);
            cursor: pointer;
            transition-duration: .3s;
            overflow: hidden;
            position: relative;
        }

        .button4 svg {
            width: 12px;
            transition-duration: .3s;
        }

        .button4 path {
            fill: white;
        }

        .button4:hover {
            width: 140px;
            border-radius: 50px;
            transition-duration: .3s;
            background-color: rgb(255, 69, 69);
            align-items: center;
        }

        .button4:hover svg {
            width: 50px;
            transition-duration: .3s;
            transform: translateY(60%);
        }

        .button4::before {
            position: absolute;
            top: -20px;
            content: "Delete";
            color: white;
            transition-duration: .3s;
            font-size: 2px;
        }

        .button4:hover::before {
            font-size: 13px;
            opacity: 1;
            transform: translateY(30px);
            transition-duration: .3s;
        }
        /* button 4 end */

        /* login 1 starts */
        .login1 {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #e8e8e8;
            box-shadow: 2px 2px 10px #ccc;
        }

        .login1 .card-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .login1 .card-header .log {
            margin: 0;
            font-size: 24px;
            color: black;
        }

        .login1 .form-group {
            margin-bottom: 15px;
        }

        .login1 label {
            font-size: 18px;
            margin-bottom: 5px;
        }

        .login1 input[type="text"],
        .login1 input[type="password"] {
            width: 100%;
            padding: 12px 20px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            transition: 0.5s;
        }

        .login1 input[type="submit"] {
            width: 100%;
            background-color: #333;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .login1 input[type="submit"]:hover {
            background-color: #ccc;
            color: black;
        }
        /* login 1 ends */

        /* login2 starts */
        .login2 {
        background-color: #fff;
        display: block;
        padding: 1rem;
        max-width: 350px;
        border-radius: 0.5rem;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }

    .login2-title {
        font-size: 1.25rem;
        line-height: 1.75rem;
        font-weight: 600;
        text-align: center;
        color: #000;
    }

    .login2-input-container {
        position: relative;
    }

    .login2 input,
    .login2 button {
        outline: none;
        border: 1px solid #e5e7eb;
        margin: 8px 0;
    }

    .login2 input {
        background-color: #fff;
        padding: 1rem;
        padding-right: 3rem;
        font-size: 0.875rem;
        line-height: 1.25rem;
        width: 300px;
        border-radius: 0.5rem;
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
    }

    .login2-submit {
        display: block;
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
        padding-left: 1.25rem;
        padding-right: 1.25rem;
        background-color: #4F46E5;
        color: #ffffff;
        font-size: 0.875rem;
        line-height: 1.25rem;
        font-weight: 500;
        width: 100%;
        border-radius: 0.5rem;
        text-transform: uppercase;
    }

    .login2-signup-link {
        color: #6B7280;
        font-size: 0.875rem;
        line-height: 1.25rem;
        text-align: center;
    }

    .login2-signup-link a {
        text-decoration: underline;
    }
    /* login 2 ends */


    /* table 1 starts */
    table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 15px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }
        
        /* table1 ends */
    </style>
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

        <button style="--button-styles: 'background-color: #4CAF50; padding: 10px 20px; border: none; border-radius: 5px; font-size: 16px; color: white; box-shadow: 2px 2px 4px #888888;'"
    class="myButton">Click me</button>
    </div>
    <button class="button2">
        <span class="button2_lg">
            <span class="button2_sl"></span>
            <span class="button2_text">Download Now</span>
        </span>
    </button>
    <button class="button3">
        <span class="button3-content">Download </span>
    </button>

    <button class="button4">
        <svg viewBox="0 0 448 512" class="svgIcon"><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"></path></svg>
    </button>
    </div>
    <div class="login-form" style="margin:10px;">
        <div class="login1">
            <div class="card-header">
                <div class="log">Login</div>
        </div>
        <form>
            <div class="form-group">
            <label for="username">Username:</label>
            <input required="" name="username" id="username" type="text">
            </div>
            <div class="form-group">
            <label for="password">Password:</label>
            <input required="" name="password" id="password" type="password">
            </div>
            <div class="form-group">
            <input value="Login" type="submit">
            </div>
        </form>
        </div>

        <form class="login2">
            <p class="login2-title">Sign in to your account</p>
            <div class="login2-input-container">
                <input type="email" placeholder="Enter email">
                <span></span>
            </div>
            <div class="login2-input-container">
                <input type="password" placeholder="Enter password">
            </div>
            <button type="submit" class="login2-submit">
                Sign in
            </button>
            <p class="login2-signup-link">
                No account? <a href="">Sign up</a>
            </p>
        </form>

    </div>

    <div class="table-container" style="margin:10px;">

    <table style="text-align: center;">
        <tr>
            <th style="text-align: center;">Support ID</th>
            <th style="text-align: center;">Issue / Priority</th>
            <th style="text-align: center;">Status</th>
            <th style="text-align: center;">Assigned To</th>
            <th style="text-align: center;">Action</th> <!-- New column for Actions -->
        </tr>
        <tr>
            <td style="text-align: center;">1</td>
            <td style="text-align: center;">Connection Problem <br><span style="color: red;">Priority: High</span></td>
            <td style="text-align: center;">Open</td>
            <td style="text-align: center;">John Doe</td>
            <td style="text-align: center;">
                <a href="#" style="color: green; text-decoration: none;">Done</a>
                <a href="#" style="color: red; text-decoration: none; margin-left: 5px;">Delete</a>
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">2</td>
            <td style="text-align: center;">Software Installation <br><span style="color: orange;">Priority: Medium</span></td>
            <td style="text-align: center;">Closed</td>
            <td style="text-align: center;">Jane Smith</td>
            <td style="text-align: center;">
                <a href="#" style="color: green; text-decoration: none;">Done</a>
                <a href="#" style="color: red; text-decoration: none; margin-left: 5px;">Delete</a>
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">3</td>
            <td style="text-align: center;">Hardware Failure <br><span style="color: red;">Priority: High</span></td>
            <td style="text-align: center;">In Progress</td>
            <td style="text-align: center;">Michael Johnson</td>
            <td style="text-align: center;">
                <a href="#" style="color: green; text-decoration: none;">Done</a>
                <a href="#" style="color: red; text-decoration: none; margin-left: 5px;">Delete</a>
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">4</td>
            <td style="text-align: center;">Network Configuration <br><span style="color: green;">Priority: Low</span></td>
            <td style="text-align: center;">Open</td>
            <td style="text-align: center;">Emily Williams</td>
            <td style="text-align: center;">
                <a href="#" style="color: green; text-decoration: none;">Done</a>
                <a href="#" style="color: red; text-decoration: none; margin-left: 5px;">Delete</a>
            </td>
        </tr>
        <!-- Add more rows as needed -->
    </table>



    </div>












    </div>
@endsection
