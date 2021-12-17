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
    $datalink=[
        "link"=>['home','social','info']];
    return view('home',$datalink);
})->name("home");

Route::get("/social",function(){
    $datalink=[
    "link"=>['home','social','info']];
   return view('social',$datalink) ;
})->name("social");

Route::get("/info",function(){
    $datalink=[
        "link"=>['home','social','info']];
    return view('info',$datalink); 
 })->name("info");
 


