<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\ProfileCompletionController;
use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request; // Add this line to import the Request class
use App\Http\Controllers\SSHController;

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


Route::get('/complete-profile', [ProfileCompletionController::class, 'showCompleteProfileForm'])->name('profile.complete-form');

Route::post('/complete-profile', [ProfileCompletionController::class, 'completeProfile'])->name('profile.complete');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dash.dash');
    })->name('dashboard');
});
Route::middleware(['auth:sanctum', 'verified', 'isAdmin'])->group(function () {
    Route::get('/listcus', function () {
        return view('ListeCustumor.listcus');
       
      
    });
    Route::get('/listpayement', function () {
        return view('listPayement.listpayement');
       
    });
    Route::get('/listinvoice', function () {
        return view('listinvoices.listinvoice');
       
    });
    Route::get('/dash', function () {
        return view('dash.dash');
    });
    Route::get('/detailscutomer/{id}',[CustomerController::class, 'getCustomerId']);
    Route::delete('/customers/delete/{id}', [CustomerController::class, 'delete'])->name('customers.delete');
    Route::post('/customers/delete-selected', [CustomerController::class, 'deleteSelected']);


    Route::get('/customers/{id}', [CustomerController::class, 'getCustomer']);

    Route::post('/activate-customer', [ContactFormController::class, 'activate'])->name('customer.activate');
    Route::put('/customers/{customer}/update', [CustomerController::class, 'update'])->name('customer.update');

    Route::post('/submit-form', [ContactFormController::class, 'store'])->name('submit.form');


});
Route::get('/ssh-connect', [SSHController::class, 'connectAndUpdate']);


Route::post('/language-change', function (Request $request) {
    $request->session()->put('locale', $request->language);
  
  
    // Determine direction based on the selected language
    $direction = in_array($request->language, ['ar']) ? 'rtl' : 'ltr'; // Add other RTL languages to the array if needed
    $request->session()->put('direction', $direction);

    return back();
})->name('language.change');
