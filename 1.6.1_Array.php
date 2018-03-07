<?php
/*
ЗАДАНИЕ 1
  -	Создайте массив $bmw с ячейками :
  "model"
  "speed"
  "doors"
  "year"
-	Заполните ячейки значениями:	"Х5", 120, 5,	"2006"
-	Создайте массивы $toyota и $оре1 аналогичные массиву $bmw.
-	Заполните массив Stoyota значениями:
  "Carina", 130, 4, "2007"
-	Заполните массив $opel значениями:
  "Corsa", 140, 5, "2007"
ЗАДАНИЕ 2
-	Выведите значения всех трёх массивов в виде:
  name - model - speed - doors - year,
  например: bmw - 120 - 5 - 2006
*/


ini_set('error_reporting', 2047);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
header('Content-Type: text/html; charset=utf-8');
//ЗАДАНИЕ 1
$bmw = array(
  'model' => "X5",
  'speed' => 120,
  'doors' => 5,
  'year' => "2006");
$toyota = array(
  'model' => "Carina",
  'speed' => 130,
  'doors' => 4,
  'year' => "2007");
$opel = array(
  'model' => "Corsa",
  'speed' => 140,
  'doors' => 5,
  'year' => "2007");
//ЗАДАНИЕ 2
echo "bmw";
foreach ($bmw as $index => $description) {
  echo ' - ' . $description;
}
echo "<br>toyota";
foreach ($toyota as $index => $description) {
  echo ' - ' . $description;
}
echo "<br>opel";
foreach ($opel as $index => $description) {
  echo ' - ' . $description;
}
?>
