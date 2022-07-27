<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;

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

// Route::get('/', function () {
//     return view('home.fcf_home');
// });

// Route::get('/test', function () {
//     return view('home.test');
// });
Route::get('/', [HomepageController::class, 'index']);
Route::get('/about', [HomepageController::class, 'about']);
Route::get('/project', [HomepageController::class, 'project']);
Route::get('/esg', [HomepageController::class, 'esg']);
Route::get('/investors', [HomepageController::class, 'investors']);
Route::get('/news', [HomepageController::class, 'news']);
Route::get('/contact', [HomepageController::class, 'contact']);