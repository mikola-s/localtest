<?php
/*ЗАДАНИЕ 1
-	Создайте переменную $name и присвойте ей значение содержащее Ваше имя,
  например "Игорь" (обязательно в кавычках!)
-	Создайте переменную Sage и присвойте ей значение содержащее Ваш возраст,
  например 40

ЗАДАНИЕ 2
-	Выведите с помощью echo(или print) фразу "Меня зовут: ваше_имя",
  например: "Меня зовут: Игорь"
-	Выведите фразу "Мне ваш_возраст лет", например: "Мне 40 лет"
-	Удалите переменную Sage.
*/
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
header('Content-Type: text/html; charset=utf-8');

$name = "Микола";
$age = 42;
echo "Меня зовут: " . $name . ". <br>Мне " .  $age . " лет";
unset($age);
?>