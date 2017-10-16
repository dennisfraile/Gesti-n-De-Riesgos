<?php

namespace GestionDeRiesgos\Http\Requests;

use GestionDeRiesgos\Http\Requests\Request;

class ControlRiesgoRequest extends Request
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
            /*'idtratamiento'=>'required',
            'idprocedimiento'=>'required',
            'descripcontrol'=>'required|max:100',
            'encargado'=>'required|max:50',
            'fechainicio'=>'required|date|max:10|min:10',
            'fechafin'=>'required|date|max:10|min:10',
            'estado'=>'required|max:10',
            'presupuesto'=>'numeric|required',
            */
        ];
    }
}
