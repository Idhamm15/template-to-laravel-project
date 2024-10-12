<?php

use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/test', function () {
//     return view('layout.app');
// });

// Route::get('/', function () {
//     return view('pages.Home');
// });

// Route::get('/about', function () {
//     return view('pages.About');
// });


// Route::get('/service', function () {
//     return view('pages.About');
// });

Route::get('/', [LandingPageController::class, 'index']);
Route::get('/about', [LandingPageController::class, 'about']);
Route::get('/service', [LandingPageController::class, 'service']);
Route::get('/feature', [LandingPageController::class, 'feature']);
Route::get('/blog', [LandingPageController::class, 'blog']);
Route::get('/contact', [LandingPageController::class, 'contact']);


