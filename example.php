<?php
session_start(); // каждый файл, в котором Вы хотите использовать данные сессий должен в начале кода содержать команду "запуска сессии" 

echo "Ваш id ".$_SESSION['id'];
?>
<h1>ПРИВЕТ МИР</h1>
<h1></h1>
