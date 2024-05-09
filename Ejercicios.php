<?php

//?  INGRESA UN NUMERO ENTERO EN EL CUAL SEA ALA CANTIDAD QUE INGRESE EXTRIGAS SOLOS LOS NUMEROS QUE SEAN PARES 


function obtenerNumerosPares( int $numero) {

    $digitos = str_split((string)$numero);
    $numerosPares = [];
    foreach ($digitos as $digito) {
        if ($digito % 2 === 0) {
            $numerosPares[] = $digito;
        }
    }
    return implode('', $numerosPares);
}

echo obtenerNumerosPares(1155878511);