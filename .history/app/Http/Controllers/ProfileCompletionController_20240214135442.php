<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class ProfileCompletionController extends Controller
{
    public function showCompleteProfileForm($locale, $random_number)
    {
       
        // Now, $random_number will correctly contain the expected random number value
        $customer = Customer::where('random_number', $random_number)->first(); // Use first() instead of get() if you're expecting a single model

        if (!$customer) {
            return back()->with('error', 'Customer not found.');
        }
    
        return view('details.details', compact('customer'));
    }
    

    // Process the profile completion form submission
    public function completeProfile(Request $request)
    {
        $customer = Customer::find($request->id);
    
        if (!$customer) {
            // Flash an error message to the session
            return back()->with('error', 'Customer not found.');
        }
    
        // Update customer details
        $customer->update([
            'address_line1' => $request->input('address_line1'),
            'address_line2' => $request->input('address_line2'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'postal_code' => $request->input('postal_code'),
            'country' => $request->input('country'),
            'job_title' => $request->input('job_title'),
            'industry' => $request->input('industry'),
            'company_size' => $request->input('company_size'),
            // 'custom_link' => $request->input('custom_link'),
        ]);
        return "ffff";
        if ($request->hasFile('template')) {
            $files = $request->file('template');
            foreach ($files as $file) {
                $path = 'public/templates/' . $customer->id;
                $fileName = time() . '_' . $file->getClientOriginalName();
                $request->file('template')->storeAs($path, $fileName);
    
                // Here you can save each file's path to the database or perform other actions as needed
            }
        }
        // Handling file upload

    
        // Flash a success message to the session
        return back()->with('success', 'Profile updated successfully!');
    }
    
}
