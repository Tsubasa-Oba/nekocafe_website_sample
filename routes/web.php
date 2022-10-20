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
Route::get('/nekocafe',
    App\Http\Controllers\Nekocafe\IndexController::class)
    ->name('nekocafe.index');

Route::get('/nekocafe/cats',
    App\Http\Controllers\Nekocafe\ProfController::class)
    ->name('nekocafe.prof');

Route::get('/nekocafe/access',
    App\Http\Controllers\Nekocafe\MapController::class)
    ->name('nekocafe.map');

Route::get('/nekocafe/contact',
    App\Http\Controllers\Nekocafe\Contact\IndexController::class)
    ->name('nekocafe.contact.index');


    

// 管理者画面
Route::get('/nekocafe/administrator/cats',
    App\Http\Controllers\Administrator\cats\IndexController::class)
    ->name('administrator.cats.index');

Route::post('/nekocafe/administrator/cats',
    App\Http\Controllers\Administrator\cats\CreateController::class)
    ->name('administrator.cats.create');

Route::get('/nekocafe/administrator/cats/updete/{id}',
    App\Http\Controllers\Administrator\cats\Update\IndexController::class)
    ->name('administrator.cats.update.index')
    ->where('id', '[0-9]+');

Route::put('/nekocafe/administrator/cats/update/{id}',
    App\Http\Controllers\Administrator\cats\Update\PutController::class)
    ->name('administrator.cats.update.put')
    ->where('id', '[0-9]+');
 
Route::delete('/nekocafe/administrator/cats/delete/{id}',
    App\Http\Controllers\Administrator\cats\Delete\DeleteController::class)
    ->name('administrator.cats.delete')
    ->where('id', '[0-9]+');
