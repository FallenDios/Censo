<?php

/*Alg que se utiliza en un censo para saber viviendas con menores, total de     
habitantes y la cantidad maxima de menores*/

/* INT $totalEscuesta, $encuestaFormuladas, $viviendasConMenores, $totalHabitantes, $maxMenores
$cantidadHabitantes, $cantidadMenores

FLOAT $promedioHabitantes

STRING $jefeConMasMenores, $jefeDeHogar */


$encuestaFormuladas=0;
$viviendasConMenores=0;
$totalHabitantes=0;
$maxMenores=0;
$jefeConMasMenores="";

echo"Ingrese la cantidad de encuesta a realizar\n";
$totalEscuesta=trim(fgets(STDIN));

for ($i=1; $i<=$totalEscuesta; $i++){
    echo"Ingrese el nombre del jefe del hogar\n";
    $jefeDeHogar=trim(fgets(STDIN));
    echo"Ingrese la cantidad de habitantes de la vivienda\n";
    $cantidadHabitantes=trim(fgets(STDIN));
    echo"Ingrese la cantidad de menores de 18 en la vivienda\n";
    $cantidadMenores=trim(fgets(STDIN));

    $encuestaFormuladas= $encuestaFormuladas+1;

    $totalHabitantes= $totalHabitantes + $cantidadHabitantes;

    if($cantidadMenores > $maxMenores){
        $viviendasConMenores= $viviendasConMenores+1;
    }

    if($cantidadMenores > $maxMenores){
        $maxMenores= $cantidadMenores;
        $jefeConMasMenores= $jefeDeHogar;
    }
}

if($totalEscuesta>0){
    $promedioHabitantes= $totalHabitantes/$totalEscuesta;
}else{
    $promedioHabitantes=0;
}

echo"La cantidad de encuestas formuladas es: $encuestaFormuladas\n";
echo"La cantidad de viviendas con menores es: $viviendasConMenores\n";
echo"El promedio de habitantes por encuesta es: $promedioHabitantes\n";
echo"El jefe con mas menores es: $jefeConMasMenores\n";


?>
