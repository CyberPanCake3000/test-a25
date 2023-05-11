<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\HomeController;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/employees', [EmployeeController::class, 'index']);//+
Route::post('/employees', [EmployeeController::class, 'create']);
Route::get('/employees/{id}', [EmployeeController::class, 'show']);//+
Route::delete('/employees/{id}', [EmployeeController::class, 'delete']);

Route::get('/transactions', [TransactionController::class, 'index']); //+
Route::post('/transactions', [TransactionController::class, 'store']);

Route::get('/salaries/unpaid', [SalaryController::class, 'unpaidSalaries']);
Route::post('/salaries/pay', [SalaryController::class, 'paySalary']);


