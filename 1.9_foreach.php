<?php
/* задание 1
- создайте ассоциативный массив $menu
- заполните массив соблюдая следующие условия:
  название ячейки является пунктом меню, например:
  Home, About, Contact...
- Значение ячейки является именем файла,
  на который будет указывать ссылка, например:
  index.php, about.php, contact.html...
  задание 2
  Используя цикл foreach отрисуте вертикальное меню
  структура которого описана в массиве
  }
*/
// начальные установки
ini_set('error_reporting', -1); //задает отображение всех ошибок
ini_set('display_errors', 1); //вывод ошибок на экран
ini_set('display_startup_errors', 1); //вывод стартовых ошибок
header('Content-Type: text/html; charset=utf-8', false); // добавляет в <head> кодировку utf-8

// CSS стили для меню
echo <<<_CSS
  <style>
    body {
      margin: 10px;
      font-family: "Arial";
      font-size: 24px;
      font-weight: bold;
    }
    .menu {
      width: 200px;
      height: 200px;
      //background-color: lightgreen;
      padding: 0;
      list-style: none;
      margin: 0;
    }
    .menu li {
      border: 1px dashed black;
      padding: 0;
      margin: -1px 0 0 0;
    }
    .menu li a {
      display: block;
      padding: 5px 0px 5px 15px;
      text-decoration: none;
      background-color: lightgreen;
      magrin: 0;
    }
    .menu li a:hover {
      background-color: yellow;
    }
  </style>
_CSS;

// начало программы
$menu = array(
  'Home' => 'index.php',
  'About' => 'about.php',
  'Contacts' => 'contacts.html',
  'CallBack' => 'callback.php',
  'Map' => 'map.php'
);

echo "<ul class=\"menu\">";
foreach ($menu as $index => $description) {
  echo "<li class=$index>
          <a href=\"\">$description</a>
      </li>";
}
echo "</ul>";

/*echo <<<_BODY
<ul class="menu">
  <ul class="menu">
    <li class="home">
      <a href="">index.php</a>
    </li>
    <li class="about">
      <a href="">about.php</a>
    </li>
    <li class="contacts">
      <a href="">contacts.html</a>
    </li>
    <li class="callback">
      <a href="">callback.php</a>
    </li>
    <li class="map">
      <a href="">map.php</a>
    </li>
  </ul>
_BODY;*/

?>
