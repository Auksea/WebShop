<?php
$conn = new mysqli('localhost:3308', 'root', '', 'productdb');

if (isset($_GET['id'])){

    $id=$_REQUEST['id'];
    $query = "DELETE FROM productlist WHERE id=$id";
    $result = mysqli_query($conn,$query) or die ( mysqli_error());
    header("Location: adminPanel.php");

}



