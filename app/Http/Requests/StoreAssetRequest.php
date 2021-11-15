<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAssetRequest extends FormRequest
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
        $rules =  [
            'admin_id'  => 'required',
            'asset_name' => 'required|min:3', 
            'tag_id' => 'required|min:3',
            'category' => 'required|min:3',
            'purchase_date' => 'required|date',
  
        ];

       if ($this->getMethod() === 'POST') {
        $rules += ['asset_name' => 'required|unique:assets,asset_name'];
        $rules += ['tag_id' => 'required|unique:assets,tag_id'];
     
     
    }
    return $rules;
    }

    public function messages()
    {
        return [
            'asset_name.required' => 'Asset Name Already Used',
            'tag_id.required' => 'Tag id is Used !',
            'category.required' => 'category is required!',
            'purchase_date.required' => 'purchase date is required!',
        ];
    }


}

