<?php

// use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;




Route::get('Employee',[EmployeeController::class, 'Employee']);