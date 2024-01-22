<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompteController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function(){
    Route::controller(CompteController::class)->group(function(){
        Route::name('welcome.')->group(function(){
            Route::get('/', 'index')->name('');
            Route::get('/cree-compte', 'showCreeCompt')->name('cree-compte');
            Route::post('/cree-compte', 'storeCreeCompt')->name('cree-compte.store');
            Route::get('/login', 'showLogin')->name('login');
            Route::post('/login', 'storeLogin')->name('login.store');
        });
    });
});


Route::middleware('auth')->group(function(){
    Route::controller(CompteController::class)->group(function(){
        Route::get('/home', 'show')->name('welcome.home');
        Route::get('/logout', 'logout')->name('welcome.logout');
        Route::get('/profile', 'showProfile')->name('profile');
        Route::post('/like/{post}', 'likePost')->name('like');


        Route::get('/supprime-compte/{compte}', 'supprimeCompte')->name('compte.suprime');

        Route::prefix('settings')->group(function(){
            Route::get('', 'settings')->name('settings');
            Route::patch('/store/{compte}', 'infoStore')->name('info.store');
            Route::patch('/change/{compte}', 'ChangeImage')->name('image.change');
            Route::get('/download/{compte}', 'download')->name('image.download');
            Route::patch('/changePassword/{compte}', 'ChangePassword')->name('image.changePassword');
        });


    });

    Route::controller(PostController::class)->group(function(){
        Route::post('post-store', 'store')->name('post.store');

    });

});
