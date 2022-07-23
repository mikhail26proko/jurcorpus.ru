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
      Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'index']);
    });

    $menu = [
        'home',
        'about',
        'team',
        'blog',
        'vas',
        'smi',
        'contacts',
    ];

    Route::view('/', 'layout/home', ['menu' => $menu]);

    foreach ($menu as $item) {
        Route::view('/' . $item, 'layout/' . $item, ['menu' => $menu]);
    }
}
);
