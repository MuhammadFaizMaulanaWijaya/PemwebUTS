<?php 

require './config/db.php';

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"]) ) {
    $productId = $_POST['id'];
    $productName = $_POST['name'];
    $productPrice = $_POST['price'];

    $updateQuery = "UPDATE products SET name = '$productName', price = '$productPrice' WHERE id =  $productId ";

    if(mysqli_query($db_connect, $updateQuery)) {
        echo "<script>
        alert('Data Produk Berhasil di perbarui');
        document.location.href = 'show.php';
        </script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($db_connect) . "');
        document.location.href = 'show.php';</script>";
    }
}
?>