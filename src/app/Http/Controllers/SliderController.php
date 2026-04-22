<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function Slider()
    {
        return view("site.Slider.Slider");
    }
}