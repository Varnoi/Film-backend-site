<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

//
Route::get('/films', [FilmController::class, 'index'])->name('films.index');
Route::get('/films/{id}',[FilmController::class,'show'])->name('films.show');
route::get('/films/create',[FilmController::class,'create'])->name('films.create');
route::post('/films',[FilmController::class,'store'])->name('films.store');
route::get('/films/{id}/edit',[FilmController::class,'edit'])->name('films.edit');
route::put('/films/{id}',[FilmController::class,'update'])->name('films.update');
route::delete('/films/{id}',[FilmController::class,'destroy'])->name('films.destroy');
//


route::resource('comments',CommentController::class);
//
route::get('/comments',[CommentController::class,'index']);
route::get('/comments/create',[CommentController::class,'create']);
route::post('/comments',[CommentController::class,'store']);
route::get('/comments/{id}',[CommentController::class,'show']);
route::get('/comments/{id}/edit',[CommentController::class,'edit']);
route::put('/comments/{id}',[CommentController::class,'update']);
route::delete('/comments/{id}',[CommentController::class,'destroy']);
//

//
route::get('/user/profile',[UserController::class,'profile'])->name('user.profile');
Route::get('/user/edit', [UserController::class, 'editProfile'])->name('user.editProfile');
//

//
route::prefix('admin')->group(function() {
    route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
    route::get('/manageFilms',[AdminController::class,'manageFilms'])->name('admin.manageFilms');
    route::get('/manageUsers',[AdminController::class,'manageUsers'])->name('admin.manageUsers');
    route::get('/manageComments',[AdminController::class,'manageComments'])->name('admin.manageComments');
    route::get('/siteSettings',[AdminController::class,'siteSettings'])->name('admin.siteSettings');
});
//

//
route::get('/films/page/{page?}',function ($page=1){
    return 'Сторінка фільмів №'.$page;
})->name('films.page');
Route::get('/genres/{genreId}/films/{filmId}', [FilmController::class, 'showFilm'])->name('films.showId');
//  