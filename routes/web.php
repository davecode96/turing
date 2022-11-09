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

Route::get('/', function () {
    return view('home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/Main', function () {
        return view('Main.default');
    })->name('dashboard');
});


// ---------------------------Sobre Mi-------------------------------------
Route::get('/Nosotros', function (){
    return view('Nosotros.nosotros');
});

// ---------------------------Sobre Mi-------------------------------------
Route::get('/Servicios', function (){
    return view('Servicios.servicios');
});

// ---------------------------Blog-------------------------------------
// Route::get('/Blog', function (){
//     return view('Blog.blog');
// });


Route::get('Blog/posts/', 'App\Http\Controllers\BlogController@post');
Route::delete('Blog/posts/{id}', 'App\Http\Controllers\BlogController@postdelete');
Route::get('Blog/posts/postadd/', 'App\Http\Controllers\BlogController@postadd');
Route::post('Blog/posts/postadd/', 'App\Http\Controllers\BlogController@postsave');
Route::get('Blog/posts/{id}/postedit/', 'App\Http\Controllers\BlogController@postedit');
Route::put('Blog/posts/{id}/postedit/', 'App\Http\Controllers\BlogController@postupdate');


Route::get('Blog/temas/', 'App\Http\Controllers\BlogController@tema');
Route::get('Blog/temas/temaadd/', 'App\Http\Controllers\BlogController@temaadd');
Route::post('Blog/temas/temaadd/', 'App\Http\Controllers\BlogController@temasave');



Route::get('/Blog', 'App\Http\Controllers\BlogController@publicacion');

// ---------------------------Contactanos-------------------------------------
// Route::get('/Contactanos', function (){
//     return view('Contactanos.contactanos');
    // Route::get('contactanosadd/', 'App\Http\Controllers\ContactanosController@contactanosadd');
    Route::get('Contactanos/contactanosadmin/', 'App\Http\Controllers\ContactanosController@post');
    Route::get('Contactanos/', 'App\Http\Controllers\ContactanosController@Contactanosadd');
    Route::post('Contactanos/', 'App\Http\Controllers\ContactanosController@contactanossave');
// });