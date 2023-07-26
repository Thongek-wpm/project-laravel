<?php

use App\Models\Department;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\DepartmentController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        $user=user::all();
        return view('dashboard',compact('user'));
    })->name('dashboard');
});
Route::get('department/all',[DepartmentController::class,'index'])
->name('department');
Route::post('/Department/add',[DepartmentController::class,'store'])
->name('addDepartment');