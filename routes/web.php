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

    $data = [
        'saluto' => 'Hello World',
        'navbar' => [
            'home'=> 'Home',
            'blog' => 'Blog',
            'contact' => 'Contatti',
            'policy' => 'Policy',
        ],

    ];
    return view('home', $data);
})->name('home');


Route::get('/blog', function () {

    $data = [
        'title' => 'Blog',
        'navbar' => [
            'home'=> 'Home',
            'contact' => 'Contatti',
            'policy' => 'Policy',
        ],

    ];
    return view('blog', $data);
})->name('blog');


Route::get('/contact', function () {

    $data = [
        'title' => 'Contatti',
        'navbar' => [
            'home'=> 'Home',
            'blog' => 'Blog',
            'policy' => 'Policy',
        ],

    ];
    return view('contact', $data);
})->name('contact');


Route::get('/policy', function () {

    $data = [
        'title' => 'Policy',
        'navbar' => [
            'home'=> 'Home',
            'blog' => 'Blog',
            'contact' => 'Contatti',
        ],

    ];
    return view('policy', $data);
})->name('policy');

