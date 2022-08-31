<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'patronymic' => 'nullable|string',
            'age' => 'required|integer',
            'work_experience' => 'required|integer',
            'photo' => 'nullable|string',
            'average_salary' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'Это поле необходимо заполнить',
            'first_name.string' => 'Данные должны соответствовать строчному типу',
            'last_name.required' => 'Это поле необходимо заполнить',
            'last_name.string' => 'Данные должны соответствовать строчному типу',
            'patronymic.string' => 'Данные должны соответствовать строчному типу',
            'age.required' => 'Это поле необходимо заполнить',
            'age.integer' => 'Возраст должен быть числом',
            'work_experience.required' => 'Это поле необходимо заполнить',
            'work_experience.integer' => 'Стаж должен быть числом',
            'photo.string' => 'Фото png в base64',
            'average_salary.required' => 'Это поле необходимо заполнить',
            'average_salary.integer' => 'Средняя зарплата должна быть числом',
        ];
    }
}
