<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use App\Models\reviews;


class AdminUserController extends Controller
{
    // Display all registered users
    public function index()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    // Permanently delete a user
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('success', 'User deleted successfully.');
    }

    // Export users to Excel
    public function exportExcel()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    // Export users to PDF
    public function exportPdf()
    {
        $users = User::all();
        $pdf = PDF::loadView('admin.users-pdf', compact('users'));
        return $pdf->download('users.pdf');
    }
    // Display reviews
    public function showReviews()
    {
        $reviews = reviews::all();
        return view('admin.reviews', compact('reviews'));
    }
    public function updateReviewStatus($id, $status)
    {
        $review = reviews::findOrFail($id);
        $review->status = $status;
        $review->save();

        return redirect()->back()->with('success', 'Review status updated successfully.');
    }
    public function deleteReview($id)
    {
        $review = reviews::findOrFail($id);
        $review->delete();

        return redirect()->back()->with('success', 'Review deleted successfully.');
    }


}