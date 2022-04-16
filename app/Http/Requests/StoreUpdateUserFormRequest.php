<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateUserFormRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        $id = $this->id ?? '';

        $roles = [
            'name' => ['required', 'min:5', 'string', 'max:255'],
            'email' => ['required', 'email', "unique:users,email,{$id},id"],
            'password' => ['required', 'min:3', 'max:15']
        ];

        if ($this->method('PUT')) {
            $roles['password'] = [
                'nullable',
                'min:3',
                'max:15'
            ];
        }

        return $roles;
    }
}
