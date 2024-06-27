<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employees;

class EmployeesController extends Controller
{
    public function index() {
        $employees = Employees::orderBy('lname')->get();

        return inertia('employees/employee', [
            'employees' => $employees
        ]);
    }

    public function view(Employees $employees) {
        $employees ->load('department');

        return inertia('employees/view', ['employees' => $employees]);
    }

    public function create(){
        return inertia('employees/create');
    }

    public function store(Request $request){
        $request->validate([
            'lname' => 'required',
            'fname' => 'required',
            'position' => 'required',
            'department_id' => 'required',
        ]);

        Employees::create($request->all());

        return redirect ('/employees');

    }
}
