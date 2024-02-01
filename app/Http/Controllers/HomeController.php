<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __invoke(Request $request): View
    {
        return view('welcome');
    }
}
