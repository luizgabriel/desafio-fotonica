<?php

namespace Fotonica\Http\Requests;

use Fotonica\Http\Requests\Request;

class ServerConfigurationRequest extends Request
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
            'number_generator_status' => 'required|integer'
        ];
    }
}
