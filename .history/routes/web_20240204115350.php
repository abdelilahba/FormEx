<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactFormController;
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
    return view('test');
});
Route::get('/dash', function () {
    return view('ListeCustumor.listcus');
});
Route::post('/submit-form', [ContactFormController::class, 'store'])->name('submit.form');
