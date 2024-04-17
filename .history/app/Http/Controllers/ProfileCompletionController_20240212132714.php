<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class ProfileCompletionController extends Controller
{
    public function completeProfile(Request $request)
    {
        $customer = Customer::find($request->id);
    
        if (!$customer) {
            return back()->with('error', 'Customer not found.');
        }
    
        // Update only the specified fields
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
            // 'custom_link' => $request->input('custom_link'), // Assuming this is generated automatically
        ]);
    
        if ($request->hasFile('template')) {
            $template = $request->file('template');
            $path = 'public/templates/' . $customer->id;
            $fileName = time() . '_' . $template->getClientOriginalName();
            $request->file('template')->storeAs($path, $fileName);
    
            // Update the template path or related attribute in your customer model, if necessary
            // For example:
            // $customer->template_path = $path.'/'.$fileName;
            // $customer->save();
        }
    
        return back()->with('success', 'Profile updated successfully!');
    }
    

    // Process the profile completion form submission
    public function completeProfile(Request $request)
    {
   

        // Assuming the customer is authenticated or you find them by another means
      //  $customerId = auth()->id(); // Adjust according to how you authenticate or identify customers
        $customer = Customer::find($request->id);

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
