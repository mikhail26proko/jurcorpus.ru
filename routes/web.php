<?php

use App\Services\Localization\LocalizationService;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the 'web' middleware group. Now create something great!
|
*/

Route::group(
  [
    'prefix' => LocalizationService::locale(),
    'middleware' => 'setLocale',
  ],
  function () {
    Route::prefix('admin')->group(function () {
      Route::get('/', [App\Http\Controllers\admin\AdminController::class, 'index']);
    });

    Route::get('/welcome', function () {
      return view('welcome');
    });

    Route::get('/home', function () {
      $menu = [
        'main' => 'Главная',
        'about' => 'О компании',
        'team' => 'Команда',
        'blog' => 'Блог',
        'vas' => 'Высший арбитражный суд',
        'smi' => 'СМИ о нас',
        'contacts' => 'Контакты',
      ];

      return view('layout/home', ['menu' => $menu]);
    });
  }
);
