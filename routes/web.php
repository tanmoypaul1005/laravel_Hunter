<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\SecondController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\manController;
Route::get('/hello', function () {
return  "Hello World";
});

Route::get('/',[SiteController::class,'Home']);

Route::get('/deshbord',[SiteController::class,'DeshBord']);

Route::get('/contuct',[SiteController::class,'Contuct']);

Route::post('/store/contuct',[SecondController::class,'store'])->name('store.contuct');

Route::get('/user/about',[SiteController::class,'userAbout'])->name('about');

Route::get('/country', function () {
return view('country');
})->middleware('country');

Route::get("test",[SecondController::class,'test']);
Route::group(['prefix'=>'account'], function () {

Route::get('/profile',function(){return "Profile";});
Route::get('/login',function(){return "login";});
Route::get('/logout',function(){return "logout";});

});

Route::post('/studentstore',[SiteController::class,'studentStore'])->name('studentstore');



//Database
Route::get('class',[SecondController::class,'index'])->name('class.index');
Route::get('createData',[SecondController::class,'create'])->name('create.index');
Route::post('storeData',[SecondController::class,'createstore'])->name('store.index');
Route::get('deleteData/{id}',[SecondController::class,'delete'])->name('delete.index');


//__user crud__//
Route::resource('users',UserController::class);

Route::resource('customer',customerController::class);

Route::resource('man',manController::class);

