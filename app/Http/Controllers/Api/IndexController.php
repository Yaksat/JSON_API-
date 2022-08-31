<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\WorkerResource;
use App\Models\Worker;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $workers = Worker::All();

        return WorkerResource::collection($workers);
    }
}
