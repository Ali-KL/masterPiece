<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;


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
Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/lab', function () {
    return view('lab');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/profile', function () {
    return view('profile');
});


// Route::resource('users', UserController::class);

// Route::get('/', [HomeController::class, 'home'])->name('home');

Auth::routes();

/*------------------------------------------
--------------------------------------------
patient Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:patient'])->group(function () {
    Route::get('patient/home', [HomeController::class, 'patientHome'])->name('patient.home');

});


/*------------------------------------------
--------------------------------------------
recept Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:recept'])->group(function () {

    Route::get('recept/home', [HomeController::class, 'receptHome'])->name('recept.home');
    Route::get('/dashboard', [HomeController::class, 'receptDash'])->name('dashboard');

    Route::resource('users', UserController::class);



});

/*------------------------------------------
--------------------------------------------
doctor Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:doctor'])->group(function () {
    Route::get('dashboard', [HomeController::class, 'doctorDash'])->name('dashboard');


    // Route::get('/doctor/home', [HomeController::class, 'doctorHome'])->name('doctor.home');
});

/*------------------------------------------
--------------------------------------------
pharma Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:pharma'])->group(function () {

    Route::get('dashboard', [HomeController::class, 'pharmaDash'])->name('dashboard');


    // Route::get('/pharma/home', [HomeController::class, 'pharmaHome'])->name('pharma.home');
});


/*------------------------------------------
--------------------------------------------
admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');

    Route::resource('users', UserController::class);


    // Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});
