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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () { return view('main');//it show main.blade.php 
                                                });
Route::get('/show', function () { return view('books.show');//it show main.blade.php 
});

Route::get('/bookdetails', function () { return view('books.Bookdetailpage');//it show main.blade.php 
});

Route::get('/listbygenre', function () { return view('genres.List_by_genre');//it show main.blade.php 
});

// Route::get('/projects/{id}', [ProjectController::class , 'show']);
