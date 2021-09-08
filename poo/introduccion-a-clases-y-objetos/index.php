<?php

// include

require_once './clases/person.php';
require_once './clases/user.php';
require_once './clases/admin.php';




$user = new User;
$user->type = new Admin;
echo $user->type->greet();