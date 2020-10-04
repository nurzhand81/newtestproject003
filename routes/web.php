<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [App\Http\Controllers\BlogsController::class, 'index']);  //->name('blogs');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/blogs', [App\Http\Controllers\BlogsController::class, 'index'])->name('blogs');
Route::get('/blogs/create', [App\Http\Controllers\BlogsController::class, 'create'])->name('blogs.create');
Route::get('/blogs/store', [App\Http\Controllers\BlogsController::class, 'store'])->name('blogs.store');

// keep trashed routes here
Route::get('/blogs/trash', [App\Http\Controllers\BlogsController::class, 'trash'])->name('blogs.trash');
Route::get('/blogs/trash/{id}/restore', [App\Http\Controllers\BlogsController::class, 'restore'])->name('blogs.restore');
Route::delete('/blogs/trash/{id}/permanent-delete', [App\Http\Controllers\BlogsController::class, 'permanentDelete'])->name('blogs.permanent-delete');


Route::get('/blogs/{id}', [App\Http\Controllers\BlogsController::class, 'show'])->name('blogs.show');
Route::get('/blogs/{id}/edit', [App\Http\Controllers\BlogsController::class, 'edit'])->name('blogs.edit');
Route::get('/blogs/{id}/update', [App\Http\Controllers\BlogsController::class, 'update'])->name('blogs.update');
Route::delete('/blogs/{id}/delete', [App\Http\Controllers\BlogsController::class, 'delete'])->name('blogs.delete');

//admin routes
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index')->middleware(['admin', 'auth']);

// route resource
Route::resource('categories', 'CategoryController');
