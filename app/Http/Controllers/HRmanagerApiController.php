<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;


class HRmanagerApiController extends Controller
{
    public function index(){
        return Employee::all();
    }

    public function addEmployee(){


 
        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'job_title' => 'required',
          
    
        ]);
        return Employee::create(
            [
                'name' => request('name'),
                'email' => request('email'),
                'phone_number' => request('phone_number'),
                'job_title' => request('job_title'),
         
    
            ]
        );
    }

    public function deactiveEmployee(Employee $employee){
      
        $employee->update([
           'status'=> 0
        ]);    
    }
}


