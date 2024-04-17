<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileCompletionController extends Controller
{
    public function showCompleteProfileForm()
    {
        return view('complete-profile'); // Replace with your actual view
    }

    // Process the profile completion form submission
    public function completeProfile(Request $request)
    {
        $request->validate([
            // Your validation rules here
            'template' => 'required|file|mimes:doc,docx,pdf',
            // Other fields...
        ]);

        $user = auth()->user(); // Get the authenticated user
        $template = $request->file('template');

        // Path where the template will be stored
        $path = 'public/templates/' . $user->id;

        // Store the file in the specified path within the storage disk
        $fileName = time() . '_' . $template->getClientOriginalName();
        $request->file('template')->storeAs($path, $fileName);

        // Update the user's profile with the form data and file name/path as needed
        // $user->update([...]);

        return back()->with('success', 'Profile and template updated successfully!');
    }
}
