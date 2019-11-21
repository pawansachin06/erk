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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'FrontController@front');
Route::get('/admin-dashboard', 'AdminController@admin');
Route::get('/about', 'FrontController@about');
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'admin\dashboard\DashboardController@index');
Route::get('/logout', 'HomeController@logout');

Route::get('/admin/medical-products', 'admin\medical\MedicalProductController@index');
Route::get('/admin/medical-create', 'admin\medical\MedicalProductController@create');
Route::post('/admin/medical/upload-image', 'admin\medical\MedicalProductController@uploadBlogImage');
Route::post('/admin/medical/store', 'admin\medical\MedicalProductController@store');
Route::get('/admin/medical/loadAllMedical', 'admin\medical\MedicalProductController@loadAllMedical');
Route::get('/admin/medical/delete/{id}', 'admin\medical\MedicalProductController@deleteMedical');
Route::get('/admin/medical/edit/{id}', 'admin\medical\MedicalProductController@edit');
Route::post('/admin/medical/update', 'admin\medical\MedicalProductController@update');


Route::get('/admin/health/category', 'admin\health\CategoryController@index');
Route::get('/admin/health/category-create', 'admin\health\CategoryController@create');
Route::post('/admin/health/category-store', 'admin\health\CategoryController@store');
Route::get('/admin/health/loadAllCategory', 'admin\health\CategoryController@loadAllCategory');
Route::get('/admin/health/category-delete/{id}', 'admin\health\CategoryController@delete');
Route::get('/admin/health/category-edit/{id}', 'admin\health\CategoryController@edit');
Route::post('/admin/health/category-update', 'admin\health\CategoryController@update');

Route::get('/admin/health/posts', 'admin\health\PostController@index');
Route::get('/admin/health/post-create', 'admin\health\PostController@create');
Route::post('/admin/health/post-store', 'admin\health\PostController@store');
Route::get('/admin/health/post-edit/{id}', 'admin\health\PostController@edit');
Route::get('/admin/health/post/loadAllPost', 'admin\health\PostController@loadAllPost');
Route::get('/admin/health/post/loadAllCategory', 'admin\health\PostController@load');
Route::post('/admin/health/post-update', 'admin\health\PostController@update');
Route::get('/admin/health/post-delete/{id}', 'admin\health\PostController@delete');


Route::get('/admin/news/category', 'admin\news\CategoryController@index');
Route::get('/admin/news/category-create', 'admin\news\CategoryController@create');
Route::post('/admin/news/category-store', 'admin\news\CategoryController@store');
Route::get('/admin/news/loadAllCategory', 'admin\news\CategoryController@loadAllCategory');
Route::get('/admin/news/category-delete/{id}', 'admin\news\CategoryController@delete');
Route::get('/admin/news/category-edit/{id}', 'admin\news\CategoryController@edit');
Route::post('/admin/news/category-update', 'admin\news\CategoryController@update');


Route::get('/admin/news/posts', 'admin\news\PostController@index');
Route::get('/admin/news/post-create', 'admin\news\PostController@create');
Route::post('/admin/news/post-store', 'admin\news\PostController@store');
Route::get('/admin/news/post-edit/{id}', 'admin\news\PostController@edit');
Route::get('/admin/news/post/loadAllPost', 'admin\news\PostController@loadAllPost');
Route::get('/admin/news/post/loadAllCategory', 'admin\news\PostController@load');
Route::post('/admin/news/post-update', 'admin\news\PostController@update');
Route::get('/admin/news/post-delete/{id}', 'admin\news\PostController@delete');
Route::post('/admin/news/post/upload-image', 'admin\news\PostController@uploadBlogImage');

Route::get('/admin/doctor/view', 'admin\doctor\DoctorController@index');
Route::get('/admin/doctor/create', 'admin\doctor\DoctorController@create');
Route::post('/admin/doctor/upload-image', 'admin\doctor\DoctorController@uploadBlogImage');
Route::post('/admin/doctor/store', 'admin\doctor\DoctorController@store');
Route::get('/admin/doctor/loadAllDoctor', 'admin\doctor\DoctorController@loadAllDoctor');
Route::get('/admin/doctor/delete/{id}', 'admin\doctor\DoctorController@delete');
Route::get('/admin/doctor/edit/{id}', 'admin\doctor\DoctorController@edit');
Route::post('/admin/doctor/update', 'admin\doctor\DoctorController@update');


