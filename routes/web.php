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
})->where([
    'id' => '[0-9]+' // regex 0 to 9 and have a length of at least 1
])->name('posts.show');


Route::get('/recent-posts/{days_ago?}',function($id=20) { // add ? for optional param + default value = 20
    return 'Recent posts: ' . $id . ' days ago';
})->name('posts.recent.index');

/*
Route::post('/', function () {
    return "";
});
*/
// get post put/path delete