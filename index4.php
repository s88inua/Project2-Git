<?php
/**
 * Created by PhpStorm.
 * User: Me
 * Date: 15/11/18
 * Time: 12:59
 */
$time_now = getdate();

echo "<b>В формате 31.12.2018 23:59</b></br>";
echo "Результат - $time_now[mday].$time_now[mon].$time_now[year]"." "."$time_now[hours]".":"."$time_now[minutes]</br>";
echo "<b>Unixtime время  31.12.2018 00:00:00 </b></br>";
echo "Результат - $time_now[mday].$time_now[mon].$time_now[year]"." "."$time_now[hours]".":"."$time_now[minutes]".":"."$time_now[seconds]</br>";
echo "<br>";
