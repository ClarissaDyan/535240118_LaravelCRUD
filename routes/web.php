<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;


Route::get('/',[HomeController::class,'index']);
Route::get('/',[HomeController::class,'getName']);
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');

Route::post('/mahasiswa/store', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
Route::put('/mahasiswa/update/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
Route::delete('/mahasiswa/destroy/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');


// Route::get('/', function () {
//     return view('welcome');
// });

// // Route::get('/about', function (){
// //     echo "Halaman About";
// // });

// Route::get('/mahasiswa', function (){
//     echo "Halaman Mahasiswa";
// });

// Route::get('/user/{id}', function($id){
//     echo 'Useer ID: '.$id;
// });

// Route::get('/user/{name?}', function($name = 'Clarissa'){
//     echo 'Hello, ',$name;
// });

// Route::get('/post/{post}/comments/{comment}', function ($postId, $commentId){
//     echo 'Post ID: '.$postId.', Comment ID: '.$commentId;
// });

// Route::get('/user/{id}', function($id){
//     echo 'User ID: '.$id;
// })->where('id', '[0-9]+');

// Route::get('/about', function(){
//     return view('about');
// });

// Route::get('/',function (){
//     return view('home');
// });
