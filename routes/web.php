<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PersonController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('profile');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::post('/contact', [HomeController::class, 'create'])->name('contact.create');




Route::get('/person/{name?}', [PersonController::class, 'index'])->name('person.index');

// Using resources for CRUD operations
Route::resources(['person' => PersonController::class]);

// Using only for specific resource routes
Route::resource('person', PersonController::class)->only(['index', 'create']);

// Using except for excluding resource routes
Route::resource('person', PersonController::class)->except(['create']);

// Naming resource routes
Route::resource('person', PersonController::class)
    ->only(['index', 'create'])
    ->names([
        'index' => 'person.superindex',
        'create' => 'person.supercreate'
    ]);
