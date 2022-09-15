<?php

use App\Http\Controllers\Covid19Controller;
use App\Http\Controllers\MyProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/page1', function () {
    return "<h1>This is page 1 !!!</h1>";
});


Route::get('/page2', function () {
    return "<h1>This is page 2 !!!</h1>";
});


Route::get('/bootstrap', function () {
    return view('bootstrap');
});

Route::get("/homepage", function () {
    return "<h1>This is home page</h1>";
});


Route::get("/blog/{id}", function ($id) {
    return "<h1>This is blog page : {$id} </h1>";
});


Route::get('/covid19', [Covid19Controller::class, 'index']);
Route::get("/covid19/create", [Covid19Controller::class, "create"]);
Route::get('/covid19/{id}', [Covid19Controller::class, 'show']);
Route::get("/covid19/{id}/edit", [Covid19Controller::class, "edit"]);

Route::post("/covid19", [Covid19Controller::class, "store"]);
Route::patch("/covid19/{id}", [Covid19Controller::class, "update"]);

Route::delete('/covid19/{id}', [Covid19Controller::class, 'destroy']);

Route::get('/staff', [ StaffController::class, 'index' ]);
Route::get("/staff/create", [StaffController::class, "create"]);
Route::get('/staff/{id}', [StaffController::class, 'show']);
Route::get("/staff/{id}/edit", [StaffController::class, "edit"]);

Route::post("/staff", [StaffController::class, "store"]);
Route::patch("/staff/{id}", [StaffController::class, "update"]);

Route::delete('/staff/{id}', [StaffController::class, 'destroy']);

//Route::resource('post', 'PostController');
Route::resource('post', PostController::class);
require __DIR__.'/auth.php';

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/teacher', function () {
        return view('teacher/index');
    })->middleware('auth'); 
    
    Route::resource('/covid19','Covid19Controller');
    });
    
    