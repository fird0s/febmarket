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


// pages
Route::match(['get', 'post'], '/page/about', "PortalController@page_about")->name('page_about');
Route::match(['get', 'post'], '/page/syarat_dan_ketentuan', "PortalController@page_syarat_dan_ketentuan")->name('page_syarat_dan_ketentuan');
Route::match(['get', 'post'], '/page/faq', "PortalController@page_faq")->name('page_faq');
Route::match(['get', 'post'], '/page/kontak', "PortalController@page_contact")->name('page_contact');

// end pages

// blog
Route::match(['get', 'post'], '/blog/', "PortalController@blog")->name('blog');
// end blocg

Route::match(['get', 'post'], '/search/{q}', "PortalController@search")->name('search');

Route::match(['get', 'post'], '/', "PortalController@home")->name('home');
Route::match(['get', 'post'], '/thumbnail', "PortalController@home_thumbnail")->name('home_thumbnail');
Route::match(['get', 'post'], '/beranda', "PortalController@beranda")->name('beranda');
Route::match(['get', 'post'], '/category/{slug}', "PortalController@category")->name('category');

Route::match(['get', 'post'], '/p/{slug}', "PortalController@display_product")->name('display_product');

Route::match(['get', 'post'], '/account/profile', "AccountController@profile")->name('account_profile');
Route::match(['get', 'post'], '/account/social_media', "AccountController@social_media")->name('account_social_media');
Route::match(['get', 'post'], '/account/settings', "AccountController@settings")->name('account_settings');

Route::match(['get', 'post'], '/account/product', "AccountController@product")->name('account_product');
Route::match(['get', 'post'], '/account/product/add', "AccountController@add_product")->name('account_add_product');
Route::match(['get', 'post'], '/account/product/delete/{id}', "AccountController@delete_product")->name('delete_product');
Route::match(['get', 'post'], '/account/product/edit/{id}', "AccountController@edit_product")->name('edit_product');

Route::match(['get', 'post'], '/account/change_pwd', "AccountController@change_pwd")->name('account_change_pwd');

Route::match(['get', 'post'], '/logout', "AccountController@logout")->name('account_logout');
Route::match(['get', 'post'], '/login', "AccountController@auth_login")->name('auth_login');
Route::match(['get', 'post'], '/forgot_password', "AccountController@auth_forgot_password")->name('auth_forgot_password');
Route::match(['get', 'post'], '/register', "AccountController@account_register")->name('register');
