<?php
include '../model/db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $hash = md5($password);

    $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$hash'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $_SESSION['email'] = $email;
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['full_name'] = $row['full_name'];
        $_SESSION['acc_type'] = $row['acc_type'];
        if ($row['acc_type'] == 'Owner') {
            header("Location: ../owner/index.php");
        } else {
            header("Location: ../tenant/index.php");
        }

    } else {
        echo "Invalid email or password";
    }

} else {
    echo "Invalid email or password";
}
