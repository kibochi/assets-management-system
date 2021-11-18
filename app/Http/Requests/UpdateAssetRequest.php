<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAssetRequest extends FormRequest
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
            'admin_id'  => 'required',
            'asset_name' => 'required|min:3', 
            'tag_id' => 'required|min:3',
            'category' => 'required|min:3',
            'purchase_date' => 'required|date',
          
        ];
    }
}


