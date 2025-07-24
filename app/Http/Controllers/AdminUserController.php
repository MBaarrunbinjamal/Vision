<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

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
}
