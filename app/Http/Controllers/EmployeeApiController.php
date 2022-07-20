<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeApiController extends Controller
{
   public function updateEmployee(Employee $employee){
    request()->validate([
        'name' => 'required',
        'email' => 'required',
        'phone_number' => 'required',
        'job_title' => 'required',


    ]);
    $updated_date = date('Y-m-d H:i:s');

    $employee->update([
        'name' => request('name'),
        'email' => request('email'),
        'phone_number' => request('phone_number'),
        'job_title' => request('job_title'),
        'updated_at' => $updated_date,
     

    ]);

   }
}
