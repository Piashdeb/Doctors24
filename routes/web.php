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
    Route::get('/','User\HomeController@index');
    Route::get('hospitals','User\HomeController@hospital');
    Route::get('about','User\AboutController@index');
    Route::get('department','User\DepartmentController@index');

    Route::get('doctors','User\DoctorsController@index');
    Route::get('doctor/details/{id}','User\DoctorsController@doctor_details')->middleware('auth');
    Route::get('doctors/all','User\DoctorsController@all_doctors');
    Route::get('doctors/dept_wise/{id}','User\DoctorsController@dept_wise');
    Route::get('doctors/search','User\DoctorsController@itemSearch');

    Route::get('profile', 'User\ProfileController@index')->middleware('auth');
    Route::get('profile-setting', 'User\ProfileController@profile_setting')->middleware('auth');
    Route::post('profile-update', 'User\ProfileController@update_profile')->middleware('auth');


    Route::post('appointment','User\AppointmentController@save')->middleware('auth');

    Route::get('blog','User\BlogController@index');
    Route::get('blog/categorywise/{id}','User\BlogController@category_wise');
    Route::get('blog/single/{id}','User\BlogController@single_blog');

    Route::post('blog/comment','User\BlogController@comment');
Route::group(['middleware' => 'auth'], function () {

    //------------ Admin -----------------
    Route::group(['middleware' => ['admin']],function(){

        Route::get('admin','Admin\DashboardController@index');

        // appointment
        Route::get('admin/appointment', 'Admin\AppointmentController@index');
        Route::get('admin/appointment/processed', 'Admin\AppointmentController@processed');
        Route::get('admin/appointment/process/{id}', 'Admin\AppointmentController@processed_app');

        // Doctors
        Route::get('admin/doctor','Admin\DoctorController@index');
        Route::get('admin/doctor/create_page','Admin\DoctorController@create');
        Route::post('admin/doctor/save','Admin\DoctorController@save');
        Route::get('admin/doctor/edit_page/{id}','Admin\DoctorController@edit_page');
        Route::post('admin/doctor/edit','Admin\DoctorController@edit');
        Route::get('admin/doctor/del/{id}','Admin\DoctorController@del');
        // Doctors

        // blog
        Route::get('admin/blog','Admin\BlogController@blog');
        Route::get('admin/blog/create_page','Admin\BlogController@create_blog');
        Route::post('admin/blog/save','Admin\BlogController@blog_save');
        Route::get('admin/blog/edit_page/{id}','Admin\BlogController@blog_edit_page');
        Route::post('admin/blog/edit','Admin\BlogController@blog_edit');
        Route::get('admin/blog/del/{id}','Admin\BlogController@blog_del');
        // blog

        // blogcat
        Route::get('admin/blogcat','Admin\BlogController@index');
        Route::get('admin/blogcat/create_page','Admin\BlogController@create');
        Route::post('admin/blogcat/save','Admin\BlogController@save');
        Route::get('admin/blogcat/edit_page/{id}','Admin\BlogController@edit_page');
        Route::post('admin/blogcat/edit','Admin\BlogController@edit');
        Route::get('admin/blogcat/del/{id}','Admin\BlogController@del');
        // blogCat

        // Hospital
        Route::get('admin/hospital','Admin\HospitalController@index');
        Route::get('admin/hospital/create_page','Admin\HospitalController@create');
        Route::post('admin/hospital/save','Admin\HospitalController@save');
        Route::get('admin/hospital/edit_page/{id}','Admin\HospitalController@edit_page');
        Route::post('admin/hospital/edit','Admin\HospitalController@edit');
        Route::get('admin/hospital/del/{id}','Admin\HospitalController@del');
        // hospital

        // department
        Route::get('admin/departments','Admin\DepartmentController@index');
        Route::get('admin/department/create_page','Admin\DepartmentController@create');
        Route::post('admin/department/save','Admin\DepartmentController@save');
        Route::get('admin/department/edit_page/{id}','Admin\DepartmentController@edit_page');
        Route::post('admin/department/edit','Admin\DepartmentController@edit');
        Route::get('admin/department/del/{id}','Admin\DepartmentController@del');
        // department
    });
    //------------ Admin -----------------

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
