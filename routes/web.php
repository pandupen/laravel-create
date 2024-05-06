<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PagesController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/anggota', function () {
//     return view('anggota');
// });
// Route::get('/foto', function () {
//     return view('foto');
// });
// Route::match(['get','post'],'/xyz', [AdminController::class, 'login']);
Route::get('/xyz',[AdminController::class, 'login']);
Route::post('/xyz',[AdminController::class, 'pandu'])->name('pop');

Route::group(['middleware' => 'user'], function(){
});
Route::match(['get','post'],'/admin',[AdminController::class, 'admin'])->name('admin'); 


Route::match(['get','post'],'/profile_edit', [AdminController::class, 'editpro'])->name('editpro');   
    
Route::get('/anggota_edit', [AdminController::class, 'editang']);


Route::get('/', [PagesController::class, 'index']);
Route::get('/anggota', [PagesController::class, 'anggota']);
Route::get('/foto', [PagesController::class, 'foto']);



// Route::get('admin', function () {
//     return view('admin/admin');
// });

