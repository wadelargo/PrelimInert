<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\EmployeesController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::get('employee', [EmployeesController::class, 'index']);

Route::get('/employee/{employees}',[EmployeesController::class, 'view']);

Route::resource('/employees', EmployeesController::class);

require __DIR__.'/auth.php';
