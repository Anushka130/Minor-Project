<?php
include_once "../model/db.php";
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tenant_id = $_SESSION['user_id'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone_no = $_POST['phone_no'];
    $date = $_POST['date'];
    $query = "INSERT INTO book_appointment (full_name, email, address, phone_no, date,tenant_id) VALUES ('$full_name', '$email', '$address', '$phone_no', '$date','$tenant_id')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        $_SESSION['message'] = "Booking Successful";
        header('Location: ./requested_appointment.php?owner_id=' . $_GET['owner_id'] . '&property_id=' . $_GET['property_id'] . '');
    } else {
        echo "Booking Failed";
    }
}