<?php

include_once "database/Database.php";

$database = new Database();
$conn = $database->connect();

// b1: viet lenh sql
$sql = 'SELECT * FROM customers';

// b2: Vi la cau lenh select -> thuc thi cau lenh

$stmt = $conn->query($sql);
$customers = $stmt->fetchAll();

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
<style>
    button {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        cursor: pointer;
        border-radius: 12px;
    }
    #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #customers tr:nth-child(even){background-color: #f2f2f2;}

    #customers tr:hover {background-color: #ddd;}

    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
    }


</style>
<body>
<button><a href="view/form-add.php">add</a></button>
<form action="function/search.php" method="post">
    <input type="text" name="search">
    <button>Search</button>
</form>
<table id="customers" border="1" style="border-collapse: collapse; width: 800px">
    <tr>
        <td>STT</td>
        <td>Name</td>
        <td>Email</td>
        <td>Phone</td>
        <td>Address</td>
        <td></td>
    </tr>
    <?php foreach ($customers as $key => $customer): ?>
        <tr>
            <td><?php echo $key + 1 ?></td>
            <td><?php echo $customer['name'] ?></td>
            <td><?php echo $customer['email'] ?></td>
            <td><?php echo $customer['phone'] ?></td>
            <td><?php echo $customer['address'] ?></td>
            <td>
                <button  style="background-color: red"><a href="function/delete.php?id=<?php echo $customer['id'] ?>"
                           onclick="return confirm('Are your sure?')">Delete</a></button>
                <button><a href="view/form-edit.php?id=<?php echo $customer['id'] ?>">Edit</a></button>
            </td>
        </tr>
    <?php endforeach; ?>
</table>


</body>
</html>
