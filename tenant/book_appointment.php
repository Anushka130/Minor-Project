<?php
include_once "../model/db.php";
session_start();


?>


<!DOCTYPE html>
<html lang="en">
<?php include_once "./head.php"; ?>

<body>

    <?php include_once "./header.php"; ?>
    <div class="form_contain">
        <form action="./booking.php" method="post" class="form" enctype="multipart/form-data">
            <h1>BOOK APPOINTMENT</h1>
            <div class="form-group">
                <label for="property_name">Full Name</label>
                <input type="text" class="form-control" id="full_name" name="full_name" required>
            </div>

            <div class="form-group">
                <label for="Email">Email</label>
                <input type="text" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" required>

            </div>
            <div class="form-group">
                <label for="phone_num">Phone no.</label>
                <input type="text" class="form-control" id="phone_no" name="phone_no" required>
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>

            <button type="submit" class="btn btn-primary">BOOK APPOINTMENT</button>
        </form>
    </div>
    <?php include_once ("./footer.php"); ?>