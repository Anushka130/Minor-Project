<?php
include_once "../model/db.php";
session_start();
if (isset($_GET['property_id'])) {
    $property_id = $_GET['property_id'];
    $query = "SELECT FROM property WHERE id = $property_id";
    $result = mysqli_query($conn, $query);

    $sql_update = "DELETE FROM property WHERE id = $property_id";
    if (mysqli_query($conn, $sql_update)) {
        $_SESSION['message'] = "Property Deleted Successfully";
        $_SESSION['message_type'] = "danger";
        header('Location: ./property.php');
    } else {
        echo "Error Deleting Property: " . mysqli_error($conn);
    }
}
?>