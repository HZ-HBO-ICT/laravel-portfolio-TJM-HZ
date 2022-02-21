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

/*
Route::get('/posts/{post}', function ($post) {
    $posts = [
        'my-first-post' => 'Hello, this is my first blog post!',
        'my-second-post' => 'Now I am getting the hang of this blogging thing.'
    ];

    if (!array_key_exists($post, $posts)) {
        abort(404, 'Sorry, that post was not found.');
    }

    return view('post', [
        'post' => $posts[$post]
    ]);
});
*/

Route::get('/', [WelcomeController::class, 'show']);


/*
Route::get('/faq', 'App\Http\Controllers\FaqController@index');
Route::get('/faq/create', 'App\Http\Controllers\FaqController@create');
Route::post('/faq', 'App\Http\Controllers\FaqController@store');
Route::get('/faq/{id}/edit', 'App\Http\Controllers\FaqController@edit');
Route::put('/faq/{id}', 'App\Http\Controllers\FaqController@update');
Route::delete('/faq/{id}', 'App\Http\Controllers\FaqController@destroy');
*/



Route::resource('/faq', FaqController::class);



Route::get('/dashboard', function () {
    return view('dashboard', [
        'grades' => App\Models\Grade::all()
    ]);
});

/*
Route::get('/blog', 'App\Http\Controllers\PostController@index');
Route::get('/blog/create', 'App\Http\Controllers\PostController@create');
Route::post('/blog', 'App\Http\Controllers\PostController@store');
Route::get('/blog/{url}', 'App\Http\Controllers\PostController@show');
Route::get('/blog/{url}/edit', 'App\Http\Controllers\PostController@edit');
Route::put('/blog/{url}', 'App\Http\Controllers\PostController@update');
Route::delete('/blog/{url}', 'App\Http\Controllers\PostController@destroy');
*/

Route::resource('/blog', PostController::class);


Route::get('/{page}', [PageController::class, 'show']);
