<?php
/**
 * Created by PhpStorm.
 * User: Me
 * Date: 15/11/18
 * Time: 12:44
 */
require('src/function.php');

$string_example = ['каждая', 'строка', 'должна', 'выводиться', 'отдельно'];
$logic_value = false;
echo task1($string_example, $logic_value);