Route::get('/admin/slider/view', 'admin\slider\SliderController@index');
Route::get('/admin/slider/create', 'admin\slider\SliderController@create');
Route::post('/admin/slider/upload-image', 'admin\slider\SliderController@uploadBlogImage');
Route::post('/admin/slider/store', 'admin\slider\SliderController@store');
Route::get('/admin/slider/loadAllSlider', 'admin\slider\SliderController@loadAllSlider');
Route::get('/admin/slider/delete/{id}', 'admin\slider\SliderController@delete');
Route::get('/admin/slider/edit/{id}', 'admin\slider\SliderController@edit');
Route::post('/admin/slider/update', 'admin\slider\SliderController@update');


Route::get('/admin/website_dynamics/view', 'admin\website_dynamics\WebsiteController@index');
Route::get('/admin/website_dynamics/create', 'admin\website_dynamics\WebsiteController@create');
Route::post('/admin/website_dynamics/upload-image', 'admin\website_dynamics\WebsiteController@uploadBlogImage');
Route::post('/admin/website_dynamics/store', 'admin\website_dynamics\WebsiteController@store');
Route::get('/admin/website_dynamics/loadAllWebsite', 'admin\website_dynamics\WebsiteController@loadAllWebsite');
Route::get('/admin/website_dynamics/delete/{id}', 'admin\website_dynamics\WebsiteController@delete');
Route::get('/admin/website_dynamics/edit/{id}', 'admin\website_dynamics\WebsiteController@edit');
Route::post('/admin/website_dynamics/update', 'admin\website_dynamics\WebsiteController@update');


Route::post('/admin/about/upload-image', 'admin\about\AboutController@uploadBlogImage');
Route::post('/admin/about/store', 'admin\about\AboutController@store');
Route::get('/admin/about/loadAllAbout', 'admin\about\AboutController@loadAllAbout');
Route::get('/admin/about/delete/{id}', 'admin\about\AboutController@delete');
Route::get('/admin/about/edit/{id}', 'admin\about\AboutController@edit');
Route::post('/admin/about/update', 'admin\about\AboutController@update');


Route::get('/admin/other/category', 'admin\other\CategoryController@index');
Route::get('/admin/other/category-create', 'admin\other\CategoryController@create');
Route::post('/admin/other/category-store', 'admin\other\CategoryController@store');
Route::get('/admin/other/loadAllCategory', 'admin\other\CategoryController@loadAllCategory');
Route::get('/admin/other/category-delete/{id}', 'admin\other\CategoryController@delete');
Route::get('/admin/other/category-edit/{id}', 'admin\other\CategoryController@edit');
Route::post('/admin/other/category-update', 'admin\other\CategoryController@update');

Route::get('/admin/other/posts', 'admin\other\PostController@index');
Route::get('/admin/other/post-create', 'admin\other\PostController@create');
Route::post('/admin/other/post-store', 'admin\other\PostController@store');
Route::get('/admin/other/post-edit/{id}', 'admin\other\PostController@edit');
Route::get('/admin/other/post/loadAllPost', 'admin\other\PostController@loadAllPost');
Route::get('/admin/other/post/loadAllCategory', 'admin\other\PostController@load');
Route::post('/admin/other/post-update', 'admin\other\PostController@update');
Route::get('/admin/other/post-delete/{id}', 'admin\other\PostController@delete');

Route::get('/admin/email/view', 'admin\admin_email\EmailController@index');
Route::get('/admin/email/fetch-email', 'admin\admin_email\EmailController@loadEmail');
Route::get('/admin/email/edit/{id}', 'admin\admin_email\EmailController@edit');
Route::post('/admin/email/update', 'admin\admin_email\EmailController@update');



Route::get('/medical-products', 'customer\medical\MedicalProductController@index');
Route::get('/medical-products/post/id/{id}', 'customer\medical\MedicalProductController@singlePost');
Route::get('/medical-products/post', 'customer\medical\MedicalProductController@allPost');
Route::get('/health-info', 'customer\health\HealthInfoController@index');
Route::get('/health/category/id/{id}', 'customer\health\HealthInfoController@post');
Route::get('/health/post/id/{id}', 'customer\health\HealthInfoController@singlePost');


Route::get('/news', 'customer\news\NewsController@index');
Route::get('/news/category/id/{id}', 'customer\news\NewsController@post');
Route::get('/news/post/id/{id}', 'customer\news\NewsController@singlePost');
Route::get('/doctor', 'customer\doctor\DoctorController@index');
Route::get('/doctor/id/{id}', 'customer\doctor\DoctorController@singeDoctor');

Route::get('/other', 'customer\other\OtherController@index');
Route::get('/other/category/id/{id}', 'customer\other\OtherController@post');
Route::get('/other/post/id/{id}', 'customer\other\OtherController@singlePost');



Route::get('/appointment', 'appointment\AppointmentController@index');
Route::post('/appointment/store', 'appointment\AppointmentController@store');
