<?php
/*
ЗАДАНИЕ 1
-	Создайте константу и присвойте ей значение
ЗАДАНИЕ 2
-	Проверьте, существует ли константа, которую Вы хотите использовать
-	Выведите значение созданной константы
-	Попытайтесь изменить значение созданной константы.
*/
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
header('Content-Type: text/html; charset=utf-8');
//Задание 1
define("MYNAME", "Mikola");
//Задание 2
if (defined("MYNAME"))
{
  echo("константа MYNAME = " . MYNAME . " — существует<br>");
}
else
{
  echo("константа MYNAME не существует");
}
// MYNAME = MYNAME . "попытка изменения константы";
?>
