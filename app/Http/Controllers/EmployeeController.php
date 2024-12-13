<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function Employee(){
        // $Employee=Employee::get();

        return view('index');

    }   

}
