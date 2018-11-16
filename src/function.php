<?php
/**
 * Created by PhpStorm.
 * User: Me
 * Date: 15/11/18
 * Time: 12:24
 */
function task1($strings, $logic_value)
{
    if ($logic_value == false) {
        foreach ($strings as $value) {
            echo '<p>' . $value . '</p>';
        }
    } else {
        echo $comma_separated = implode(" ", $strings);
    }
}

function task2($tally, $dataArray)
{
    $calc = null;
    foreach ($dataArray as $value) {
        switch ($tally) {
            case "+":
                $calc += $value;
                break;
            case "-":
                if (empty($res)) {
                    $calc = $value;
                } else {
                    $calc -= $value;
                }
                break;
            case "*":
                if (empty($calc)) {
                    $calc = $value;
                } else {
                    $calc *= $value;
                }
                break;
            case "/":
                if ($value == 0) {
                    echo " 0 в примере - делить нельзя";
                    return null;
                }
                if (empty($calc)) {
                    $calc = $value;
                } else {
                    $calc /= $value;
                }
                break;
        }
    }

    return $calc;
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


