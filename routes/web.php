<?php

use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Rules\Role;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RequestController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

///////////////////////////////////
//ALL USER ROUTE
///////////////////////////////////
Route::get('/', [PagesController::class, 'index']);

// Submit new Maintenance request 
Route::get('/submit_request', [
    RequestController::class,
    'submit_request'
]);

// View Submitted Queries  
Route::get('/submitted_request', [RequestController::class, 'submitted_request']);




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


///////////////////////////////////
//ALL ADMIN ROUTE
///////////////////////////////////

// Redirect Admin to a diffrent page
Route::get('/redirect', [PagesController::class, 'redirect']);
