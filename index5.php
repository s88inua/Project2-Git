<?php
/**
 * Created by PhpStorm.
 * User: Me
 * Date: 15/11/18
 * Time: 12:59
 */
$text = 'Карл у Клары украл кораллы или Кораллы';
$search_letter = preg_replace('/К/', ' ', $text);
echo $search_letter;
echo "<br>";

echo "<b>Решение №2</b></br>";
$text_change = 'Две бутылки лимонада';
$change_word = preg_replace('/Две/', 'Три', $text_change);
echo $change_word;
