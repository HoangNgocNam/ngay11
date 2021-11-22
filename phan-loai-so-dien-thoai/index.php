<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <h2>Phân loại số điện thoại</h2>
    <textarea name="num" cols="20" rows="5"></textarea>
    <button type="submit">display</button>
</form>
</body>
</html>
<?php
include_once "check.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $num = $_POST["num"];
    $arr = explode(" ",$num);

    foreach ($arr as $value){
        if (checkPhoneNumber($value) == 1){
            echo $num . "Đầu số của viettel";
        } elseif (checkPhoneNumber($value) == 2){
            echo $num . "Đầu số của Mobifone";
        } elseif (checkPhoneNumber($value) == 3) {
            echo $num . "Đầu số của Vinaphone";
        }
    }
}
