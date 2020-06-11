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
    return view('welcome');
});
Route::get('/packages', [
    'uses' => 'PackagesController@viewPackages',
    'as' => 'package.view'
]);
Route::post('/createPackage', [
    'uses' => 'PackagesController@createPackage',
    'as' => 'package.create'
]);

Route::post('/createPackageAjax', [
    'uses' => 'PackagesController@createPackageAjax',
    'as' => 'package.createAjax'
]);


/*Route::get('/{vue_capture?}', function () {
    return view('vue.index');
   })->where('vue_capture', '[\/\w\.-]*');*/

