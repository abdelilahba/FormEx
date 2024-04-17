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
        $link = url('/ar/complete-profile/' . $customer->random_number);
        Mail::to($customer->email)->send(
            new CompleteRegistration($customer, $link)
        );
        return response()->json(['message' => 'Customer validated and email sent successfully.']);
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
            'postal_code' => $request->input('postal_code'),
            'country' => $request->input('country'),
            'job_title' => $request->input('job_title'),
            'industry' => $request->input('industry'),
            'company_size' => $request->input('company_size'),
            // 'custom_link' => $request->input('custom_link'),
        ]);

        if ($request->has('templates')) {
            $files = $request->file('templates');
            foreach ($files as $file) {
                $originalFileName = $file->getClientOriginalName();
                $fileName =
                    pathinfo($originalFileName, PATHINFO_FILENAME) .
                    '_' .
                    $customer->id .
                    '.' .
                    $file->getClientOriginalExtension();
                //public_path("storage/templates/$customerId");
                $path = $file->storeAs(
                    "storage/templates/$customer->id",
                    $fileName
                );
                // Here you can save each file's path to the database or perform other actions as needed
            }
        }
        // Handling file upload

        // Flash a success message to the session
        return back()->with('success', 'Profile updated successfully!');
    }
}
