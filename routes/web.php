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

Route::get('/', function () { // 'uri','controller' // eg anonymous function
    // return '<h1>Hello</h1>';
    return '{object: "none"}';
    // return view('welcome');
})->name('home.index');

Route::get('/contact',function(){
    return 'Contact';
})->name('home.contact');

Route::get('/posts/{id}', function($id) {
    return $id;
});

/*
Route::post('/', function () {
    return "";
});
*/
// get post put/path delete