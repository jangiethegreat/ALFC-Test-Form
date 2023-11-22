<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\App;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\File;

class UserController extends Controller

{

    
    public function agentForm()
    {
        return view("users.agentForm");
    }

    //pdf logic start
    public function agentPdf()
    {
        $imagePath = public_path('assets/3.png');
        $imageData = \File::get($imagePath);
        $base64Image = 'data:image/png;base64,' . base64_encode($imageData);

        // Load the view with the image data
        $pdf = PDF::loadView('users.agentpdf', compact('base64Image'));
        
        // Set paper to A4, portrait orientation
        $pdf->setPaper('A4', 'portrait');

        // Return the PDF as stream
        return $pdf->stream();
    }
    //pdf logic end

    public function generatePdf()
    {
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML('<h1>Hello World</h1>');
        return $pdf->stream();
    }

    public function marketingArm()
    {
        return view('users.marketingArm');
    }
    public function homepage()
    {
        return view('users.homepage');
    }
    public function landingPage()
    {
        return view('users.landingPage');
    }
    public function login()
    {
        return view('users.login');
    }
    public function register()
    {
        return view('users.register');
    }
    public function index()
    {
        $users = User::all(); // Fetch all users from the database
        return view('users.index', ['users' => $users]); // Pass the users to the view
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);
    
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
    
        $user->save();
    
        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    
}
