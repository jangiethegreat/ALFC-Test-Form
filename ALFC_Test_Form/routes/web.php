<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CoverageController;
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
Route::get('/marketing-arm', [UserController::class, 'marketingArm'])->name('users.marketingArm');
Route::get('/homepage', [UserController::class, 'homepage'])->name('users.homepage');
Route::get('/insurance-provider', [UserController::class, 'insuranceProviders'])->name('users.insuranceprovider');
Route::get('/fgen-category', [UserController::class, 'fgenCategory'])->name('users.fgencategory');
Route::get('/computation-form', [UserController::class, 'computationForm'])->name('users.computationForm');
//PDF For AgentForm
Route::get('/generate-pdf', [UserController::class, 'generatePdf'])->name('generate-pdf');
Route::get('/agent-pdf', [UserController::class, 'agentPdf'])->name('users.agentpdf');
Route::get('/datatable-design', [UserController::class, 'dataTableDesign'])->name('users.datatabledesign');
Route::get('/fetchData', [UserController::class, 'fetchData'])->name('fetch.data');

//form for Agent 
Route::get('/agent-form', [UserController::class, 'agentForm'])->name('users.agentForm');
Route::get('/coverages/create', [CoverageController::class, 'create'])->name('coverages.create');
Route::post('/coverages', [CoverageController::class, 'store'])->name('coverages.store');
// web.php
Route::get('/sales-computation', [CoverageController::class, 'salesComputation'])->name('coverages.salescomputation');
