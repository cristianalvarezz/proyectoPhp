<?php

abstract class Base
{
    protected $name;

    private function getClassName()
    {
        //nombre de la clase que me esta llamando 
        return get_called_class();
    }

    public function login()
    {
        //accedo al nombre de la clase que acabo de crear 
        return "Mi nombre es $this->name desde la clase {$this->getClassName()}";
    }
}

class Admin extends Base
{
    public function __construct($name)
    {
        $this->name = $name;
    }
}

class User extends Base
{
    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Guest extends Base
{
    protected $name = 'Invitado';
}

$guest = new Guest();
echo $guest->login();

$guest = new User('Italo');
echo $guest->login();

$guest = new Admin('Lynda');
echo $guest->login();