<?php

namespace Src\Modules\Auth\Infrastructure\Http\Request;

use Src\Common\Interfaces\Laravel\FormRequest;

class UserInfoRequest extends FormRequest
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
            'email' => "email|required|unique:users,email,{$this->user()->id}",
            'name' => 'string|required|min:3|max:60'
        ];
    }
}
