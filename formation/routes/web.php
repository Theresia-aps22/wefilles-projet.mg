<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormationController;
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
Route::any('/Formation', [FormationController::class, 'formation'])->name('route_first');  
Route::any('/Formation/Type', [FormationController::class, 'type_formation'])->name('route_candidature');   


