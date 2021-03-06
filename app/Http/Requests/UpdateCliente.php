<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCliente extends FormRequest
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
            'nombre'=>'required|min:3|max:190|unique:clientes,nombre,'.$this->cliente,
            'doc'=>'required|min:7|max:8|unique:clientes,doc,'.$this->cliente,
            'direccion'=>'required|min:3|max:190',
            'cp'=>'required',
            'mail'=>'max:190',
            'condicionpago'=>'required|max:190',
            'telefono'=>'required|min:6|max:16',
            'codigopostal'=>'min:1|max:4',
            'percibeiva'=>'min:1',
            'percibeiibb'=>'min:1',
            'enviarcomprobante'=>'min:1',
            'estado'=>'min:1'   
        ];
    }
}
