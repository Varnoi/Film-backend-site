<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
        return "Профіль користувача";
    }
    public function editProfile()
    {
        return "Редагування профілю користувача";
    }
}
