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
        'phone_number' => $request->input('phone_number', ''),
        'email' => $request->input('email', ''),
        'city' => $request->input('city', ''),
        'country' => $request->input('country', ''),
        //'password' => $request->input('password', ''),
    ];

    try {
        // Optionally, manually check if necessary data is present
        if (empty($data['email'])) {
            throw new \Exception('The email field is required.');
        }

        // Encrypt the password before storing it
        // if (!empty($data['password'])) {
        //     $data['password'] = Hash::make($data['password']);
        // }

        // Assuming the rest of the data matches your Customer model attributes
        $customer = Customer::create($data);

        // Send an email to the customer to complete the registration
         Mail::to($customer->email)->send(new CompleteRegistration($customer));

    } catch (\Exception $e) {
        // Log the error or handle it as needed
        // Log::error($e->getMessage());

        // Redirect back with error message
        return redirect()->back()->withErrors(['error' => 'Something went wrong: ' . $e->getMessage()])->withInput();
    }

    // If everything went well, redirect back or to another page
    return redirect()->back()->with('success', 'Registration successful, please check your email to complete the registration.');
}


}
