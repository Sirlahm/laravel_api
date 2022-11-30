<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeesRequest extends FormRequest
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
        $method = $this->method();
        if($method == 'PUT') {
            return [
                'company_id' => ['required', 'integer'],
                'first_name' => ['required'],
                'last_name' => ['required'],
            ];
        } else {
            return [
            'company_id' => ['sometimes','required', 'integer'],
            'first_name' => ['sometimes','required'],
            'last_name' => ['sometimes','required'],
            ];
        }
    }
}
