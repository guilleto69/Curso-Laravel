<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ValidarCampoUrl;

class ValidacionMenu extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //si lo queremos usar, TRUE
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
            //unique:<tabla>,<campo> route id permite EDITAR con igual nombre
            'nombre' => 'required|max:50|unique:menu,nombre' . $this->route('id'),
            //usando reglas propias en ValidarCampoUrl
            'url' => ['required', 'max:100', new ValidarCampoUrl],
            'icono' =>'nullable|max:50'
        ];
    }

    
}