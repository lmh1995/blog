<?php
/*
 * @Author: your name
 * @Date: 2020-09-01 22:03:01
 * @LastEditTime: 2020-09-04 20:59:28
 * @LastEditors: your name
 * @Description: In User Settings Edit
 * @FilePath: \debugd:\GitProject\www2\blog\routes\web.php
 */

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
Route::get('db/model','DBController@model');
