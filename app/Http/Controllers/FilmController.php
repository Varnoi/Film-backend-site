<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        return "Список всіх фільмів";
    }

    public function show($id)
    {
        return "Фільм з {$id}";
    }
    public function create()
    {
        return "Форма нового фільму";
    }
    public function store()
    {
        return"Збереження нового фільму";
    }
    public function edit($id)
    {
        return"Редагування існуючого фільму";
    }
    public function update($id)
    {
        return "Оновлення інформації про фільм";
    }
    public function destroy($id)
    {
        return"Видалення фільму";
    }
    public function showFilm($genreId, $filmId)
    {
        return "Жанр: {$genreId}, Фільм: {$filmId}";
    }
    public function filmsPage($page = 1)
    {
        return "Сторінка фільмів №{$page}";
    }
}
