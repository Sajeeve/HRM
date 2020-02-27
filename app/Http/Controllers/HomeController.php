<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        date_default_timezone_set("Asia/Colombo");
        $hour = date('H');

        return view('templates.home',
        [
            'name' => 'iKITS',
            'tagline' => 'Let us make a digital world with our innovatives',
            'hour' => $hour
        ]);
    }
    public function about()
    {
        return view('templates.about');
    }
}
