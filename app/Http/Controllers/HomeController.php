<?php

namespace App\Http\Controllers;
use App\Models\employee;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
{
    $employees = Employee::all(); // Assuming Employee is your model
    return view('home', compact('employees'));
}

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   
}
