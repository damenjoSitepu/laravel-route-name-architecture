<?php

namespace App\Http\Controllers\Application\Home;

use App\Http\Controllers\Controller;

// Facades
use App\Transcendent\Facades\RouteName;

class ViewController extends Controller
{
    public function __invoke()
    {
        return view('application.home.index');
    }
}
