<?php
include 'db.php';

$id = $_GET['id'];

$result = mysqli_query($conn,
"SELECT * FROM Grocery_Store_Products
WHERE product_id=$id");

$row = mysqli_fetch_assoc($result);

if(isset($_POST['update'])){

    $product_name = $_POST['product_name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $stock_quantity = $_POST['stock_quantity'];
    $expiry_date = $_POST['expiry_date'];
    $supplier_name = $_POST['supplier_name'];

    $sql = "UPDATE Grocery_Store_Products SET

    product_name='$product_name',
    category='$category',
    price='$price',
    stock_quantity='$stock_quantity',
    expiry_date='$expiry_date',
    supplier_name='$supplier_name'

    WHERE product_id=$id";

    mysqli_query($conn, $sql);

    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Edit Product</title>

<style>

body{
    font-family:Arial;
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
    background:orange;
    color:white;
    border:none;
    margin-top:15px;
}

</style>

</head>

<body>

<div class="container">

<h2>Edit Product</h2>

<form method="POST">

<input type="text"
name="product_name"
value="<?php echo $row['product_name']; ?>"
required>

<input type="text"
name="category"
value="<?php echo $row['category']; ?>">

<input type="number"
step="0.01"
name="price"
value="<?php echo $row['price']; ?>"
required>

<input type="number"
name="stock_quantity"
value="<?php echo $row['stock_quantity']; ?>">

<input type="date"
name="expiry_date"
value="<?php echo $row['expiry_date']; ?>">

<input type="text"
name="supplier_name"
value="<?php echo $row['supplier_name']; ?>">

<button type="submit" name="update">
Update Product
</button>

</form>

</div>

</body>
</html>