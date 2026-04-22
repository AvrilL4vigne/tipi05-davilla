<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActionController extends Controller
{
    public function Action()
    {
        return view("site.Action.Action");
    }
}