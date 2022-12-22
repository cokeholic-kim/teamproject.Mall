<?php
    $file = $_FILES['photourl'];
    var_dump($file);
    move_upload_file($file['tmp_name'],"C:/Apache24/htdocs/timeplay/image/{$file['name']}");
    $con = mysqli_connect("localhost","root","1234","lightningshop");
    $sql = "insert into shopproduction(name,price,brief,brand,imageurl)
    values('{$_POST[name]}',
    '{$_POST[price]}',
    '{$_POST[brand]}',
    '{$_POST[image]}')";
    echo $sql; 
?>