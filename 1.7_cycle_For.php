<?php
/*
ЗАДАНИЕ 1
- Используя цикл for выведите
Нечётные числа от 1 до 50
*/

ini_set('error_reporting', 2047);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
header('Content-Type: text/html; charset=utf-8');
//ЗАДАНИЕ 1
for ($i = 1; $i < 50; $i += 2)
  echo "$i<br>";
?>
