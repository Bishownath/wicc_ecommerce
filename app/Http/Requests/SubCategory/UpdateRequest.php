<?php

namespace App\Http\Requests\SubCategory;

use App\Http\Requests\BaseRequest;

class UpdateRequest extends BaseRequest
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
            'slug' => 'unique:sub_categories',
            'description' => 'required|min:3',
        ];
    }

    public function data()
    {
        return [
            'category_id' => $this->input('category_id'),
            'vendor_id' => $this->input('vendor_id'),
            'name' => $this->input('name'),
            'description' => $this->input('description'),
            'status' => $this->input('status'),
        ];
    }
}
