<?php
//el final tampoco se puede soobre escribir 
 class User
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
//el final es para no sobreescribir el metodo 

    final public function getName()
    {
        return $this->name;
    }
}
//quiero crear un admin que tenga las caracteristicas del usuario 
class Admin extends User
{
    public function addName()
    {
        return "soy $this->name";
    }
}

$admin = new Admin('Italo');
echo $admin->addName();