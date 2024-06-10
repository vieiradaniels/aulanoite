<?php

$nome = "Daniel";
$anoNasc = 1993;
$idade = 2024 - $anoNasc;
$peso = 70.8;
$altura = 1.75;
$imc = $peso / pow($altura, 2);
$ehSolteiro = true;

if ($idade >= 18) {
    echo "$nome você é maior de idade!<br>";
} else {
    echo "$nome você é xiruzinho!<br>";
}

if ($imc <= 18.5) {
    echo "$nome cadê você?<br>";
} else if ($imc >= 18.5 && $imc <= 24.9) {
    echo "$nome tá no peso!<br>";
} else if ($imc >= 25 && $imc <= 29.9) {
    echo "$nome tá começando a te passar<br>";
} else if ($imc >= 30 && $imc <= 34.9) {
    echo "$nome Bah continua ratiando<br>";
} else if ($imc >= 35 && $imc <= 39.9) {
    echo "$nome VAI MORRER";
} else {
    echo "Se foi a cova!";
}

$op = 7;
switch ($op) {
    case 1:
        echo "Domingo";
        break;
    case 2:
        echo "<br>Segunda-feira";
        break;
    case 3:
        echo "<br>Terça-feira";
        break;
    case 4:
        echo "<br>Quarta-feira";
        break;
    case 5:
        echo "<br>Quinta-feira";
        break;
    case 6:
        echo "<br>Sexta-feira";
        break;
    case 7:
        echo "<br>Sábado";
        break;
    default:
    echo "Dia da semana inválida";
}

$cont= 1;
while($cont <=10){
    echo "<br> $cont <br>";
    $cont++;
}

for($i= 1; $i <=10; $i++){
    echo "<p style='border: 1px solid black;'> Numero: $i </p>";
}