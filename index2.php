<?php
/**
 * Created by PhpStorm.
 * User: Me
 * Date: 16/11/18
 * Time: 19:44
 */
require_once('src/function.php');

echo "<h5>", "Задание 2", "</h5>";
$array_numbers = [1, 2, 3, 0, 5];
echo "<p>", task2("+", $array_numbers), "</p>";
echo "<p>", task2("-", $array_numbers), "</p>";
echo "<p>", task2("*", $array_numbers), "</p>";
echo "<p>", task2("/", $array_numbers), "</p>";
$array_numbers = [1, 2, 3, 1, 5];
echo "<p>", task2("/", $array_numbers), "</p>";

echo "</div>";

