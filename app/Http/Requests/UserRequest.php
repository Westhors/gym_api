<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $userId = $this->route('user') ? $this->route('user')->id : null;

        return [
            'name' => 'nullable|string',
            'email'         => 'nullable|unique:users,email,' . $userId,
            'phone' => 'nullable',
            'age' => 'nullable',
            'weight' => 'nullable',
            'height' => 'nullable',
            'goal' => 'nullable',
            'training_level' => 'nullable',
            'your_daily_life' => 'nullable',
            'avalid_problem' => 'nullable',
            'password' => 'nullable',

            'number_of_meals' => 'nullable',
            'water_intake' => 'nullable',
            'dietary_supplements' => 'nullable',
            'number_of_hours_per_day' => 'nullable',

            // 'avatar' => ['nullable', 'image', 'max:2048'],

            'sleep_quality' => 'nullable',
            'stress_level' => 'nullable',
            'note' => 'nullable',
            'package_id' => 'nullable',


        ];
    }
}
