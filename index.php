<?php
/**
 * Created by PhpStorm.
 * User: banban
 * Date: 04/09/17
 * Time: 16:32
 */

$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
];

$moyenne = 0;
$tempo = count($students);

foreach ($students as $nom => $age) {
    echo "Nom : ".$nom." - Age :".$age.". <br />";
    $moyenne = $moyenne + $age;
}

echo "Moyenne : ".($moyenne / $tempo).". ";