<?php

namespace App\Http\Controllers;
use App\Employee;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $employees = Employee::all();
        // dd($employees);
        return view('pages.home', compact('employees'));
    }
    
}
