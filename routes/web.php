<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrescriptionController;

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
    return view('index');
});

Route::middleware(['auth','verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/warn-no-profile',function() {
        return view('updateProfile-warn');
    })->name('updateProfileAlert');

    Route::get('/update-profile',function() {
        return view('updateProfile-warn');
    })->name('profile.update');

    Route::get('/prescription',[PrescriptionController::class, 'getProfile'])->middleware('updated');
    
});


require __DIR__.'/auth.php';
