<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('listings');
// });
// All Listings
Route::get('/', [ListController::class, 'index']);


// Create Listing
Route::get('/listings/create', [ListController:: class, 'create']);

// Store Listing
Route::post('/listings', [ListController:: class, 'store']);


// Single Listing
Route::get('/listings/{listing}', [ListController:: class, 'show']);
