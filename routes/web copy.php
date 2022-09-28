<?php

use App\Http\Controllers\Covid19Controller;
use App\Http\Controllers\MyProfileController;
use App\Http\Controllers\PostController;
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

Route::get('/page1', function () {
    return "<h1>This is page 1 </h1>";
});

Route::get('/page2', function () {
    return "<h2>This is page 2 </h2>";
});

Route::get('/homepage', function () {
    return "<h2>This is home page </h2>";
});

Route::get("/blog/{id}", function ($id) {
    return "<h1>This is blog page : {$id} </h1>";
});

Route::get("/blog/{id}/edit", function ($id) {
    return "<h1>This is blog page : {$id} for edit  </h1>";
});

Route::get("/product/{a}/{b}/{c}", function ($a, $b, $c) {
    return "<h1>This is product page </h1><div>{$a} , {$b}, {$c}</div>";
});

Route::get("/category/{a?}", function ($a = "mobile") {
    return "<h1>This is category page : {$a} </h1>";
});

//routes/web.php...

Route::get("/hello", function () {
    return view("hello");
});

// routes/web.php 
Route::get('/greeting', function () {

    $name = 'James';
    $last_name = 'Mars';

    return view('greeting', compact('name', 'last_name'));
});

Route::get("/gallery", function () {
    $ant = "https://cdn3.movieweb.com/i/article/Oi0Q2edcVVhs4p1UivwyyseezFkHsq/1107:50/Ant-Man-3-Talks-Michael-Douglas-Update.jpg";
    $bird = "https://cdn.vox-cdn.com/thumbor/n1ad23hZrumsQ8gdXQ3yAyPYn8U=/0x0:1400x787/1200x800/filters:focal(405x89:629x313)/cdn.vox-cdn.com/uploads/chorus_image/image/63686080/lag0835_v074.1004_wide_6038893c740ea664a676ebc5d8160b22c02ad616.0.jpg";
    $cat = "http://www.onyxtruth.com/wp-content/uploads/2017/06/black-panther-movie-onyx-truth.jpg";
    $god = "https://www.blackoutx.com/wp-content/uploads/2021/04/Thor.jpg";
    $spider = "https://icdn5.digitaltrends.com/image/spiderman-far-from-home-poster-2-720x720.jpg";

    return view("test/main", compact("ant", "bird", "cat", "god", "spider"));
});

Route::get("/gallery/ant", function () {
    $ant = "https://cdn3.movieweb.com/i/article/Oi0Q2edcVVhs4p1UivwyyseezFkHsq/1107:50/Ant-Man-3-Talks-Michael-Douglas-Update.jpg";
    return view("test/ant", compact("ant"));
});

Route::get("/gallery/bird", function () {
    $bird = "https://cdn.vox-cdn.com/thumbor/n1ad23hZrumsQ8gdXQ3yAyPYn8U=/0x0:1400x787/1200x800/filters:focal(405x89:629x313)/cdn.vox-cdn.com/uploads/chorus_image/image/63686080/lag0835_v074.1004_wide_6038893c740ea664a676ebc5d8160b22c02ad616.0.jpg";
    return view("test/bird", compact("bird"));
});

Route::get("/gallery/cat", function () {
    $cat = "http://www.onyxtruth.com/wp-content/uploads/2017/06/black-panther-movie-onyx-truth.jpg";
    return view("test/cat", compact("cat"));
});

Route::get("/teacher", function () {
    return view("teacher");
});

Route::get("/student", function () {
    return view("student");
});

Route::get("/theme", function () {
    return view("theme");
});


// Route Template Inheritance
Route::get("/teacher/inheritance", function () {
    return view("teacher-inheritance");
});
Route::get("/student/inheritance", function () {
    return view("student-inheritance");
});


// Route Template Component
Route::get("/teacher/component", function () {
    return view("teacher-component");
});
Route::get("/student/component", function () {
    return view("student-component");
});

Route::get('/tables', function () {
    return view('tables');
});


Route::get("/myprofile/create", [MyProfileController::class, "create"]);

Route::get("/myprofile/{id}/edit", [MyProfileController::class, "edit"]);

Route::get("/myprofile/{id}", [MyProfileController::class, "show"]);

Route::get("/coronavirus", [MyProfileController::class, "coronavirus"]);

//quitz
Route::get("/newgallery", [MyProfileController::class, "gallery"]);


Route::get("/newgallery/ant", [MyProfileController::class, "ant"]);

Route::get("/newgallery/bird", [MyProfileController::class, "bird"]);

Route::get('/covid19', [ Covid19Controller::class,"index" ]);

Route::get("/covid19/create",[ Covid19Controller::class ,"create"]);

Route::post("/covid19",[ Covid19Controller::class , "store" ]);

Route::get('/covid19/{id}',[ Covid19Controller::class,'show']);

Route::get("/covid19/{id}/edit", [ Covid19Controller::class ,"edit"]);

Route::patch("/covid19/{id}", [ Covid19Controller::class , "update" ]);

Route::delete('/covid19/{id}', [ Covid19Controller::class , 'destroy' ]);

Route::get('/staff', [ StaffController::class, 'index' ]);

Route::get("/staff/create", [StaffController::class, "create"]);

Route::get('/staff/{id}', [StaffController::class, 'show'])
;
Route::get("/staff/{id}/edit", [StaffController::class, "edit"]);

Route::post("/staff", [StaffController::class, "store"]);

Route::patch("/staff/{id}", [StaffController::class, "update"]);

Route::delete('/staff/{id}', [StaffController::class, 'destroy']);

//Route::resource('post', 'PostController');

Route::resource('post', PostController::class);

