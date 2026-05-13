<?php

namespace App\Http\Controllers\Site;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    public function testimonials()
    {
        return view('site.home.testimonials');
    }
}