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
        return [
            'admin_id'  => 'required',
            'asset_name' => 'required|min:3|unique:assets,asset_name', 
            'tag_id' => 'required|min:3|unique:assets,tag_id',
            'category' => 'required|min:3',
            'purchase_date' => 'required|date',
            'quantity' => 'required|numeric|min:1',
            'uom' => 'required',
          
        ];
    }
}
