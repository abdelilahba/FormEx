<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\Customer; // Adjust the namespace according to your application structure
use App\Mail\CompleteRegistration; // Adjust the namespace according to your application structure

class ContactFormController extends Controller
{
    public function store(Request $request)
{
    // Manually extracting the request data
    $data = [
        'companyName' => $request->input('companyName', ''),
        'lastName' => $request->input('lastName', ''),
        'firstName' => $request->input('firstName', ''),
        'function' => $request->input('function', ''),
        'phone' => $request->input('phone', ''),
        'email' => $request->input('email', ''),
        'city' => $request->input('city', ''),
        'country' => $request->input('country', ''),
        // 'password' => $request->input('password', ''),
    ];

    // Optionally, manually check if necessary data is present
    // Example: Check if email is present and has a value
    if (empty($data['email'])) {
        // Handle missing email case, such as returning an error response
        return back()->withErrors(['email' => 'The email field is required.']);
    }

    // Encrypt the password before storing it
    // if (!empty($data['password'])) {
    //     $data['password'] = Hash::make($data['password']);
    // }

    // Assuming the rest of the data matches your Customer model attributes
    $customer = Customer::create($data);

    // Send an email to the customer to complete the registration
    Mail::to($customer->email)->send(new CompleteRegistration($customer));

    // Redirect the user or return a response
    return redirect()->route('registration.complete')->with('success', 'Registration successful, please check your email to complete the registration.');
}

}
