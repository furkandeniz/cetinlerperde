<?php
/**
 * Created by PhpStorm.
 * User: furkan
 * Date: 21.03.2021
 * Time: 16:10
 */
ob_start();
session_start();
require __DIR__ . '/database.php';
require __DIR__ . '/model.php';
require __DIR__ . '/controller.php';
require __DIR__. '/route.php';

// Login ve Giriş Sayfası
Route::run('/login', 'admin/login@index');
Route::run('/login', 'admin/login@post', 'post' );
Route::run('/admin', 'admin/home@index');
Route::run('/logout', 'admin/login@logout');

// Kullanıcı Sayfaları
Route::run('/useradd', 'admin/user@add');
Route::run('/usercreate', 'admin/user@create', 'post');
Route::run('/useredit/{id}', 'admin/user@edit');
Route::run('/userupdate', 'admin/user@update', 'post');
Route::run('/userdelete/{id}', 'admin/user@delete');
Route::run('/userlist', 'admin/user@list');

// Kategori Sayfaları
Route::run('/categoryadd', 'admin/category@add');
Route::run('/categorylist', 'admin/category@list');
Route::run('/categorycreate', 'admin/category@create', 'post');
Route::run('/categoryedit/{id}', 'admin/category@edit');
Route::run('/categoryupdate', 'admin/category@update', 'post');
Route::run('/categorydelete/{id}', 'admin/category@delete');

// Ürün Sayfaları
Route::run('/productadd', 'admin/product@add');
Route::run('/productcreate', 'admin/product@create', 'post');
Route::run('/productlist', 'admin/product@list');
Route::run('/productedit/{id}', 'admin/product@edit');
