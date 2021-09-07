<?php

if(!function_exists('getLoginRules')){
    function getLoginRules(){
        return array(
            array(
                'field' => 'email',
                'label' => 'Correo Electrónico',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'El %s es requerido.'
                )
            ),
            array(
                'field' => 'password',
                'label' => 'Contraseña',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'El %s es requerido.',
                )
            ),
          
            
        );
    }
}