<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class WorkerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $path = storage_path() . '\app\public\\' . $this->photo;
        $imgBinary = fread(fopen($path, "r"), filesize($path));
        $base64File = 'data:image/png' . ';base64,' . base64_encode($imgBinary);

        return [
            'id' => $this->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'patronymic' => $this->patronymic,
            'age' => $this->age,
            'work_experience' => $this->work_experience,
            'photo' => $base64File,
            'average_salary' => $this->average_salary,
        ];
    }
}
