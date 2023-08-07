<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StringController;

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



Route::get('str', [Stringcontroller::class, 'string']);



Route::get('product', [Stringcontroller::class, 'showPhanTrang']);

Route::get('mail', [Stringcontroller::class, 'sendmail']);



Route::get('checkmail', function () {
    return view('mail.mail');
});

Route::group(['prefix' => 'laravel-filemanager'],  function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});


Route::get('hello', function(){
    echo 'haha';
});
