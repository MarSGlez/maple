<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/books', [\App\Http\Controllers\Catalogs\BooksController::class, 'api'])->name('list.books');
Route::get('/categories', [\App\Http\Controllers\Catalogs\CategoriesController::class, 'api'])->name('list.categories');
Route::get('/authors', [\App\Http\Controllers\Catalogs\AuthorsController::class, 'api'])->name('list.authors');
Route::get('/users', [\App\Http\Controllers\Catalogs\UsersController::class, 'api'])->name('list.users');
