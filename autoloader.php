<?php

function MyAutoloader($className)
{
    $filePath = './Classes/' . $className . '.php';
    if (file_exists ($filePath)) {
        include "$filePath";
    } else {
        die("Класса $className не существует");
    }
}
?>