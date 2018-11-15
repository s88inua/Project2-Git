<?php
/**
 * Created by PhpStorm.
 * User: Me
 * Date: 15/11/18
 * Time: 12:59
 */
require('src/function.php');

echo <<<EOF
 <html>
<body>
<form action="" METHOD="POST">
   <p> Введите название файла:<input type="text" name="file_name"></p>
   <p>Введите текст который будет в файле:<input type="text" name="file_text"></p>
   <button type="submit" name = "submit">Отправить форму</button></p>
  </form>
</body>
</html>
EOF;
$file_name = $_POST['file_name'];
$file_text = $_POST['file_text'];
$open_submit = $_POST['openSubmit'];

if ($file_name != '' and $file_text != '') {
    echo "Файл создался кооректно - текст из файла: ";
    echo task6($file_name, $file_text);
} else {
    echo 'Вы ввели некорректные данные';
}
