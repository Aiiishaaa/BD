<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
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
    return view('accueil');
});

Route::get('forum', function () {
    return view('forum');
});
Route::get('ComChange', function () {
    return view('ComChange');
});

Route::resource('coments', 'ComentController'); 
//Route::get ('/coments/show', 'ComentController@show');

Route::get('forum',function(){
    if ( auth()->check()){
        return redirect('ComChange');
    }else{
    return view("forum");
    }
});


Route::post('contact',function(){
    $data = request(['name', 'email', 'subject', 'message']);
    Mail::to('aicha.hamida31@gmail.com')
    ->send(new \App\Mail\ContactMail($data));
    return redirect ('/' )->with('msgcontact', 'Votre demande a été envoyée avec succès');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user', 'UserController@index')->name('user');
Route::get('/admin', 'AdminController@index')->name('admin');




Route::namespace('Admin')-> prefix('admin')->name('admin')-> group(function(){
    Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);
});

