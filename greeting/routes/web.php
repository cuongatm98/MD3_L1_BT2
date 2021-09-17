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

Route::get('/index', function () {
    return view('index');
});
Route::post('/index', function (Illuminate\Http\Request $request) {
    $word = $request['word'];
    $arr = ["hello" => "Xin chào", "dog" => "Con chó", "car" => "Ô tô", "cat" => "Con mèo"];
    $flag = 0;
    foreach ($arr as $key => $value) {
        if ($word == $key) {
            return view('show', compact('value', 'word'));
            $flag = 1;
        }
    }
    if ($flag == 0) {
        return view('error', compact('word'));
    }
});
