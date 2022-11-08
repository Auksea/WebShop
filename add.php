<?php

$conn = new mysqli('localhost:3308', 'root', '', 'productdb');

if (isset($_POST['add_product'])) {

    $name = $_POST['name'];
    $price = $_POST['price'];

    $image = $_FILES['image']['tmp_name'];
    $image_name = $name . ".jpeg";

    move_uploaded_file($image, "WebShop/assets/" . $image_name);

    $stmt = $conn->prepare("INSERT INTO productlist (product_name, product_price, product_image)
                                       VALUES (?,?,?)");

    $stmt->bind_param("sis", $name, $price, $image);

    if ($stmt->execute()) {
        header("location: adminPanel.php?success_message=Product was created successfully");
    } else {
        header("location: adminPanel.php?error_message=Product was not created");
    }

} else {
    header("location: create.php?error_message=Try again");
}




