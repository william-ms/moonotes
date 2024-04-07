<?php

use app\library\routes\Route;
use app\controllers\site\HomeController;
use app\controllers\site\LoginController;
use app\controllers\site\UserController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login/store', [LoginController::class, 'store']);
Route::get('/login/destroy', [LoginController::class, 'destroy']);

Route::get('/user/create', [UserController::class, 'create']);
Route::post('/user/store', [UserController::class, 'store']);
