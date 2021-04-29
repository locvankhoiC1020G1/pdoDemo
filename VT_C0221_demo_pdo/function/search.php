<?php
include '../database/Database.php';

if ($_SERVER['REQUEST_METHOD'=='POST']){
    $value = $_POST['search'];
    $database = new Database();
    $conn = $database->connect();
    $sql = "SELECT * FROM customers WHERE name LIKE '%$value%' ";

}
?>

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
<form action="">

    <input type="text" name="search">
    <input type="submit" value="Search">
</form>
</body>
</html>
