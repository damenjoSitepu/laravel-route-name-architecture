<?php

use App\Transcendent\Facades\RouteName;
use Illuminate\Support\Facades\Route;

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

// Entry Point 
Route::get('/', \App\Http\Controllers\Application\Home\ViewController::class);

Route::get('/empty', function() {
    $routeName = RouteName::getRouteName();
    return $routeName;
});