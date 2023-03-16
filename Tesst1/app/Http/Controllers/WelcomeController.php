<?php

namespace App\Http\Controllers;


class WelomeController extends Controller
{
    public function welcome($id = null)
    {
        if (!$id) {
            return "Xin mời nhập id";
        }
        return "User id : $id";
    }
}
