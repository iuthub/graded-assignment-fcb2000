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

Route::get('/',function () {
    return view('blog.index');
})->name('blog.index')->middleware(['unauth','dislogin']);

Route::group([
    'prefix' => 'admin',
    'middleware'=>'auth'
], function() {
    Route::get('', [
        'uses' => 'TaskController@getAdminIndex',
        'as' => 'admin.index'
    ]);


    Route::post('', [
        'uses' => 'TaskController@taskCreate',
        'as' => 'admin.create'
    ]);

    Route::get('edit/{id}', [
        'uses' => 'TaskController@getAdminEdit',
        'as' => 'admin.edit'
    ]);

    Route::get('delete/{id}', [
        'uses' => 'TaskController@getAdminDelete',
        'as' => 'admin.delete'
    ]);

    Route::post('edit', [
        'uses' => 'TaskController@taskAdminUpdate',
        'as' => 'admin.update'
    ]);
});

Auth::routes();

//Override login route
Route::get('login', function () {
    return redirect()->route('blog.index');
})->name('login');

//Route::get('/home', 'HomeController@index')->name('home');
