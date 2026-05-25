<?php
include 'db.php';

$result = mysqli_query($conn,
"SELECT * FROM Grocery_Store_Products");
?>

<!DOCTYPE html>
<html>
<head>

<title>Products List</title>

<style>

body{
    font-family:Arial;
    background:#f2f2f2;
    padding:20px;
}

table{
    width:100%;
    border-collapse:collapse;
    background:white;
}

th, td{
    padding:10px;
    border:1px solid #ccc;
    text-align:center;
}

th{
    background:#333;
    color:white;
}

a{
    text-decoration:none;
    padding:5px 10px;
}

.add-btn{
    background:green;
    color:white;
    padding:10px;
    display:inline-block;
    margin-bottom:15px;
}

.edit{
    background:orange;
    color:white;
}

.delete{
    background:red;
    color:white;
}

</style>

</head>

<body>

<h2>Grocery Store Product Management</h2>

<a href="create.php" class="add-btn">
Add Product
</a>

<table>

<tr>

<th>ID</th>
<th>Product Name</th>
<th>Category</th>
<th>Price</th>
<th>Stock</th>
<th>Expiry Date</th>
<th>Supplier</th>
<th>Actions</th>

</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>

<tr>

<td><?php echo $row['product_id']; ?></td>

<td><?php echo $row['product_name']; ?></td>

<td><?php echo $row['category']; ?></td>

<td><?php echo $row['price']; ?></td>

<td><?php echo $row['stock_quantity']; ?></td>

<td><?php echo $row['expiry_date']; ?></td>

<td><?php echo $row['supplier_name']; ?></td>

<td>

<a class="edit"
href="edit.php?id=<?php echo $row['product_id']; ?>">
Edit
</a>

<a class="delete"
href="delete.php?id=<?php echo $row['product_id']; ?>">
Delete
</a>

</td>

</tr>

<?php } ?>

</table>

</body>
</html>