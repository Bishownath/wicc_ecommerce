<?php

namespace App\Http\Requests\Brand;

use App\Http\Requests\BaseRequest;

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
            'name' => 'required|min:3',
            'slug' => 'unique:brands|min:3',
            'description' => 'required|min:3',
            'image' => 'required|mimes:jpeg,svg,jpg,png,gif|image',
        ];
    }


    public function data()
    {
        return [
            'name' => $this->input('name'),
            'slug' => $this->input('slug'),
            'description' => $this->input('description'),
            'image' => $this->input('image'),
        ];
    }
}
