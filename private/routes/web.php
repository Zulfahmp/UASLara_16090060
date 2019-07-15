<?php

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

Route::get('/',function() {
    return view('frontend.defaultfrontend');
});

Route::get('/wisata-detail',function() {
    return view('frontend.wisata-detail.wisata');
});

Route::get('/wisata-kategori',function() {
    return view('frontend.wisata-kategori.kategoriwisata');
});

Route::get('/about',function() {
    return view('frontend.about');
});

Route::get('/kategori',function() {
    return view('frontend.kategori');
});

Route::get('/login',function() {
    return view('pages.login');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

// Route::get('/wisata', function () {
//     return view('pages.wisata.index');
// });


Route::resource('wisata', 'WisatasController');
