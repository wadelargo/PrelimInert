<?php

namespace App\Http\Controllers;
use App\Models\Departments;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    public function index() {
        $departments = Departments::orderBy('name')->orderBy('head')->get();
        return inertia('departments/department',[
            'departments' => $departments
        ]);
    }
}
