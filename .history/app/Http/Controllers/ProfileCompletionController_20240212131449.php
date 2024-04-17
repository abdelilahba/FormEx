<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class ProfileCompletionController extends Controller
{
    public function showCompleteProfileForm($id)
    {
        $customer = Customer::find($id);
        if (!$customer) {
            // Handle the case where $id does not correspond to an existing customer
            // For example, redirect back with an error message, or throw a 404 error
            return back()->with('error', 'Customer not found.');
        }
    
        // Pass 'customer' and 'id' to the view
        // No need to pass '$id' separately if you're already passing the 'customer' object
        // since you can access the id via '$customer->id' in your view.
        return view('details.details', compact('customer'));
    }
    

    // Process the profile completion form submission
    public function completeProfile(Request $request)
    {
   

        // Assuming the customer is authenticated or you find them by another means
      //  $customerId = auth()->id(); // Adjust according to how you authenticate or identify customers
        $customer = Customer::find(29);

        if (!$customer) {
            return back()->with('error', 'Customer not found.');
        }
 

        if ($request->hasFile('template')) {
         
            $template = $request->file('template');
        
            // Path where the template will be stored
            $path = 'public/templates/' . $customer->id;
        
            // Store the file in the specified path within the storage disk
            $fileName = time() . '_' . $template->getClientOriginalName();
            $request->file('template')->storeAs($path, $fileName);
        
            // Assuming you want to save the custom link to the customer model
            $customer->custom_link = "http://" . substr($customer->company_name, 0, 5) . rand(1000, 9999) . chr(rand(65, 90)) . ".khibrat";
            $customer->save();
        }

        return back()->with('success', 'Profile and template updated successfully!');
    }

}
