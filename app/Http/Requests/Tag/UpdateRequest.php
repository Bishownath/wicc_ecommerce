<?php

namespace App\Http\Requests\Tag;

use App\Http\Requests\BaseRequest;

class UpdateRequest extends BaseRequest
{

    public function rules()
    {
        return [
            'name' => 'required|min:3',
        ];
    }

    public function data()
    {
        return [
            'name' => $this->input('name'),
        ];
    }
}
