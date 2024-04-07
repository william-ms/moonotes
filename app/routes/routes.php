<?php

use app\library\routes\Route;
use app\controllers\site\HomeController;
use app\controllers\site\LoginController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login/store', [LoginController::class, 'store']);
Route::get('/login/destroy', [LoginController::class, 'destroy']);
