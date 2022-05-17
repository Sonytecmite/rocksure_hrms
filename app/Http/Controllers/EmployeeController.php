<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function employeePhoto()
    {
        return view('admin.employee.upload-photo');
    }

    public function uploadPhoto(Request $request)
    {
        return redirect()->route('employee-details');
    }

    public function employeeFullDetails()
    {
        return view('admin.employee.employee-details');
    }

    public function saveEmployeeFullDetails(Request $request)
    {
        return redirect()->route('emergency-contacts');
    }
    
    public function emergencyContactsDetails()
    {
        return view('admin.employee.emergency-contacts');
    }
    
    public function saveEmergencyContactsDetails(Request $request)
    {
        return redirect()->route('employee-dependants');
    }

    public function employeeDependants()
    {
        return view('admin.employee.dependants');
    }

    public function saveEmployeeDependants(Request $request)
    {
        return redirect()->route('nextofkin');
    }

    public function employeeNextOfKin()
    {
        return view('admin.employee.nextofkin');
    }

    public function saveEmployeeNextOfKin(Request $request)
    {
        return redirect()->route('employee-education');
    }
    
    public function employeeEducation()
    {
        return view('admin.employee.education');
    }

    public function saveEmployeeEducation(Request $request)
    {
        return redirect()->route('employee-certifications');
    }
    
    public function employeeCertification(Request $request)
    {
        return view('admin.employee.certifications');
    }

    public function saveEmployeeCertification(Request $request)
    {
        return redirect()->route('employment-history');
    }

    public function employeeEmploymentHistory()
    {
        return view('admin.employee.emloyment-history');
    }    

    public function saveEmployeeEmploymentHistory(Request $request)
    {
        return redirect()->route('other-details');
    }

    public function employeeOtherDetails()
    {
        return view('admin.employee.other-details');
    }

    public function saveEmployeeOtherDetails(Request $request)
    {
        return redirect()->route('preview');
    }

    public function employeeInformationPreview()
    {
        return view('admin.employee.preview');
    }

    public function submitEmployeeDetails(Request $request)
    {
        
    }

    public function saveFullEmployeeDetails(Request $request)
    {
        return redirect()->route('emergency-contacts');
    }
}
