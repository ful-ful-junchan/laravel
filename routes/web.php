<?php

use Illuminate\Support\Facades\Route;

/**
 * Use Controller
 */
use App\Http\Controllers\BootstrapController;
use App\Http\Controllers\MypageController;
use App\Http\Controllers\Auth\LoginController;

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
// サンプル
Route::get('/bootstrap/{name}', [BootstrapController::class, 'index']);

// ルート
Route::get('/', [MypageController::class, 'index']);

// マイページ
Route::get('/mypage', [MypageController::class, 'index']);

// ログイン
Route::get('/login', [LoginController::class, 'index']);