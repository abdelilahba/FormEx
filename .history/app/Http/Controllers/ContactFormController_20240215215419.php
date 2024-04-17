<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\Customer; // Adjust the namespace according to your application structure
use Illuminate\Support\Facades\Log;
use App\Mail\CompleteRegistration; // Assuming you will create this Mailable
use App\Mail\ValidatedCustomerMail;
use Illuminate\Support\Str;

class ContactFormController extends Controller
{
    public function store(Request $request)
    {
        // Manually extracting the request data
        $data = [
            'company_name' => $request->input('companyName', ''),
            'last_name' => $request->input('last_name', ''),
            'first_name' => $request->input('first_name', ''),
            'function' => $request->input('function', ''),
            'phone_number' => $request->input('phone_number', ''),
            'email' => $request->input('email', ''),
            'city' => $request->input('city', ''),
            'country' => $request->input('country', ''),
            'state' => '0',
            'postal_code' => $request->input('postal_code', ''),
            'specialization' => $request->input('specialization'),
            'address_line1' => $request->input('address_line1'),
            'address_line2' => $request->input('address_line2'),
            'registration_date' => date('Y-m-d'), // Add the current date

            // 'password' => $request->input('password', ''),
        ];

        // Optionally, manually check if necessary data is present
        if (empty($data['email'])) {
            return redirect()
                ->back()
                ->with('error', 'The email field is required.');
        }
        $randomNumber = Str::random(10); // Generates a 10-character random string
        // Ensure the random number is unique
        while (Customer::where('random_number', $randomNumber)->exists()) {
            $randomNumber = Str::random(10); // Regenerate if already exists
        }
        $lastCustomer = Customer::orderBy('id', 'desc')->first();
        $nextId = $lastCustomer ? $lastCustomer->id + 1 : 1; // Start at 1 if no customers yet
    
        $data['id'] = $nextId;

        $data['random_number'] = $randomNumber;
        // Update the activation link generation as per the new requirement
        $companyShort = substr($request->companyName, 0, 5);
        $randomChar = chr(rand(65, 90)); // Uppercase ASCII letters A-Z
        $activationLink = strtolower($companyShort) . strtolower($randomNumber) . strtolower($randomChar);
        //  $customer->custom_link = $activationLink;
        $activationLink = str_replace(' ', '', $activationLink);
        // Assign the sanitized link to the customer's custom_link
        $data['custom_link'] = $activationLink;
        // Assuming the rest of the data matches your Customer model attributes
        $customer = Customer::create($data);
        $activationLinkDisplay = 'https://' . $customer->custom_link . '.khabirak.pro';
        Mail::to("bakkaliabdu37@gmail.com")->send(
            new ValidatedCustomerMail($customer)
        );
        // Send an email to the customer to complete the registration
        //Mail::to($customer->email)->send(new CompleteRegistration($customer , null));
      //  Mail::to($customer->email)->send(new CompleteRegistration($customer, $activationLinkDisplay));
        // If everything went well, redirect back or to another page
        return response()->json([
            'success' => true,
            'message' =>
                'Registration successful, please check your email to complete the registration.',
            'random_number' => $randomNumber, // Return the random number instead of ID
        ]);
    }

    public function activate(Request $request)
    {
        $customer = Customer::find($request->id);
        if ($customer) {
            $customer->state = 1; // Assuming 1 represents 'Active'

            // Update the activation link generation as per the new requirement
            // $companyShort = substr($customer->company_name, 0, 5);
            // $randomNumber = rand(1000, 9999);
            //$randomChar = chr(rand(65, 90)); // Uppercase ASCII letters A-Z
            //$activationLink =  strtolower($companyShort) . $randomNumber . $randomChar ;
            $activationLinkDisplay =
                'https://' . $customer->custom_link . '.khabirak.pro';
            //    $customer->custom_link = $activationLink;

            $customer->save();

            // Assuming you have a method to send the email
            // Send the activation email with the link
            // Assuming you will implement this method
            // $this->sendActivationEmail($customer, $activationLink);

            return response()->json([
                'success' => true,
                'message' => 'Customer activated successfully!',
                'activationLink' => $activationLinkDisplay,
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Customer not found.',
        ]);
    }
    public function deactivate(Request $request)
    {
        $customer = Customer::find($request->id);
        if ($customer) {
            $customer->state = 0; // Assuming 1 represents 'Active'

            // Update the activation link generation as per the new requirement

            $customer->save();

            // Assuming you have a method to send the email
            // Send the activation email with the link
            // Assuming you will implement this method
            // $this->sendActivationEmail($customer, $activationLink);

            return response()->json([
                'success' => true,
                'message' => 'Customer desactivated successfully!',
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Customer not found.',
        ]);
    }
}
