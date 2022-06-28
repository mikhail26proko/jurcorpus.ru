<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    $menu = [
        "main" => "Главная",
        "about" => "О компании",
        "team" => "Команда",
        "blog" => "Блог",
        "vas" => "Высший арбитражный суд",
        "smi" => "СМИ о нас",
        "contacts" => "Контакты"
    ];
    return view('layout/home', ['menu' => $menu]);
});
Route::get('/admin', function () {
    echo "Тут будет админ панель";
});

Route::get('set-locale/{locale}', function ($locale) {
    App::setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});