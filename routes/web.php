<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'getHome']);

Route::get('/login',function (){
    return view('auth.login');
});

Route::get('/logout',function (){
    return 'Logout Usuario';
});

Route::get('/catalog', [CatalogController::class, 'getHome']);

Route::get('/catalog/show/{id}',[CatalogController::class, 'getShow']);

Route::get('/catalog/create',[CatalogController::class, 'getCreate']);

Route::get('/catalog/edit/{id}',[CatalogController::class, 'getEdit']);
