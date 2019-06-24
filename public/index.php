<?php
include "../config/config.php";

if(isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'index';
}

// подготовка 
$params = prepareVariables($page);

// if(isset($_POST['load'])) {
//     $link = mysqli_connect('localhost','root','','geekbrains') or die("не могу соединиться с БД");
//     $name = $_FILES['myfile']['name'];
//     $path = "gallery_img/big/" . $name;
//     $save = "gallery_img/small/" . $name;
//     if(move_uploaded_file($_FILES['myfile']['tmp_name'], $path)) {
//         create_thumbnail($path, $save);
//         $query = "INSERT INTO `gallery` (`href`, `name`, `pop`, `description`) VALUES ('$name', '1', '1', 'tyt')";
        
//         mysqli_query($link, $query);
        
//         header("Location: /?page=gallery");
    
//     } else {
//         echo "Ошибка загрузки!<br>";
//     }
// }

echo render($page, $params);
