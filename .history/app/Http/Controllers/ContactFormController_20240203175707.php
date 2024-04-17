<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            // Validate all the fields based on your requirements
            'company_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            
        ]);

        // Encrypt the password before storing it
        if ($request->has('password')) {
            $validatedData['password'] = Hash::make($request->password);
        }

        // Create the customer record
        $customer = Customer::create($validatedData);

        // Send an email to the customer to complete the registration
        Mail::to($customer->email)->send(new CompleteRegistration($customer));

        // Redirect the user or return a response
        return redirect()->route('registration.complete')->with('success', 'Registration successful, please check your email to complete the registration.');
    }

}
