<?php
require_once "db.php";
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $query = "DELETE FROM product WHERE name='$name' and buying_price='{$_POST['BP']}' and selling_price='{$_POST['SP']}'";
    if(write($query)){
        echo "Product deleted successfully.";
        header("Location: addproducts.php");
    } else {
        echo "Error deleting product: " . mysqli_error($con);
    }
}
?>