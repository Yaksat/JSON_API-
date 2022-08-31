<?php

namespace App\Http\Controllers;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('create');
    }
}
