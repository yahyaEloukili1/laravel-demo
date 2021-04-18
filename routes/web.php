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
//     return view('home');
// });


// Route::get('/about', function () {
//     return view('about');
// });

Route::view('/', 'home');
Route::view('/about', 'about');
Route::get('/posts/{id}/{author?}', function ($id, $author = 'anass') {
    $posts = [
        1 => ['title' => '<a>learn laravel 6</a>'],
        2 => ['title' => 'learn angular 8']
    ];
    return view('posts.show', [
        'data' => $posts[$id],
        'author' => $author
    ]);
});
