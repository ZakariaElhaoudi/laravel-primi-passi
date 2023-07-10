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
    $pages = [
        ['name' => 'Home', 'route' => 'home'],
        ['name' => 'About', 'route' => 'about'],
        ['name' => 'Examples', 'route' => 'examples'],
        ['name' => 'Documentation', 'route' => 'documentation'],
        ['name' => 'Blog', 'route' => 'blog'],
    ];
    return view('home', ['pages'=> $pages]);
})->name('home');

// Route::get('/', function () {
//     $hello = "Hello world!!";
//     return view('home', compact('hello'));
// });

