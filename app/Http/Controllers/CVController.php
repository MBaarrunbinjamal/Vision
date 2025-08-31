<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CVs;
use PDF;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;


class CVController extends Controller
{
    //
    public function index()
    {
        return view('cv.form');
    }

    public function store(Request $request)
    {
        // Validate and store the CV data
        $cv = CVs::create($request->all());
        return redirect()->route('cv.preview', $cv->id);
    }

    public function preview($id)
    {
        // Retrieve and show the CV preview
        $cv = CVs::findOrFail($id);
        $template = $cv->template;
        return view("cv.templates.$template", compact('cv')); 
    }
    public function show($id)
    {
        $cv = CVs::findOrFail($id);
        $template = $cv->template;
        return view("cv.templates.$template", compact('cv'));
    }
    public function downloadPdf($id)
{
    $cv = CVs::findOrFail($id);

    // Get template from DB
    $template = $cv->template ?? 'default';

    // Check if the template view exists, else fallback to default
    if (!view()->exists("cv.templates.$template")) {
        $template = 'default';
    }

    $pdf = PDF::loadView("cv.templates.$template", compact('cv'));
    return $pdf->download($cv->full_name . '-cv.pdf');
}

}
