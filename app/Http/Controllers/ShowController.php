<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Worker $worker)
    {
        return view('show', compact('worker'));
    }
}
