<?php

include 'db.php';

$id = $_GET['id'];

mysqli_query($conn,
"DELETE FROM Grocery_Store_Products
WHERE product_id=$id");

header('Location: index.php');

?>