<?php
include_once "../model/db.php";
session_start();
if (isset($_GET['owner_id'])) {
    $owner_id = $_GET['owner_id'];
    $property_id = $_GET['property_id'];
    $tenant_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM user WHERE id = $owner_id AND acc_type = 'Owner'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if ($count) {
        $requested_sql = "SELECT * FROM requested_appointment WHERE tenant_id = $tenant_id AND owner_id=$owner_id";
        $requested_result = mysqli_query($conn, $requested_sql);
        $requested_row = mysqli_fetch_array($requested_result, MYSQLI_ASSOC);
        $requested_count = mysqli_num_rows($requested_result);
        if ($requested_count) {
            $_SESSION['message'] = "You have already requested an appointment";
            header("Location: ./index.php");
        } else {
            $requested_query = "INSERT INTO requested_appointment (owner_id, tenant_id) VALUES ($owner_id, $tenant_id)";
            $requested_result = mysqli_query($conn, $requested_query);
            if ($requested_result) {
                $_SESSION['message'] = "Appointment requested successfully";
                header("Location: ./index.php");
            } else {
                $_SESSION['message'] = "Error requesting appointment";
                header("Location: ./index.php");
            }

        }
    } else {
        $_SESSION['message'] = "Invalid owner";
        header("Location: ./index.php");
    }
} else {
    $_SESSION['message'] = "Invalid request";
    header("Location: ./index.php");
}