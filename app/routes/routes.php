<?php

use app\library\routes\Route;
use app\controllers\site\HomeController;
use app\controllers\site\LoginController;
use app\controllers\site\UserController;
use app\controllers\site\SectionController;
use app\controllers\site\NoteController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login/store', [LoginController::class, 'store']);
Route::get('/login/destroy', [LoginController::class, 'destroy']);

Route::get('/user/create', [UserController::class, 'create']);
Route::post('/user/store', [UserController::class, 'store']);

Route::post('/section/store', [SectionController::class, 'store']);

Route::get('/note/show/[0-9]+', [NoteController::class, 'show']);
