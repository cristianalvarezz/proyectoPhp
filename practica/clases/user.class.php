<?php
require_once "conexion/conexion.php";
require_once "respuestas.class.php";


class user extends conexion
{

    private $table = "user";
    private $email ="";
    private $password = "";

  

    //esto para guardar un paciente 
    public function post($json)
    {
        $_respuestas = new respuestas;
        $datos = json_decode($json, true);
        //si en datos no hay un token se envia un problema 
        $this->email = $datos['email'];
        $this->password = $datos['password'];

        $resp = $this->insertarUser();
        if ($resp) {
            $respuesta = $_respuestas->response;
            $respuesta["result"] = array(
                "userId" => $resp
            );
            return $respuesta;
        } else {
            return $_respuestas->error_500();
        }
    }

  
    private function insertarUser()
    {
        $query = "INSERT INTO " . $this->table . " (email,password)
        values
        ('" . $this->email . "','" . $this->password . "')";
        $resp = parent::nonQueryId($query);
        if ($resp) {
            return $resp;
        } else {
            return 0;
        }
    }
}
