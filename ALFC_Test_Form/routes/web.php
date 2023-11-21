<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('users', UserController::class);
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/landing', [UserController::class, 'landingPage'])->name('users.landingPage');
Route::get('/login', [UserController::class, 'login'])->name('users.login');
Route::get('/register', [UserController::class, 'register'])->name('users.register');
Route::get('/homepage', [UserController::class, 'marketingArm'])->name('users.marketingArm');
Route::get('/marketing-arm', [UserController::class, 'homepage'])->name('users.homepage');

//PDF For AgentForm
Route::get('/generate-pdf', [UserController::class, 'generatePdf'])->name('generate-pdf');
Route::get('/agent-pdf', [UserController::class, 'agentPdf'])->name('users.agentpdf');

//form for Agent 
Route::get('/agent-form', [UserController::class, 'agentForm'])->name('users.agentForm');