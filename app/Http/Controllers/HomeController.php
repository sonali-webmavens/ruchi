<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\User;
use App\Models\Employee;


class HomeController extends Controller
{
    
    public function index()
    {
        $employees = Employee::with('company')->get();
        $companies = Company::all();

        return view('index', compact('companies','employees'));
    }
}
