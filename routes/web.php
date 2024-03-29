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

Route::get('/', 'Welcomecontroller@index')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/welcome', 'Welcomecontroller@index')->name('welcome');

Route::resource('/category', 'Categoryviewcontroller');

Route::resource('/productdisplay','Categoryviewcontroller');
Route::get('/companyinfo', 'Companycontroller@index')->name('companyinfo');

Route::resource('/user/addproduct','Productcontroller');

Route::get('/admin/adminregister','Adminregistercontroller@index')->name('adminregister');

Route::get('/user/dashboard','Dashboardusercontroller@index')->name('userdashboard');

Route::resource('/user/profile','Userprofilecontroller');

Route::resource('/user/companyinfo','Companycontroller');

Route::resource('/user/company','Companyinfocontroller');

Route::resource('/user/transaction','Transactioncontroller');

Route::post('/Login/custom','Logincustomcontroller@login')->name('Login.custom');

Route::get('/Logincustom','Logincustomcontroller@index')->name('Logincustom');

Route::resource('/requestd','Requestedcontroller');

Route::resource('/book','Bookbuycontroller');

Route::resource('/buy','Buycontroller');

Route::resource('/review','ReviewController');

Route::get('/help','Helpcontroller@index')->name('help');

Route::get('/transaction','PrintController@index');

Route::get('/prnpriview','PrintController@prnpriview');

Route::resource('/bought','BoughtController');

Route::group(array('prefix' => 'admin', 'before' => 'auth'),function(){
    Route::resource('/transactionadmin','Totaltransactioncontroller');
    Route::resource('/manageuser','Usermanagementcontroller');
    Route::resource('/addcategoryy','Categorycontroller');
    Route::resource('/profileadmin','Adminprofilecontroller');
    Route::get('/dashboard', 'HomeController@index')->name('admindashboard');
});

Route::get('/category/{id}','Categoryviewcontroller@index')->name('category');