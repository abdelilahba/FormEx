<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class ProfileCompletionController extends Controller
{
    public function showCompleteProfileForm()
    {
        return view('details/details'); // Make sure this view exists
    }

    // Process the profile completion form submission
    public function completeProfile(Request $request)
    {
        return "ffff";
        $request->validate([
            // Your validation rules here, for the template and other fields
            'template' => 'required|file|mimes:doc,docx,pdf',
            // Other fields validation rules...
        ]);
        return $request->template;

        // Assuming the customer is authenticated or you find them by another means
      //  $customerId = auth()->id(); // Adjust according to how you authenticate or identify customers
        $customer = Customer::find(29);

        if (!$customer) {
            return back()->with('error', 'Customer not found.');
        }

        $template = $request->file('template');

        // Path where the template will be stored
        $path = 'public/templates/' . $customer->id;

        // Store the file in the specified path within the storage disk
        $fileName = time() . '_' . $template->getClientOriginalName();
        $request->file('template')->storeAs($path, $fileName);

        // Optionally update the customer's profile with the form data and file name/path as needed
        // $customer->update([...]);

        // Assuming you want to save the custom link to the customer model
        $customer->custom_link = "http://" . substr($customer->company_name, 0, 5) . rand(1000, 9999) . chr(rand(65, 90)) . ".khibrat";
        $customer->save();

        return back()->with('success', 'Profile and template updated successfully!');
    }

}
