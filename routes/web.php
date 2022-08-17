<?php

use App\Services\Localization\LocalizationService;
use App\Http\Controllers\admin\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

    // $menu = $request -> get('menu');

    $menu = [
      'home',
      'about',
      'team',
      'blog',
      // 'vas',
      'smi',
      'contacts',
    ];

    Route::prefix('admin')->group(function () {
      Route::get('/', [AdminController::class, 'index']);
    });

    Route::view('/', 'layout/home', ['menu' => $menu]);

    foreach ($menu as $item) {
        Route::view('/' . $item, 'layout/' . $item, ['menu' => $menu]);
    }
  }
);
