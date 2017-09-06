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

Route::get('/home', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/editprofile', 'HomeController@showHomeEditProfile')->name('homepartials.homeeditprofile');
Route::get('/home/editprofileconfirm', 'HomeController@updateHomeEditProfile')->name('homepartials.homeeditprofileconfirm');
Route::get('/home/editaccount', 'HomeController@showHomeEditAccount')->name('homepartials.homeeditaccount');
Route::get('/home/edithours', 'HomeController@showHomeEditHours')->name('homepartials.homeedithours');
Route::get('/home/editcontacts', 'HomeController@showHomeEditContacts')->name('homepartials.homeeditcontacts');
Route::get('/home/logout', 'Auth\LoginController@userLogout')->name('home.logout');

Route::get('/admin/account', 'AccountController@index');

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/editprofile', 'AdminController@showAdminEditProfile')->name('adminpartials.admineditprofile');
    Route::post('/editprofile', 'AdminController@updateAdminEditProfile')->name('adminpartials.admineditprofile.update');
    Route::get('/{{$account->id}}/editaccount', 'AdminController@showAdminEditAccount')->name('adminpartials.admineditaccount');
    Route::get('/createaccount', 'AdminController@showAdminCreateAccount')->name('adminpartials.admincreateaccount');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    // Password Reset Routes
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');    
});

Route::prefix('superadmin')->group(function() {
    Route::get('/login', 'Auth\SuperadminLoginController@showLoginForm')->name('superadmin.login');
    Route::post('/login', 'Auth\SuperadminLoginController@login')->name('superadmin.login.submit');
    Route::get('/', 'SuperadminController@index')->name('superadmin.dashboard');
        Route::get('/editprofile', 'SuperadminController@showSuperadminEditProfile')->name('superadminpartials.editprofile');
        Route::get('/createaccount', 'SuperadminController@showSuperadminCreateAccount')->name('superadminpartials.createaccount');
        Route::get('/editaccount', 'SuperadminController@showSuperadminEditAccount')->name('superadminpartials.editaccount');
        Route::get('/createadmin', 'SuperadminController@showSuperadminCreateAdmin')->name('superadminpartials.createadmin');
        Route::get('/uploadschedule', 'SuperadminController@showSuperadminUploadSchedule')->name('superadminpartials.uploadschedule');
    Route::get('/logout', 'Auth\SuperadminLoginController@logout')->name('superadmin.logout');
    // Password Reset Routes
    Route::post('/password/email', 'Auth\SuperadminForgotPasswordController@sendResetLinkEmail')->name('superadmin.password.email');
    Route::get('/password/reset', 'Auth\SuperadminForgotPasswordController@showLinkRequestForm')->name('superadmin.password.request');
    Route::post('/password/reset', 'Auth\SuperadminResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\SuperadminResetPasswordController@showResetForm')->name('superadmin.password.reset');      
});