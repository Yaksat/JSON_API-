<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
use App\Http\Resources\WorkerResource;
use App\Models\Worker;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $data['photo'] = $this->createFileFromBase64($data['photo']);

        $worker = Worker::firstOrCreate($data);

        return new WorkerResource($worker);
    }

    protected function createFileFromBase64($encodedImage)
    {
        $file_name = 'image_' . time() . '.PNG';

        list($type, $file_data) = explode(';', $encodedImage);
        list(, $file_data) = explode(',', $file_data);

        Storage::disk('public')->put($file_name,base64_decode($file_data));

        return $file_name;
    }
}
