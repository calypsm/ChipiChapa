<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\displayController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contactus', function () {
    return view('contactus');
});

Route::post('/displayList', [displayController::class, 'createDisplay'])->name('show');

Route::get('/displayList', [displayController::class, 'view'])->name('viewList');

Route::get('/update', [displayController::class, 'viewUpdate'])->name('viewUpdate');

Route::get('/update/{data}/edit', [displayController::class, 'edit'])->name('edit');

Route::put('/update/{data}/updateData', [displayController::class, 'updateD'])->name('updateD');

Route::delete('/update/{data}/delete', [displayController::class, 'delete'])->name('delete');

Route::get('/delete', [displayController::class, 'viewDelete'])->name('viewDelete');

Route::get('/add', function () {
    return view('add');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});