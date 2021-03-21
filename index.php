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


Route::run('/login', 'admin/login@index');
Route::run('/login', 'admin/login@post', 'post' );
Route::run('/admin', 'admin/home@index');
Route::run('/logout', 'admin/login@logout');
