<?php
include 'db.php';

if(isset($_POST['submit'])){

    $product_name = $_POST['product_name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $stock_quantity = $_POST['stock_quantity'];
    $expiry_date = $_POST['expiry_date'];
    $supplier_name = $_POST['supplier_name'];

    $sql = "INSERT INTO Grocery_Store_Products
    (product_name, category, price,
    stock_quantity, expiry_date, supplier_name)

    VALUES

    ('$product_name','$category','$price',
    '$stock_quantity','$expiry_date','$supplier_name')";

    mysqli_query($conn, $sql);

    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Add Product</title>

<style>

body{
    font-family: Arial;
    background:#f2f2f2;
}

.container{
    width:500px;
    margin:auto;
    background:white;
    padding:20px;
    margin-top:40px;
    border-radius:10px;
}

input{
    width:100%;
    padding:10px;
    margin-top:10px;
}

button{
    padding:10px 20px;
    background:green;
    color:white;
    border:none;
    margin-top:15px;
}

</style>

</head>

<body>

<div class="container">

<h2>Add Grocery Product</h2>

<form method="POST">

<input type="text"
name="product_name"
placeholder="Product Name"
required>

<input type="text"
name="category"
placeholder="Category">

<input type="number"
step="0.01"
name="price"
placeholder="Price"
required>

<input type="number"
name="stock_quantity"
placeholder="Stock Quantity">

<input type="date"
name="expiry_date">

<input type="text"
name="supplier_name"
placeholder="Supplier Name">

<button type="submit" name="submit">
Save Product
</button>

</form>

</div>

</body>
</html>