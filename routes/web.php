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

// ユーザー画面
Route::get('/',
    App\Http\Controllers\Nekocafe\IndexController::class)
    ->name('nekocafe.index');

Route::get('/cats',
    App\Http\Controllers\Nekocafe\ProfController::class)
    ->name('nekocafe.prof');


//ユーザー問い合わせ画面    
Route::get('/contact',
    App\Http\Controllers\Nekocafe\Contact\IndexController::class)
    ->name('nekocafe.contact.index');

Route::post('/contact',
    App\Http\Controllers\Nekocafe\Contact\ConfController::class)
    ->name('nekocafe.contact.conf');

Route::post('/contact/send',
    App\Http\Controllers\Nekocafe\Contact\SendController::class)
    ->name('nekocafe.contact.send');



// 管理者画面
Route::get('/administrator/cats',
    App\Http\Controllers\Administrator\cats\IndexController::class)
    ->name('administrator.cats.index');

Route::post('/administrator/cats',
    App\Http\Controllers\Administrator\cats\CreateController::class)
    ->name('administrator.cats.create');

Route::get('/administrator/cats/updete/{id}',
    App\Http\Controllers\Administrator\cats\Update\IndexController::class)
    ->name('administrator.cats.update.index')
    ->where('id', '[0-9]+');

Route::put('/administrator/cats/update/{id}',
    App\Http\Controllers\Administrator\cats\Update\PutController::class)
    ->name('administrator.cats.update.put')
    ->where('id', '[0-9]+');
 
Route::delete('/administrator/cats/delete/{id}',
    App\Http\Controllers\Administrator\cats\Delete\DeleteController::class)
    ->name('administrator.cats.delete')
    ->where('id', '[0-9]+');
