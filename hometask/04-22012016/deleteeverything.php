<?php
/**
 * Created by PhpStorm.
 * User: sergeypoliakov
 * Date: 22.01.16
 * Time: 15:56
 */





function deleteMyShit($path)
{
    if (is_dir($path)) {
        $workDir = opendir($path);
        while (false !== ($entry = readdir($workDir))) {
            if ($entry != "." && $entry != "..") {
                deleteMyShit("$path/$entry");
            }
        };

        closedir($workDir);
//        echo "Delete Dir $path";
        rmdir($path);
    }

//    Удаляет файл

    if (is_file($path)) {
//        echo ("Delete file $path");
        unlink($path);
    }

}

//Находим путь к файлу

$path = getcwd();

// Запускаем функцию



if (is_dir($path)) {

    $mainDir = opendir($path);

    while (false !== ($entry = readdir($mainDir))) {
        if ($entry != '.' && $entry != '..' && is_dir($entry)) {

//            Получаем путь к вложенной директории

            deleteMyShit("$path/$entry");

//            Получаем, что внутри $deleteDir - путь к нужной нам удалить директории

        }
    }

    closedir($mainDir);

};