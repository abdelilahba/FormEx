<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\Customer; // Adjust the namespace according to your application structure
use Illuminate\Support\Facades\Log;
use App\Mail\CompleteRegistration; // Assuming you will create this Mailable



class ContactFormController extends Controller
{
    public function store(Request $request)
{
    try {
        // Manually extracting the request data
        $data = [
            'companyName' => $request->input('companyName', ''),
            'last_name' => $request->input('last_name', ''),
            'first_name' => $request->input('first_name', ''),
            'function' => $request->input('function', ''),
            'phone_number' => $request->input('phone_number', ''),
            'email' => $request->input('email', ''),
            'city' => $request->input('city', ''),
            'country' => $request->input('country', ''),
            // 'password' => $request->input('password', ''),
        ];

        // Optionally, manually check if necessary data is present
        if (empty($data['email'])) {
            return redirect()->back()->with('error', 'The email field is required.');
        }

        // Assuming the rest of the data matches your Customer model attributes
        $customer = Customer::create($data);

        // Send an email to the customer to complete the registration
        //Mail::to($customer->email)->send(new CompleteRegistration($customer , null));

        // If everything went well, redirect back or to another page
        return redirect()->back()->with('success', 'Registration successful, please check your email to complete the registration.');
    } catch (\Exception $e) {
        // Log the error or handle it as per your application's requirement
        Log::error("Error during registration: " . $e->getMessage());
        return redirect()->back()->with('error', 'Something went wrong. Please try again.');
    }
}
public function activate(Request $request)
{
    $customer = Customer::find($request->id);
    if ($customer) {
        $customer->state = 1; // Assuming 1 represents 'Active'
        
        // Generate the link
        $baseLink = "https://example.com/welcome?";
        $companyShort = substr($customer->company_name, 0, 5);
        $randomNumber = rand(1000, 9999);
        $randomChar = chr(rand(65, 90)); // Uppercase ASCII letters A-Z
        $activationLink = $baseLink . "code=" . $companyShort . $randomNumber . $randomChar;
        
        // Save or do something with the generated link here if needed
        
        $customer->save();

        // Send the email
        Mail::to($customer->email)->send(new CompleteRegistration($customer, $activationLink));

        return response()->json(['success' => true, 'message' => 'Customer activated successfully!']);
    }

    return response()->json(['success' => false, 'message' => 'Customer not found.']);
}

}
