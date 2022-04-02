<?php

namespace App\Http\Requests\Vendor;

use App\Http\Requests\BaseRequest;
use Illuminate\Support\Facades\Hash;

class StoreRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'email' => 'required|max:255|unique:vendors',
            'password' => 'required|max:255|min:6',
        ];
    }

    public function data()
    {
        return [
            'name' => $this->input('name'),
            'email' => $this->input('email'),
            'password' => Hash::make($this->input('password')),
        ];
    }
}
