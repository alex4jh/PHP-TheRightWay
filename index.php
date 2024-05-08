<?php
const estado_pago= "paid";
const estado_pendiente = "pendiente";
//diferencia entre const y (define)
define ('estado_deuda','deuda');
//define ('estado_deuda',20 > 2 );
echo estado_deuda; 


//contantes magicas 
//var_dump (php_version);
var_dump (__file__);
var_dump (__line__);
//todo :variables
$foo = 'bar'; //alamacena un string (una cadena de texto)
//los stric types elimina el famoso loose typing de ph; convirtiendolo en strong typing      STRICT TYPE
$a ='uno';
$$a ='dos';
//$uno='dos';    este seria el resultado 
var_dump($dos);//genera variables de forma dinamica en base a la variable  



//? casting, tipos de datos  
//si un tipo de dato cae donde nosotros no queremos se vuelve un false 
$netero =(int)$decimal ;
$cadena ="veinte años";
$entero =(int)$cadena;
$completed=true;
$entero=(int)$completed;
var_dump ($entero);
// crtl k+c comento todo lo selecionado con //
//alt+shift+a comentar con /* */ todo lo selecionado

//? tipos compuestpos (array, objeto, caballete(funtion))

$scores= [10, 20 ,30 ,40];
$mixtos= [10, 20 ,30 ,40.54, true];
$objeto= new stdClass ();


//calable 
$fn = function () {
    return 'hola mundo';
};

$fn = fn()=>'hola mundo';
//los stric types elimina el famoso loose typing de ph; convirtiendolo en strong typing

//? BOOLEANS
$completed = false;
if ($completed){
    echo "la terea esta compñleta";}
    else {"la terea no esta cpmpleta ";
    }


    // integers 0= falsefloat 0.0=false 
    // string '=false' 
    // arrays []= false 
    // object =falsenull= false 
    // '0'= false 

    $x= PHP_INT_MAX + 1;
    VAR_DUMP ($X);
    $Y= PHP_INT_MAX + 1;
    $Z =2_200_000;
    $Z =2200000;


    //?    fLoat'S
    $FLOAT = 12.5E-3; //1.0135;
    $FLOAT= 13_000_000e-5;//130
    //?   variable 
    //$z =inf; en teoria estto es infinito 

    //?strings
    $nombre ='juan ';
    $apellido ='perez';
    $nombre_completo="$nombre.' '.$apellido ";
    $nombre_completo="$nombre $apellido";
    $nombre_completo="{$nombre}{$apellido}";



    //? heredoc
    $mensaje =<<<EOT
    hola mi nombre es hjenderson albiño $nombre $pellido
    EOT; //esto humaniza 

    //? ARRAYS

    $frutas =['manzana','pera','naranja '];
    var_dump ($frutas[2]);  //accedo al a naranja 
    $frutas [2]='platanpo';// sobreescribe 
    $frutas []='sandia'; //aumeta datos 
    
    var_dump ($frutas[3]);

    $names = ['davi','alex','manolo'];
array_push ($names, 'pedro','laura','maria');
var_dump ($names );


//?   ARRRays asosciativos 
  $stack=[
    'frontend'=> 'javastript',
    'datbase'=>'MySQL'
  ];
//$stack[aqui en el ejjercicico de los arrays revizar como crear y sobreeescribir arrays en la rama MAIN ]




//?Multidimencionales 
$programlenguages=[ 
'php'=>[
    'framework'=>'laravel',
    'version'=> 8.0
]
];// REVIZAR SU EJERCICIO 


vAR_DUMP($programlenguages['PYTHON']['TYPE']);
//EL SEGUNDO QUE EL TIENE ES DE TRES DIMENCIONES YA QU EETA BUSCADO DENTRO DE EL ARRAY OTRO ARRAY QUE TIENE UN ARRAYS PERO BUSCAMOS UNA POSICION ESPECIFICA DEL TERCERO



//ARRAY_KEY_EXISTS.- LO QUE HACE ES BUSCAR O VERIFICAR QUE UN INDICE O CLAVE EXISTA EN UN ARRAY, y RETORNA EN CASO DE EXISTIR UN TRUE Y UN FALSE EN CASO CONTRARIO

//ARRAYS_SHIFT.- RETORNARNOS EL PRIMER ELEMENTO DEL PRINCIOPIO DEL ARRAY
//ARRAY_UNSHIFT.- HACE LO CONTRARIO DE SHIFT , ESTO ELIMNA ESTE LO VUELVE A INTRODUCIR 




//?       EXPERESIONES


$N=10;
$M=5;

$COMPARACION= $N == $M;
$COMPARACION= $N === $M;// CON TREES IGUALES ES UNA COMNPARACION ESTRICTA 
//function  esDIVISIBLE                                   REVIZAr
$result= fn($num) => $num %2 ==0;

$resultado =function($num){
    return $num %2 ==0;
};



//Revizar contindo restante de comparadores 




