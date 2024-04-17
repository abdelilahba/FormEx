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
        $validatedData = $request->validate([
            'companyName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'firstName' => 'required|string|max:255',
            // Add validation for other fields based on your form
            'function' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            // Assuming 'password' is a field in your form
          //  'password' => 'required|string|min:8',
        ]);

        // Encrypt the password before storing it
        // if ($request->has('password')) {
        //     $validatedData['password'] = Hash::make($request->password);
        // }

        // Assuming the rest of the validated data matches your Customer model attributes
        $customer = Customer::create($validatedData);

        // Send an email to the customer to complete the registration
        Mail::to($customer->email)->send(new CompleteRegistration($customer));

        // Redirect the user or return a response
        return redirect()->route('registration.complete')->with('success', 'Registration successful, please check your email to complete the registration.');
    }
}
