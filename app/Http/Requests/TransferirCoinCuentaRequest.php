<?php

namespace Soft\Http\Requests;

use Soft\Http\Requests\Request;

class TransferirCoinCuentaRequest extends Request
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
            'cantidad' =>'required|confirmed|integer|min:1',
            'email' =>'required|confirmed',
        ];
    }
}
