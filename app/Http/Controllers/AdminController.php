<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return "Панель керування адміністратора";
    }
    public function manageFilms()
    {
        return "Керування фільмами";
    }
    public function manageUsers()
    {
        return"Керування користувачами";
    }
    public function manageComments()
    {
        return "Керування коментарями";
    }
    public function siteSettings()
    {
        return "Налаштування сайту";
    }
}
