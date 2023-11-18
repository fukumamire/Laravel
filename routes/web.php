<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\MiddlewareController;

Route::get('/', [TestController::class, 'index']);
// Route::get('/test', [TestController::class, 'index']);

// ↓任意パラメータ
// Route::get('/test/{text?}', [TestController::class, 'index']);

// クエリパラメータなのでURLのルートパス　アドレス部分に{パラメータ名}は不要　｛text?}削除↓
// Route::get('/test', [TestController::class, 'index']);
// Route::get('/hello', [HelloController::class, 'index']);
Route::get('/middleware', [MiddlewareController::class, 'index']);
Route::post('/middleware', [MiddlewareController::class, 'post'])->middleware('first');