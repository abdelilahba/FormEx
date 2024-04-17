<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\ProfileCompletionController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SSHController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

// Redirect to a default locale
Route::get('/', function () {
    return Redirect::to('/ar');
});

// Group for localized routes
Route::group(['prefix' => '{locale}', 'where' => ['locale' => '(ar|fr)'], 'middleware' => ['locale']], function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/complete-profile/{random_number}', [ProfileCompletionController::class, 'showCompleteProfileForm']);
    Route::post('/complete-profile', [ProfileCompletionController::class, 'completeProfile'])->name('profile.complete');
    
    Route::post('/submit-form', [ContactFormController::class, 'store'])->name('submit.form');
});

// Non-localized routes
Route::get('/terms', function () {
    return view('termsconf');
});

Route::post('/deactivate-customer', [ContactFormController::class, 'deactivate'])->name('customer.deactivate');

// Authenticated routes
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Admin routes
Route::middleware(['auth:sanctum', 'verified', 'isAdmin'])->group(function () {
    Route::get('/listcus', [CustomerController::class, 'listCustomers'])->name('list.customers');
    Route::get('/listpayement', [CustomerController::class, 'listPayments'])->name('list.payments');
    Route::get('/listinvoice', [CustomerController::class, 'listInvoices'])->name('list.invoices');
    Route::get('/detailscustomer/{id}', [CustomerController::class, 'getCustomerDetails'])->name('customer.details');
    Route::delete('/customers/delete/{id}', [CustomerController::class, 'deleteCustomer'])->name('customer.delete');
    Route::post('/customers/delete-selected', [CustomerController::class, 'deleteSelectedCustomers'])->name('customers.delete.selected');
    Route::post('/activate-customer', [ContactFormController::class, 'activateCustomer'])->name('customer.activate');
    Route::put('/customers/{customer}/update', [CustomerController::class, 'updateCustomer'])->name('customer.update');
});

// Language change route
Route::post('/language-change', function (Request $request) {
    $request->session()->put('locale', $request->language);
    $direction = in_array($request->language, ['ar']) ? 'rtl' : 'ltr';
    $request->session()->put('direction', $direction);
    return back();
})->name('language.change');

// SSH Connect route
Route::get('/ssh-connect', [SSHController::class, 'connectAndUpdate'])->name('ssh.connect');
