<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;
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
    if(!User::where('email', 'maple@maple.com')->exists())
        User::create([
            'name' => 'Maple',
            'email' =>  'maple@maple.com',
            'password' => Hash::make('maple'),
            'email_verified_at' => now(),
        ]);

    return redirect('/dashboard');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/dashboard/books', [\App\Http\Controllers\Catalogs\BooksController::class, 'index'])->name('index.book');
    Route::get('/dashboard/categories', [\App\Http\Controllers\Catalogs\CategoriesController::class, 'index'])->name('index.categories');
    Route::get('/dashboard/authors', [\App\Http\Controllers\Catalogs\AuthorsController::class, 'index'])->name('index.authors');
    Route::get('/dashboard/users', [\App\Http\Controllers\Catalogs\UsersController::class, 'index'])->name('index.users');

});



require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
