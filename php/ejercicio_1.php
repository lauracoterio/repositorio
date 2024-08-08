<?php
print("hola mundo♥");

#Tipos de variables 
$nombrevariable = "Hola mundo";
$número = 10;
$decimal = 10.5;
$booleano = true;
$array = [1, 2, 3];

#Estructuras de control
#SI (if) simple
if ("condition") {

}
#SI (if) doble
if ("condition"){
    echo "si";
} else {
    echo "no";
}
#SI (if) anidado
if (condition) {
    echo "si";
} else if (condition) {
    echo "si";
} else {
    echo"NO .$anidar";
}

#CICLOS
#ciclo for
for ($i=0; $i < 10; $i++) { 
    echo $i;
}

#ciclo while
$i = 0;
while ($i <= 10) {
    echo $i;
    $i++;
}

#ciclo do while
$i = 0;
do {
    echo $i;
    $i++;
} while ($i < 10);

#ciclo foreach
$array = [1, 2 ,3 ,4 ,5];
foreach ($array as $value) {
    echo $value;
}

#FUNCIONES
function sumar ($a, $b){
    return $a + $b;
}
echo sumar (10, 20);
?> 