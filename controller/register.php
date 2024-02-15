<?php
include "../model/db.php";
session_start();

$full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone_no = mysqli_real_escape_string($conn, $_POST['phone_no']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$hash = md5($password);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$acc_type = mysqli_real_escape_string($conn, $_POST['acc_type']);

$sql = "INSERT INTO user (full_name, email, phone_no, password, address, acc_type) VALUES ('$full_name', '$email', '$phone_no', '$hash', '$address', '$acc_type')";
$result = mysqli_query($conn, $sql);


if ($result) {
    // $_SESSION['email'] = $email;
    // $_SESSION['acc_type'] = $acc_type;
    header("Location: ../index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);