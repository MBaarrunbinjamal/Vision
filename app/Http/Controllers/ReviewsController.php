<?php

namespace App\Http\Controllers;

use App\Models\reviews;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    //
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'review' => 'required|string|max:1000',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle file upload if an image is provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('profile_images', 'public');
            $validated['image'] = $imagePath;
        }

        // Store the review in the database
        reviews::create($validated);

        return redirect()->back()->with('success', 'Review submitted successfully!');
    }
    public function showReviews()
    {
        $reviews = reviews::where('status', 'approved')->latest()->get();
        return view('clients.index', compact('reviews'));
    }
}
