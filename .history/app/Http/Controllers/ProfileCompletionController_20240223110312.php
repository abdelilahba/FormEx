<?php

namespace App\Http\Controllers;

use App\Mail\CompleteRegistration;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\tribunal;
use Illuminate\Support\Facades\Mail;

class ProfileCompletionController extends Controller
{
    public function showCompleteProfileForm($locale, $random_number)
    {
        // Now, $random_number will correctly contain the expected random number value
        $customer = Customer::where('random_number', $random_number)->first(); // Use first() instead of get() if you're expecting a single model
        $tribunals = Tribunal::all(); // Assuming 'Tribunal' is the correct model name

        $stinafTribunals = $tribunals->where('id_nature_jugement', 0);
        $ibtida2iyaTribunals = $tribunals->where('id_nature_jugement', 1);

        if (!$customer) {
            return back()->with('error', 'Customer not found.');
        }

        return view(
            'details.details',
            compact('customer', 'stinafTribunals', 'ibtida2iyaTribunals')
        );
    }
    public function ValidateCustomer($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->validate = 1; // Default to 1 if not provided
        $customer->save();

        $link = url('/ar/complete-profile/' . $customer->random_number);
        Mail::to($customer->email)->send(
            new CompleteRegistration($customer, $link)
        );
        return response()->json(['message' => 'Customer validated and email sent successfully.' , 'link' =>$link]);
    }
    protected function handleProfileUpdate(array $data, $files,  $customer)
    {
        // Update the customer with the provided data
        $customer->update($data);
    
        // Handle the file uploads
        if ($files) {
            foreach ($files as $file) {
                // Here, handle each file, e.g., store it and update the customer or associated models
                $fileName = $file->getClientOriginalName();
                $path = $file->storeAs("public/templates/{$customer->id}", $fileName);
                // Optionally, save the file path to the database
            }
        }
    
        // Additional processing if needed
    }
    // Process the profile completion form submission
    public function completeProfile(Request $request)
    {
        $customer = Customer::find($request->id);
        $data = $request->except(['_token', 'templates']);
        $files = $request->file('templates');

        if (!$customer) {
            // Flash an error message to the session
            return back()->with('error', 'Customer not found.');
        }

        // Update customer details
        $this->handleProfileUpdate($data, $files, $customer);

        // Handling file upload

        // Flash a success message to the session
        return back()->with('success', 'Profile updated successfully!');
    }
    
    public function subscribe($random){
        $customer = Customer::where('random_number', $random)->first();
        $queryParams = request()->all();
    
        // Create a Request instance with the desired data
        $data = [
            'address_line1' => $queryParams['address_line1'] ?? null,
            'address_line2' => $queryParams['address_line2'] ?? null,
            'city' => $queryParams['city'] ?? null,
            'postal_code' => $queryParams['postal_code'] ?? null, // Use null coalescing operator
            'country' => $queryParams['country'] ?? null,
            'job_title' => $queryParams['job_title'] ?? null,
            'industry' => $queryParams['industry'] ?? null,
            'company_size' => $queryParams['company_size'] ?? null,
            'request_type' => "subscribe"
        ];

        
        $files = request()->file('templates');

        // Ensure request data is properly merged into the current request
        $this->handleProfileUpdate($data, $files, $customer);

    
        // Now you can pass this modified request object to another method if needed
        // Or directly use the request data as needed for this method
    
        return view('pricing.subscriptiondetails', [
            'customer' => $customer,
            'queryParams' => $queryParams,
        ]);
    }
}
