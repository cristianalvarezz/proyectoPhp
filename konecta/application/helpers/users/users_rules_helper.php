<?php
if(!function_exists('getUpdateUserRules')){
    function getUpdateUserRules(){
        return array(
            array(
                'field' => 'nombre',
                'label' => 'Nombre',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'El %s es requerido.',
                )
            ),
            array(
                'field' => 'apellidos',
                'label' => 'Apellidos',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'Sus %s son requeridos.',
                )
            ),
            array(
                'field' => 'cedula',
                'label' => 'Cedula',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'La %s es requerida.',
                )
            ),
            array(
                'field' => 'telefono',
                'label' => 'telefono',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'La %s es requerida.',
                )
            ),
            array(
                'field' => 'fecha',
                'label' => 'fecha',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'La %s es requerida.',
                )
            ),
            array(
                'field' => 'cliente',
                'label' => 'cliente',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'La %s es requerida.',
                )
            ),
            array(
                'field' => 'usuarioregistro',
                'label' => 'usuarioregistro',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'La %s es requerida.',
                )
            ),
            array(
                'field' => 'genero',
                'label' => 'genero',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'La %s es requerida.',
                )
            ),
            array(
                'field' => 'sede',
                'label' => 'sede',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'La %s es requerida.',
                )
            ),
        );
    }
}
if(!function_exists('getCreateUserRules')){
    function getCreateUserRules(){
        return array(
            array(
                'field' => 'user',
                'label' => 'Usuario',
                'rules' => 'required|max_length[100]',
                'errors' => array(
                    'required' => 'El %s es requerido.',
                    'max_length' => 'El %s es demaciado grande'
                )
            ),
            array(
                'field' => 'correo',
                'label' => 'Correo',
                'rules' => 'required|valid_email',
                'errors' => array(
                    'required' => 'El %s es requerido.',
                    'valid_email' => 'El %s tiene que contener una direccion valida',
                )
            ),
            array(
                'field' => 'range',
                'label' => 'Rango',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'El %s es requerido.',
                )
            ),
            array(
                'field' => 'name',
                'label' => 'Nombre',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'El %s es requerido.',
                )
            ),
            array(
                'field' => 'lastname',
                'label' => 'Apellidos',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'Sus %s son requeridos.',
                )
            ),
    
            array(
                'field' => 'cedula',
                'label' => 'Cedula',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'La %s es requerida.',
                )
            ),
            array(
                'field' => 'telefono',
                'label' => 'telefono',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'La %s es requerida.',
                )
            ),
            array(
                'field' => 'fecha',
                'label' => 'fecha',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'La %s es requerida.',
                )
            ),
            array(
                'field' => 'cliente',
                'label' => 'cliente',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'La %s es requerida.',
                )
            ),
            array(
                'field' => 'usuarioregistro',
                'label' => 'usuarioregistro',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'La %s es requerida.',
                )
            ),
            array(
                'field' => 'genero',
                'label' => 'genero',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'La %s es requerida.',
                )
            ),
            array(
                'field' => 'sede',
                'label' => 'sede',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'La %s es requerida.',
                )
            ),
        );
    }
}