<?php

namespace App\Http\Requests\Product;

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
            'category_id' => 'required|max:255',
            'tag_id' => 'required',
            'name' => 'required|max:255',
            'slug' => 'max:255|unique:products',
            'description' => 'required|max:255',
            'quantity' => 'required|max:255|numeric',
            'price' => 'required|max:255|numeric',
            'old_price' => 'numeric',
            'status' => 'required',
        ];
    }

    public function data()
    {
        return [
            'category_id' => $this->input('category_id'),
            'tag_id' => $this->input('tag_id'),
            'name' => $this->input('name'),
            'description' => $this->input('description'),
            'quantity' => $this->input('quantity'),
            'price' => $this->input('price'),
            'old_price' => $this->input('old_price'),
            'status' => $this->input('status'),
        ];
    }
}
