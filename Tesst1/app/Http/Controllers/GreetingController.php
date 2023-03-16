<?php

namespace App\Http\Controllers;

class GreetingController extends Controller
{
    public function greeting($id = null)
    {
        if(!$id) {
            return "Xin mời nhập id";
        }
        return "User id : $id";
    }
    public function HelloWord()
    {
        return "Hello Word";
    }
}
