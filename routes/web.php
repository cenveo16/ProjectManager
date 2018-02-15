<?php

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
    return view('admin.master',['title'=>'ProjectManager']);
});
Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});
Route::view('/welcome', 'admin.master',['title'=>'ProjectManager']);
Route::get('/home',function () {
    return view('admin.master',['title'=>'ProjectManager']);
});
Route::get('posts/comments/{post?}/{comment?}', function ($postId=2,$commentId=2) {
    return 'post'.$postId.'comments'.$commentId;
});
