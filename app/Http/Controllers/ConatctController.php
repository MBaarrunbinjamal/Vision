<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConatctController extends Controller
{
    //
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Create a new contact form entry
        \App\Models\ContactForm::create($request->all());

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
