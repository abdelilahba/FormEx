<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactFormController;
use Illuminate\Http\Request; // Add this line to import the Request class

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
Route::get('/terms', function () {
    return view('termsconf');
});
Route::get('/dash', function () {
    return view('dash.dash');
});



Route::post('/submit-form', [ContactFormController::class, 'store'])->name('submit.form');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::middleware(['auth:sanctum', 'verified', 'isAdmin'])->group(function () {
    Route::get('/listcus', function () {
        return view('ListeCustumor.listcus');
    });
});
Route::post('/activate-customer', [ContactFormController::class, 'activate'])->name('customer.activate');


Route::post('/language-change', function (Request $request) {
    $request->session()->put('locale', $request->language);
  
  
    // Determine direction based on the selected language
    $direction = in_array($request->language, ['ar']) ? 'rtl' : 'ltr'; // Add other RTL languages to the array if needed
    $request->session()->put('direction', $direction);

    return back();
})->name('language.change');
