<?php
/**
 * Created by PhpStorm.
 * User: Me
 * Date: 15/11/18
 * Time: 12:24
 */
function task1($strings, $glue)
{
    if ($glue == false) {
        foreach ($strings as $string) {
            echo '<p>' . $string . '</p>';
        }
    } else {
        echo implode(" ", $strings);
    }
}

function task2() {
    $arguments = func_get_args();
    $operator = array_shift($arguments);
    foreach ($arguments as $numbers){
        if (!is_numeric($numbers)) {
            echo "В массиве должны быть только цифры INT and Real";
            return null;
        } }
    if((in_array(0, $arguments)) == $arguments[0] and $operator == '/'){
        echo "Делить на 0 нельзя";
        return null;
    } else {
        $expression = implode($operator,$arguments);
        echo $expression.'='. eval( "return $expression;");
    }
}


function task3($rows = 1, $cols = 1)
{
    if (is_int($rows) and is_int($cols)) {
        echo '<table border = "1">';
        for ($tr = 1; $tr <= $rows; $tr++) {
            echo '<tr>';
            for ($td = 1; $td <= $cols; $td++) {
                echo '<td>' . $tr * $td . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo 'Вы ввели некорректные значения- ввидите 2 числа через запятую';
    }
}


function task4()
{
    $time_now = getdate();
    echo  "<b>В формате 31.12.2018 23:59</b></br>";
    echo  "Результат - ".$time_now['mday'].".".$time_now['mon'].".".$time_now['year'].". ".$time_now['hours'].":".$time_now['minutes']."</br>";
    echo "<b>Unixtime время  31.12.2018 00:00:00 </b></br>";
    echo "Результат - {$time_now['mday']}.{$time_now['mon']}.{$time_now['year']}"." "."{$time_now['hours']}".":"."{$time_now['minutes']}".":"."{$time_now['seconds']}</br>";
}

function task5($string, $example) {
    if ($example == 1) {
        $search_letter = str_replace('К', 'к', $string);
        return $search_letter;
    } elseif ($example == 2) {
        $words_search = array('Карл', 'Клары', 'кораллы');
        $words_insert = array('Вова', 'гАли', 'бананны');
        $search_words = str_replace($words_search, $words_insert, $string);
        return $search_words;

    } else {
        echo 'такой задачи нет';
    }
}

/**/
function task6($name, $text)
{
    $file = $name . '.txt';
    if (!file_exists($file)) {
        $fp = fopen($file, "w");
        fwrite($fp, $text);
        $fp1 = fopen($file, "r");
        if ($fp1) {
            while (!feof($fp1)) {
                $mytext = fgets($fp1, 999);
                return $mytext;
            }
        }
        fclose($fp);
    }
}



