<?php
include_once "../model/db.php";
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone_no = $_POST['phone_no'];
    $date = $_POST['date'];
    $query = "INSERT INTO book_appointment (full_name, email, address, phone_no, date) VALUES ('$full_name', '$email', '$address', '$phone_no', '$date')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        $_SESSION['message'] = "Booking Successful";
        header('Location: ./property.php');
    } else {
        echo "Booking Failed";
    }
}