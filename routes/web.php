<?php

use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
//     return view('welcome');
// });

// Route::get('test', function () {
//     return 'hello world';
// });

// Route::get('sum/{a}/{b}', function ($a, $b) {
//     return $a + $b;
// });

Route::get('calculator', [CalculatorController::class, 'calculatorPage']);

Route::post('sum', [CalculatorController::class, 'sum']);

Route::get('users/create', [UserController::class, 'create'])->name('users.create');

Route::post('users', [UserController::class, 'store'])->name('users.store');

Route::get('users', [UserController::class, 'index'])->name('users.index');
