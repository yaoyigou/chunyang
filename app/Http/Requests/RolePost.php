<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RolePost extends FormRequest
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
        return [
            'name'=>'required|unique:admin_roles,name,'.$this->route('role'),
            'display_name'=>'required|unique:admin_roles,display_name,'.$this->route('role'),
        ];
    }
}
