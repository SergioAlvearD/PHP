<?php
/**Ejercicio 1 */

$nombre = readline("primero nombre \n");
$apellido = readline("primer apellido \n");

echo "BIENVENIDO $nombre $apellido \n";

/** Ejercicio 2 */
$numero1 = readline ("primer numero entero \n");
$numero2 = readline ("segundo numero entero \n");

$suma = $numero1 + $numero2;

echo "El resultado de la suma es: $suma \n";

/** Ejercicio 3 */
$numero1= readline ("primer numero entero \n");
$numero2= readline ("segundo numero entero \n");

$suma = $numero1 + $numero2;
$resta = $numero1 - $numero2;
$multiplicacion = $numero1 * $numero2;

echo "El resultado de la suma es: $suma\n";
echo "El resultado de la resta es: $resta\n";
echo "El resultado de la multiplicacion es: $multiplicacion\n";

/**Ejercicio 4 */

$nombre = readline ("ingrese nombre \n");
$salario = readline ("ingrese salario \n");

$aumento = $salario *0.15;
$salarioTotal = $salario + $aumento;

echo "Hola señor/a $nombre su salario es de $salario pero con el aumento es de $salarioTotal";










?>