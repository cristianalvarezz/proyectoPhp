<?php
function swap(&$varA, &$varB){    // intercambia los valores de varA y varB
    $aux = $varA;
    $varA = $varB;
    $varB = $aux;
}

function ordenar(Closure $criterio, &$lista){
    for($i = 0; $i < count($lista); ++$i){
        for($j = $i; $j < count($lista); ++$j){

            if( $criterio($lista[$j], $lista[$i]) ){      //Usamos la función pasada como criterio de ordenamiento
                swap($lista[$i], $lista[$j]);
            }

        }
    }
}

$menor = function($A, $B){      //Devuelve true si A es menor que B
    return $A<$B;
};
$mayor = function($A, $B){      //Devuelve true si A es mayor que B
    return $A>$B;
};

$lista = array(4, 2, 1, 5, 3, 1, 74, 154, 2, 4, 9, 10);

function showList($lista){
    foreach ($lista as $valor) {
      echo " $valor | ";
    }
    echo '</br>';
  }

echo 'Lista desordenada<br>';
showList($lista);

ordenar($menor, $lista);
echo 'Lista ordenada de menor a mayor<br>';
showList($lista);

ordenar($mayor, $lista);
echo 'Lista ordenada de mayor a menor<br>';
showList($lista);