<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\WorkerResource;
use App\Models\Worker;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Worker $worker)
    {
        return new WorkerResource($worker);
    }
}
