<?php

use App\Http\Controllers\FaqController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

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

Route::get('/', [WelcomeController::class, 'show']);

Route::resource('/faq', FaqController::class);

Route::get('/dashboard', function () {
    return view('dashboard', [
        'grades' => App\Models\Grade::all()
    ]);
});

Route::resource('/posts', PostController::class);

Route::get('/{page}', [PageController::class, 'show']);
