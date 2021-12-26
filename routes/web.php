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



Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});

//MEDIA CONTROLLER
Route::get('/medialibrary', [App\Http\Controllers\MediaLibraryController::class, 'mediaLibrary'])->name('media-library');
Route::get('/testlibary', [App\Http\Controllers\allMediaController::class, 'Mediasemua'])->name('mediaall');

//FILE UPLOADS CONTROLER
Route::post('medialibrary/upload', [App\Http\Controllers\UploaderController::class, 'upload'])->name('file-upload');
Route::post('medialibrary/delete', [App\Http\Controllers\UploaderController::class, 'delete'])->name('file-delete');
