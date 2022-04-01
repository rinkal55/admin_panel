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
//routing for company
Route::any('/','Home@display');
Route::any('home/display','Home@display');
Route::any('home/addcompany','Home@index');
Route::any('home/edit','Home@edit');
Route::any('home/edit/{id}',function ($id){
	return view('edit-record',['id'=>$id]);
});
Route::get('home/delete/{id}', 'Home@delete');

//routing for employee
Route:: any('/displayemplyee','Employee@display');
Route::any('employee/display_emp','Employee@display');
Route::any('employee/addemployee','Employee@index');
Route::any('employee/delete/{id}','Employee@delete');
Route::any('employee/edit','Employee@edit');
Route::any('employee/edit/{id}',function ($id){
	return view('edit_emp',['id'=>$id]);
});

