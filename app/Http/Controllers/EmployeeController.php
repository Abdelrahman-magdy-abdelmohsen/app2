<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;
use Barryvdh\DomPDF\Facade\Pdf;


class EmployeeController extends Controller
{
    public function showEmployees(){
        $employee = Employee::all();
        return view('employee', compact('employee'));
    }
    public function createPDF() {
        // Retrieve all records from the database
        $data = Employee::all()->toArray(); // Convert the collection to an array

        // Load the view using the view helper function
        $pdf = PDF::loadView('pdf_view', compact('data'));

        // Download the PDF file with the download method
        return $pdf->download('pdf_file.pdf');
    }


}
