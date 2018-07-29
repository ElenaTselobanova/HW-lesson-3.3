<?php
require_once 'autoloader.php';
session_start();

$mercedes = new \Classes\Car ('Mercedes', 'W-177', 'hatchback', 2000000);
$bmw = new \Classes\Car ('BMW', 'x6', 'crossover', 6000000);

$Sony = new \Classes\TV ('Sony', 'KD-55XE7096', 54.6, 60000);
$Samsung = new \Classes\TV ('Samsung', 'UE50MU6100U', 54.6, 70000);

$pilot = new \Classes\Pen('Ручка', 'Pilot', 'black', 100);
$bic = new \Classes\Pen('Ручка', 'BIC', 'blue', 30 );

$duck1 = new \Classes\Duck ('Дикая утка', 'Кряква', 'болотистая местность', 500);
$duck2 = new \Classes\Duck ('Домашняя утка', 'Индоутка', 'около речных водоемов', 600);

$objects=[$mercedes, $bmw, $Sony, $Samsung, $pilot, $bic, $duck1, $duck2];

?>

